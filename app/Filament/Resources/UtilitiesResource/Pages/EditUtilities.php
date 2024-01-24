<?php

namespace App\Filament\Resources\UtilitiesResource\Pages;

use App\Filament\Resources\UtilitiesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUtilities extends EditRecord
{
    protected static string $resource = UtilitiesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
