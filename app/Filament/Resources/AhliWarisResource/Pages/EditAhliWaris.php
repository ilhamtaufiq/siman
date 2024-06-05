<?php

namespace App\Filament\Resources\AhliWarisResource\Pages;

use App\Filament\Resources\AhliWarisResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAhliWaris extends EditRecord
{
    protected static string $resource = AhliWarisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
