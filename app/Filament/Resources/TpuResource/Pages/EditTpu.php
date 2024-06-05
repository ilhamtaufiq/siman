<?php

namespace App\Filament\Resources\TpuResource\Pages;

use App\Filament\Resources\TpuResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTpu extends EditRecord
{
    protected static string $resource = TpuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
