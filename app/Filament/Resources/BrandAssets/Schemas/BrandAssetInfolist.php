<?php

namespace App\Filament\Resources\BrandAssets\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class BrandAssetInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('folder_id')
                    ->numeric(),
                TextEntry::make('name')
                    ->columnSpanFull(),
                TextEntry::make('file_path')
                    ->columnSpanFull(),
                TextEntry::make('file_type')
                    ->columnSpanFull(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
