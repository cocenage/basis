<?php

namespace App\Livewire\Preloader;

use Livewire\Component;

class Preloader extends Component
{
    public function showPreloader()
    {
        $this->dispatchBrowserEvent('show-preloader', ['show' => true]);
    }
    public function hidePreloader()
    {
        $this->dispatchBrowserEvent('show-preloader', ['show' => false]);
    }
    public function render()
    {
        return view('livewire.preloader.preloader');
    }
}
