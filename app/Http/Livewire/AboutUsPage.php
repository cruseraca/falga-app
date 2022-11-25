<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AboutUsPage extends Component
{
    public function render()
    {
        return view('livewire.about-us-page')->layout('layouts.public');
    }
}
