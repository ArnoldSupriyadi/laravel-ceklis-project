<?php

namespace App\Filament\Resources\PersiapanBahanResource\Pages;

use App\Filament\Resources\PersiapanBahanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPersiapanBahans extends ListRecords
{
    protected static string $resource = PersiapanBahanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
