<?php

namespace App\Http\Livewire\Booking;

use App\Models\Booking;
use Livewire\Component;

class Index extends Component
{
    public $bookings;
    public $showOnlyTrased = false;

    public function render()
    {
        return view('livewire.booking.index');
    }

    public function mount()
    {
        $this->bookings = $this->getAllBookings();
    }

    public function getAllBookings()
    {
        $bookings = Booking::orderBy('start_date')->get();
        
        return $bookings;
    }

    public function getAllBookingsTrashed()
    {
        $this->bookings = Booking::onlyTrashed()->orderBy('start_date')->get();
    }
}
