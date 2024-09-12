<?php

namespace App\Http\Controllers;

use App\Models\activity_log;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ActivityLogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = activity_log::orderBy('time', 'desc')->get()->map(function ($activity) {
            $activity->formatted_date = Carbon::parse($activity->time)->format('M-D-Y'); // 'Sep-Wed-2024'
            $activity->formatted_time = Carbon::parse($activity->time)->format('h:i:s A'); // '12-hour:MM:SS AM/PM'
            return $activity;
        });

        return view('admin.permit.logs',[
            'activities' => $activities,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
