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
                    "title" => "Perbaikan 2 Unit Spherical Tank di Integrated Fuel Terminal Makassar",
                    "start_date" => "June 15, 2020",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Cipta Sanalida Utama",
                    "y" => "Main Contractor",
                    "z" => "PT. Pertamina",
                    "location" => "Makassar, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "2",
                    "title" => "Pembangunan Terminal LPG Pressurized Jayapura Kapasitas 2 x 1000 MT & Jetty Kapasitas 6500 DWT",
                    "start_date" => "March 26, 2019",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Cipta Sanalida Utama",
                    "y" => "Main Contractor",
                    "z" => "PT. Pertamina",
                    "location" => "Jayapura, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "3",
                    "title" => "Pembangunan SPBU COCO Rest Area Tol Trans Jawa KM 575B",
                    "start_date" => "January 30, 2019",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Trinitas Penata Tehnik",
                    "y" => "Main Contractor",
                    "z" => "PT. Pertamina",
                    "location" => "Toll Road Ngawi",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "4",
                    "title" => "Penimbunan Lahan di Terminal BBM Maumere",
                    "start_date" => "June 25, 2018",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Cipta Sanalida Utama",
                    "y" => "Main Contractor",
                    "z" => "PT. Pertamina",
                    "location" => "Maumere, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "5",
                    "title" => "Konstruksi LPG Tank Kapasitas 2 x 2500 MT & Pondasi di Terminal LPG Arun",
                    "start_date" => "August 14, 2017",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Cipta Sanalida Utama",
                    "y" => "Main Contractor",
                    "z" => "PT. Pertamina",
                    "location" => "Arun, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "6",
                    "title" => "Pembangunan 1 Unit Tanki Timbun Kap. 20.000 KL di TBBM Jakarta Group",
                    "start_date" => "October 31, 2016",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Cipta Sanalida Utama",
                    "y" => "Main Contractor",
                    "z" => "PT. Pertamina",
                    "location" => "Plumpang, Jakarta",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "7",
                    "title" => "Pembangunan Jalur Pipa Kero & LAWS di PMB TBBM Jakarta Group",
                    "start_date" => "October 4, 2016",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Trinitas Penata Tehnik",
                    "y" => "Main Contractor",
                    "z" => "PT. Pertamina",
                    "location" => "Jakarta, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "8",
                    "title" => "Relokasi Pipa Pertamina Cilacap - Bandung di Area Ramp-8 & Ramp-1",
                    "start_date" => "Mei 13, 2016",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Trinitas Penata Tehnik",
                    "y" => "Main Contractor",
                    "z" => "PT. Pertamina",
                    "location" => "Bandung, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "9",
                    "title" => "Upgrading Struktur Pipe Rack & Pembangunan Jalur Pipa Premium ",
                    "start_date" => "October 19, 2015",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Cipta Sanalida Utama",
                    "y" => "Main Contractor",
                    "z" => "PT. Pertamina",
                    "location" => "Jakarta, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "10",
                    "title" => "Elmotisasi Booster Pump di TBBM Cikampek & Terminal HSD di PMB Terminal BBM Jakarta Group",
                    "start_date" => "September 30, 2015",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Cipta Sanalida Utama",
                    "y" => "Main Contractor",
                    "z" => "PT. Pertamina",
                    "location" => "Cikampek, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "11",
                    "title" => 'Penggantian Pipa Header Pompa Produk dari Dia. 6" menjadi 12" Penggantian Produk Kap. 500 GPM untuk Penyaluran BBM & Pemasangan VSD di TBBM Tasikmalaya',
                    "start_date" => "December 24, 2013",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Trinitas Penata Tehnik",
                    "y" => "Main Contractor",
                    "z" => "PT. Pertamina",
                    "location" => "Tasikmalaya, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "12",
                    "title" => "Pembangunan Tangki Timbun Kap. 10.000 KL di TBBM Reklamasi Panjang",
                    "start_date" => "December 23, 2013",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Cipta Sanalida Utama",
                    "y" => "Main Contractor",
                    "z" => "PT. Pertamina",
                    "location" => "Lampung, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "13",
                    "title" => "Pekerjaan Before After Relokasi 10 unit Spherical Tank existing",
                    "start_date" => "Juli 1, 2013",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Trinitas Penata Tehnik",
                    "y" => "Main Contractor",
                    "z" => "PT. Wijaya Karya",
                    "location" => "Jakarta, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "14",
                    "title" => "Penanggulangan Emergency/Darurat Akibat Pelebaran Jalan di Jl. Angkatan 45",
                    "start_date" => "Maret 2013",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Trinitas Penata Tehnik",
                    "y" => "Main Contractor",
                    "z" => "PT. PGN",
                    "location" => "Palembang, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "15",
                    "title" => "Modifikasi Sistem Pipa Penerimaan di TBBM Cikampek",
                    "start_date" => "October 6, 2012",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Cipta Sanalida Utama",
                    "y" => "Main Contractor",
                    "z" => "PT. Pertamina",
                    "location" => "Cikampek, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "16",
                    "title" => "Pemasangan dan Relokasi Pipa PE Palembang",
                    "start_date" => "June 5, 2012",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Trinitas Penata Tehnik",
                    "y" => "Main Contractor",
                    "z" => "PT. PGN",
                    "location" => "Palembang, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "17",
                    "title" => "Pengadaan Material Pipe-Clamp untuk penanggulangan kebocoran pada pipa",
                    "start_date" => "2012",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Trinitas Penata Tehnik",
                    "y" => "Main Contractor",
                    "z" => "PT. Pertamina",
                    "location" => "Jakarta, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "18",
                    "title" => "Pembangunan Sarfas Pemadam Kebakaran dan Parkir Motor di PMB akibat dampak JORR di Instalasi Tanjung Priok",
                    "start_date" => "2012",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Trinitas Penata Tehnik",
                    "y" => "Main Contractor",
                    "z" => "PT. Pertamina",
                    "location" => "Jakarta, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "19",
                    "title" => "Pembangunan SPBU Jl. Brigjen Darsono, Cirebon",
                    "start_date" => "2011",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Trinitas Penata Tehnik",
                    "y" => "Main Contractor",
                    "z" => "PT. Patra Teknik",
                    "location" => "Cirebon, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "20",
                    "title" => "Pekerjaan Rehabilitasi Fasilitas Paska Kebakaran Depot LPG Filling Plant Mksr",
                    "start_date" => "February 4, 2010",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Trinitas Penata Tehnik",
                    "y" => "Main Contractor",
                    "z" => "PT. Patra Teknik",
                    "location" => "Makassar, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "21",
                    "title" => "Pemasangan Jalur Pipa Back Loading di Depot Balongan",
                    "start_date" => "December 28, 2010",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Trinitas Penata Tehnik",
                    "y" => "Main Contractor",
                    "z" => "PT. Pertamina",
                    "location" => "Balongan, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "22",
                    "title" => 'Penggantian Jalur Pipa Discharge Tangki Premium dari Pipa dia. 10" jadi 16"',
                    "start_date" => "July 21, 2010",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Trinitas Penata Tehnik",
                    "y" => "Main Contractor",
                    "z" => "PT. Pertamina",
                    "location" => "Padalarang, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "23",
                    "title" => "Pekerjaan Erection Spherical Tank Kap. 2 x 5000 M3",
                    "start_date" => "October 30, 2009",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Cipta Sanalida Utama",
                    "y" => "Main Contractor",
                    "z" => "PT. CPM",
                    "location" => "Semarang, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "24",
                    "title" => "Pekerjaan Relokasi Pipa Pertamina Pada Proyek Pembangunan Kanal Timur paket 22",
                    "start_date" => "2009",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Cipta Sanalida Utama",
                    "y" => "Main Contractor",
                    "z" => "PT. Waskita Karya",
                    "location" => "Marunda, Jakarta",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "25",
                    "title" => "Rehabilitasi Pipa Distribusi PE sepanjang 11.644 meter di lokasi Sektor 1",
                    "start_date" => "November 26, 2008",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Trinitas Penata Tehnik",
                    "y" => "Main Contractor",
                    "z" => "PT. PGN",
                    "location" => "Cirebon, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "26",
                    "title" => "Pekerjaan Erection dan Welding Spherical Tank 2 x 5000 M3 Terminal LPG Semarang",
                    "start_date" => "October 14, 2008",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Trinitas Penata Tehnik",
                    "y" => "Main Contractor",
                    "z" => "PT. Citra Panji Manunggal",
                    "location" => "Semarang, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "27",
                    "title" => "Pekerjaan Pemasangan Pipa Cabang Wil. Banten Timur (Paket 5C)",
                    "start_date" => "May 7, 2008",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Trinitas Penata Tehnik",
                    "y" => "Main Contractor",
                    "z" => "PT. PGN",
                    "location" => "Banten, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "28",
                    "title" => "Pemasangan Pipa Induk, Pipa Service dan MR/S Cluster Pulogadung Tahap II",
                    "start_date" => "March 27, 2008",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Trinitas Penata Tehnik",
                    "y" => "Main Contractor",
                    "z" => "PT. PGN",
                    "location" => "Jakarta, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "29",
                    "title" => "Pek. Pemasangan Pipa Dinas dan MR/S Industri Wil. Banten Barat (Paket 4B)",
                    "start_date" => "March 27, 2008",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Trinitas Penata Tehnik",
                    "y" => "Main Contractor",
                    "z" => "PT. PGN",
                    "location" => "Banten, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "30",
                    "title" => "Pekerjaan Penggantian Pipa Induk & Pipa Dinas PE Menteng - Cikini Raya",
                    "start_date" => "October 3, 2007",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Trinitas Penata Tehnik",
                    "y" => "Main Contractor",
                    "z" => "PT. PGN",
                    "location" => "Jakarta, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "31",
                    "title" => "Pembuatan Tangki ELPIJI Kapasitas 250 MT di LPG Filling Plant Cilacap",
                    "start_date" => "April 11, 2007",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Trinitas Penata Tehnik",
                    "y" => "Main Contractor",
                    "z" => "PT. Pertamina",
                    "location" => "Cilacap, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "32",
                    "title" => "Pembuatan 2 (Dua) Buah Tangki Kap 7.500 KL untuk Produk MFO & MDF di Plumpang - Instalasi Jakarta Group",
                    "start_date" => "December 6, 2006",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Trinitas Penata Tehnik",
                    "y" => "Main Contractor",
                    "z" => "PT. Pertamina",
                    "location" => "Plumpang, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "33",
                    "title" => "Pekerjaan Pemasangan Pipa Gas Bumi Branchline Greater Jakarta Daan Mogot - Rawa Buaya SPBG Busway (Koridor 3) Proyek Pengembangan Jaringan Pipa Distribusi Gas Bumi",
                    "start_date" => "July 11, 2006",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Trinitas Penata Tehnik",
                    "y" => "Main Contractor",
                    "z" => "PT. PGN",
                    "location" => "Jakarta, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "34",
                    "title" => "Normalisasi Jalur Pipa CB II di Tasikmalaya",
                    "start_date" => "2006",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Trinitas Penata Tehnik",
                    "y" => "Main Contractor",
                    "z" => "PT. Pertamina",
                    "location" => "Tasikmalaya, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "35",
                    "title" => "Pekerjaan Rebottoming, Replating & Peninggian Pondasi Tangki Timbun No. 30 Uk 36,5 M x 9 M di Lokasi Pertamina UPMS III - I.T.P Jakarta",
                    "start_date" => "September 24, 2004",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Trinitas Penata Tehnik",
                    "y" => "Main Contractor",
                    "z" => "PT. Pertamina",
                    "location" => "Jakarta, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "36",
                    "title" => 'Pekerjaan Pemasangan Looping Pipa Dia. 8" sepanjang 1000 M Jl. MH. Thamrin - Jl. Imam Bonjol, Tangerang',
                    "start_date" => "August 6, 2004",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Trinitas Penata Tehnik",
                    "y" => "Main Contractor",
                    "z" => "PT. PGN",
                    "location" => "Tangerang, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "37",
                    "title" => "Perbaikan sarana fasilitas Depot Nabire yg rusak akibat gempa bumi",
                    "start_date" => "2004",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Cipta Sanalida Utama",
                    "y" => "Main Contractor",
                    "z" => "PT. Pertamina",
                    "location" => "Nabire, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "38",
                    "title" => 'Pekerjaan Penggantian Jalur Pipa Dia 10" sepanjang 24 Km dari KP.157.762 s/d KP.181.705 di Pertamina UPMS III Depot Tasikmalaya',
                    "start_date" => "2004",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Cipta Sanalida Utama",
                    "y" => "Main Contractor",
                    "z" => "PT. Pertamina",
                    "location" => "Tasikmalaya, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "39",
                    "title" => 'Penggantian Jalur Pipa Dia.10" CB I dari KP 121.600 s/d Depot tasimalaya sejajar Rel KA - di ROW PT. KAI Pertamina UPMS III Depot Tasikmalaya',
                    "start_date" => "2004",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Cipta Sanalida Utama",
                    "y" => "Main Contractor",
                    "z" => "PT. Pertamina",
                    "location" => "Tasikmalaya, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "40",
                    "title" => "Pemasangan Pipa Induk Polyethylene DKI dia. 63 mm s/d dia. 180 mm sepanjang 32.000 meter",
                    "start_date" => "December 3, 2003",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Trinitas Penata Tehnik",
                    "y" => "Main Contractor",
                    "z" => "PT. PGN",
                    "location" => "Jakarta, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "41",
                    "title" => 'Pemasangan Jalur Pipa LPG Dia. 4" dari Tangki LPG UP VI Balongan ke Tangki Unit PPDN III LPG Filling Plant Balongan',
                    "start_date" => "March 27, 2000",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Trinitas Penata Tehnik",
                    "y" => "Main Contractor",
                    "z" => "PT. Pertamina",
                    "location" => "Balongan, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "42",
                    "title" => "Renovasi SPBU 31-0313 Jl. Raya Cakung Jakarta Timur - Pertamina UPMS III",
                    "start_date" => "2000",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Trinitas Penata Tehnik",
                    "y" => "Main Contractor",
                    "z" => "PT. Pertamina",
                    "location" => "Jakarta, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "43",
                    "title" => 'Pekerjaan Jalur Pipa Supply Avtur DPPU Dia 16" Soekarno - Hatta',
                    "start_date" => "1999",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Cipta Sanalida Utama",
                    "y" => "Main Contractor",
                    "z" => "PT. Pertamina",
                    "location" => "Bandara Soetta, Jakarta",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "44",
                    "title" => "Penambahan Filling Point  3 ( Tiga ) Bays untuk MFO Dan 2 ( Dua ) Bays Untuk Premium Di Terminal Transit  Tanjung  Gerem  Banten",
                    "start_date" => "1999",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Cipta Sanalida Utama",
                    "y" => "Main Contractor",
                    "z" => "PT. Pertamina",
                    "location" => "Tj. Gerem, Serang",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "45",
                    "title" => "Penambahan Filling Point 3 (Tiga) Bays untuk MFO dan 2 (Dua) Bays untuk Premium di Terminal Transit Tanjung Gerem, Banten",
                    "start_date" => "December 31, 1998",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Trinitas Penata Tehnik",
                    "y" => "Main Contractor",
                    "z" => "PT. Pertamina",
                    "location" => "Banten, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "46",
                    "title" => "Perbaikan Fasilitas SPBU di 31.0209 akibat Huru - Hara pada tgl. 13 Mei 1998 Jl. Kyai - Tapa, Jakarta Barat",
                    "start_date" => "August 31, 1998",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Trinitas Penata Tehnik",
                    "y" => "Main Contractor",
                    "z" => "PT. Pertamina",
                    "location" => "Jakarta, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "47",
                    "title" => "Pemasangan Pipa PE Sektor II & III P. 6.662 Meter - Perumnas - Karawaci",
                    "start_date" => "1998",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Trinitas Penata Tehnik",
                    "y" => "Main Contractor",
                    "z" => "Pemjadig Jakarta",
                    "location" => "Banten, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "48",
                    "title" => "Pekerjaan Pembangunan Tanki Premium 1 x 10.000 KL dan Tanki Solar Kapasitas 1 x 10.000  KL di intalasi labuan Deli Medan",
                    "start_date" => "1998",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Cipta Sanalida Utama",
                    "y" => "Main Contractor",
                    "z" => "PT. Pertamina",
                    "location" => "Medan, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "49",
                    "title" => "Pemasangan dan Penggantian Pipa PE Wilayah DTR II Sepanjang 10.000 Meter",
                    "start_date" => "August 12, 1997",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Trinitas Penata Tehnik",
                    "y" => "Main Contractor",
                    "z" => "Pemjadig Jakarta",
                    "location" => "Jakarta, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "50",
                    "title" => "Pemasangan dan Penggantian Pipa PE Wilayah DTR I Sepanjang 10.080 Meter",
                    "start_date" => "November 5, 1996",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Trinitas Penata Tehnik",
                    "y" => "Main Contractor",
                    "z" => "PT. PGN",
                    "location" => "Jakarta, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "51",
                    "title" => "Pembuatan Tanki Solar dan Kerosin 2 x 10.000 KL Depot Plumpang, Jakarta",
                    "start_date" => "1995",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Cipta Sanalida Utama",
                    "y" => "Main Contractor",
                    "z" => "PT. Pertamina",
                    "location" => "Jakarta, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "52",
                    "title" => 'Pekerjaan Pipa Baja dan katodik proteksi dia 16" panjang 3.500 M Walahar - Texmaco',
                    "start_date" => "1994",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Cipta Sanalida Utama",
                    "y" => "Main Contractor",
                    "z" => "PT. Pertamina",
                    "location" => "Bekasi, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "53",
                    "title" => 'Pemasangan Pipa Baja Termasuk Katodik Proteksi Dia 16" 4.400 M Sunter - Bunderan Kelapa Gading',
                    "start_date" => "1994",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Cipta Sanalida Utama",
                    "y" => "Main Contractor",
                    "z" => "PT. PGN",
                    "location" => "Jakarta, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "54",
                    "title" => "Pemasangan Pipa Baja dan Katodik Proteksi Muara  Karang - Pluit",
                    "start_date" => "1995",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Cipta Sanalida Utama",
                    "y" => "Main Contractor",
                    "z" => "PT. PGN",
                    "location" => "Jakarta, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "55",
                    "title" => "Pembangunan 1 unit Methmix Dispenser Kap. 5.000 Liter di DPPU ",
                    "start_date" => "February 12, 1992",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Cipta Sanalida Utama",
                    "y" => "Main Contractor",
                    "z" => "PT. Pertamina",
                    "location" => "Ujung Pandang, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "56",
                    "title" => "Pek. Pemasangan Accesories Tanki LPG 500 MT Pertamina",
                    "start_date" => "June 7, 1991",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Cipta Sanalida Utama",
                    "y" => "Main Contractor",
                    "z" => "PT. Patraindo",
                    "location" => "Makassar, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "57",
                    "title" => 'Pemasangan Pipa Gas Dia. 10" Jl. Parang Tritis - Asahi Mas',
                    "start_date" => "1991",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Cipta Sanalida Utama",
                    "y" => "Main Contractor",
                    "z" => "PT. PGN",
                    "location" => "Parang Tritis, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "58",
                    "title" => "Pek. Pemasangan (Erection) Tanki LPG 500 MT Pertamina di Ujung Pandang",
                    "start_date" => "November 22, 1989",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Cipta Sanalida Utama",
                    "y" => "Main Contractor",
                    "z" => "PT. Elnusa",
                    "location" => "Makassar, Indonesia",
                    "image" => asset("img/hero-image.jpg")
                ],
                [
                    "id" => "59",
                    "title" => "Pek. Concrete Piled Tanki LPG 500 MT Pertamina di Ujung Pandang",
                    "start_date" => "January 9, 1989",
                    "end_date" => "",
                    "category" => "Category",
                    "x" => "PT Cipta Sanalida Utama",
                    "y" => "Main Contractor",
                    "z" => "PT. Elnusa",
                    "location" => "Ujung Pandang, Indonesia",
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
