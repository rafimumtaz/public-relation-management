<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BrandAsset extends Model
{
    use HasFactory;

    protected $table = 'brand_assets';

    protected $fillable = [
        'folder_id',
        'name',
        'category',
        'file_path',
        'file_type',
        'file_size_kb',
        'uploaded_by_id',
    ];

    public function folder(): BelongsTo
    {
        return $this->belongsTo(BrandAssetFolder::class, 'folder_id');
    }

    public function uploadedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'uploaded_by_id');
    }
}
