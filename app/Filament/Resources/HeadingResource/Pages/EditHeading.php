<?php

namespace App\Filament\Resources\HeadingResource\Pages;

use App\Filament\Resources\HeadingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHeading extends EditRecord
{
    protected static string $resource = HeadingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
