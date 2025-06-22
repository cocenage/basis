<div class="w-full lg:w-[50%] h-full text-black rounded-[10px]]">


    @if(session()->has('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-[15px] mb-4">
        {{ session('success') }}
    </div>
    @endif

    @error('form')
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3  rounded-[15px] mb-4">
        {{ $message }}
    </div>
    @enderror

    <form class="flex flex-col" wire:submit.prevent="submit">
        <!-- Скрытое honeypot-поле -->
        <input type="text" name="website" wire:model="honeypot" style="display: none;">

        <div class="w-full mb-4">
            <input
                wire:model="phone"
                type="tel"
                placeholder="Номер телефона"
                class="w-full px-6 py-4 border-2 rounded-[15px] focus:outline-none"
                wire:model.defer="phone"
                id="phone">
            @error('phone') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Остальные поля формы -->
        <div class="w-full mb-4">
            <input
                wire:model="email"
                type="email"
                placeholder="Почта"
                class="w-full px-6 py-4 border-2 rounded-[15px] focus:outline-none  ">
            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="w-full ">
            <textarea
                wire:model="message"
                placeholder="Ваше сообщение"
                rows="4"
                class="w-full px-6 py-4 border-2 text-black rounded-[15px] focus:outline-none  "></textarea>
            @error('message') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>


        <button type="submit" class="w-max text-[16px] cursor-pointer px-[24px] mt-[30px] py-[12px] rounded-[10px] bg-[#08338F] hover:bg-[#D02320] active:bg-[#D02320] text-white duration-300">
            Отправить
        </button>



    </form>
</div>
