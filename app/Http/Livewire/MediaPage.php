<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MediaPage extends Component
{
    public $all_items;
    public $titles = [
        "news" => "News",
        "blog" => "Blog",
        "video" => "Video",
    ];
    public $q;
    public $title;

    public $items = [];

    public $all_items_count = 0;

    public $page = 1;

    public $page_count = 1;

    public function __construct()
    {
        $this->all_items = [
            "news" => [
                [
                    "title" => "nunc faucibus a pellentesque",
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Turpis in eu mi bibendum neque.",
                    "image" => mix("img/hero-image.jpg")
                ],
                [
                    "title" => "non sodales neque sodales",
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Libero enim sed faucibus turpis in eu mi.",
                    "image" => mix("img/hero-image.jpg")
                ],
                [
                    "title" => "tellus mauris a diam",
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tristique senectus et netus et malesuada fames ac turpis.",
                    "image" => mix("img/hero-image.jpg")
                ],
                [
                    "title" => "pretium viverra suspendisse potenti",
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Luctus venenatis lectus magna fringilla.",
                    "image" => mix("img/hero-image.jpg")
                ],
            ],
            "blog" => [
                [
                    "title" => "nunc faucibus a pellentesque",
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Turpis in eu mi bibendum neque.",
                    "image" => mix("img/hero-image.jpg")
                ],
                [
                    "title" => "non sodales neque sodales",
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Libero enim sed faucibus turpis in eu mi.",
                    "image" => mix("img/hero-image.jpg")
                ],
                [
                    "title" => "tellus mauris a diam",
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tristique senectus et netus et malesuada fames ac turpis.",
                    "image" => mix("img/hero-image.jpg")
                ],
                [
                    "title" => "pretium viverra suspendisse potenti",
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Luctus venenatis lectus magna fringilla.",
                    "image" => mix("img/hero-image.jpg")
                ],
            ],
            "video" => [
                [
                    "title" => "duis at consectetur lorem",
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim praesent elementum facilisis leo vel fringilla est ullamcorper eget.",
                    "image" => mix("img/hero-image.jpg"),
                    "video_id" => "4tDjvbCEdgU"
                ],
                [
                    "title" => "volutpat ac tincidunt vitae",
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum facilisis leo vel fringilla est.",
                    "image" => mix("img/hero-image.jpg"),
                    "video_id" => "ThpRlt9o2_0"
                ],
            ],
        ];
        /** @var \Illuminate\Http\Request $request */
        $request = app('request');
        $this->q = empty($request->input('q')) ? "news" : $request->input('q');
        $this->title = $this->titles[$this->q];
        $this->items = $this->all_items[$this->q];
        $this->all_items_count = count($this->items);
        if (!empty($request->input('page')) && intval($request->input('page'))) {
            $this->page = intval($request->input('page'));
        }
        $count = 4;
        $offset = ($this->page - 1) * $count;
        $this->page_count = ceil($this->all_items_count / $count);
        $this->items = array_slice($this->items, $offset, $count);
    }

    public function render()
    {
        return view('livewire.media-page')->layout('layouts.public');
    }
}
