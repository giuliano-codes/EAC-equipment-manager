<?php

namespace App\Http\Livewire\Booking;

use App\Models\Equipment;
use Livewire\Component;

class Create extends Component
{
    public $equipments;
    public $selected_items = array();
    public $selectedItem;

    public function render()
    {
        return view('livewire.booking.create');
    }

    public function mount()
    {
        $this->equipments = $this->getAllEquipment();
    }

    public function addNewItem()
    {
        $this->selected_items[] = $this->equipments[$this->selectedItem];
        unset($this->equipments[$this->selectedItem]);
    }

    public function removeItem($key)
    {
        $this->equipments[] = $this->selected_items[$key];
        unset($this->selected_items[$key]);
    }

    private function getAllEquipment()
    {
        return Equipment::orderBy('name')->get()->toArray();
    }
}
