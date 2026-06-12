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
                    ->saveUploadedFileUsing(function (\Filament\Forms\Components\BaseFileUpload $component, \Livewire\Features\SupportFileUploads\TemporaryUploadedFile $file) {
                        $filename = $file->hashName();
                        $path = $component->getDirectory() . '/' . $filename;
                        $content = $file->get(); // Downloads temp file content into memory
                        \Illuminate\Support\Facades\Storage::disk($component->getDiskName())->put($path, $content);
                        return $path;
                    })
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
