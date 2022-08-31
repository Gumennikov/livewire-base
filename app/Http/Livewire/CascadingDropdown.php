<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Country;
use App\Models\Continent;

class CascadingDropdown extends Component
{
    public $continents = [];
    public $countries = [];

    public $selectedContinent;
    public $selectedCountry;

    public function mount()
    {
        $this->continents = Continent::all();
    }

    public function render()
    {
        return view('livewire.cascading-dropdown');
    }

    public function changeContinent()
    {
        if ($this->selectedContinent != '-1') {
            $this->countries = Country::where('continent_uuid', $this->selectedContinent)->get();
        }
    }
}