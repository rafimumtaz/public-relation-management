<?php

namespace App\Filament\Resources\MediaCoverages;

use App\Filament\Resources\MediaCoverages\Pages\CreateMediaCoverage;
use App\Filament\Resources\MediaCoverages\Pages\EditMediaCoverage;
use App\Filament\Resources\MediaCoverages\Pages\ListMediaCoverages;
use App\Filament\Resources\MediaCoverages\Pages\ViewMediaCoverage;
use App\Filament\Resources\MediaCoverages\Schemas\MediaCoverageForm;
use App\Filament\Resources\MediaCoverages\Schemas\MediaCoverageInfolist;
use App\Filament\Resources\MediaCoverages\Tables\MediaCoveragesTable;
use App\Models\MediaCoverage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MediaCoverageResource extends Resource
{
    protected static ?string $model = MediaCoverage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'media_outlet_name';

    public static function form(Schema $schema): Schema
    {
        return MediaCoverageForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return MediaCoverageInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MediaCoveragesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListMediaCoverages::route('/'),
            'create' => CreateMediaCoverage::route('/create'),
            'view' => ViewMediaCoverage::route('/{record}'),
            'edit' => EditMediaCoverage::route('/{record}/edit'),
        ];
    }
}
