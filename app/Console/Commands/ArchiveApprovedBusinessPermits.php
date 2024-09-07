<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use DB;

class ArchiveApprovedBusinessPermits extends Command
{
    protected $signature = 'check:archive-business-permits';
    protected $description = 'Check business permits approved for more than 24 hours and update status to Archived';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Get current time with Manila timezone as Carbon instance
        $now = Carbon::now('Asia/Manila');

        // Get all approved permits that have been approved for more than 24 hours
        $approvedPermits = DB::table('business_permit_applications')
            ->whereNotNull('approved_on')   // Ensure 'approved_on' is not null
            ->where('status', 'Approved')   // Check that status is 'Approved'
            ->where('approved_on', '<=', $now->subDay()) // Approved for at least 24 hours
            ->where('status', '!=', 'Renewal') // Check that status is not already 'Archived'
            ->get();

        if ($approvedPermits->isEmpty()) {
            $this->info('No business permits found for status update.');
            return;
        }

        // Update the status for each permit
        foreach ($approvedPermits as $permit) {
            DB::table('business_permit_applications')
                ->where('id', $permit->id)
                ->update(['status' => 'Renewal']); // Update status to 'Archived'

            $this->info('Business Permit with ID ' . $permit->id . ' has been updated to Archived.');
        }
    }
}
