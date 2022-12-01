<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CareerPage extends Component
{
    public $items = [
        ["title" => "UX Designer", "location" => "Jakarta Barat, Indonesia", "department" => "HRD", "type" => "Full Time"],
        ["title" => "UX Designer", "location" => "Jakarta Barat, Indonesia", "department" => "Production", "type" => "Full Time"],
        ["title" => "UX Designer", "location" => "Jakarta Barat, Indonesia", "department" => "Sales", "type" => "Full Time"],
        ["title" => "UX Designer", "location" => "Jakarta Barat, Indonesia", "department" => "Sales", "type" => "Full Time"],
        ["title" => "UX Designer", "location" => "Jakarta Barat, Indonesia", "department" => "Sales", "type" => "Full Time"],
        ["title" => "UX Designer", "location" => "Jakarta Barat, Indonesia", "department" => "Sales", "type" => "Full Time"],
        ["title" => "UX Designer", "location" => "Jakarta Barat, Indonesia", "department" => "Sales", "type" => "Full Time"],
        ["title" => "UX Designer", "location" => "Jakarta Barat, Indonesia", "department" => "Sales", "type" => "Full Time"]
    ];

    public function render()
    {
        return view('livewire.career-page')->layout('layouts.public');
    }
}
