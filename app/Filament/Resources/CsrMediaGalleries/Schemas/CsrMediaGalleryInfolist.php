<?php

namespace App\Filament\Resources\CsrMediaGalleries\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class CsrMediaGalleryInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('csr_event_id')
                    ->numeric(),
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
