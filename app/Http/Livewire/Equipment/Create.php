<?php

namespace App\Http\Livewire\Equipment;

use App\Models\Equipment;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $csvFile;

    public $equipment;

    public function render()
    {
        return view('livewire.equipment.create');
    }

    public function validateEquipment()
    {
        isset($this->equipment['useful_links']) ? $this->equipment['useful_links'] = $this->formatUsefulLinks() : $this->equipment['useful_links'] = '';

        $equipment = Equipment::create($this->equipment);

        if (isset($this->equipment['image'])) {
            $path = $this->equipment['image']->store(
                'equipments',
                'public'
            );

            $equipment->update(['image' => $path]);
        }

        return redirect()->route('equipment.index');
    }

    public function importCSV()
    {
        if ($this->csvFile) {
            $handle = fopen($this->csvFile->getRealPath(), "r");
            $csvData = array();

            $header = fgetcsv($handle, 0, ",");

            while (($line = fgetcsv($handle, 0, ",")) !== false) {
                Equipment::create([
                    'name' => $line[0],
                    'model' => $line[1],
                    'serie_number' => $line[2],
                    'manufacturer' => $line[7],
                    'ufsm_code' => $line[3],
                    'laboratory_code' => $line[4],
                    'ncm_code' => $line[6],
                    'locker' => $line[5],
                    'manual_link' => $line[8],
                    'resources' => $line[10],
                    'additional_information' => $line[9],
                    'observation' => $line[11],
                ]);
            }

            return redirect()->route('equipment.index');
        }
        
    }

    private function formatUsefulLinks()
    {
        $formated_links = array();

        $lines = explode(PHP_EOL, $this->equipment['useful_links']);

        foreach ($lines as $line) {
            list($key, $data) = explode(',', $line);
            $formated_links[trim($key)] = trim($data);
        }

        return $formated_links;
    }
}
