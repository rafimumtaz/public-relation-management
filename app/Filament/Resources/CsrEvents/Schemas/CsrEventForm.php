<?php

namespace App\Filament\Resources\CsrEvents\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class CsrEventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                RichEditor::make('description')
                    ->columnSpanFull(),
                TextInput::make('budget')
                    ->required()
                    ->numeric()
                    ->prefix('Rp'),
                TextInput::make('location')
                    ->maxLength(255),
                DateTimePicker::make('event_date')
                    ->native(false),
                Textarea::make('impact_summary')
                    ->columnSpanFull(),
            ]);
    }
}
