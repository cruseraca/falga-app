<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CareerPage extends Component
{
    public $items = [
        ["title" => "Tax Officer", "location" => "Jakarta Selatan, Indonesia", "department" => "TAX", "type" => "Full Time"],
        ["title" => "Accounting Staff", "location" => "Jakarta Selatan, Indonesia", "department" => "Finance & Accounting", "type" => "Full Time"],
        ["title" => "Mechanical Engineer", "location" => "Jakarta Pusat, Indonesia", "department" => "Engineering", "type" => "Full Time"],
        ["title" => "Drafter", "location" => "Jakarta Pusat, Indonesia", "department" => "Engineering", "type" => "Part Time (Contract)"],
        ["title" => "Cost Control", "location" => "Jakarta Pusat, Indonesia", "department" => "Engineering", "type" => "Full Time"],
        ["title" => "Finance Intern", "location" => "Jakarta Selatan, Indonesia", "department" => "Finance & Accounting", "type" => "Intern"]
    ];

    public function render()
    {
        return view('livewire.career-page')->layout('layouts.public');
    }
}
