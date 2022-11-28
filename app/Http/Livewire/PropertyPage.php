<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PropertyPage extends Component
{
    public function render()
    {
        return view('livewire.property-page')->layout('layouts.public');
    }
}
