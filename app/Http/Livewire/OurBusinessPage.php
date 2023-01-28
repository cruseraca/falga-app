<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OurBusinessPage extends Component
{
    public $items = [];
    public function __construct()
    {
        $this->items = [
            [
                "id" => "1",
                "title" => "2 x 1000 MT LPG Pressurized Tank Farm",
                "location" => "Jayapura, Indonesia",
                "category" => "Category",
                "image" => mix("img/projects-portfolio/1_LPG_Tank-progressive.jpeg")
            ],
            [
                "id" => "2",
                "title" => "1 Unit of Fuel Tank 10,000 KL in TBBM Reklamasi Panjang",
                "location" => "Lampung, Indonesia",
                "category" => "Category",
                "image" => mix("img/projects-portfolio/2_Tangki_TBBM-progressive.jpeg")
            ],
            [
                "id" => "3",
                "title" => "Electric Motor Booster Pump in TBBM Cikampek",
                "location" => "Cikampek, Indonesia",
                "category" => "Category",
                "image" => mix("img/projects-portfolio/3_Electric_Motor-progressive.jpeg")
            ],
        ];
    }
    public function render()
    {
        return view('livewire.our-business-page')->layout('layouts.public');
    }
}
