<?php

namespace App\Filament\Resources\PressReleases\Pages;

use App\Filament\Resources\PressReleases\PressReleaseResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPressRelease extends ViewRecord
{
    protected static string $resource = PressReleaseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
