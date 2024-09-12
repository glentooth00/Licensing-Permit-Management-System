<?php

namespace App\Console;

use App\Models\BusinessPermitApplication;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Carbon;
use App\Models\Permit; // Assuming your model is called Permit

class Kernel extends ConsoleKernel
{
    protected function schedule(Schedule $schedule)
    {
        // Schedule the task to run every minute
        $schedule->call(function () {
            // Get all permits approved within the last minute
            $permits = BusinessPermitApplication::where('status', 'approved') // Assuming status is 'approved'
                ->where('approved_on', '<=', Carbon::now()->subMinute())
                ->get();

            // Loop through and check each permit
            foreach ($permits as $permit) {
                // Display the status update for testing purposes
                dd('status has been updated');
            }
        })->everyMinute();
    }

    protected function commands()
    {
        // Load the commands within the project
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}

