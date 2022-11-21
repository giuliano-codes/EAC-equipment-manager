<?php

namespace App\Http\Livewire\Booking;

use App\Models\Booking;
use App\Models\Equipment;
use App\Models\Room;
use Carbon\Carbon;
use Livewire\Component;

class Create extends Component
{
    public $equipments;
    public $rooms;
    
    public $selected_items = array();
    public $selectedItem;

    public $form;

    public $form_errors = array();

    public function render()
    {
        return view('livewire.booking.create');
    }

    public function mount()
    {
        $this->equipments = $this->getAllEquipments();
        $this->rooms = $this->getAllRooms();
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

    public function validateBooking()
    {
        $equipamentsIds = array();

        foreach ($this->selected_items as $item) {
            if ($this->checkIfEquipmentisAvailable($item['id'], $this->form['start_date'], $this->form['end_date'])) {
                $equipamentsIds[] = $item['id'];
            } else {
                $errors[] = 'Error Equipment '.$item['name'].' - '.$item['model'].' - '.$item['serie_number'];
            }
        }

        if (!empty($this->form['room'])) {
            if (! $this->checkIfRoomisAvailable($this->form['room'],  $this->form['start_date'], $this->form['end_date'])) {
                $errors[] = 'Error Room';
            }
        }

        if (isset($errors)) {
            $this->form_errors = $errors;
        } else {
            $booking = Booking::create([
                'user_id' => auth()->user()->id,
                'room_id' => !empty($this->form['room']) ? $this->form['room'] : null,
                'start_date' => $this->form['start_date'],
                'end_date' => $this->form['end_date'],
                'status' => 'processing'
            ]);
    
            $booking->equipments()->attach($equipamentsIds);
            $booking->update(['status' => 'waiting_confirmation']);
    
            redirect()->route('booking.show', ['booking' => $booking]);
        }
    }

    private function getAllEquipments()
    {
        return Equipment::orderBy('name')->get()->toArray();
    }

    private function getAllRooms()
    {
        return Room::orderBy('name')->get()->toArray();
    }

    private function checkIfEquipmentisAvailable($equipmentId, $startDate, $endDate)
    {
        $startDate = Carbon::parse($startDate, 'UTC');
        $endDate = Carbon::parse($endDate, 'UTC');

        $equipment = Equipment::find($equipmentId);

        $bookings = $equipment->bookings;

        foreach ($bookings as $booking) {
            if ($startDate < $booking->start_date && $endDate > $booking->start_date) {
                return false;
            } elseif ($startDate >= $booking->start_date && $endDate <= $booking->end_date) {
                return false;
            } elseif ($startDate > $booking->start_date && $startDate < $booking->end_date) {
                return false;
            } elseif ($startDate < $booking->start_date && $endDate > $booking->end_date) {
                return false;
            } else {
                return true;
            }
        }

        return true;
    }

    private function checkIfRoomisAvailable($roomId, $startDate, $endDate)
    {
        $startDate = Carbon::parse($startDate, 'UTC');
        $endDate = Carbon::parse($endDate, 'UTC');

        $room = Room::find($roomId);

        $bookings = $room->bookings;

        foreach ($bookings as $booking) {
            if ($startDate < $booking->start_date && $endDate > $booking->start_date) {
                return false;
            } elseif ($startDate >= $booking->start_date && $endDate <= $booking->end_date) {
                return false;
            } elseif ($startDate > $booking->start_date && $startDate < $booking->end_date) {
                return false;
            } elseif ($startDate < $booking->start_date && $endDate > $booking->end_date) {
                return false;
            } else {
                return true;
            }
        }

        return true;
    }
}
