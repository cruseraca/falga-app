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

    public $all_items_count = 0;

    public $page = 1;

    public $page_count = 1;

    public function __construct()
    {
        $this->all_items = [
            "portfolio" => [
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
                [
                    "id" => "4",
                    "title" => "Aircraft Fuel Supply Main Pipeline System in Soekarno Hatta International Airport",
                    "location" => "Jakarta, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/4_Aviation_Fuel-progressive.jpeg")
                ],
                [
                    "id" => "5",
                    "title" => "Tanker Jetty of 6500 DWT Cargo Ship capacity",
                    "location" => "Jayapura, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/5_Tanker_Jetty-progressive.jpeg")
                ],
                [
                    "id" => "6",
                    "title" => "2 x 2,500 MT in Fuel Tank Storage Capacity in Arun LPG Tank Farm",
                    "location" => "Arun, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/6_Arun_Project-progressive.jpeg")
                ],
                [
                    "id" => "7",
                    "title" => "2 x 7,500 KL Marine Fuel Oil (MFO) and Marine Diesel Fuel (MSF) Storage Tank",
                    "location" => "Plumpang, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/7_MFO_Tank_2x7500-progressive.jpeg")
                ],
                [
                    "id" => "8",
                    "title" => "Pipe Rack Structures & Premium Oil Pipelines",
                    "location" => "Jakarta, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/8_Pipe_Rack-progressive.jpeg")
                ],
                [
                    "id" => "9",
                    "title" => "COCO Fuel Gas Station Trans Java Toll Road Rest Area KM 575B",
                    "location" => "Ngawi, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/9_SPBU_Trans_Jawa-progressive.jpeg")
                ],
                [
                    "id" => "10",
                    "title" => "Repair of 2 x 250 MT of LPG Spherical Storage Tank in Fuel Tank Farm",
                    "location" => "Makassar, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/10_Tangki_Makassar-progressive.jpeg")
                ],
                [
                    "id" => "11",
                    "title" => "Installation of Back-Loaded Pipelines at the Balongan Depot",
                    "location" => "Bandung, Indonesia ",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/11_Pipeline_Balongan-progressive.jpeg")
                ],
                [
                    "id" => "12",
                    "title" => "HSD Electric Motor Booster Pump in PMB Terminal Jakarta Group",
                    "location" => "Cikampek, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/12_Elmot_Booster_Pump-progressive.jpeg")
                ],
                [
                    "id" => "13",
                    "title" => "1 Unit of Fuel Tank 20,000 KL in Storage Capacity",
                    "location" => "Plumpang, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/13_Fuel_Tank-progressive.jpeg")
                ],
                [
                    "id" => "14",
                    "title" => "Landfill project in Fuel Tank Terminal",
                    "location" => "Maumere, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/14_Landfill-progressive.jpeg")
                ],
                [
                    "id" => "15",
                    "title" => "Cilacap-Bandung Pipeline Relocation",
                    "location" => "Cilacap, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/15_Pipa-progressive.jpeg")
                ],
                [
                    "id" => "16",
                    "title" => "Kerosene & LAWS pipelines in PBM TBBM Jakarta Group",
                    "location" => "Jakarta, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/16_Kerosene_Pipes-progressive.jpeg")
                ],
                [
                    "id" => "17",
                    "title" => "1 x 2,500 KL Aviation Fuel Storage Tank",
                    "location" => "Ujung Pandang, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/17_Aviation_Tank_-progressive.jpeg")
                ],
                [
                    "id" => "18",
                    "title" => "Fuel Gas Station Jl. Brigjen Darsono, Cirebon",
                    "location" => "Cirebon, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/18_SPBU_Cirebon-progressive.jpeg")
                ],
                [
                    "id" => "19",
                    "title" => "Installation of High Density Polyethylene Pipelines",
                    "location" => "Palembang, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/19_HDPE_Pipelines-progressive.jpeg")
                ],
                [
                    "id" => "20",
                    "title" => "LPG Filling Plant Depot",
                    "location" => "Makassar, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/20_LPG_Filling_Plant-progressive.jpeg")
                ],
                [
                    "id" => "21",
                    "title" => "2 x 5,000 M3 LPG Spherical Tank",
                    "location" => "Semarang, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/21_Spherical_Tank_2x5000-progressive.jpeg")
                ],
                [
                    "id" => "22",
                    "title" => "Emergency Pipe Repair due to road widening project in Jl. Angkatan 45",
                    "location" => "Palembang, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/22_Pipe_Repair-progressive.jpeg")
                ],
                [
                    "id" => "23",
                    "title" => "Pipeline Relocation Project",
                    "location" => "Marunda, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/23_Pipe_Relocation-progressive.jpeg")
                ],
                [
                    "id" => "24",
                    "title" => "Piping System Modification for Cikampek Fuel Tank Farm",
                    "location" => "Cikampek, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/24_Pipe_Modification-progressive.jpeg")
                ],
                [
                    "id" => "25",
                    "title" => "Fire Extinguisher Structure and Facility",
                    "location" => "Jakarta, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/25_Fire_Extinguisher_Structure-progressive.jpeg")
                ],
                [
                    "id" => "26",
                    "title" => "Polyethylene Pipelines Distribution System 11.6 km",
                    "location" => "Cirebon, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/26_Cirebon-progressive.jpeg")
                ],
                [
                    "id" => "27",
                    "title" => "Replacement Work of Main Pipeline Systems in Cikini Raya",
                    "location" => "Jakarta, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/27_Replacement_Work-progressive.jpeg")
                ],
                [
                    "id" => "28",
                    "title" => "Pump Header Pipe and Variable Speed Diesel (VSD) Installation",
                    "location" => "Tasikmalaya, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/28_Variable_Speed_Drive-progressive.jpeg")
                ],
                [
                    "id" => "29",
                    "title" => "Pipelines & Piping Systems at Depot",
                    "location" => "Balongan, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/29_Piping-progressive.jpeg")
                ],
                [
                    "id" => "30",
                    "title" => "LPG Retester Plant in Muara Enim",
                    "location" => "Muara Enim, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/30_LPG_Retester_Muara_Enim-progressive.jpeg")
                ],
                [
                    "id" => "31",
                    "title" => "1 x 250 MT LPG Storage Tank at Cilacap LPG Filling Plant",
                    "location" => "Cilacap, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/31_Tangki_Bola_1x250-progressive.jpeg")
                ],
                [
                    "id" => "32",
                    "title" => "Main Pipe, Service Pipe and MR/S Cluster Pulogadung Stage II",
                    "location" => "Jakarta, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/32_Pipa_Pulo-progressive.jpeg")
                ],
                [
                    "id" => "33",
                    "title" => "Premium Oil Tank Discharge Pipeline Replacement",
                    "location" => "Padalarang, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/33_Pipe_Replacement-progressive.jpeg")
                ],
                [
                    "id" => "34",
                    "title" => "Pipe-Clamp Materials for leaking pipes resolution",
                    "location" => "Jakarta, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/34_Pipe_Clamp-progressive.jpeg")
                ],
                [
                    "id" => "35",
                    "title" => "2 x 5,000 Erection and Welding Spherical Tank Work M3 in LPG Terminal",
                    "location" => "Semarang, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/35_Spherical_Tank-progressive.jpeg")
                ],
                [
                    "id" => "36",
                    "title" => "Pipe Installation Work East Banten (5C Package)",
                    "location" => "Banten, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/36_Pipe_Banten-progressive.jpeg")
                ],
                [
                    "id" => "37",
                    "title" => "Pipeline Installation Work forMR/S Industries in the West Banten Region (Package 4B)",
                    "location" => "Banten, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/37_Pipe_Industrial-progressive.jpeg")
                ],
                [
                    "id" => "38",
                    "title" => "500 MT LPG Fuel Oil Tank - Ujung Pandang",
                    "location" => "Makassar, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/38_500MT_Spherical_Tank-progressive.jpeg")
                ],
                [
                    "id" => "39",
                    "title" => "Pipe Normalization CB II Tasikmalaya",
                    "location" => "Tasikmalaya, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/39_Pipe_Normalization-progressive.jpeg")
                ],
                [
                    "id" => "40",
                    "title" => "2 x 10,000 KL Diesel and Kerosene Tanks - Plumpang Depot, Jakarta",
                    "location" => "Jakarta, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/40_Kerosen_Tank-progressive.jpeg")
                ],
                [
                    "id" => "41",
                    "title" => "Installation of Steel Pipes and Cathodic Protection of Muara Karang - Pluit",
                    "location" => "Jakarta, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/41_Cathodic_Protection_Pipes-progressive.jpeg")
                ],
                [
                    "id" => "42",
                    "title" => "LPG Retester Plant in Bala Raja",
                    "location" => "Tangerang, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/43_Retester_Bala_Raja-progressive.jpeg")
                ],
                [
                    "id" => "43",
                    "title" => "Gas station Jl. Raya Cakung East Jakarta - Pertamina UPMS III",
                    "location" => "Jakarta, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/42_SPBU_Cakung-progressive.jpeg")
                ],
                [
                    "id" => "44",
                    "title" => "Natural Gas Distribution Pipeline System - Daan Mogot Rawa Buaya SPBG Busway",
                    "location" => "Jakarta, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/44_Natural_Gas_Pipe_Distribution-progressive.jpeg")
                ],
                [
                    "id" => "45",
                    "title" => "Rebottoming, Replating & Elevating Stockpile Tank Foundation (UPMS III)",
                    "location" => "Jakarta, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/45_Tangki-progressive.jpeg")
                ],
                [
                    "id" => "46",
                    "title" => "Piping Expansion Loops Installation - Jl. MH Thamrin",
                    "location" => "Tangerang, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/46_Pipe_Loop-progressive.jpeg")
                ],
                [
                    "id" => "47",
                    "title" => "Nabire Depot Facilities (Ports, Tanks and Pipelines)",
                    "location" => "Nabire, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/47_Nabire_Depot-progressive.jpeg")
                ],
                [
                    "id" => "48",
                    "title" => "24-km Pipeline Installation UPMS III Depot Tasikmalaya",
                    "location" => "Tasikmalaya, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/48_24_km_Pipe-progressive.jpeg")
                ],
                [
                    "id" => "49",
                    "title" => "32-km DKI Polyethylene Main Pipeline installation",
                    "location" => "Jakarta, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/49_Polythene_Pipelines-progressive.jpeg")
                ],
                [
                    "id" => "50",
                    "title" => "MFO & Premium Oil Filling Point - Tanjung Gerem Terminal",
                    "location" => "Banten, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/50_FILLING_POINTS_BAYS-progressive.jpeg")
                ],
                [
                    "id" => "51",
                    "title" => "Pipeline Replacement of Tasikmalaya Depot - Indonesian Railways Company",
                    "location" => "Tasikmalaya, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/51_Pipeline_Replacement_Depot-progressive.jpeg")
                ],
                [
                    "id" => "52",
                    "title" => "3.5-km Steel Pipework and cathodic protection",
                    "location" => "Bekasi, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/52_Steel_Pipes-progressive.jpeg")
                ],
                [
                    "id" => "53",
                    "title" => "Gas station West Jakarta",
                    "location" => "Jakarta, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/53_SPBU_Grogol-progressive.jpeg")
                ],
                [
                    "id" => "54",
                    "title" => "6.3-km Installation of PE Pipe Sector II & III (Perumnas - Karawaci)",
                    "location" => "Banten, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/54_Polyethylene_Pipelines-progressive.jpeg")
                ],
                [
                    "id" => "55",
                    "title" => "2 x 10,000 KL Oil Fuel and Diesel Tank Construction - Deli Medan",
                    "location" => "Medan, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/55_2_Tangki_BBM_2x10000-progressive.jpeg")
                ],
                [
                    "id" => "56",
                    "title" => "10-km PE Piping System Installation DTR II Area",
                    "location" => "Jakarta, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/56_Pipe_DTR_II-progressive.jpeg")
                ],
                [
                    "id" => "57",
                    "title" => "10.08-km PE Piping System Installation DTR I Area",
                    "location" => "Jakarta, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/57_DTR_I_Pipa-progressive.jpeg")
                ],
                [
                    "id" => "58",
                    "title" => "LPG Retester Plant in Ponorogo",
                    "location" => "Ponorogo, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/58_LPG_Retester_Ponorogo-progressive.jpeg")
                ],
                [
                    "id" => "59",
                    "title" => "4.4-km Steel Pipes and Cathodic Protection Installation (Sunter - Kelapa Gading)",
                    "location" => "Jakarta, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/59_Steel_Pipe_KG-progressive.jpeg")
                ],
                [
                    "id" => "60",
                    "title" => "Installation of Gas Piping System Jl. Parang Tritis - Asahi Mas",
                    "location" => "Yogyakarta, Indonesia",
                    "category" => "Category",
                    "image" => mix("img/projects-portfolio/60_Pipa_Yogyakarta-progressive.jpeg")
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
                    "image" => mix("img/hero-image.jpg")
                ],
                [
                    "title" => "volutpat ac tincidunt vitae",
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum facilisis leo vel fringilla est.",
                    "image" => mix("img/hero-image.jpg")
                ],
                [
                    "title" => "varius quam quisque id",
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Diam in arcu cursus euismod quis viverra nibh cras pulvinar.",
                    "image" => mix("img/hero-image.jpg")
                ],
                [
                    "title" => "lacus sed viverra tellus",
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eget est lorem ipsum dolor sit amet consectetur.",
                    "image" => mix("img/hero-image.jpg")
                ],
            ],
        ];
        $this->q = empty(app('request')->input('q')) ? "portfolio" : app('request')->input('q');
        $this->title = $this->titles[$this->q];
        $this->items = $this->all_items[$this->q];
        $this->all_items_count = count($this->items);
        if (!empty(app('request')->input('page')) && intval(app('request')->input('page'))) {
            $this->page = intval(app('request')->input('page'));
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
