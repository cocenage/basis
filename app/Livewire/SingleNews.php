<?php

namespace App\Livewire;

use App\Models\Heading;
use Livewire\Component;

class SingleNews extends Component
{
    public $slug;
    public $meta_description;
    public $meta_keywords;
    public $meta_title;
    public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function render()
    {
        $news = Heading::where("slug", $this->slug)->firstOrFail();
        $this->meta_description = $news->meta_description; //поместили в description описание товара
        $this->meta_keywords =  $news->meta_keywords; // поместили ключевые слова
        $this->meta_title =  $news->meta_title;
        return view('livewire.single-news', [
            'news' => $news,
        ]);
    }
}
