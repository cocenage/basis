<?php

namespace App\Filament\Resources\ConnectionResource\Pages;

use App\Filament\Resources\ConnectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditConnection extends EditRecord
{
    protected static string $resource = ConnectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
