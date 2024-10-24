<?php

namespace App\Http\Controllers;

use App\Models\Barangay;
use App\Models\Municipalities;
use Illuminate\Http\Request;

class BarangayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $municipalities = Municipalities::get();

        $barangays = Barangay::orderBy('barangay', 'asc')->get();
        return view('admin.barangay.index', [
            'barangays' => $barangays,
            'municipalities' => $municipalities,
        ]);
    }

    public function regDisplayBrgy()
    {
        $barangays = Barangay::orderBy('barangay', 'asc')->get();
    
    
        return view('site.registration3', [
            'barangays' => $barangays,
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
       $validateData = $request->validate([
        'municipality' => 'required|string|max:255',
       ]);

     $validateData['barangay'] =  'Brgy ' . $request->barangay;
     
       Barangay::create($validateData);

       return back()->with('success', 'Barangay added successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Barangay $barangay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barangay $barangay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barangay $barangay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barangay $barangay)
    {
        //
    }
}
