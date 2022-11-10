<?php

namespace App\Http\Livewire\Equipment;

use App\Models\Equipment;
use Livewire\Component;

class Index extends Component
{
    public $equipments;
    
    public function render()
    {
        return view('livewire.equipment.index');
    }

    public function mount()
    {
        $this->equipments = $this->getAllEquipments();
    }

    public function getAllEquipments()
    {
        $equipments = Equipment::orderBy('name')->get();
        
        return $equipments;
    }
}
