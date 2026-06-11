<?php

namespace App\Filament\Resources\CsrMediaGalleries\Pages;

use App\Filament\Resources\CsrMediaGalleries\CsrMediaGalleryResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCsrMediaGallery extends ViewRecord
{
    protected static string $resource = CsrMediaGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
