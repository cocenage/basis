<?php

namespace App\Livewire\Partners;

use App\Models\Partner;
use Livewire\Component;
use Livewire\Attributes\Computed;

class PartnersList extends Component
{
    #[Computed()]
    public function partners()
    {
        return Partner::where('is_active', 1)
            ->get();
    }
    public function render()
    {
        return view('livewire.partners.partners-list', [
            'partners' => $this->partners(),
        ]);
    }
}
