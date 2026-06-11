<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MediaCoverage extends Model
{
    use HasFactory;

    protected $table = 'media_coverages';

    protected $fillable = [
        'press_release_id',
        'media_outlet_name',
        'url',
        'sentiment',
        'published_date',
    ];

    protected $casts = [
        'published_date' => 'datetime',
    ];

    public function pressRelease(): BelongsTo
    {
        return $this->belongsTo(PressRelease::class);
    }
}
