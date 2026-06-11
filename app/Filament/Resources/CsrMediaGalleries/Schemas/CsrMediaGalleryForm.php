<?php

namespace App\Filament\Resources\CsrMediaGalleries\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class CsrMediaGalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('csr_event_id')
                    ->relationship('csrEvent', 'name')
                    ->required(),
                FileUpload::make('file_path')
                    ->disk('s3')
                    ->directory('csr-media')
                    ->visibility('public')
                    ->required()
                    ->columnSpanFull(),
                Select::make('file_type')
                    ->options([
                        'Image' => 'Image',
                        'Video' => 'Video',
                        'Document' => 'Document',
                    ])
                    ->required(),
            ]);
    }
}
