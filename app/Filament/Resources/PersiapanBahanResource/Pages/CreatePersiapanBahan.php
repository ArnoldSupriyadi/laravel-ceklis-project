<?php

namespace App\Filament\Resources\PersiapanBahanResource\Pages;

use App\Filament\Resources\PersiapanBahanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePersiapanBahan extends CreateRecord
{
    protected static string $resource = PersiapanBahanResource::class;

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
