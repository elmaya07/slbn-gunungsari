<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Galeri;
use App\Models\Video;
class WelcomeController extends Controller
{

   public function index(){

    $data = [
        'banner'=>Slider::all(),
      'kegiatan'=> Galeri::all(),
    'blog'=>[
        [
            "judul"=>"Pawai Hari Disabilitas",
            "deskripsi"=>"Hari Disabilitas Internasional: Merayakan Keberagaman dan Meningkatkan Kesadaran",
            "gambar"=>"pawai.png"
        ],
        [
            "judul"=>"Pentas Seni",
            "deskripsi"=>"Pentas seni sekolah adalah acara kreatif dan budaya yang menampilkan beragam talenta siswa dalam berbagai bentuk seni. Acara ini biasanya menjadi wadah ekspresi dan apresiasi terhadap seni musik, tari, teater, dan seni rupa.",
            "gambar"=>"kegiatan-12.png"
        ],
        [
            "judul"=>"Pembelajaran Hidroponik: Bertani Modern Tanpa Tanah",
            "deskripsi"=>"Hidroponik adalah metode bercocok tanam yang semakin populer karena tidak memerlukan tanah. Tanaman ditumbuhkan menggunakan larutan nutrisi yang kaya akan minera",
            "gambar"=>"hidroponik.jpeg"
        ],
    ],
    'video'=>Video::all(),
    ];
    return view('welcome')->with($data);

}
}