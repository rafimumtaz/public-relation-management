<?php

namespace App\Filament\Resources\MediaCoverages\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class MediaCoverageInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('title')
                    ->columnSpanFull(),
                TextEntry::make('url')
                    ->columnSpanFull(),
                TextEntry::make('media_outlet')
                    ->columnSpanFull(),
                TextEntry::make('published_date')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('tone')
                    ->columnSpanFull(),
                TextEntry::make('status')
                    ->columnSpanFull(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
