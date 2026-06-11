<?php

namespace App\Filament\Resources\CsrMediaGalleries\Pages;

use App\Filament\Resources\CsrMediaGalleries\CsrMediaGalleryResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditCsrMediaGallery extends EditRecord
{
    protected static string $resource = CsrMediaGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
