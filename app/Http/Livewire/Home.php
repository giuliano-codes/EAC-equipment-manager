<?php

namespace App\Http\Livewire;

use App\Models\Booking;
use Carbon\Carbon;
use Livewire\Component;

class Home extends Component
{
    public $bookings;

    public function render()
    {
        return view('livewire.home');
    }

    public function mount()
    {
        $this->updateBookingData();
    }

    public function bookingsWaitingConfirmation()
    {
        $bookings = Booking::where('user_id', auth()->user()->id)->where('status', 'waiting_confirmation')->with('equipments', 'user')->get()->toArray();

        foreach ($bookings as $key => $booking) {
            $startDate = Carbon::parse($booking['start_date']);
            $endDate = Carbon::parse($booking['end_date']);
            $now = Carbon::now()->subHour(3);
            if ($now->diffInHours($startDate) <= 12) {
                $bookings[$key]['can_confirm'] = true;
            } else {
                $bookings[$key]['can_confirm'] = false;
            }

            $bookings[$key]['start_date'] = $startDate->format('d/m/Y H:i');
            $bookings[$key]['end_date'] = $endDate->format('d/m/Y H:i');
        }

        return $bookings;
    }

    public function bookingsConfirmed()
    {
        $bookings = Booking::where('user_id', auth()->user()->id)->where('status', 'confirmed')->with('equipments', 'user')->get()->toArray();

        foreach ($bookings as $key => $booking) {
            $startDate = Carbon::parse($booking['start_date']);
            $endDate = Carbon::parse($booking['end_date']);
            $now = Carbon::now()->subHour(3);

            if ($endDate < $now) {
                $bookings[$key]['late'] = true;
            } else {
                $bookings[$key]['late'] = false;
            }

            $bookings[$key]['start_date'] = $startDate->format('d/m/Y H:i');
            $bookings[$key]['end_date'] = $endDate->format('d/m/Y H:i');
        }

        return $bookings;
    }

    public function updateBookingData()
    {
        $this->bookings['waiting_confirmation'] = $this->bookingsWaitingConfirmation();
        $this->bookings['confirmed'] = $this->bookingsConfirmed();
    }

    public function cancelBooking($id)
    {
        $booking = Booking::find($id);

        $booking->delete();

        $this->updateBookingData();
    }

    public function confirmBooking($id)
    {
        $booking = Booking::find($id);

        $booking->update(['status' => 'confirmed']);

        $this->updateBookingData();
    }

    public function finishBooking($id)
    {
        $booking = Booking::find($id);

        $booking->update(['status' => 'finished']);

        $this->updateBookingData();
    }
}
