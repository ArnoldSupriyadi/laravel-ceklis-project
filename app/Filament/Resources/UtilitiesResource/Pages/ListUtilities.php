<?php

namespace App\Filament\Resources\UtilitiesResource\Pages;

use App\Filament\Resources\UtilitiesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUtilities extends ListRecords
{
    protected static string $resource = UtilitiesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
