<div>
    <div class="grid justify-center mb-8 text-lg font-bold">
        <span>Nova Reserva</span>
    </div>
    <form wire:submit.prevent="validateBooking">
        <div class="grid">
            <label class="font-semibold">Item</label>
            <select class="w-full rounded-xl" wire:model="selectedItem">
                <option value="">Selecione um Equipamento</option>
                @foreach($equipments as $key => $equipment)
                    <option value="{{ $key }}">{{ $equipment['name'] }} - {{ $equipment['model'] }} : {{ $equipment['serie_number'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="flex flex-row-reverse py-2.5 mb-8 gap-2">
            <button class="focus:outline-none text-green-600 text-sm py-2.5 px-5 rounded-md border border-green-600 hover:bg-green-50" type="button" wire:click="addNewItem()">
                Adicionar
            </button>
        </div>
        <hr>
        @foreach($selected_items as $key => $item)
            <div class="grid gird-cols-2 my-6">
                <div>
                    <p class="grow text-center font-semibold">{{ $item['name'] }} - {{ $item['model'] }} : {{ $item['serie_number'] }}</p>
                </div>
                <button class="focus:outline-none text-red-600 text-sm py-2.5 px-5 rounded-md border border-red-600 hover:bg-red-50" type="button" wire:click="removeItem({{ $key }})">
                    Remover
                </button>
            </div>  
        @endforeach
        <div class="grid grid-cols-3 gap-2">
            <div>
                <label class="font-semibold">Sala</label>
                <select class="w-full rounded-xl" wire:model="form.room">
                    <option value="">Selecione uma Sala</option>
                    @foreach($rooms as $key => $room)
                        <option value="{{ $room['id'] }}">{{ $room['name'] }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="font-semibold">Horário de retirada</label>
                <input class="w-full rounded-xl" type="datetime-local" wire:model="form.start_date" required>
            </div>
            <div>
                <label class="font-semibold">Horário de Devolução</label>
                <input class="w-full rounded-xl" type="datetime-local" wire:model="form.end_date" required>
            </div>
        </div>
        <div class="grid mb-3">
            <button class="focus:outline-none text-green-600 text-sm py-2.5 px-5 border border-green-600 hover:bg-green-50 w-full mt-4" type="submit">Realizar Reserva</button>
        </div>
    </form>
    @foreach($form_errors as $error)
        <p class="text-center text-red-500">{{ $error }}</p>
    @endforeach
</div>
