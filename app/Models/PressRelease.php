<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PressRelease extends Model
{
    use HasFactory;

    protected $table = 'press_releases';

    protected $fillable = [
        'title',
        'slug',
        'content',
        'status',
        'published_at',
        'author_id',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function mediaCoverages(): HasMany
    {
        return $this->hasMany(MediaCoverage::class);
    }
}
