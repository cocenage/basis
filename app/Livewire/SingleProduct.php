<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class SingleProduct extends Component
{
    public $slug;
    public $product;
    public $meta_description;
    public $meta_keywords;
    public $meta_title;
    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $product = Product::where("slug", $this->slug)->firstOrFail();
        $this->product = $product;
        $this->meta_description = $product->meta_description; //поместили в description описание товара
        $this->meta_keywords =  $product->meta_keywords; // поместили ключевые слова
        $this->meta_title =  $product->meta_title;
        return view('livewire.single-product', [
            'product' => $this->product,
        ]);
    }
}
