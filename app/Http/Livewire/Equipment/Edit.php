<?php

namespace App\Http\Livewire\Equipment;

use App\Models\Equipment;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $equipment;
    public $form;

    public function render()
    {
        return view('livewire.equipment.edit');
    }

    public function mount()
    {
        $this->form = $this->fillForm();
    }

    public function validateEquipment()
    {
        $this->form['useful_links'] = $this->formatUsefulLinks();

        $this->equipment->update($this->form);

        if (isset($this->form['image'])) {
            $path = $this->form['image']->store(
                'equipments',
                'public'
            );

            $this->equipment->update(['image' => $path]);
        }

        return redirect()->route('equipment.show', ['equipment' => $this->equipment]);
    }

    private function fillForm()
    {
        $equipment = $this->equipment;

        return array(
            'name' => $equipment->name,
            'model' => $equipment->model,
            'serie_number' => $equipment->serie_number,
            'manufacturer' => $equipment->manufacturer,
            'ufsm_code' => $equipment->ufsm_code,
            'laboratory_code' => $equipment->laboratory_code,
            'ncm_code' => $equipment->ncm_code,
            'locker' => $equipment->locker,
            'type' => $equipment->type,
            'manual_link' => $equipment->manual_link,
            'resources' => $equipment->resources,
            'additional_information' => $equipment->additional_information,
            'observation' => $equipment->observation,
            'useful_links' => $this->convertUsefulLinksToString($equipment->useful_links)
        );
    }

    private function convertUsefulLinksToString($data)
    {
        if (!empty($data)) {
            $string = '';

            foreach ($data as $key => $link) {
                $string.= ($key.', '.$link.PHP_EOL);
            }

            return $string;
        }
    }

    private function formatUsefulLinks()
    {
        $formated_links = array();

        if (isset($this->form['useful_links'])) {
            $lines = explode(PHP_EOL, $this->form['useful_links']);

            foreach ($lines as $line) {
                if (!empty($line)) {
                    list($key, $data) = explode(',', $line);
                    $formated_links[trim($key)] = trim($data);
                }
            }

            return $formated_links;
        }
    }
}
