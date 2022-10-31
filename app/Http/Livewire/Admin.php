<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Admin extends Component
{
    public $selectedMenu = 'user';
    public $menuOptions = array(
        'user' => 'user',
        'equipment' => 'equipment',
        'room' => 'room',
        'booking' => 'booking'
    );

    public function render()
    {
        return view('livewire.admin');
    }

    public function changeSelectedMenu($option)
    {
        $this->selectedMenu = $option;
    }
}
