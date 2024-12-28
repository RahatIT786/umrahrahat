<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VisaDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'visa_type',
        'documents_required',
        'processing_time',
        'price',
        'file_path',
    ];
}
