<?php

namespace App\Filament\Resources\CsrEvents\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class CsrEventInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name')
                    ->columnSpanFull(),
                TextEntry::make('description')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('budget')
                    ->numeric(),
                TextEntry::make('location')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('impact_summary')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('event_date')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
