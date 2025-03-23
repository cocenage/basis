<?php

namespace App\Livewire\News;

use App\Models\Heading;
use Livewire\Attributes\Computed;
use Livewire\Component;

class NewsList extends Component
{
    #[Computed()]
    public function headings()
    {
        return Heading::where('is_active', 1)
        ->limit(8)
        ->get();
    }

    public function render()
    {
        return view('livewire.news.news-list', [
            'headings' => $this->headings(),
        ]);
    }
}
