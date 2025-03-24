<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\ContactResource;
use App\Models\Contact;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContacts extends ListRecords
{
    protected static string $resource = ContactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function mount(): void
    {
        // Если есть запись, перенаправляем на страницу редактирования
        $blog = Contact::first();
        if ($blog) {
            $this->redirect(ContactResource::getUrl('edit', ['record' => $blog]));
        }
    }
}
