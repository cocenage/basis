<?php

namespace App\Livewire\Modals;

use Livewire\Component;

class ModalMenu extends Component
{
    public $isOpen = false;

    public function updatedIsOpen($value)
    {
        if ($value) {
            $this->dispatch('lock-scroll');
        } else {
            $this->dispatch('unlock-scroll');
        }
    }

    public function render()
    {
        return view('livewire.modals.modal-menu');
    }
}
