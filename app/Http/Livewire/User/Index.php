<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public $usersList;

    public function render()
    {
        return view('livewire.user.index');
    }

    public function mount()
    {
        $this->usersList = $this->getAllUsers();
    }

    public function getAllUsers()
    {
        $users = User::all()->toArray();

        return $users;
    }

    public function changeUserStatus($userId)
    {
        $status = (boolean) User::find($userId)->active;
        $newStatus = !$status;

        User::find($userId)->update(['active' => $newStatus]);

        $this->usersList = $this->getAllUsers();
    }
}
