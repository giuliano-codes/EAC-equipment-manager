<div>
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
            @foreach($bookings['confirmed'] as $confirmedBooking)
                <div class="rounded py-4 px-2 {{ $confirmedBooking['late'] == true ? 'bg-red-500' : 'bg-green-500' }}">
                    <div class="flex flex-row items-center bg-white p-2 rounded mb-4">
                        <img class="rounded-full w-16" src="{{ $confirmedBooking['user']['avatar'] }}" alt="" referrerpolicy="no-referrer">
                        <p class="grow text-center text-black font-bold">{{ $confirmedBooking['user']['name'] }}</p>
                    </div>
                    @foreach($confirmedBooking['equipments'] as $equipment)
                        <p class="text-white text-center font-bold">{{ $equipment['name'] }}</p>
                    @endforeach
                    <hr class="my-4">
                    <p class="text-white text-center"><span class="font-bold">Ret:</span>{{ $confirmedBooking['start_date'] }}</p>
                    <p class="text-white text-center"><span class="font-bold">Dev:</span>{{ $confirmedBooking['end_date'] }}</p>
                    <div class="grid">
                        <button class="bg-blue-500 p-2 rounded-xl text-white font-bold my-4">
                            MARCAR COMO DEVOLVIDO
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="grid grid-rows-1 bg-white px-4 pb-4 rounded-xl my-2">
        <p class="font-semibold text-center text-xl pb-8 pt-4">
            Minhas Reservas Futuras
        </p>
        
        <div class="grid grid-cols-4 gap-4">
            @foreach($bookings['waiting_confirmation'] as $bookingWaitingConfirmation)
                <div class="rounded py-4 px-2 {{ $bookingWaitingConfirmation['can_confirm'] == true ? 'bg-yellow-400' : 'bg-purple-400' }}">
                    <div class="flex flex-row items-center bg-white p-2 rounded mb-4">
                        <img class="rounded-full w-16" src="{{ $bookingWaitingConfirmation['user']['avatar'] }}" alt="" referrerpolicy="no-referrer">
                        <p class="grow text-center text-black font-bold">{{ $bookingWaitingConfirmation['user']['name'] }}</p>
                    </div>
                    @foreach($bookingWaitingConfirmation['equipments'] as $equipment)
                        <p class="text-white text-center font-bold">{{ $equipment['name'] }}</p>
                    @endforeach
                    <hr class="my-4">
                    <p class="text-white text-center"><span class="font-bold">Ret:</span>{{ $bookingWaitingConfirmation['start_date'] }}</p>
                    <p class="text-white text-center"><span class="font-bold">Dev:</span>{{ $bookingWaitingConfirmation['end_date'] }}</p>
                    @if($bookingWaitingConfirmation['can_confirm'])
                        <div class="grid grid-cols-2 gap-2">
                            <button class="bg-blue-500 p-2 rounded-xl text-white font-bold my-2">
                                CONFIRMAR
                            </button>
                            <button class="bg-red-500 p-2 rounded-xl text-white font-bold my-2">
                                CANCELAR
                            </button>
                        </div>
                    @else
                        <div class="grid">
                            <button class="bg-red-500 p-2 rounded-xl text-white font-bold my-2">
                                CANCELAR
                            </button>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</div>
