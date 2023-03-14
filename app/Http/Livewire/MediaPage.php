<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MediaPage extends Component
{
    public $all_items;
    public $titles = [
        "news" => "News",
        "blog" => "Blog",
        "video" => "Videos",
    ];
    public $q;
    public $qs = [
        "news",
        "blog",
        "video",
    ];
    public $title;

    public $items = [];

    public $all_items_count = 0;

    public $page = 1;

    public $page_count = 1;

    public $count = 6;

    public function __construct()
    {
        $this->all_items = [
            "news" => [
                [
                    "title" => "FALGA Group Supports Elementary School Education in Jayapura",
                    "description" => "PT. Favor Alpha Omega (FALGA) Group through the GNOTA Foundation has helped 100 foster children, built school facilities and infrastructure and built clean water wells to support student learning activities at SD INPRESS Kuipons Jayapura.",
                    "image" => mix("img/media-and-information/news/falga-gnota.jpg"),
                    "url" => "http://www.gn-ota.or.id/en/falga-group-supports-elementary-school-education-in-jayapura/",
                ],
            ],
            "blog" => [
                [
                    "title" => "Blog 1",
                    "description" => "Media & Information",
                    "image" => mix("img/hero-image.jpg")
                ],
                [
                    "title" => "Blog 2",
                    "description" => "Media & Information",
                    "image" => mix("img/hero-image.jpg")
                ],
                [
                    "title" => "Blog 3",
                    "description" => "Media & Information",
                    "image" => mix("img/hero-image.jpg")
                ],
                [
                    "title" => "Blog 4",
                    "description" => "Media & Information",
                    "image" => mix("img/hero-image.jpg")
                ],
            ],
            "video" => [
                [
                    "title" => "Commissioning Gas in LPG Pressurized Terminal Jayapura 2x1000 MT Pertamina",
                    "description" => "1st LPG Terminal in Papua.\nCommissioning Gas In - LPG Pressurized Terminal in Jayapura 2x1000 MT & Jetty 6500 DWT.",
                    "image" => mix("img/hero-image.jpg"),
                    "video_id" => "ThpRlt9o2_0"
                ],
                [
                    "title" => "Prior to Commissioning LPG Terminal (Farm) Jayapura 2x1000 MT Pertamina",
                    "description" => "1st LPG Terminal in Papua.\nPrior to Commissioning - LPG Pressurized Terminal in Jayapura 2x1000 MT & Jetty 6500 DWT.",
                    "image" => mix("img/hero-image.jpg"),
                    "video_id" => "4tDjvbCEdgU"
                ],
                [
                    "title" => "Simbolisasi & Kunjungan Edukasi Gabriel dari Papua",
                    "description" => "Gabriel dan Bapak Sujono datang dari Jayapura ke Jakarta dalam rangka menghadiri simbolisasi penyerahan donasi anak asuh dari OTA @falga.group di kantor Yayasan GNOTA.\nKegiatan dilanjutkan dengan kunjungan edukasi ke tempat-tempat ikonik di Jakarta seperti Monas, Kota Tua, Museum Keramik, dan lain sebagainya.\nYuk lihat keseruan Gabriel dan Bapak Sujono selama 3 hari di Jakarta.",
                    "image" => mix("img/hero-image.jpg"),
                    "video_id" => "_56KLyUQ1ms"
                ],
                [
                    "title" => "Sepatah Kata dari Bapak Ronald Edy Simamora OTA Falga Group",
                    "description" => "di acara Simboliasi Donasi Anak Asuh melalui Yayasan GNOTA.",
                    "image" => mix("img/hero-image.jpg"),
                    "video_id" => "GJoCzYYVSVs"
                ],
                [
                    "title" => "Sepatah Kata dari Bapak Tommy Hesarid Simamora OTA dari Falga Group",
                    "description" => "di acara Simboliasi Donasi Anak Asuh melalui Yayasan GNOTA.",
                    "image" => mix("img/hero-image.jpg"),
                    "video_id" => "u4kRsp7tvWk"
                ]
            ],
        ];
        /** @var \Illuminate\Http\Request $request */
        $request = app('request');
        $this->q = empty($request->input('q')) ? "news" : $request->input('q');
        if (!in_array($this->q, $this->qs)) {
            return;
        }
        $this->title = $this->titles[$this->q];
        $this->items = $this->all_items[$this->q];
        $this->all_items_count = count($this->items);
        if (!empty($request->input('page')) && intval($request->input('page'))) {
            $this->page = intval($request->input('page'));
        }
        $count = $this->q == 'video' ? 6 : 4;
        $this->count = $count;
        $offset = ($this->page - 1) * $count;
        $this->page_count = ceil($this->all_items_count / $count);
        $this->items = array_slice($this->items, $offset, $count);
    }

    public function mount()
    {
        if (!in_array($this->q, $this->qs)) {
            if ($this->q == 'portfolio') {
                return redirect()->to('/projects');
            }
        }
    }

    public function render()
    {
        return view('livewire.media-page')->layout('layouts.public');
    }
}
