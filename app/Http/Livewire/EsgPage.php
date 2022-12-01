<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EsgPage extends Component
{
    public $all_items;
    public $titles = [
        "financial" => "Financial Highlights",
        "sustainability" => "Sustainability Reports",
        "presentation" => "Corporate Presentation",
        "governance" => "Corporate Governance",
    ];
    public $q;
    public $title;

    public $items = [];

    public function __construct()
    {
        $this->all_items = [
                "financial" => [
                    ["title" => "Financial Highlights 1", "date" => "16 September 2022", "file" => asset("pdf/contoh.pdf")],
                    ["title" => "Financial Highlights 2", "date" => "17 September 2022", "file" => asset("pdf/contoh.pdf")],
                    ["title" => "Financial Highlights 3", "date" => "18 September 2022", "file" => asset("pdf/contoh.pdf")],
                    ["title" => "Financial Highlights 4", "date" => "19 September 2022", "file" => asset("pdf/contoh.pdf")],
                    ["title" => "Financial Highlights 5", "date" => "20 September 2022", "file" => asset("pdf/contoh.pdf")],
                    ["title" => "Financial Highlights 6", "date" => "21 September 2022", "file" => asset("pdf/contoh.pdf")],
                ],
                "sustainability" => [
                    ["title" => "Sustainability Reports 1", "date" => "16 September 2022", "file" => asset("pdf/contoh.pdf")],
                    ["title" => "Sustainability Reports 2", "date" => "17 September 2022", "file" => asset("pdf/contoh.pdf")],
                    ["title" => "Sustainability Reports 3", "date" => "18 September 2022", "file" => asset("pdf/contoh.pdf")],
                    ["title" => "Sustainability Reports 4", "date" => "19 September 2022", "file" => asset("pdf/contoh.pdf")],
                    ["title" => "Sustainability Reports 5", "date" => "20 September 2022", "file" => asset("pdf/contoh.pdf")],
                    ["title" => "Sustainability Reports 6", "date" => "21 September 2022", "file" => asset("pdf/contoh.pdf")],
                ],
                "presentation" => [
                    ["title" => "Corporate Presentation 1", "date" => "16 September 2022", "file" => asset("pdf/contoh.pdf")],
                    ["title" => "Corporate Presentation 2", "date" => "17 September 2022", "file" => asset("pdf/contoh.pdf")],
                    ["title" => "Corporate Presentation 3", "date" => "18 September 2022", "file" => asset("pdf/contoh.pdf")],
                    ["title" => "Corporate Presentation 4", "date" => "19 September 2022", "file" => asset("pdf/contoh.pdf")],
                    ["title" => "Corporate Presentation 5", "date" => "20 September 2022", "file" => asset("pdf/contoh.pdf")],
                    ["title" => "Corporate Presentation 6", "date" => "21 September 2022", "file" => asset("pdf/contoh.pdf")],
                ],
                "governance" => [
                    ["title" => "Corporate Governance 1", "date" => "16 September 2022", "file" => asset("pdf/contoh.pdf")],
                    ["title" => "Corporate Governance 2", "date" => "17 September 2022", "file" => asset("pdf/contoh.pdf")],
                    ["title" => "Corporate Governance 3", "date" => "18 September 2022", "file" => asset("pdf/contoh.pdf")],
                    ["title" => "Corporate Governance 4", "date" => "19 September 2022", "file" => asset("pdf/contoh.pdf")],
                    ["title" => "Corporate Governance 5", "date" => "20 September 2022", "file" => asset("pdf/contoh.pdf")],
                    ["title" => "Corporate Governance 6", "date" => "21 September 2022", "file" => asset("pdf/contoh.pdf")],
                ]
            ];
        $this->q = empty(app('request')->input('q')) ? "financial" : app('request')->input('q');
        $this->title = isset($this->title[$this->q]) ? $this->title[$this->q] : "Financial Highlights";
        $this->items = $this->all_items[$this->q];
    }

    public function render()
    {
        return view('livewire.esg')->layout('layouts.public');
    }
}
