<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class DisplayApprovalMessage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $permitId;

    /**
     * Create a new job instance.
     *
     * @param int $permitId
     */
    public function __construct($permitId)
    {
        $this->permitId = $permitId;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Display the approval message in the terminal
        info("Business Permit with ID {$this->permitId} has been approved for 3 minutes.");
    }
}
