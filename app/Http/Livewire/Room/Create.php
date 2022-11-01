<?php

namespace App\Http\Livewire\Room;

use App\Models\Room;
use Livewire\Component;

class Create extends Component
{
    public $room;

    public function render()
    {
        return view('livewire.room.create');
    }

    public function validateRoom()
    {
        Room::create($this->room);

        return redirect()->route('room.index');
    }
}
