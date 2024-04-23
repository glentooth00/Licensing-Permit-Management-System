<?php

namespace App\Http\Controllers;

use App\Models\BusinessPermitApplication;
use Illuminate\Http\Request;

class BusinessPermitApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $businessPermits = BusinessPermitApplication::all();

         // Count pending applications
         $pendingCount = BusinessPermitApplication::where('status', 'Pending')->count();

         // Count approved applications
         $approvedCount = BusinessPermitApplication::where('status', 'Approved')->count();
    
        return view('admin.dashboard', [
            'businessPermits' => $businessPermits,
            'pendingCount' => $pendingCount,
            'approvedCount' => $approvedCount,
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
       
        // dd($request->all());

        $validatedData = $request->validate([
            'business_application' => 'nullable|string|max:255',
            'classification_cottage' => 'nullable|string|max:255',
            'amendment' => 'nullable|string|max:255',
            'date_of_application' => 'nullable|date',
            'DTI_SEC_CDA_registration_No' => 'nullable|string|max:255',
            'date_business_started' => 'nullable|date',
            'DTI_SEC_CDA_date_of_Registration' => 'nullable|date',
            'type_of_org' => 'nullable|string|max:255',
            'ctc_no' => 'nullable|string|max:255',
            'TIN' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'first_name' => 'nullable|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'business_name' => 'nullable|string|max:255',
            'trade_name_franchise' => 'nullable|string|max:255',
            'business_building_name' => 'nullable|string|max:255',
            'owners_building_name' => 'nullable|string|max:255',
            'business_street' => 'nullable|string|max:255',
            'owners_street' => 'nullable|string|max:255',
            'business_barangay' => 'nullable|string|max:255',
            'owners_barangay' => 'nullable|string|max:255',
            'business_city_municipality' => 'nullable|string|max:255',
            'owners_city_municipality' => 'nullable|string|max:255',
            'business_province' => 'nullable|string|max:255',
            'owners_province' => 'nullable|string|max:255',
            'business_Tel_No_Mobile' => 'nullable|string|max:255',
            'owners_Tel_No_Mobile' => 'nullable|string|max:255',
            'mode_of_payment' => 'nullable|string|max:255',
            'transfer' => 'nullable|string|max:255',
        ]);
        

        $validatedData['status'] = 'Pending';

        $product = BusinessPermitApplication::create($validatedData);

        // Optionally, you can return a response or redirect to another page
        return redirect()->route('registration_complete')->with('success', 'Registration complete!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $businessPermit = BusinessPermitApplication::findOrFail($id);
        return view('admin.permit.show', compact('businessPermit'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($businessPermit)
    {
        $businessPermit = BusinessPermitApplication::findOrFail($businessPermit);
        return view('admin.permit.edit', compact('businessPermit'));
    }
    
    
    
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $businessPermit)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'business_application' => 'nullable|string|max:255',
            'classification_cottage' => 'nullable|string|max:255',
            'amendment' => 'nullable|string|max:255',
            'date_of_application' => 'nullable|date',
            'DTI_SEC_CDA_registration_No' => 'nullable|string|max:255',
            'date_business_started' => 'nullable|date',
            'DTI_SEC_CDA_date_of_Registration' => 'nullable|date',
            'type_of_org' => 'nullable|string|max:255',
            'ctc_no' => 'nullable|string|max:255',
            'TIN' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'first_name' => 'nullable|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'business_name' => 'nullable|string|max:255',
            'trade_name_franchise' => 'nullable|string|max:255',
            'business_building_name' => 'nullable|string|max:255',
            'owners_building_name' => 'nullable|string|max:255',
            'business_street' => 'nullable|string|max:255',
            'owners_street' => 'nullable|string|max:255',
            'business_barangay' => 'nullable|string|max:255',
            'owners_barangay' => 'nullable|string|max:255',
            'business_city_municipality' => 'nullable|string|max:255',
            'owners_city_municipality' => 'nullable|string|max:255',
            'business_province' => 'nullable|string|max:255',
            'owners_province' => 'nullable|string|max:255',
            'business_Tel_No_Mobile' => 'nullable|string|max:255',
            'owners_Tel_No_Mobile' => 'nullable|string|max:255',
            'mode_of_payment' => 'nullable|string|max:255',
            'transfer' => 'nullable|string|max:255',
        ]);

        // Find the BusinessPermitApplication instance by ID
        $businessPermit = BusinessPermitApplication::findOrFail($businessPermit);

        // Update the BusinessPermitApplication instance with the validated data
        $businessPermit->update($validatedData);

        // Optionally, you can redirect back with a success message
        return redirect()->back()->with('success', 'Business permit updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(business_permit_application $business_permit_application)
    {
        //
    }

    public function complete()
    {
        return view('site.registration_complete');
    }

    public function approvePermit($id)
    {
        // Find the business permit by ID
        $businessPermit = BusinessPermitApplication::findOrFail($id);

        // Update the status to 'Approved' (or whatever status you use)
        $businessPermit->status = 'Approved';
        $businessPermit->save();

        // Redirect back or to a specific route
        return redirect()->back()->with('success', 'Permit approved successfully.');
    }

    
    
}
