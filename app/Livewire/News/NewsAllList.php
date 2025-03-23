<?php

namespace App\Livewire\News;

use App\Models\Heading;
use Livewire\Component;
use Livewire\Attributes\Computed;

class NewsAllList extends Component
{
    #[Computed()]
    public function headings()
    {
        return Heading::where('is_active', 1)
        ->get();
    }

    public function render()
    {
        return view('livewire.news.news-all-list', [
            'headings' => $this->headings(),
        ]);
    }
}
