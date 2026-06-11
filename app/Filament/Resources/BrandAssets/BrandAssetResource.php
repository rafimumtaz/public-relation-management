<?php

namespace App\Filament\Resources\BrandAssets;

use App\Filament\Resources\BrandAssets\Pages\CreateBrandAsset;
use App\Filament\Resources\BrandAssets\Pages\EditBrandAsset;
use App\Filament\Resources\BrandAssets\Pages\ListBrandAssets;
use App\Filament\Resources\BrandAssets\Pages\ViewBrandAsset;
use App\Filament\Resources\BrandAssets\Schemas\BrandAssetForm;
use App\Filament\Resources\BrandAssets\Schemas\BrandAssetInfolist;
use App\Filament\Resources\BrandAssets\Tables\BrandAssetsTable;
use App\Models\BrandAsset;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class BrandAssetResource extends Resource
{
    protected static ?string $model = BrandAsset::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return BrandAssetForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return BrandAssetInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BrandAssetsTable::configure($table);
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
            'index' => ListBrandAssets::route('/'),
            'create' => CreateBrandAsset::route('/create'),
            'view' => ViewBrandAsset::route('/{record}'),
            'edit' => EditBrandAsset::route('/{record}/edit'),
        ];
    }
}
