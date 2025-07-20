<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;
    protected $fillable = [
        'client_name',
        'description',
        'status',
        'start_date',
        'end_date',
        'client_photo',
        'client_logo',
        'client_website',
        'client_email',
        'client_phone',
        'project_type',
    ];
    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];
    
}
