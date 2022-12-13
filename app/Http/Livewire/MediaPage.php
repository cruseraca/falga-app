<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MediaPage extends Component
{
    public $all_items;
    public $titles = [
        "portfolio" => "Project Portfolio",
        "blog" => "Blog",
        "video" => "Video",
    ];
    public $q;
    public $title;

    public $items = [];

    public function __construct()
    {
        $this->all_items = [
                "portfolio" => [
                    [
                        "title" => "Perbaikan 2 Unit Spherical Tank di Integrated Fuel Terminal Makassar",
                        "location" => "Makasar, Indonesia",
                        "category" => "Category",
                        "start_date" => "June, 15 2020",
                        "end_date" => "June, 15 2020",
                        "image" => asset("img/hero-image.jpg")
                    ],
                    [
                        "title" => "Pembangunan Terminal LPG Pressurized Jayapura ",
                        "location" => "Jayapura, Indonesia",
                        "category" => "Category",
                        "start_date" => "March, 26 2019",
                        "end_date" => "March, 26 2019",
                        "image" => asset("img/hero-image.jpg")
                    ],
                    [
                        "title" => "Pembangunan SPBU COCO Rest Area Tol Trans Jawa KM 575B",
                        "location" => "Ngawi, Indonesia",
                        "category" => "Category",
                        "start_date" => "Jan, 30 2019",
                        "end_date" => "Jan, 30 2019",
                        "image" => asset("img/hero-image.jpg")
                    ],
                    [
                        "title" => "Penimbunan Lahan di Terminal BBM Maumere",
                        "location" => "Maumere, Indonesia",
                        "category" => "Category",
                        "start_date" => "June, 25 2018",
                        "end_date" => "June, 25 2018",
                        "image" => asset("img/hero-image.jpg")
                    ],
                ],
                "blog" => [
                    [
                        "title" => "nunc faucibus a pellentesque",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Turpis in eu mi bibendum neque.",
                        "image" => asset("img/hero-image.jpg")
                    ],
                    [
                        "title" => "non sodales neque sodales",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Libero enim sed faucibus turpis in eu mi.",
                        "image" => asset("img/hero-image.jpg")
                    ],
                    [
                        "title" => "tellus mauris a diam",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tristique senectus et netus et malesuada fames ac turpis.",
                        "image" => asset("img/hero-image.jpg")
                    ],
                    [
                        "title" => "pretium viverra suspendisse potenti",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Luctus venenatis lectus magna fringilla.",
                        "image" => asset("img/hero-image.jpg")
                    ],
                ],
                "video" => [
                    [
                        "title" => "duis at consectetur lorem",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim praesent elementum facilisis leo vel fringilla est ullamcorper eget.",
                        "image" => asset("img/hero-image.jpg")
                    ],
                    [
                        "title" => "volutpat ac tincidunt vitae",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum facilisis leo vel fringilla est.",
                        "image" => asset("img/hero-image.jpg")
                    ],
                    [
                        "title" => "varius quam quisque id",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Diam in arcu cursus euismod quis viverra nibh cras pulvinar.",
                        "image" => asset("img/hero-image.jpg")
                    ],
                    [
                        "title" => "lacus sed viverra tellus",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eget est lorem ipsum dolor sit amet consectetur.",
                        "image" => asset("img/hero-image.jpg")
                    ],
                ],
            ];
        $this->q = empty(app('request')->input('q')) ? "portfolio" : app('request')->input('q');
        $this->title = $this->titles[$this->q];
        $this->items = $this->all_items[$this->q];
    }

    public function render()
    {
        return view('livewire.media-page')->layout('layouts.public');
    }
}
