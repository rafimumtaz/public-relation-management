<?php

namespace App\Filament\Resources\CsrEvents\Pages;

use App\Filament\Resources\CsrEvents\CsrEventResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditCsrEvent extends EditRecord
{
    protected static string $resource = CsrEventResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
