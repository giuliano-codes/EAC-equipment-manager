<?php

namespace App\Http\Livewire\Equipment;

use App\Models\Equipment;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.equipment.index');
    }

    public function mount()
    {
        
    }

    public function getAllEquipments()
    {
        $equipments = Equipment::all();

        dd($equipments);
    }
}
