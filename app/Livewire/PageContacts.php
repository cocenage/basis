<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;

class PageContacts extends Component
{
    public $contact;

    public function mount()
    {
        $this->contact = Contact::first();
    }

    public function render()
    {
        return view('livewire.page-contacts');
    }
}
