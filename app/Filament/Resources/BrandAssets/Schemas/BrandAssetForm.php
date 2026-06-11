<?php

namespace App\Filament\Resources\BrandAssets\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BrandAssetForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('folder_id')
                    ->relationship('folder', 'name')
                    ->required(),
                TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                FileUpload::make('file_path')
                    ->disk('s3')
                    ->directory('brand-assets')
                    ->visibility('public')
                    ->required()
                    ->columnSpanFull(),
                Select::make('file_type')
                    ->options([
                        'Logo' => 'Logo',
                        'Font' => 'Font',
                        'Template' => 'Template',
                        'Guideline' => 'Guideline',
                        'Other' => 'Other',
                    ])
                    ->required(),
            ]);
    }
}
