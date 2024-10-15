<?php

namespace App\Http\Controllers;

use App\Models\Sms_messages;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\DataTypes\SMS;

class SmsMessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $smsNotifs = Sms_messages::orderBy('created_at', 'DESC')->get();


        return view('admin.permit.sms',[
            'smsNotifs' => $smsNotifs,
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
    public function show(Sms_messages $sms_messages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sms_messages $sms_messages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sms_messages $sms_messages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sms_messages $sms_messages)
    {
        //
    }
}
