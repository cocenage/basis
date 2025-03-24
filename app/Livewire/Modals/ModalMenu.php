<?php

namespace App\Livewire\Modals;

use App\Models\Contact;
use Livewire\Component;

class ModalMenu extends Component
{
    public $isOpen = false;

    public $contact;

    public function updatedIsOpen($value)
    {
        if ($value) {
            $this->dispatch('lock-scroll');
        } else {
            $this->dispatch('unlock-scroll');
        }
    }

    public function mount()
    {
        $this->contact = Contact::first();
    }

    public function render()
    {
        return view('livewire.modals.modal-menu');
    }
}
