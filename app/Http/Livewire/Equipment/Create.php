<?php

namespace App\Http\Livewire\Equipment;

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

    public function submit()
    {
        dd($this->equipment);
    }

    public function importCSV()
    {
        $handle = fopen($this->csvFile->getRealPath(), "r");
        $csvData = array();

        $header = fgetcsv($handle, 0, ",");

        while (($line = fgetcsv($handle, 0, ",")) !== false) {
			$csvData[] = $line;
		}

        return [$header, $csvData];
    }
}
