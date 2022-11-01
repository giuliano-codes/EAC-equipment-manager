<div>
    <div class="grid justify-center mb-8 text-lg font-bold">
        <span>Cadastro de Sala</span>
    </div>
    <form wire:submit.prevent="validateRoom">
        <div class="grid grid-cols-3 gap-2">
            <div>
                <label class="font-semibold">Nome</label>
                <input class="w-full rounded-xl" type="text" wire:model="room.name">
            </div>
            <div>
                <label class="font-semibold">Metragem</label>
                <input class="w-full rounded-xl" type="text" wire:model="room.footage">
            </div>
            <div>
                <label class="font-semibold">Prédio</label>
                <input class="w-full rounded-xl" type="text" wire:model="room.building">
            </div>
        </div>
        <div class="grid">
            <label class="font-semibold">Uso</label>
            <textarea class="w-full rounded-xl" rows="3" wire:model="room.usage"></textarea>
        </div>
        <div class="grid mb-3">
            <button class="focus:outline-none text-green-600 text-sm py-2.5 px-5 border border-green-600 hover:bg-green-50 w-full mt-4" type="submit">Adicionar Sala</button>
        </div>
    </form>
</div>
