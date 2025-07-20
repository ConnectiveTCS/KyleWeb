<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    /** @use HasFactory<\Database\Factories\RatingFactory> */
    use HasFactory;
    protected $fillable = [
        'user_id',
        'project_id',
        'client_name',
        'business_name',
        'client_photo',
        'business_photo',
        'project_name',
        'rating',
        'comment',
    ];
    protected $casts = [
        'rating' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
