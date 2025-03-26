@push('meta')
<title>{{ 'Страница не найдена – Базис Волга' }}</title>
<meta name="description" content="К сожалению, страница, которую вы ищете, не найдена. Пожалуйста, проверьте правильность URL-адреса или воспользуйтесь поиском по сайту, чтобы найти нужную информацию. Вы всегда можете вернуться на главную страницу.">
<meta name="robots" content="noindex, nofollow">
@endpush

<div class="h-screen content">
    <h1 class="pt-[180px]">404</h1>
    <p class="text-[20px] pt-[30px]">Страница, которую вы ищете, не существует или была перемещена.</p>
    <div class="pt-[60px]">
        <a wire:navigate href="{{ route('page.home') }}" class="text-[16px] px-[24px] py-[12px] rounded-[10px] bg-[#f2f2f2] hover:bg-[#e1e1e1] duration-300  ">Домой</a>
    </div>
</div>
