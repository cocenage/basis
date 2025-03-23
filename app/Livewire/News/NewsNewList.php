<?php

namespace App\Livewire\News;

use App\Models\Heading;
use Livewire\Component;

class NewsNewList extends Component
{
    public $currentSlug; // Слаг текущей статьи

    public function mount($currentSlug)
    {
        $this->currentSlug = $currentSlug;
    }

    public function render()
    {
        // Получаем новые статьи, исключая текущую
        $relatedNews = Heading::where('is_active', 1)
            ->where('slug', '!=', $this->currentSlug) // Исключаем текущую статью
            ->take(4) // Ограничиваем количество статей
            ->get();

        return view('livewire.news.news-new-list', [
            'relatedNews' => $relatedNews,
        ]);
    }
}
