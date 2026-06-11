<?php

namespace App\Filament\Imports;

use App\Models\MediaCoverage;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;
use Illuminate\Support\Number;

class MediaCoverageImporter extends Importer
{
    protected static ?string $model = MediaCoverage::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('title')
                ->requiredMapping()
                ->rules(['required', 'max:255']),
            ImportColumn::make('url')
                ->requiredMapping()
                ->rules(['required', 'url', 'max:255']),
            ImportColumn::make('media_outlet')
                ->requiredMapping()
                ->rules(['required', 'max:255']),
            ImportColumn::make('published_date')
                ->rules(['nullable', 'date']),
            ImportColumn::make('tone')
                ->requiredMapping()
                ->rules(['required']),
            ImportColumn::make('status')
                ->rules(['nullable']),
        ];
    }

    public function resolveRecord(): MediaCoverage
    {
        return new MediaCoverage();
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your media coverage import has completed and ' . Number::format($import->successful_rows) . ' ' . str('row')->plural($import->successful_rows) . ' imported.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' ' . Number::format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to import.';
        }

        return $body;
    }
}
