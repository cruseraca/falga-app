<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OurBusinessPage extends Component
{
    public function render()
    {
        return view('livewire.our-business-page')->layout('layouts.public');
    }
}
