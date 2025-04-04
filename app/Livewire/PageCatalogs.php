<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithPagination; // Добавляем трейт для пагинации

class PageCatalogs extends Component
{
    use WithPagination; // Используем трейт пагинации

    #[Url]
    public $selectedCategorySlug = null;

    #[Url] // Добавляем параметр страницы в URL
    public $page = 1;

    // Убираем массив products, так как будем использовать пагинацию

    // При изменении выбранной категории сбрасываем пагинацию на первую страницу
    public function updatedSelectedCategorySlug($slug)
    {
        $this->resetPage(); // Сбрасываем пагинацию на первую страницу
    }

    // Метод для получения товаров с пагинацией
    public function getProducts()
    {
        if ($this->selectedCategorySlug) {
            $category = Category::where('slug', $this->selectedCategorySlug)->first();
            return $category
                ? $category->products()->paginate(12) // Пагинация для товаров категории
                : collect();
        } else {
            return Product::paginate(12); // Пагинация для всех товаров
        }
    }

    public function mount($category = null)
    {
        if ($category) {
            $this->selectedCategorySlug = $category;
        }
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.page-catalogs', [
            'categories' => $categories,
            'products' => $this->getProducts(), // Используем метод с пагинацией
        ]);
    }
}
