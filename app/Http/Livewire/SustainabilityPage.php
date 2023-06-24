<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SustainabilityPage extends Component
{
    public $all_items;
    public $titles = [
        "financial" => "Financial Highlights",
        "reports" => "Reports",
        "strategy-management" => "Strategy & Management",
        "governance" => "Corporate Governance",
    ];
    public $q;
    public $title = '';

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
            "reports" => [
                ["title" => "Sustainability Highlights 2023", "date" => "24 Juni 2023", "file" => asset("pdf/FALGA-Sustainability-Highlights.pdf")],
            ],
            "strategy-management" => [
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
        /** @var \Illuminate\Http\Request $request */
        $request = app('request');
        $this->q = empty($request->input('q')) ? "strategy-management" : $request->input('q');
        if (!array_key_exists($this->q, $this->titles)) {
            return;
        }
        $this->title = $this->titles[$this->q];
        $this->items = $this->all_items[$this->q];
    }

    public function render()
    {
        return view('livewire.sustainability')->layout('layouts.public');
    }
}
