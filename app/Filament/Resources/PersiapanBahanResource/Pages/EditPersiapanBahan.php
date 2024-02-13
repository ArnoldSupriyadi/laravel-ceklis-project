<?php

namespace App\Filament\Resources\PersiapanBahanResource\Pages;

use App\Filament\Resources\PersiapanBahanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPersiapanBahan extends EditRecord
{
    protected static string $resource = PersiapanBahanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
