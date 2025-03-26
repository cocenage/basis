<div class="">
    <h2 class="pb-[75px]">Каталог</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @forelse ($categories as $index => $category)
        <div class="{{ $index >= 4 ? 'hidden sm:block' : '' }}">
            <x-category-card :data="$category" :index="$index" />
        </div>
        @empty
        <p>продуктов нет</p>
        @endforelse
    </div>
    <div class="mb-[180px] mt-[60px] w-full flex justify-center">
        <x-color-button-all route="page.catalog" title="Больше товаров" />
    </div>
</div>
