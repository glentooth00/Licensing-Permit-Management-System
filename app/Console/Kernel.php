<?php

// app/Console/Kernel.php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        \App\Console\Commands\ArchiveApprovedBusinessPermits::class,
    ];
    
    

    protected function schedule(Schedule $schedule)
    {
        // Schedule your custom command here
        $schedule->command('check:archive-business-permits')->daily();

        $schedule->command('check:archive-business-permits')
            ->daily()
            ->appendOutputTo(storage_path('logs/archive_permits.log'));


    }
    

    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}

