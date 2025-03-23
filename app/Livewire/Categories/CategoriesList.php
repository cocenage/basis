<?php

namespace App\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;

class CategoriesList extends Component
{
    public function render()
    {
        $categories = Category::where('is_active', 1)
        ->limit(8)
        ->get();
        return view('livewire.categories.categories-list', [
            'categories' => $categories,
        ]);
    }
}
