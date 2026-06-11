<?php

namespace App\Filament\Resources\CsrEvents\Pages;

use App\Filament\Resources\CsrEvents\CsrEventResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCsrEvent extends CreateRecord
{
    protected static string $resource = CsrEventResource::class;
}
