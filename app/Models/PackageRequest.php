<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackageRequest extends Model
{
    protected $fillable = [ 
        'customer_name',
        'mobile',
        'package_name',
        'delete_status', 
    ];
}
