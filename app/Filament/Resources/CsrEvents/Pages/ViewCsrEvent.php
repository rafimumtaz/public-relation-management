<?php

namespace App\Filament\Resources\CsrEvents\Pages;

use App\Filament\Resources\CsrEvents\CsrEventResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCsrEvent extends ViewRecord
{
    protected static string $resource = CsrEventResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
