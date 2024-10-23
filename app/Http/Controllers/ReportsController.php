<?php

namespace App\Http\Controllers;

use App\Models\BusinessPermitApplication;
use App\Models\Reports;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Log;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        // Fetch reports with pagination, 10 per page
        $reports = Reports::orderBy('created_at', 'desc')->paginate(10);
    
        return view('admin.reports.index', [
            'reports' => $reports
        ]);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $reports = Reports::all(); // Fetch all reports
    
        // return view('admin.reports.index', [
        //     'reports' => $reports
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Reports $reports)
    {
        return view('admin.reports.report');
    }


    public function showMonthlyPermit($id)
    {
        // Fetch the report from the database
        $report = Reports::find($id);
    
        // Check if the report exists
        if (!$report) {
            // Return a 404 response if the report is not found
            return response()->json(['error' => 'Report not found'], 404);
        }
    
        // If report exists, return the necessary data
        return response()->json([
            'report_month' => $report->month,
            'permits_approved' => $report->permits_approved,
            'permits_archived' => $report->permits_archived,
            'permits_renewed' => $report->permits_renewed,
            'permits_pending' => $report->permits_pending
        ]);
    }
    
    
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reports $reports)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reports $reports)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reports $reports)
    {
        //
    }

    public function generatePermit(){
        
        $currentYear = date('Y');

        $currentMonth = Carbon::now()->format('F') .' '. $currentYear;

        $startOfMonth = Carbon::now()->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();

        $permitsApplied = BusinessPermitApplication::whereBetween('created_at', [$startOfMonth, $endOfMonth])->count();

        $pendingPermits = BusinessPermitApplication::whereBetween('created_at', [$startOfMonth, $endOfMonth])->where('status', 'Pending')->get()->count();

        $approvedPermits = BusinessPermitApplication::whereBetween('created_at', [$startOfMonth, $endOfMonth])->where('status', 'Approved')->get()->count();

        $archivedPermits = BusinessPermitApplication::whereBetween('created_at', [$startOfMonth, $endOfMonth])->where('status', 'Archived')->get()->count();

        $renewalPermits = BusinessPermitApplication::whereBetween('created_at', [$startOfMonth, $endOfMonth])->where('status', 'Renewal')->get()->count();


        Reports::create([
            'month' => $currentMonth,
            'permits_applied' => $permitsApplied,
            'permits_approved' => $approvedPermits,
            'permits_archived' => $archivedPermits,
            'permits_renewed' => $renewalPermits,
            'permits_pending' => $pendingPermits,
        ]);

      // Flash a success message if desired
    session()->flash('success', 'Report generated successfully.');

    // Redirect back to the previous page
    return back();


    }



}
