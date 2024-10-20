<?php

namespace App\Http\Controllers;

use App\Models\Barangay;
use App\Models\Municipalities;
use App\Models\Streets;
use Illuminate\Http\Request;

class StreetsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $municipalities = Municipalities::get();
        $streets = Streets::orderBy('street', 'asc')->get();
        return view('admin.street.index', [
            'streets' => $streets,
            'municipalities' => $municipalities,
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
            'street' => 'required|string|max:255',
            'municipality' => 'required|string|max:255',  // Adjust validation as needed
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

    public function regDisplay(Request $request)
    {
    

        $streets = Streets::orderBy('street', 'asc')->get();
        $barangays = Barangay::orderBy('barangay', 'asc')->get(); // Fetching barangays data
        $municipalities = Municipalities::get();

        return view('site.registration3', [
            'streets' => $streets,
            'barangays' => $barangays,
            'municipalities' => $municipalities,
        ]);

    }


    public function getStreetsAndBarangays(Request $request)
    {
        $municipality = 'Estancia'; // Default municipality
    
        // Fetch streets and barangays for the specified municipality
        $streets = Streets::where('municipality', $municipality)->get(['id', 'street']); // Return only necessary columns
        $barangays = Barangay::where('municipality', $municipality)->get(['id', 'barangay']); // Return only necessary columns
    
        return response()->json([
            'streets' => $streets,
            'barangays' => $barangays,
        ]);
    }

    public function getLocationData(Request $request)
    {
        $municipality = $request->input('city_municipality');

        // Fetch streets and barangays from the database
        // Assuming you have a `locations` table with `municipality`, `street`, and `barangay` fields
        $streets = Streets::where('municipality', $municipality)->pluck('street');
        $barangays = Barangay::where('municipality', $municipality)->pluck('barangay');

        // Return the data as a JSON response
        return response()->json([
            'streets' => $streets,
            'barangays' => $barangays
        ]);
    }



    public function getDataByMunicipality(Request $request)
    {
        $selectedMunicipality = $request->input('municipality');

        // Fetch the relevant streets and barangays for the selected municipality
        $streets = Streets::where('municipality', $selectedMunicipality)->get();
        $barangays = Barangay::where('municipality', $selectedMunicipality)->get();

        // Return the data as JSON
        return response()->json([
            'streets' => $streets,
            'barangays' => $barangays,
        ]);
    }
    
    
    


    public function editDisplay()
    {
        $streets = Streets::orderBy('street', 'asc')->get();
        $barangays = Barangay::orderBy('barangay', 'asc')->get(); // Fetching barangays data
        $municipalities = Municipalities::get();
    
        return view('admin.permit.show', [
            'streets' => $streets,
            'barangays' => $barangays,
            'municipalities' => $municipalities,
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
