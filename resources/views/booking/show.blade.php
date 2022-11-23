<x-app-layout>
    <div class="py-12 w-full overflow-y-auto">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-5 gap-2">
                <div class="grid grid-rows-2">
                    <p class="text-center font-bold">Usuário</p>
                    <p class="text-center">{{ $booking['user']['name'] }}</p>
                </div>
                <div class="grid grid-rows-2">
                    <p class="text-center font-bold">SALA</p>
                    <p class="text-center">{{ isset($booking['room']) ? $booking['room']['name'] : '----' }}</p>
                </div>
                <div class="grid grid-rows-2">
                    <p class="text-center font-bold">Data Criação</p>
                    <p class="text-center">{{ $booking['created_at']->format('d/m/Y H:i') }}</p>
                </div>
                <div class="grid grid-rows-2">
                    <p class="text-center font-bold">Data Início</p>
                    <p class="text-center">{{ $booking['start_date']->format('d/m/Y H:i') }}</p>
                </div>
                <div class="grid grid-rows-2">
                    <p class="text-center font-bold">Data Fim</p>
                    <p class="text-center">{{ $booking['end_date']->format('d/m/Y H:i') }}</p>
                </div>
            </div>
            <div class="grid my-8">
                <p class="text-center font-bold">Equipamentos</p>
                @foreach($booking['equipments'] as $equipment)
                    <a href="{{ route('equipment.show', ['equipment' => $equipment['id']]) }}" class="text-center text-blue-500" target="_blank" rel="noopener noreferrer">{{ $equipment['name'] }} - {{ $equipment['model'] }} - {{ $equipment['serie_number'] }}</a>
                @endforeach
            </div>
            @can('delete', $booking)
                <div class="grid mb-3">
                    <a href="{{ route('booking.delete', ['booking' => $booking]) }}" class="focus:outline-none text-red-600 text-sm py-2.5 px-5 border border-red-600 hover:bg-red-50 w-full mt-4 text-center">Deletar Reserva</a>
                </div>
            @endcan
        </div>
    </div>
</x-app-layout>