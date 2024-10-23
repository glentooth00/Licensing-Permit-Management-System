<?php

namespace App\Http\Controllers;

use App\Models\Municipalities;
use Illuminate\Http\Request;

class MunicipalitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $municipalities = Municipalities::get();

            
        return view('admin.municipality.index', [
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
       $i =  $request->validate([
            'municipality' => 'nullable|max:255',
       ]);

      Municipalities::create($i);

      return back()->with('success', 'Municipality added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
       
        $municipalities = Municipalities::get();

        return view('site.registration3', [
            'municipalities' => $municipalities,
        ]);
 //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Municipalities $municipalities)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Municipalities $municipalities)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Municipalities $municipalities)
    {
        //
    }
}
