<?php

namespace App\Http\Controllers;

use App\Models\Barangay;
use App\Models\Streets;
use Illuminate\Http\Request;

class StreetsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $streets = Streets::orderBy('street', 'asc')->get();
        return view('admin.street.index', [
            'streets' => $streets,
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
        // Validate the request data
        $validatedData = $request->validate([
            'street' => 'required|string|max:255', // Adjust validation as needed
        ]);
    
        // Create the street record using the validated data
        Streets::create($validatedData);
        
        // Redirect or return a view after saving
        return back()->with('success', 'Street added successfully!');
    }
    

    /**
     * Display the specified resource.
     */
    // public function show(Streets $streets)
    // {
    //     $streets = Streets::orderBy('street', 'asc')->get();

    //     return view('admin.permit.show', [
    //         'streets' => $streets,
    //     ]);
    // }

    public function regDisplay()
    {
        $streets = Streets::orderBy('street', 'asc')->get();
        $barangays = Barangay::orderBy('barangay', 'asc')->get(); // Fetching barangays data
    
        return view('site.registration3', [
            'streets' => $streets,
            'barangays' => $barangays,
        ]);
    }

    public function editDisplay()
    {
        $streets = Streets::orderBy('street', 'asc')->get();
        $barangays = Barangay::orderBy('barangay', 'asc')->get(); // Fetching barangays data
    
        return view('admin.permit.show', [
            'streets' => $streets,
            'barangays' => $barangays,
        ]);
    }
    

    // public function regDisplay()
    // {
    //     $streets = Streets::orderBy('street', 'asc')->get(); // Fetching streets data
        
    //     return view('site.registration3', ['streets' => $streets]); // Passing data to the view
    // }
    
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Streets $streets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Streets $streets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Streets $streets)
    {
        //
    }
}
