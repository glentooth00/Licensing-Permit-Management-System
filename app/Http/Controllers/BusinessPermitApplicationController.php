<?php

namespace App\Http\Controllers;

use App\Models\activity_log;
use App\Models\BusinessPermitApplication;
use DB;
use Illuminate\Http\Request;
use Endroid\QrCode\QrCode;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Carbon\Carbon;

use Endroid\QrCode\Response\QrCodeResponse;


class BusinessPermitApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $now  = now()->setTimezone('Asia/Manila')->toDateTimeString();

        $businessPermits = BusinessPermitApplication::where('status', 'Pending')->get();

        $allPermits = BusinessPermitApplication::all()->count();

         // Count pending applications
         $pendingCount = BusinessPermitApplication::where('status', 'Pending')->count();

         // Count approved applications
         $approvedCount = BusinessPermitApplication::where('status', 'Approved')->count();

    
        return view('admin.dashboard', [
            'businessPermits' => $businessPermits,
            'pendingCount' => $pendingCount,
            'approvedCount' => $approvedCount,
            'allPermits' => $allPermits,
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
        // Validate the incoming data
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
            'business_type' => 'nullable|string|max:255',
            'approved_on' => 'nullable|string|max:255',
        ]);
        
        // Prepend the country code to the mobile number
        if (!empty($validatedData['business_Tel_No_Mobile'])) {
            $validatedData['business_Tel_No_Mobile'] = '+639' . $validatedData['business_Tel_No_Mobile'];
            $validatedData['owners_Tel_No_Mobile'] = '+639' . $validatedData['owners_Tel_No_Mobile'];
        }
    
        $validatedData['status'] = 'Pending';
    
        // Create the record in the database
        $product = BusinessPermitApplication::create($validatedData);
    
        // Set a flash message for successful registration
        session()->flash('registration_success', true);
    
        // Redirect to the login page
        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     */
    // public function show($id)
    // {
    //     $businessPermit = BusinessPermitApplication::findOrFail($id);
    //     return view('admin.permit.show', compact('businessPermit'));
    // }
