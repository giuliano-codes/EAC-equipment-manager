<?php

namespace App\Http\Livewire;

use App\Models\Team;
use Livewire\Component;

class AcceptTerms extends Component
{
    public $form = [];

    protected $rules = [
        'form.first_phone' => ['required','regex:/^\([1-9]{2}\) (?:[2-8]|9[1-9])[0-9]{3}\-[0-9]{4}$/'],
        'form.accept_terms_and_privacy_policy' => 'required'
    ];

    public function render()
    {
        return view('livewire.accept-terms');
    }

    public function validateUser()
    {
        $this->validate();
        $this->form['scholarship'] = ($this->form['scholarship'] == 'yes' ? true : false);

        if ($this->form['user_type'] == 'student') {
            $team = Team::where('name', 'Discente')->where('personal_team', false)->first();
            if (!empty($team)) {
                $this->updateUser($this->form, $team);
            }
        } elseif ($this->form['user_type'] == 'professor') {
            $team = Team::where('name', 'Docente')->where('personal_team', false)->first();
            if (!empty($team)) {
                $this->updateUser($this->form, $team);
            }
        }
    }

    private function updateUser($form, $team)
    {
        $authUser = auth()->user();

        $authUser->update($form);

        if (!$team->hasUser($authUser)) {
            $authUser->setTeam($team);
        }

        redirect()->route('home');
    }
}
