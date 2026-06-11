<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CsrMediaGallery extends Model
{
    use HasFactory;

    protected $table = 'csr_media_galleries';

    protected $fillable = [
        'csr_event_id',
        'file_path',
        'file_type',
    ];

    public function event(): BelongsTo
    {
        return $this->belongsTo(CsrEvent::class, 'csr_event_id');
    }
}
