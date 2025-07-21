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
        'project_photos',
        'client_logo',
        'description',
        'status',
        'start_date',
        'end_date',
        'client_website',
        'project_type',
    ];
    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'project_photos' => 'array',
    ];
    
}
