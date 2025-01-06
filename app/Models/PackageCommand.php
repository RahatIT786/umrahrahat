<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageCommand extends Model
{
    use HasFactory;
    protected $table = 'package_commands';

    // Fillable attributes
    protected $fillable = [
        'command', 
        'status', 
        'previous_status',
        'username',
        'mobile_number',
    ];
}
