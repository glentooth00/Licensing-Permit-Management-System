<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class ApprovalController extends Controller
{
    public function showDashboard()
    {
        // Get all data that has been approved
        $approvedData = DB::table('business_permit_applications')
            ->whereNotNull('approved_on')
            ->get();
    
        // Calculate the remaining time until the 3-minute mark
        $approvedData->map(function ($item) {
            $approvedTime = Carbon::parse($item->approved_on);
            $item->remainingSeconds = max(0, 180 - Carbon::now()->diffInSeconds($approvedTime)); // 180 seconds = 3 minutes
            return $item;
        });

        // Pass the data to the view
        return view('admin.dashboard', ['approvedData' => $approvedData]);
    }
}