public function show($id)
{
    $businessPermit = BusinessPermitApplication::findOrFail($id);

    // Assuming you have a view named 'permit.show' to display user details
    return view('admin.permit.show', compact('businessPermit'));
}

    

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit($businessPermit)
    // {
    //     $businessPermit = BusinessPermitApplication::findOrFail($businessPermit);
    //     return view('admin.permit.edit', compact('businessPermit'));
    // }
    public function edit($businessPermit)
    {
        // Fetch the data needed for editing
        $businessPermit = BusinessPermitApplication::findOrFail($businessPermit);
    
        // Render the edit view and pass data to it
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
            'classification_cottage' => 'nullable|string|max:255', // Ensure it's a string
            'amendment' => 'nullable|string|max:255', // Ensure it's a string
            'date_of_application' => 'nullable|date',
            'DTI_SEC_CDA_registration_No' => 'nullable|string|max:255',
            'date_business_started' => 'nullable|date',
            'DTI_SEC_CDA_date_of_Registration' => 'nullable|date',
            'type_of_org' => 'nullable|string|max:255', // Ensure it's a string
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
            'mode_of_payment' => 'nullable|string|max:255', // Ensure it's a string
            'transfer' => 'nullable|string|max:255', // Ensure it's a string
            'business_type' => 'nullable|string|max:255',

        ]);
        
         $validatedData['status'] = 'Pending';
     
         // Find the BusinessPermitApplication instance by ID
         $businessPermit = BusinessPermitApplication::findOrFail($businessPermit);
     
         // Update the BusinessPermitApplication instance with the validated data
         $businessPermit->update($validatedData);
     
         // Optionally, you can redirect back with a success message
         return redirect()->back()->with('update', 'Business permit updated successfully');
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

    public function approvePermit($id, Request $request)
    {
        // Find the business permit by ID
        // $businessPermit = BusinessPermitApplication::findOrFail($id);
    
        // // Update the status to 'Approved'
        // $businessPermit->approved_on = now()->setTimezone('Asia/Manila')->toDateTimeString();
        // $businessPermit->status = 'Approved';
        // $businessPermit->save();
    
        // Check if the 'Approve' button was clicked
        if ($request->input('action') == 'log_approve') {

            $businessPermit = BusinessPermitApplication::findOrFail($id);

                    // Update the status to 'Approved'
            $businessPermit->approved_on = now()->setTimezone('Asia/Manila')->toDateTimeString();
            $businessPermit->status = 'Approved';
            $businessPermit->save();
    

            $client_firstname = $businessPermit->first_name;
            $client_middlename = $businessPermit->middle_name;
            $client_lastname = $businessPermit->last_name;


            $ApproveLog['firstname'] = Auth::user()->firstname; 
            $ApproveLog['time'] = now()->setTimezone('Asia/Manila')->toDateTimeString();
            $ApproveLog['user_activity'] = 'has <span class="badge badge-success p-2">APPROVED</span> the Business Permit of <b>' . $client_firstname . ' ' . $client_middlename . ' ' .  $client_lastname . '</b>';
        
            $approvedLog = activity_log::create($ApproveLog);

           }    
        
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Permit approved successfully.');
    }
    

    public function showApproved()
{
    $now = Carbon::now('Asia/Manila');

    // Retrieve all approved permits
    $approved_permits = BusinessPermitApplication::where('status', 'Approved')
        ->orderByDesc('created_at') // or orderByDesc('updated_at') for latest updated
        ->get();

        foreach ($approved_permits as $permit) {
            // Check if the approved_on time is older than 1 month
            if ($now->diffInMonths($permit->approved_on) >= 1) {
                // Update status to 'Renewal' if more than 1 month has passed
                $permit->status = 'Renewal';
                $permit->save();
            }
        }

    return view('admin.permit.index', [
        'approved_permits' => $approved_permits,
        // 'now' => $now,
    ]);
}


    // public function showApproved(){

    //     $now = Carbon::now('Asia/Manila');

    //     $approved_permits = BusinessPermitApplication::where('status', 'Approved')
    //     ->orderByDesc('created_at') // or orderByDesc('updated_at') for latest updated
    //     ->get();

    //     // dd( $approved_permits );

    
    //     return view('admin.permit.index', [
    //         'approved_permits' => $approved_permits,
    //         'now' => $now,
    //     ]);
    // }
    
    public function generatePermit(Request $request)
    {
        $userId = $request->input('user_id');
        $status = $request->input('status');
    
        // Fetch user data based on $userId
        $permit = BusinessPermitApplication::findOrFail($userId);
    
        // Construct the QR code data string with the necessary information
        $qrCodeData = "Permit ID: {$permit->id}\n";
        $qrCodeData .= "Status: {$status}\n";
        $qrCodeData .= "Business Name: {$permit->business_name}\n";
        $qrCodeData .= "Owner: {$permit->first_name} {$permit->middle_name} {$permit->last_name}\n";
        // Add more details as needed
    
        // Generate QR code based on the constructed data
        $qrCode = new QrCode($qrCodeData);
        $qrCode->setSize(200); // Set QR code size
    
        // Generate base64-encoded QR code image
        $base64QRCode = base64_encode($qrCode->writeString());
    
        // Return the base64-encoded QR code image along with the status as a response
        return response()->json(['qr_code' => $base64QRCode, 'status' => $status]);
    }
    


    public function archivePermit(Request $request, $id)
    {

        // Find the business permit by ID
        $businessPermit = BusinessPermitApplication::findOrFail($id);

        if ($request->input('action') == 'archive') {

            $businessPermit = BusinessPermitApplication::findOrFail($id);

            $client_firstname = $businessPermit->first_name;
            $client_middlename = $businessPermit->middle_name;
            $client_lastname = $businessPermit->last_name;

            $archive['firstname'] = Auth::user()->firstname; 
              $archive['time'] = now()->setTimezone('Asia/Manila')->toDateTimeString();
              $archive['user_activity'] = 'has moved the Business Permit of <b>' . $client_firstname . ' ' . $client_middlename . ' ' .  $client_lastname . '</b>' . ' '.'to <span class="badge badge-warning p-2">ARCHIVED</span>';

            $archived = activity_log::create(  $archive);

            // Update the status to 'Archived'
            $businessPermit->status = 'Archived';
            $businessPermit->save();

            // Redirect back with a success message
            return redirect()->back()->with('success', 'Permit archived successfully.');

        } 


    }
    


    public function showArchived()
    {
        // Fetch permits with status 'Archived'
        $archived_permits = BusinessPermitApplication::where('status', 'Archived')->orderByDesc('created_at')->get();

        // Return the view with the archived permits
        return view('admin.permit.archived', compact('archived_permits'));
    }
    
    public function renewPermit(Request $request, $id)
    {
        // Find the business permit by ID
        $businessPermit = BusinessPermitApplication::findOrFail($id);


        if ($request->input('action') == 'renew') {

            $businessPermit = BusinessPermitApplication::findOrFail($id);

            $client_firstname = $businessPermit->first_name;
            $client_middlename = $businessPermit->middle_name;
            $client_lastname = $businessPermit->last_name;

            $archive['firstname'] = Auth::user()->firstname; 
              $archive['time'] = now()->setTimezone('Asia/Manila')->toDateTimeString();
              $archive['user_activity'] = 'has moved the Business Permit of <b>' . $client_firstname . ' ' . $client_middlename . ' ' .  $client_lastname . '</b>' . ' '.'for <span class="badge badge-primary text-white p-2">RENEWAL</span>';

            $archived = activity_log::create(  $archive);

            // Update the status to 'Pending' (or any other status to renew)
            $businessPermit->status = 'Renewal';
            $businessPermit->save();

           // Redirect back with a success message
            return redirect()->back()->with('success', 'Permit renewed successfully.');


        }

       
    }

    public function showForRenewal()
    {
        // Fetch permits with status 'For Renewal'
        $for_renewal_permits = BusinessPermitApplication::where('status', 'Renewal')->orderByDesc('created_at')->get();

        // Return the view with the 'For Renewal' permits
        return view('admin.permit.renew', compact('for_renewal_permits'));
    }

    public function approveRenewal(Request $request, $id)
    {

        if ($request->input('action') == 'renew') {

             // Find the permit by ID
            $permit = BusinessPermitApplication::findOrFail($id);

            $client_firstname = $permit->first_name;
            $client_middlename = $permit->middle_name;
            $client_lastname = $permit->last_name;

            $renewal['firstname'] = Auth::user()->firstname; 
            $renewal['time'] = now()->setTimezone('Asia/Manila')->toDateTimeString();
            $renewal['user_activity'] = 'has <span class="badge badge-success text-dark p-2">RENEWED</span>  the Business Permit of <b>' . $client_firstname . ' ' . $client_middlename . ' ' .  $client_lastname .'.';

            $forRenewal = activity_log::create($renewal);

            // Update the status to 'Approved'
            $permit->approved_on = now()->setTimezone('Asia/Manila')->toDateTimeString();
            $permit->status = 'Approved';
            $permit->approved_on = now()->setTimezone('Asia/Manila')->toDateTimeString();
            $permit->save();
        
            // Redirect back or to a specific route
            return redirect()->back()->with('success', 'Renewal approved successfully.');   

        }
    }


    public function checkMinutePassed()
    {
        // Get the current time
        $currentTime = Carbon::now('Asia/Manila');

        // Example: timestamp stored in the database (e.g., permit's last action time)
        $storedTimestamp = '2024-09-12 05:30:00'; // You can replace this with the actual timestamp from your database
    
        // Convert to Carbon instance
        $storedTime = Carbon::parse($storedTimestamp);
    
    
        // Check if 1 minute has passed
        if ($currentTime->diffInMinutes($storedTime) >= 1) {
            // Dump data when a minute has passed
            dd("A minute has passed since the last check!");
            return view('admin.permit.index');
        } else {
            dd("Less than a minute has passed.");
            return view('admin.permit.index');
        }


    }
    


    
    
        
    
    
}
