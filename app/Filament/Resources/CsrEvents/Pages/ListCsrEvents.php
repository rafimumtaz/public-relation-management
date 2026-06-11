<?php

namespace App\Filament\Resources\CsrEvents\Pages;

use App\Filament\Resources\CsrEvents\CsrEventResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCsrEvents extends ListRecords
{
    protected static string $resource = CsrEventResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
