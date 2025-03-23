<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Url; // Импортируем атрибут Url

class PageCatalogs extends Component
{
    #[Url] // Используем атрибут Url для автоматической привязки параметра из URL
    public $selectedCategorySlug = null; // Слаг выбранной категории

    public $products = []; // Товары выбранной категории

    // При изменении выбранной категории обновляем товары
    public function updatedSelectedCategorySlug($slug)
    {
        $this->loadProducts($slug);
    }

    // Загрузка товаров по слагу категории
    public function loadProducts($slug)
    {
        if ($slug) {
            $category = Category::where('slug', $slug)->first();
            $this->products = $category ? $category->products : [];
        } else {
            $this->products = Product::all(); // Если категория не выбрана, показываем все товары
        }
    }

    // При монтировании компонента загружаем товары в зависимости от выбранной категории
    public function mount($category = null)
    {
        if ($category) {
            $this->selectedCategorySlug = $category;
        }
        $this->loadProducts($this->selectedCategorySlug);
    }

    public function render()
    {
        $categories = Category::all(); // Получаем все категории
        return view('livewire.page-catalogs', [
            'categories' => $categories,
            'products' => $this->products,
        ]);
    }
}
