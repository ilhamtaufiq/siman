<?php

namespace App\Filament\Resources\MakamResource\Pages;

use App\Filament\Resources\MakamResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMakam extends EditRecord
{
    protected static string $resource = MakamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
