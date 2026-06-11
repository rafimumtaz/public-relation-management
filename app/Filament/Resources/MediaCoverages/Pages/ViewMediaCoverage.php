<?php

namespace App\Filament\Resources\MediaCoverages\Pages;

use App\Filament\Resources\MediaCoverages\MediaCoverageResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMediaCoverage extends ViewRecord
{
    protected static string $resource = MediaCoverageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
