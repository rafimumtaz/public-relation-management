<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BrandAssetFolder extends Model
{
    use HasFactory;

    protected $table = 'brand_asset_folders';

    protected $fillable = [
        'name',
        'description',
    ];

    public function assets(): HasMany
    {
        return $this->hasMany(BrandAsset::class, 'folder_id');
    }
}
