<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class userVisaEnquiry extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'visaType',
        'message',
        'delete_status',
        'status',
    ];
}
