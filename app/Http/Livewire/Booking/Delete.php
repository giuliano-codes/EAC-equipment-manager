<?php

namespace App\Http\Livewire\Booking;

use Illuminate\Support\Facades\Log;
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
        Log::info('Reserva '.$this->booking->id.' deletada por '.auth()->user()->email);
        return redirect()->route('home');
    }
}
