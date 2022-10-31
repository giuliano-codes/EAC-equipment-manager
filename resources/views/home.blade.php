<x-app-layout>
    <div class="py-12 w-full overflow-y-auto">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-rows-1 mb-8">
                <p class="text-2xl"><span class="font-bold">{{ auth()->user()->name }}</span>, sempre bom ter você aqui!</p>
            </div>
            <div class="grid grid-rows-1">
                <a href="{{ route('booking.create') }}" class="focus:outline-none text-blue-600 text-sm py-2.5 px-5 border border-blue-600 hover:bg-blue-50 py-2 mb-4 text-center">Realizar Nova Reserva</a>
            </div>
            <div class="grid grid-rows-1 bg-white px-4 pb-4 rounded-xl my-2">
                <p class="font-semibold text-center text-xl pb-8 pt-4">
                    Minhas Reservas
                </p>
                
                <div class="grid grid-cols-4 gap-4">
                    <div class="bg-red-500 rounded py-4 px-2">
                        <div class="flex flex-row items-center bg-white p-2 rounded mb-4">
                            <img class="rounded-full w-16" src="{{ auth()->user()->avatar }}" alt="" referrerpolicy="no-referrer">
                            <p class="grow text-center text-black font-bold">Giuliano Arnhold</p>
                        </div>
                        <p class="text-white text-center font-bold">Sonômetro B&K 2270</p>
                        <p class="text-white text-center font-bold">Sonômetro B&K 2270</p>
                        <p class="text-white text-center font-bold">Sonômetro B&K 2270</p>
                        <p class="text-white text-center font-bold mb-4">Sonômetro B&K 2270</p>
                        <p class="text-white text-center"><span class="font-bold">Ret:</span> 10/10/2010 15:30</p>
                        <p class="text-white text-center"><span class="font-bold">Dev:</span> 10/10/2010 17:30</p>
                        <div class="grid">
                            <button class="bg-blue-500 p-2 rounded-xl text-white font-bold my-2">
                                MARCAR COMO DEVOLVIDO
                            </button>
                        </div>
                    </div>
                    <div class="bg-green-500 rounded py-4 px-2">
                        <div class="flex flex-row items-center bg-white p-2 rounded mb-4">
                            <img class="rounded-full w-16" src="{{ auth()->user()->avatar }}" alt="" referrerpolicy="no-referrer">
                            <p class="grow text-center text-black font-bold">Giuliano Arnhold</p>
                        </div>
                        <p class="text-white text-center font-bold">Sonômetro B&K 2270</p>
                        <p class="text-white text-center font-bold">Sonômetro B&K 2270</p>
                        <p class="text-white text-center font-bold">Sonômetro B&K 2270</p>
                        <p class="text-white text-center font-bold mb-4">Sonômetro B&K 2270</p>
                        <p class="text-white text-center"><span class="font-bold">Ret:</span> 10/10/2010 15:30</p>
                        <p class="text-white text-center"><span class="font-bold">Dev:</span> 10/10/2010 17:30</p>
                        <div class="grid">
                            <button class="bg-blue-500 p-2 rounded-xl text-white font-bold my-2">
                                MARCAR COMO DEVOLVIDO
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-rows-1 bg-white px-4 pb-4 rounded-xl my-2">
                <p class="font-semibold text-center text-xl pb-8 pt-4">
                    Minhas Reservas Futuras
                </p>
                
                <div class="grid grid-cols-4 gap-4">
                    <div class="bg-yellow-400 rounded py-4 px-2">
                        <div class="flex flex-row items-center bg-white p-2 rounded mb-4">
                            <img class="rounded-full w-16" src="{{ auth()->user()->avatar }}" alt="" referrerpolicy="no-referrer">
                            <p class="grow text-center text-black font-bold">Giuliano Arnhold</p>
                        </div>
                        <p class="text-white text-center font-bold">Sonômetro B&K 2270</p>
                        <p class="text-white text-center font-bold">Sonômetro B&K 2270</p>
                        <p class="text-white text-center font-bold">Sonômetro B&K 2270</p>
                        <p class="text-white text-center font-bold mb-4">Sonômetro B&K 2270</p>
                        <p class="text-white text-center"><span class="font-bold">Ret:</span> 10/10/2010 15:30</p>
                        <p class="text-white text-center"><span class="font-bold">Dev:</span> 10/10/2010 17:30</p>
                        <div class="grid grid-cols-2 gap-2">
                            <button class="bg-blue-500 p-2 rounded-xl text-white font-bold my-2">
                                CONFIRMAR
                            </button>
                            <button class="bg-red-500 p-2 rounded-xl text-white font-bold my-2">
                                CANCELAR
                            </button>
                        </div>
                    </div>
                    <div class="bg-purple-400 rounded py-4 px-2">
                        <div class="flex flex-row items-center bg-white p-2 rounded mb-4">
                            <img class="rounded-full w-16" src="{{ auth()->user()->avatar }}" alt="" referrerpolicy="no-referrer">
                            <p class="grow text-center text-black font-bold">Giuliano Arnhold</p>
                        </div>
                        <p class="text-white text-center font-bold">Sonômetro B&K 2270</p>
                        <p class="text-white text-center font-bold">Sonômetro B&K 2270</p>
                        <p class="text-white text-center font-bold">Sonômetro B&K 2270</p>
                        <p class="text-white text-center font-bold mb-4">Sonômetro B&K 2270</p>
                        <p class="text-white text-center"><span class="font-bold">Ret:</span> 10/10/2010 15:30</p>
                        <p class="text-white text-center"><span class="font-bold">Dev:</span> 10/10/2010 17:30</p>
                        <div class="grid">
                            <button class="bg-red-500 p-2 rounded-xl text-white font-bold my-2">
                                CANCELAR
                            </button>
                        </div>
                    </div>
                    <div class="bg-purple-400 rounded py-4 px-2">
                        <div class="flex flex-row items-center bg-white p-2 rounded mb-4">
                            <img class="rounded-full w-16" src="{{ auth()->user()->avatar }}" alt="" referrerpolicy="no-referrer">
                            <p class="grow text-center text-black font-bold">Giuliano Arnhold</p>
                        </div>
                        <p class="text-white text-center font-bold">Sonômetro B&K 2270</p>
                        <p class="text-white text-center font-bold">Sonômetro B&K 2270</p>
                        <p class="text-white text-center font-bold">Sonômetro B&K 2270</p>
                        <p class="text-white text-center font-bold mb-4">Sonômetro B&K 2270</p>
                        <p class="text-white text-center"><span class="font-bold">Ret:</span> 10/10/2010 15:30</p>
                        <p class="text-white text-center"><span class="font-bold">Dev:</span> 10/10/2010 17:30</p>
                        <div class="grid">
                            <button class="bg-red-500 p-2 rounded-xl text-white font-bold my-2">
                                CANCELAR
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>