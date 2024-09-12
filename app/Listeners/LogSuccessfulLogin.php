<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Auth;
use App\Models\activity_log;
use Carbon\Carbon;

class LogSuccessfulLogin
{
    /**
     * Handle the event.
     */
    public function handle(Login $event)
    {
        $user = $event->user;

        $log = new Activity_log();
        $log->firstname = $user->firstname;
        $log->time = now()->setTimezone('Asia/Manila')->toDateTimeString();
        $log->user_activity = 'has <span class="badge badge-info text-dark p-2">logged in</span>';
        $log->save();
    }
}

