<?php

namespace App\Filament\Resources\PressReleases\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class PressReleaseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (string $operation, $state, $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),
                
                TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true),

                RichEditor::make('content')
                    ->required()
                    ->columnSpanFull(),

                Select::make('status')
                    ->options([
                        'Draft' => 'Draft',
                        'Pending Legal Review' => 'Pending Legal Review',
                        'Pending BOD Approval' => 'Pending BOD Approval',
                        'Published' => 'Published',
                    ])
                    ->required()
                    ->default('Draft'),

                DateTimePicker::make('published_at')
                    ->native(false),

                Hidden::make('author_id')
                    ->default(fn () => auth()->id()),
            ]);
    }
}
