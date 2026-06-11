<?php

namespace App\Filament\Resources\CsrMediaGalleries\Pages;

use App\Filament\Resources\CsrMediaGalleries\CsrMediaGalleryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCsrMediaGalleries extends ListRecords
{
    protected static string $resource = CsrMediaGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
