<?php

namespace App\Filament\Resources\PressReleases\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PressReleaseInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('title')
                    ->columnSpanFull(),
                TextEntry::make('content')
                    ->columnSpanFull(),
                TextEntry::make('status')
                    ->columnSpanFull(),
                TextEntry::make('published_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
