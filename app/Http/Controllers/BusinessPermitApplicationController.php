<?php

namespace App\Http\Controllers;

use App\Models\activity_log;
use App\Models\Barangay;
use App\Models\BusinessPermitApplication;
use App\Models\Sms_messages;
use App\Models\Streets;
use DB;
use Illuminate\Http\Request;
use Endroid\QrCode\QrCode;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

use Endroid\QrCode\Response\QrCodeResponse;
// use Log;


class BusinessPermitApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $now  = now()->setTimezone('Asia/Manila')->toDateTimeString();
    
        // Get all business permits that are pending, or return an empty collection if none exist
        $businessPermits = BusinessPermitApplication::where('status', 'Pending')->get();
    
        // Get total permit count (default to 0 if no permits exist)
        $allPermits = BusinessPermitApplication::count();
    
        // Count pending applications (default to 0 if no pending applications)
        $pendingCount = BusinessPermitApplication::where('status', 'Pending')->count();
    
        // Count approved applications (default to 0 if no approved applications)
        $approvedCount = BusinessPermitApplication::where('status', 'Approved')->count();
    
        // Count archived applications (default to 0 if no archived applications)
        $archivedCount = BusinessPermitApplication::where('status', 'Archived')->count();
    
        // Count renewal applications (default to 0 if no renewal applications)
        $renewalCount = BusinessPermitApplication::where('status', 'Renewal')->count();
    
        // Pass the data to the view
        return view('admin.dashboard', [
            'businessPermits' => $businessPermits,
            'pendingCount' => $pendingCount,
            'approvedCount' => $approvedCount,
            'allPermits' => $allPermits,
            'archivedCount' => $archivedCount,
            'renewalCount' => $renewalCount,
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
        // Validate the request data including arrays for line_of_business, PSIC, product_services, and no_of_units
        $validatedData = $request->validate([
            'business_application' => 'required|string|max:255',
            'business_type' => 'nullable|string|max:255',
            'mode_of_payment' => 'nullable|string|max:255',
            'DTI_SEC_CDA_registration_No' => 'nullable|string|max:255',
            'TIN' => 'nullable|string|max:255',
            'business_name' => 'nullable|string|max:255',
            'franchise' => 'nullable|string|max:255',
            'corp_type' => 'nullable|string|max:255',
            'requirement' => 'nullable|string|max:255',
            'tax_declaration' => 'nullable|file|mimes:jpg,jpeg,png,pdf,doc,docx,txt|max:2048',
            'building_no2' => 'nullable|string|max:255',
            'building_no' => 'nullable|string|max:255',
            'business_building_name' => 'nullable|string|max:255',
            'business_building_name2' => 'nullable|string|max:255',
            'lot_number' => 'nullable|string|max:255',
            'lot_number2' => 'nullable|string|max:255',
            'block_no2' => 'nullable|string|max:255',
            'street' => 'nullable|string|max:255',
            'street2' => 'nullable|string|max:255',
            'gov_entity' => 'nullable|file|mimes:jpg,jpeg,png,pdf,doc,docx,txt|max:2048',
            'business_activity' => 'nullable|string|max:255',
            'others' => 'nullable|string|max:255',
            'barangay' => 'nullable|string|max:255',
            'barangay2' => 'nullable|string|max:255',
            'subdivision' => 'nullable|string|max:255',
            'subdivision2' => 'nullable|string|max:255',
            'city_municipality' => 'nullable|string|max:255',
            'city_municipality2' => 'nullable|string|max:255',
            'province' => 'nullable|string|max:255',
            'province2' => 'nullable|string|max:255',
            'zip_code' => 'nullable|string|max:10',
            'zip_code2' => 'nullable|string|max:10',
            'telephone_no' => 'nullable|string|max:255',
            'mobile_no' => 'nullable|string|max:255',
            'email_address' => 'nullable|email|max:255',
            'owner_last_name' => 'nullable|string|max:255',
            'owner_first_name' => 'nullable|string|max:255',
            'owner_middle_name' => 'nullable|string|max:255',
            'owner_suffix' => 'nullable|string|max:255',
            'pres_last_name' => 'nullable|string|max:255',
            'pres_first_name' => 'nullable|string|max:255',
            'pres_middle_name' => 'nullable|string|max:255',
            'pres_suffix' => 'nullable|string|max:255',
            'emergency_contact_name' => 'nullable|string|max:255',
            'emergency_contact_no' => 'nullable|string|max:255',
            'business_area' => 'nullable|string|max:255',
            'total_employees_male' => 'nullable|string|max:255',
            'total_employees_female' => 'nullable|string|max:255',
            'employees_residing_estancia' => 'nullable|string|max:255',
            'delivery_vehicles_van_truck' => 'nullable|string|max:255',
            'delivery_vehicles_motorcycle' => 'nullable|string|max:255',
            'building_name' => 'nullable|string|max:255',
            'lot_no' => 'nullable|string|max:255',
            'block_no' => 'nullable|string|max:255',
            'line_of_business' => 'nullable|array',
            'line_of_business.*' => 'nullable|string|max:255',
            'PSIC' => 'nullable|array',
            'PSIC.*' => 'nullable|string|max:255',
            'product_services' => 'nullable|array',
            'product_services.*' => 'nullable|string|max:255',
            'no_of_units' => 'nullable|array',
            'no_of_units.*' => 'nullable|string|max:255',
        ]);
    
    // Handle file upload for 'tax_declaration'
    if ($request->hasFile('tax_declaration')) {
        $taxDeclarationFile = $request->file('tax_declaration');
        // Store the file and save the path
        $taxDeclarationPath = $taxDeclarationFile->store('files', 'public');
        $validatedData['tax_declaration'] = $taxDeclarationPath;
    }

    // Handle file upload for 'gov_entity'
    if ($request->hasFile('gov_entity')) {
        $govEntityFile = $request->file('gov_entity');
        // Store the file and save the path
        $govEntityPath = $govEntityFile->store('files', 'public');
        $validatedData['gov_entity'] = $govEntityPath;
    }

    // Prepend the country code to the mobile number
    if (!empty($validatedData['mobile_no'])) {
        $validatedData['mobile_no'] = '+63' . ltrim($validatedData['mobile_no'], '0');
    }

    // Convert array fields to JSON if present
    $validatedData['line_of_business'] = isset($validatedData['line_of_business']) ? json_encode($validatedData['line_of_business']) : null;
    $validatedData['PSIC'] = isset($validatedData['PSIC']) ? json_encode($validatedData['PSIC']) : null;
    $validatedData['product_services'] = isset($validatedData['product_services']) ? json_encode($validatedData['product_services']) : null;
    $validatedData['no_of_units'] = isset($validatedData['no_of_units']) ? json_encode($validatedData['no_of_units']) : null;

    // Set default status and notification
    $validatedData['status'] = 'Pending';
    $validatedData['notified'] = '0';

    // Debugging purposes, remove or replace after testing
    // dd($validatedData);
    
        // Create the record in the database
        $product = BusinessPermitApplication::create($validatedData);
    
        // Redirect or return response after saving
        return redirect()->back()->with('success', 'Business data saved successfully!');
    }
    
    
    


    /**
     * Display the specified resource.
     */
    // public function show($id)
    // {
    //     $businessPermit = BusinessPermitApplication::findOrFail($id);
    //     return view('admin.permit.show', compact('businessPermit'));
    // }
// public function show($id)
// {
//     $businessPermit = BusinessPermitApplication::findOrFail($id);

//     // Assuming you have a view named 'permit.show' to display user details
//     return view('admin.permit.show', compact('businessPermit'));
// }

public function show($id)
{
    $businessPermit = BusinessPermitApplication::findOrFail($id);

    // Render the view as a string and return it as a response for AJAX
    $view = view('admin.permit.show', compact('businessPermit'))->render();

    return response()->json(['html' => $view]);
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
            $businessPermit->notified = '1';
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
    
//     public function showApproved()
// {
//     $now = Carbon::now('Asia/Manila');

//     // Retrieve all approved permits
//     $approved_permits = BusinessPermitApplication::where('status', 'Approved')
//         ->orderByDesc('created_at') // or orderByDesc('updated_at') for latest updated
//         ->get();

//     foreach ($approved_permits as $permit) {
//         // Check if the approved_on time is older than 12 months
//         // $now->diffInMonths($permit->approved_on) >= 12
//         if ($now->diffInMonths($permit->approved_on) >= 1) {
//             // Update status to 'Renewal' if more than 12 months have passed
//             $permit->status = 'Renewal';
//             $permit->save();
//         }
//     }

//         // Retrieve all permits with 'Renewal' status
//         $renewal_permits = BusinessPermitApplication::where('status', 'Renewal')->get();

   
//         foreach ($renewal_permits as $permit) {
//             $number = $permit->business_Tel_No_Mobile; // Assuming this is the field for the phone number
    
//                 // Check if the phone number starts with 0 and replace it
//             if (substr($number, 0, 1) === '0') {
//                 $number = '+639' . substr($number, 1); // Replace '0' with '+639'
//             } elseif (substr($number, 0, 3) !== '+63') {
//                 $number = '+63' . $number; // Ensure it starts with +63 if needed
//             }

//             // dd($phoneNumber);
//             // Send SMS notification
//             $this->sendSms( $number, "Your permit has expired. Please renew it.");
//         }

//     return view('admin.permit.index', [
//         'approved_permits' => $approved_permits,
//     ]);
// }

// Example function to send SMS using Semaphore
// public function sendSms($number, $message)
// {
//     $ch = curl_init();
//     $parameters = array(
//         'apikey' => 'fa26af247b91bffadd1d1c07c7a9e124', // Your API KEY
//         'number' => $number,
//         'message' => $message,
//         'sendername' => 'SEMAPHORE'
//     );
    
//     curl_setopt($ch, CURLOPT_URL, 'https://semaphore.co/api/v4/messages');
//     curl_setopt($ch, CURLOPT_POST, 1);
//     curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($parameters));
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//     $output = curl_exec($ch);
    
//     // Check for cURL errors and log if any
//     if (curl_errno($ch)) {
//         Log::error('SMS Error: ' . curl_error($ch));
//     } else {
//         // Optionally, log the output for debugging
//         Log::info('SMS Response: ' . $output);
//     }
    
//     curl_close($ch);

//     return $output; // Return the response if needed
// }

//TEST STARTS HERE

public function showApproved()
{
    $now = Carbon::now('Asia/Manila');

    // Retrieve all approved permits
    $approved_permits = BusinessPermitApplication::where('status', 'Approved')
        ->orderByDesc('created_at')
        ->get();

    foreach ($approved_permits as $permit) {
        // Check if the approved_on time is older than 12 months
        if ($now->diffInMonths($permit->approved_on) >= 1) {
            // Update status to 'Renewal'
            $permit->status = 'Renewal';
            $permit->save();

            // Send SMS notification
            $phone_number = $permit->business_Tel_No_Mobile;
            $lastName = $permit->last_name;
            // dd($phone_number);
            // Log::info('Sending SMS to: ' . $phone_number);

            $currentYear = date('Y');

            $message = "Mr/Mrs " . $lastName . " Your business permit is due for renewal. Please proceed to the BPL office for the renewal of your business permit not later than December 31, " . $currentYear;

            
            $smsResult = self::sendSimpleSMS($phone_number, $message);

            // Check and log SMS result
            // Log::info('SMS sent result: ', (array)$smsResult);
            // dd($smsResult); // Use this for debugging
        }
    }

       //Return to your view
    return view('admin.permit.index', [
        'approved_permits' => $approved_permits,
    ]);
}

       


public static function sendSimpleSMS($phone_number, $message) {
    $SMSMessage = [
        "secret" => env('SMS_GATEWAY_API'),
        "mode" => "devices",
        "device" => env('SMS_GATEWAY_DEVICE_ID'),
        "sim" => 1,
        "priority" => 1,
        "phone" => $phone_number,
        "message" => $message
    ];
    
    // Log the SMS message being sent
    Log::info('Sending SMS:', $SMSMessage);

    // Send SMS via the gateway
    $cURL = curl_init(env('SMS_GATEWAY_URL') . "api/send/sms");
    curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($cURL, CURLOPT_POSTFIELDS, $SMSMessage);
    $response = curl_exec($cURL);

    if(curl_errno($cURL)){
        // Log curl error
        $error_msg = curl_error($cURL);
        Log::error("SMS Gateway cURL Error: " . $error_msg);
        return null; // Stop if there's an error
    }

    curl_close($cURL);

    // Decode the response
    $result = json_decode($response, true);
    Log::info('SMS API Response:', (array)$result); // Log the full response for debugging

    // Return result for further debugging
    return $result;
}











//TEST ENDS HERE

    
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

    // public function showForRenewal()
    // {
    //     // Fetch permits with status 'For Renewal'
    //     $for_renewal_permits = BusinessPermitApplication::where('status', 'Renewal')->orderByDesc('created_at')->get();

    //     foreach($for_renewal_permits as $permits){
    //         // dd($permits->notified);
    //         if($permits->notified == 0){
    //             dd('send sms');
    //         }
    //     }   

    //     // Return the view with the 'For Renewal' permits
    //     // return view('admin.permit.renew', compact('for_renewal_permits'));
    // }


    public function showForRenewal()
    {
        $for_renewal_permits = BusinessPermitApplication::where('status', 'Renewal')->orderByDesc('created_at')->get();
    
        foreach ($for_renewal_permits as $permit) {
            if ($permit->notified == 0) {

                $phone_number = $permit->business_Tel_No_Mobile;
                $client_name = $permit->first_name . ' ' . $permit->middle_name . ' ' . $permit->last_name;
                $message = "Your business permit is due for renewal. Please take action.";
                $date_time_sent = Carbon::now('asia/manila');
    
                $smsResult = self::sendSimpleSMS($phone_number, $message);

                // dd($phone_number,  $message, $client_name, $date_time_sent);

                Sms_messages::create([
                    'phone_number' => $phone_number,
                    'message' => $message,
                    'client_name' => $client_name,
                    'date_time_sent' => $date_time_sent
                ]);
    
                if ($smsResult) {
                    // Check for errors in the result
                    if ($smsResult['status'] == 200) {
                        $permit->notified = 1;
                        $permit->save();
                    } else {
                        // Log the failure response
                        Log::error('SMS failed: ', (array)$smsResult);
                    }
                } else {
                    // Log the null response
                    Log::error('SMS result returned null');
                }
    
                // dd($smsResult); // Check what result was returned
            }
        }

          //     // Return the view with the 'For Renewal' permits
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
            $permit->notified = '0';
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
    
    public function dateNow(){

        $DateNow = now()->setTimezone('Asia/Manila')->toDateTimeString();

        return view('site.registration',[
            'DateNow' => $DateNow,
        ]);

    }

    public function editDisplay()
    {
        $streets = Streets::orderBy('street', 'asc')->get();
        $barangays = Barangay::orderBy('barangay', 'asc')->get(); // Fetching barangays data
    
        return view('admin.permit.show2', [
            'streets' => $streets,
            'barangays' => $barangays,
        ]);
    }


    
    
        
    
    
}
