<?php

namespace App\Filament\Resources\MediaCoverages\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MediaCoverageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                TextInput::make('url')
                    ->url()
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                TextInput::make('media_outlet')
                    ->required()
                    ->maxLength(255),
                DateTimePicker::make('published_date')
                    ->native(false),
                Select::make('tone')
                    ->options([
                        'Positive' => 'Positive',
                        'Neutral' => 'Neutral',
                        'Negative' => 'Negative',
                    ])
                    ->required(),
                Select::make('status')
                    ->options([
                        'Draft' => 'Draft',
                        'Published' => 'Published',
                        'Archived' => 'Archived',
                    ])
                    ->required()
                    ->default('Published'),
            ]);
    }
}
