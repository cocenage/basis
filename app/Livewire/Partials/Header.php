<?php

namespace App\Livewire\Partials;

use Livewire\Component;
use Illuminate\Support\Facades\Route;

class Header extends Component
{
    public $currentRoute;

    public function mount()
    {
        // Получаем текущий маршрут
        $this->currentRoute = Route::currentRouteName();
    }
    public function render()
    {
        return view('livewire.partials.header');
    }
}
