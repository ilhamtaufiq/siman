<?php

namespace App\Filament\Resources\TumpangResource\Pages;

use App\Filament\Resources\TumpangResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTumpangs extends ListRecords
{
    protected static string $resource = TumpangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
