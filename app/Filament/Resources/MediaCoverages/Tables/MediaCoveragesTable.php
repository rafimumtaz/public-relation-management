<?php

namespace App\Filament\Resources\MediaCoverages\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class MediaCoveragesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->limit(50),
                TextColumn::make('media_outlet')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('tone')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Positive' => 'success',
                        'Neutral' => 'gray',
                        'Negative' => 'danger',
                        default => 'gray',
                    }),
                TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Draft' => 'gray',
                        'Published' => 'success',
                        'Archived' => 'danger',
                        default => 'gray',
                    }),
                TextColumn::make('published_date')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->headerActions([
                \Filament\Actions\ImportAction::make()
                    ->importer(\App\Filament\Imports\MediaCoverageImporter::class),
            ]);
    }
}
