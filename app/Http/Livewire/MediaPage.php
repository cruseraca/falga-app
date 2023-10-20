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
                    "title" => "Falga Group won Asia Pacific CIO Outlook's Top Procurement Services Provider in Indonesia 2023",
                    "description" => "Falga Group won Asia Pacific CIO Outlook's annual listing of 5 companies in Indonesia that are at the forefront of providing Procurement services and impacting the industry.",
                    "image" => mix("img/media-and-information/news/apac.png"),
                    "url" => "https://www.apacciooutlook.com/falga-group"
                ],
                [
                    "title" => "CNBC Indonesia: Falga Group Ungkap Urgensi Konstruksi Berkelanjutan",
                    "description" => "Falga Group mencoba untuk berperan mendorong dan meningkatkan proyek Sustainable Construction yang berkelanjutan.",
                    "image" => mix("img/media-and-information/news/cnbc.jpeg"),
                    "url" => "https://www.cnbcindonesia.com/news/20230410202452-4-428716/falga-group-ungkap-urgensi-konstruksi-berkelanjutan",
                ],
                [
                    "title" => "CNN Indonesia: Falga Group Dorong Pembangunan dengan Konsep Konstruksi Berkelanjutan",
                    "description" => "Falga Group mendorong pembangunan dengan konsep sustainable construction agar sesuai standar ESG sekaligus membantu pencapaian Net Zero Emission (NZE) 2060.",
                    "image" => mix("img/media-and-information/news/cnn.jpg"),
                    "url" => "https://www.cnnindonesia.com/ekonomi/20230411204126-97-936435/falga-group-dorong-pembangunan-dengan-konsep-konstruksi-berkelanjutan",
                ],
                [
                    "title" => "Kompas: Falga Group Dorong Percepatan Implementasi Konstruksi Berkelanjutan di Indonesia",
                    "description" => "Sektor konstruksi menjadi salah satu penyumbang terbesar produk domestik bruto (PDB) Indonesia. Data dari Badan Pusat Statistik (BPS) menyebut, sektor",
                    "image" => mix("img/media-and-information/news/kompas.jpg"),
                    "url" => "https://biz.kompas.com/read/2023/04/14/094158328/falga-group-dorong-percepatan-implementasi-konstruksi-berkelanjutan-di-indonesia",
                ],
                [
                    "title" => "Liputan6: PSN Terminal LPG Jayapura Pertama di Papua Usung Konsep Net Zero Emission",
                    "description" => "PT Cipta Sanalida Utama telah selesai mengerjakan proyek konstruksi dengan konsep Sustainable Construction untuk Proyek Strategis Nasional (PSN) Terminal LPG Jayapura yang pertama di Papua.",
                    "image" => mix("img/media-and-information/news/liputan6.jpeg"),
                    "url" => "https://www.liputan6.com/bisnis/read/5261564/psn-terminal-lpg-jayapura-pertama-di-papua-usung-konsep-net-zero-emission",
                ],
                [
                    "title" => "Kontan: Wujudkan Nett Zero Emision 2060 Falga Group Terapkan Sustainable Construction",
                    "description" => "Sektor konstruksi menjadi salah satu penopang perekonomian nasional Indonesia, selain konsumsi dan manufaktur.",
                    "image" => mix("img/media-and-information/news/kontan.jpg"),
                    "url" => "https://industri.kontan.co.id/news/wujudkan-nett-zero-emision-2060-falga-group-terapkan-sustainable-construction",
                ],
                [
                    "title" => "Detik: Upaya Falga Group Dorong Proyek Konstruksi Berkelanjutan di RI",
                    "description" => "Sektor konstruksi memegang peranan penting dalam roda perekonomian nasional Tanah Air, di samping konsumsi dan manufaktur.",
                    "image" => mix("img/media-and-information/news/detik.jpeg"),
                    "url" => "https://finance.detik.com/infrastruktur/d-6666858/upaya-falga-group-dorong-proyek-konstruksi-berkelanjutan-di-ri",
                ],
                [
                    "title" => "IDX: Wujudkan Net Zero Emision 2060, Falga Group Terapkan Sustainable Construction",
                    "description" => "Pembangunan di Indonesia bisa sesuai dengan standar Environmental, Social and Governance (ESG) sekaligus membantu pencapaian Net Zero Emission (NZE) 2060.",
                    "image" => mix("img/media-and-information/news/idx.jpg"),
                    "url" => "https://www.idxchannel.com/economics/wujudkan-net-zero-emision-2060-falga-group-terapkan-sustainable-construction",
                ],
                [
                    "title" => "Republika: Pembangunan Konstruksi Berkelanjutan di Jakarta Terus Didorong",
                    "description" => "Falga Group terus mendorong untuk pembangunan konstruksi berkelanjutan di Jakarta.",
                    "image" => mix("img/media-and-information/news/republika.jpg"),
                    "url" => "https://news.republika.co.id/berita/rsy9fx330/pembangunan-konstruksi-berkelanjutan-di-jakarta-terus-didorong",
                ],
                [
                    "title" => "ANTARA News: Falga Group selesaikan proyek 'Sustainable Construction' di Jayapura",
                    "description" => "Falga Group Indonesia melalui anak perusahaan PT Cipta Sanalida Utama telah menyelesaikan proyek konstruksi berkonsep Sustainable Construction untuk Proyek ...",
                    "image" => mix("img/media-and-information/news/antara.jpeg"),
                    "url" => "https://www.antaranews.com/berita/3487782/falga-group-selesaikan-proyek-sustainable-construction-di-jayapura",
                ],
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
                    "title" => "Wujudkan Konstruksi Ramah Lingkungan Lewat Sustainable Construction",
                    "description" => "Indonesia terus mendorong pembangunan berkelanjutan sebagai bagian dari komitmen Net Zero Carbon 2060. Salah satu pengembangan \"Sustainability In The Construction Ecosystem\" Tanah Air dilaksanakan melalui program penyelenggaraan konstruksi nasional dalam pembangunan Ibu Kota Nusantara (IKN).",
                    "image" => mix("img/hero-image.jpg"),
                    "video_id" => "aC1KdyQyKp8"
                ],
                [
                    "title" => "Sustainable Construction, Masa Depan Konstruksi Indonesia",
                    "description" => "Istilah 'konstruksi berkelanjutan' semakin populer seiring pembangunan Ibu Kota Negara atau IKN yang melibatkan alam, teknologi dan energi terbarukan.",
                    "image" => mix("img/hero-image.jpg"),
                    "video_id" => "GTBgclI8P0Q"
                ],
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
                    "title" => "The Process of Constructing 2 Units LPG Storage Tanks @ 2500 Mt Arun, Aceh",
                    "description" => "The Process of Constructing 2 units LPG (Spherical) Tanks @ 2,500 Metric Ton @ Integrated LPG Terminal Pertamina Arun, Aceh, Indonesia.",
                    "image" => mix("img/hero-image.jpg"),
                    "video_id" => "WrOeN548XE0"
                ],
                [
                    "title" => "The Process of Building 1 Unit Oil Storage Tank @20,000 Kilo Liter",
                    "description" => "The process of building 1 unit Oil (Cylindrical) Storage Tank @ 20,000 Kilo Liter (125,796 Barrel) @ Integrated Fuel Terminal Pertamina Plumpang, Jakarta, Indonesia.",
                    "image" => mix("img/hero-image.jpg"),
                    "video_id" => "IvEypjxYV_o"
                ],
                [
                    "title" => "Simbolisasi & Kunjungan Edukasi Gabriel dari Papua",
                    "description" => "Gabriel dan Bapak Sujono datang dari Jayapura ke Jakarta dalam rangka menghadiri simbolisasi penyerahan donasi anak asuh dari OTA @falga.group di kantor Yayasan GNOTA.",
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
                ],
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
        $count = 20;
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
