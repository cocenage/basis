<?php

namespace App\Livewire;

use Livewire\Component;

class PageCompany extends Component
{
    protected $listeners = ['refreshSlider' => '$refresh'];

    public function hydrate()
    {
        $this->dispatch('refreshSlider');
    }

    public function render()
    {
        return view('livewire.page-company');
    }
}
