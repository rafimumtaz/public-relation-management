<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaCoverage extends Model
{
    use HasFactory;

    protected $table = 'media_coverages';

    protected $fillable = [
        'title',
        'url',
        'media_outlet',
        'published_date',
        'tone',
        'status',
    ];

    protected $casts = [
        'published_date' => 'datetime',
    ];
}
