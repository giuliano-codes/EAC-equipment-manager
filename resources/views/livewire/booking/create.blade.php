<div>
    <div class="grid justify-center mb-8 text-lg font-bold">
        <span>Nova Reserva</span>
    </div>
    <form action="">
        <div class="grid mb-8">
            <button class="focus:outline-none text-blue-600 text-sm py-2.5 px-5 border border-blue-600 hover:bg-blue-50 w-full mt-4" type="submit">Adicionar Equipamento</button>
        </div>
        <div class="grid">
            <label class="font-semibold">Item</label>
            <select class="w-full rounded-xl">
            </select>
        </div>
        <div class="flex flex-row-reverse py-2.5 mb-8 gap-2">
            <button class="focus:outline-none text-red-600 text-sm py-2.5 px-5 rounded-md border border-red-600 hover:bg-red-50" type="button">
                Remover
            </button>
        </div>
        <div class="grid grid-cols-3 gap-2">
            <div>
                <label class="font-semibold">Sala</label>
                <select class="w-full rounded-xl">
                </select>
            </div>
            <div>
                <label class="font-semibold">Horário de retirada</label>
                <input class="w-full rounded-xl" type="datetime-local">
            </div>
            <div>
                <label class="font-semibold">Horário de Devolução</label>
                <input class="w-full rounded-xl" type="datetime-local">
            </div>
        </div>
        <div class="grid mb-3">
            <button class="focus:outline-none text-green-600 text-sm py-2.5 px-5 border border-green-600 hover:bg-green-50 w-full mt-4" type="submit">Realizar Reserva</button>
        </div>
    </form>
</div>
