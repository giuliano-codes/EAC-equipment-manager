<?php

namespace App\Http\Livewire\Room;

use App\Models\Room;
use Livewire\Component;

class Index extends Component
{
    public $rooms;

    public function render()
    {
        return view('livewire.room.index');
    }

    public function mount()
    {
        $this->rooms = $this->getAllRooms();
    }

    public function getAllRooms()
    {
        $rooms = Room::all();
        
        return $rooms;
    }
}
