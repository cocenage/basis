<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Illuminate\Support\Str;

class PageCatalogs extends Component
{
    use WithPagination;

    #[Url]
    public $selectedCategorySlug = null;

    #[Url]
    public $page = 1;

    #[Url]
    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function getProducts()
    {
        $query = Product::query()
            ->when($this->selectedCategorySlug, function ($query) {
                $query->whereHas('category', function ($query) {
                    $query->where('slug', $this->selectedCategorySlug);
                });
            })
            ->when($this->search, function ($query) {
                $searchTerms = explode(' ', $this->search);

                $query->where(function ($query) use ($searchTerms) {
                    foreach ($searchTerms as $term) {
                        if (Str::length($term) >= 3) { // Ищем только слова длиной от 3 символов
                            $query->where('name', 'like', '%' . $term . '%');
                        }
                    }
                });
            })
            ->orderBy('name');

        return $query->paginate(12);
    }

    public function mount($category = null)
    {
        if ($category) {
            $this->selectedCategorySlug = $category;
        }
    }

    public function render()
    {
        return view('livewire.page-catalogs', [
            'categories' => Category::all(),
            'products' => $this->getProducts(),
        ]);
    }
}
