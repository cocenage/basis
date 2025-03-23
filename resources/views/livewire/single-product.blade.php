@push('meta')
<title>{{ $product->name . ' – Базис Волга' }}</title>
<meta name="description" content="{{ $meta_description }}">
<meta name="keywords" content="{{ $meta_keywords }}">
@endpush

<div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Изображение товара -->
        <div>
            <img src="{{ asset('storage/' . $product->image) }}"
                 alt="{{ $product->name }}"
                 class="w-full rounded-lg shadow-md">
        </div>

        <!-- Информация о товаре -->
        <div>
            <h1 class="text-3xl font-bold mb-4">{{ $product->name }}</h1>
            <p class="text-gray-700 mb-4">{{ $product->description }}</p>
            <p class="text-2xl font-semibold text-blue-500">{{ $product->price }} ₽</p>

            <!-- Кнопка "Добавить в корзину" -->
            <button class="mt-6 bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition-colors">
                Добавить в корзину
            </button>
        </div>
    </div>
</div>
