<?php

namespace App\Filament\Resources\CsrMediaGalleries;

use App\Filament\Resources\CsrMediaGalleries\Pages\CreateCsrMediaGallery;
use App\Filament\Resources\CsrMediaGalleries\Pages\EditCsrMediaGallery;
use App\Filament\Resources\CsrMediaGalleries\Pages\ListCsrMediaGalleries;
use App\Filament\Resources\CsrMediaGalleries\Pages\ViewCsrMediaGallery;
use App\Filament\Resources\CsrMediaGalleries\Schemas\CsrMediaGalleryForm;
use App\Filament\Resources\CsrMediaGalleries\Schemas\CsrMediaGalleryInfolist;
use App\Filament\Resources\CsrMediaGalleries\Tables\CsrMediaGalleriesTable;
use App\Models\CsrMediaGallery;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CsrMediaGalleryResource extends Resource
{
    protected static ?string $model = CsrMediaGallery::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'file_path';

    public static function form(Schema $schema): Schema
    {
        return CsrMediaGalleryForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return CsrMediaGalleryInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CsrMediaGalleriesTable::configure($table);
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
            'index' => ListCsrMediaGalleries::route('/'),
            'create' => CreateCsrMediaGallery::route('/create'),
            'view' => ViewCsrMediaGallery::route('/{record}'),
            'edit' => EditCsrMediaGallery::route('/{record}/edit'),
        ];
    }
}
