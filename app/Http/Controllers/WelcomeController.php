<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{

   public function index(){

    $data = [
      'kegiatan'=> [
        [
            "deskripsi"=>"HDI 2024 Tema Kayangan Api",
            "gambar"=>"la-1.jpeg"
        ],
        [
            "deskripsi"=>"HDI 2024 Tema Kayangan Api",
            "gambar"=>"la-2.jpeg"
        ],
        [
            "deskripsi"=>"HDI 2024 Tema Kayangan Api",
            "gambar"=>"la-4.jpeg"
        ],
        [
            "deskripsi"=>"Kunjungan oleh Pj Sekda Kabupaten Bojonegoro pada Stand Bazar HDI 2024",
            "gambar"=>"la-3.jpeg"
        ],
        [
            "deskripsi"=>"Kunjungan oleh Kabid Jawa Timur pada stand Bazar HDI 2024",
            "gambar"=>"la-5.jpeg"
        ],
        [
            "deskripsi"=>"Pelaksanaam SAS Semester Ganjil TA 2024/2025",
            "gambar"=>"la-6.jpeg"
        ],
        [
            "deskripsi"=>"Pelaksanaam SAS Semester Ganjil TA 2024/2025",
            "gambar"=>"la-6.jpeg"
        ],
        [
            "deskripsi"=>"Pelaksanaam SAS Semester Ganjil TA 2024/2025",
            "gambar"=>"la-7.jpeg"
        ],
        [
            "deskripsi"=>"Pelaksanaam SAS Semester Ganjil TA 2024/2025",
            "gambar"=>"la-8.jpeg"
        ],
        [
            "deskripsi"=>"Pelaksanaam SAS Semester Ganjil TA 2024/2025",
            "gambar"=>"la-9.jpeg"
        ],
        [
            "deskripsi"=>"Pelaksanaam SAS Semester Ganjil TA 2024/2025",
            "gambar"=>"la-10.jpeg"
        ],
        [
            "deskripsi"=>"Pelaksanaam SAS Semester Ganjil TA 2024/2025",
            "gambar"=>"la-11.jpeg"
        ], [
            "deskripsi"=>"Pelaksanaam SAS Semester Ganjil TA 2024/2025",
            "gambar"=>"la-12.jpeg"
        ], [
            "deskripsi"=>"Jumat Berkah",
            "gambar"=>"kegiatan-10.png"
        ],
        [
            "deskripsi"=>"Jumat Berkah",
            "gambar"=>"kegiatan-11.png"
        ],
        [
            "deskripsi"=>"Jumat Berkah",
            "gambar"=>"kegiatan-12.png"
        ],
        [
            "deskripsi"=>"Bengkel",
            "gambar"=>"bengkel.jpeg"
        ],
        [
            "deskripsi"=>"Ecoprint",
            "gambar"=>"ecoprint.jpeg"
        ],
        [
            "deskripsi"=>"Hidroponik",
            "gambar"=>"hidroponik.jpeg"
        ],
        [
            "deskripsi"=>"keagamaan",
            "gambar"=>"keagamaan.jpeg"
        ],
        [
            "deskripsi"=>"Kecantikan",
            "gambar"=>"kecantikan.jpeg"
        ],
        [
            "deskripsi"=>"Membatik",
            "gambar"=>"membatik.jpeg"
        ],
        [
            "deskripsi"=>"menjahit",
            "gambar"=>"menjahit.jpeg"
        ],
        [
            "deskripsi"=>"Outing class",
            "gambar"=>"outing.jpeg"
        ],
        [
            "deskripsi"=>"Seni musik",
            "gambar"=>"seni-musik.jpeg"
        ],
        [
            "deskripsi"=>"Pencak silat",
            "gambar"=>"pencak-silat.jpeg"
        ],
        [
            "deskripsi"=>"Sulak",
            "gambar"=>"sulak.jpeg"
        ],
        [
            "deskripsi"=>"Pembelajaran TIK/Komputer",
            "gambar"=>"tik.jpeg"
        ],

        [
            "deskripsi"=>"Terapi Akupresur",
            "gambar"=>"terapi-akupresure.jpeg"
        ],
        [
            "deskripsi"=>"Terapi Bina Bicara",
            "gambar"=>"terapi-bina-bicara.jpeg"
        ],
        [
            "deskripsi"=>"Terapi Okupasi",
            "gambar"=>"terapi-okupasi.jpeg"
        ],
        [
            "deskripsi"=>"Terapi Perilaku",
            "gambar"=>"terapi-perilaku.jpeg"
        ],
        [
            "deskripsi"=>"Terapi Sensorik",
            "gambar"=>"terapi-sensorik.jpeg"
        ],
        [
            "deskripsi"=>"Menari",
            "gambar"=>"menari.jpeg"
        ],
        [
            "deskripsi"=>"Olahraga",
            "gambar"=>"olahraga.jpeg"
        ],
        [
            "deskripsi"=>"Pramuka",
            "gambar"=>"pramuka.jpeg"
        ],
        [
            "deskripsi"=>"Tata Boga",
            "gambar"=>"tata-boga.jpeg"
        ],
    ],
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
    'video'=>[
        [
            "file"=>"pengimbasan.mp4",
            "type"=>"local"
        ],
        [
            "file"=>"pengimbasan-pelatihan.mp4",
            "type"=>"local"
        ],
        [
            "file"=>"pengimbasan-kombel.mp4",
            "type"=>"local"
        ],
        [
            "file"=>"video-3.mp4",
            "type"=>"local"
        ],
        [
            "file"=>"video-4.mp4",
            "type"=>"local"
        ],
        [
            "file"=>"https://www.instagram.com/p/DDtQt5mSMyI/?igsh=MWV5bGVtcnYxemt3aA==",
            "type"=>"instagram"
        ],
        [
            "file"=>"https://www.instagram.com/share/BAI56EuD8q",
            "type"=>"instagram"
        ],
        [
            "file"=>"ACLLqX7aFVE?si=1VBIfKWoPAXrGt1P",
            "type"=>"youtube"
        ],
        [
            "file"=>"7j-Lq3BCgcQ?si=tLgdoacQf9W-fMUV",
            "type"=>"youtube"
        ],
        [
            "file"=>"UW4udCiacj4?si=jCZgSY48FxU2jsci",
            "type"=>"youtube"
        ],
        ]
    ];
    return view('welcome')->with($data);

}
}