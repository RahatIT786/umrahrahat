<?php

// app/Models/RequestCommand.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestCommand extends Model
{
    use HasFactory;

    // Table name (optional if you want to specify a custom table name)
    protected $table = 'request_commands';

    // Fillable attributes
    protected $fillable = [
        'command', 
        'status', 
        'previous_status',
        'username',
        'mobile_number',
    ];
}

