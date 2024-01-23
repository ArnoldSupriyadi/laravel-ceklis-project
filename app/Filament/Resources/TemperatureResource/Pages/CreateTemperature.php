<?php

namespace App\Filament\Resources\TemperatureResource\Pages;

use App\Filament\Resources\TemperatureResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTemperature extends CreateRecord
{
    protected static string $resource = TemperatureResource::class;

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
