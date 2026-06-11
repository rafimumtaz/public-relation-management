<?php

namespace App\Filament\Resources\CsrEvents;

use App\Filament\Resources\CsrEvents\Pages\CreateCsrEvent;
use App\Filament\Resources\CsrEvents\Pages\EditCsrEvent;
use App\Filament\Resources\CsrEvents\Pages\ListCsrEvents;
use App\Filament\Resources\CsrEvents\Pages\ViewCsrEvent;
use App\Filament\Resources\CsrEvents\Schemas\CsrEventForm;
use App\Filament\Resources\CsrEvents\Schemas\CsrEventInfolist;
use App\Filament\Resources\CsrEvents\Tables\CsrEventsTable;
use App\Models\CsrEvent;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CsrEventResource extends Resource
{
    protected static ?string $model = CsrEvent::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return CsrEventForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return CsrEventInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CsrEventsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCsrEvents::route('/'),
            'create' => CreateCsrEvent::route('/create'),
            'view' => ViewCsrEvent::route('/{record}'),
            'edit' => EditCsrEvent::route('/{record}/edit'),
        ];
    }
}
