<?php

namespace App\Livewire;

use App\Models\Heading;
use Livewire\Component;

class SingleNews extends Component
{
    public $slug;
    public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function render()
    {
        $news = Heading::where("slug", $this->slug)->firstOrFail();
        return view('livewire.single-news', [
            'news' => $news,
        ]);
    }
}
