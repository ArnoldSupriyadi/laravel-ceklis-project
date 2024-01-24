<?php

namespace App\Filament\Resources\UtilitiesResource\Pages;

use App\Filament\Resources\UtilitiesResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUtilities extends CreateRecord
{
    protected static string $resource = UtilitiesResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();
    
        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
