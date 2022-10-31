<div class="grow flex flex-row">
    <div class="flex flex-col">
        <aside class="w-64 flex flex-col grow" aria-label="Sidebar">
            <div class="overflow-y-auto py-4 px-3 bg-gray-50 rounded dark:bg-gray-800 grow">
                <ul class="space-y-2">
                    <li>
                        <button type="button" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 w-full {{ $menuOptions[$selectedMenu] == 'user' ? 'bg-gray-300' : '' }}" wire:click="changeSelectedMenu('user')">
                            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                            <span class="ml-3">Usuários</span>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 w-full {{ $menuOptions[$selectedMenu] == 'equipment' ? 'bg-gray-300' : '' }}" wire:click="changeSelectedMenu('equipment')">
                            <svg class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path></svg>
                            <span class="ml-3">Equipamentos</span>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 w-full {{ $menuOptions[$selectedMenu] == 'room' ? 'bg-gray-300' : '' }}" wire:click="changeSelectedMenu('room')">
                            <svg class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                            <span class="ml-3">Salas</span>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 w-full {{ $menuOptions[$selectedMenu] == 'booking' ? 'bg-gray-300' : '' }}" wire:click="changeSelectedMenu('booking')">
                            <svg class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                            <span class="ml-3">Reservas</span>
                        </button>
                    </li>
                </ul>
            </div>
        </aside>
    </div>
    <div class="w-full p-4 overflow-y-auto overflow-x-hidden">
        @if($menuOptions[$selectedMenu] == 'user')
            <livewire:user.index />
        @elseif($menuOptions[$selectedMenu] == 'equipment')
            <livewire:equipment.index />
        @elseif($menuOptions[$selectedMenu] == 'room')
            <livewire:room.index />
        @elseif($menuOptions[$selectedMenu] == 'booking')
            <livewire:booking.index />
        @endif
    </div>
</div>