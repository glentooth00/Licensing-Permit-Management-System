<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activity_log extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'time',
        'user_activity',
    ];
}
