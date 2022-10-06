<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>
        <div class="mb-4">
            <p class="font-bold text-black text-center">SISTEMA DE RESERVA DE EQUIPAMENTOS</p>
        </div>
        <div class="grid grid-cols-1">
            <a href="{{ route('google.login') }}" class="bg-gray-700 rounded-xl p-2">
                <div class="flex flex-row justify-center gap-4">
                    <img src="{{ asset('storage/images/google_logo.svg') }}" alt="" height="40px" width="40px">
                    <p class="self-center text-white font-bold">Faça Login com sua conta Google</p>
                </div>
            </a>
        </div>

        
    </x-jet-authentication-card>
</x-guest-layout>
