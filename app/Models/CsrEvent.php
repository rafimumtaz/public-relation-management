<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CsrEvent extends Model
{
    use HasFactory;

    protected $table = 'csr_events';

    protected $fillable = [
        'name',
        'description',
        'budget',
        'location',
        'impact_summary',
        'event_date',
    ];

    protected $casts = [
        'event_date' => 'datetime',
        'budget' => 'decimal:2',
    ];

    public function galleries(): HasMany
    {
        return $this->hasMany(CsrMediaGallery::class);
    }
}
