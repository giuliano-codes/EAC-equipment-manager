<?php

namespace App\Http\Livewire\Booking;

use Livewire\Component;

class Delete extends Component
{
    public $booking;

    public function render()
    {
        return view('livewire.booking.delete');
    }

    public function delete()
    {
        $this->booking->delete();

        return redirect()->route('home');
    }
}
