<?php

namespace App\Filament\Resources\BrandAssets\Pages;

use App\Filament\Resources\BrandAssets\BrandAssetResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewBrandAsset extends ViewRecord
{
    protected static string $resource = BrandAssetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
