<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $companies = [
            ['name' => 'Adobe', 'logo' => './assets/adobe.png'],
            ['name' => 'Amazon', 'logo' => './assets/amazon.png'],
            ['name' => 'Netflix', 'logo' => './assets/netflix.png'],
            ['name' => 'Notion', 'logo' => './assets/notion.png'],
            ['name' => 'Spotify', 'logo' => './assets/spotify.png'],
            ['name' => 'Zoom', 'logo' => './assets/zoom.png'],
        ];
        $stats = [
            ['name' => 'Pelajar Terdaftar', 'value' => '2000'],
            ['name' => 'Instruktur Ahli', 'value' => '70'],
            ['name' => 'Studi Proyek', 'value' => '90'],
            ['name' => 'Kursus Online', 'value' => '120'],
        ];

  $faqs = [
      [
          'question' => 'Bisakah saya mendaftar di beberapa kelas sekaligus?',
          'answer' =>
              'Tentu saja! Lo bisa mendaftar di beberapa kelas secara bersamaan dan mengaksesnya sesuai kenyamanan.',
      ],
      [
          'question' =>
              'Dukungan seperti apa yang bisa saya harapkan dari instruktur?',
          'answer' =>
              'Instruktur kami siap membantu Lo melalui forum diskusi, sesi tanya jawab langsung, dan umpan balik terhadap tugas-tugas Lo sebelumnya.',
      ],
      [
          'question' =>
              'Apakah kelas-kelas ini bersifat self-paced atau memiliki tanggal mulai dan selesai yang spesifik?',
          'answer' =>
              'Mayoritas kelas kami bersifat self-paced, memungkinkan Lo belajar sesuai jadwal yang Lo mau. Namun, beberapa kelas mungkin memiliki jadwal tertentu untuk meningkatkan interaksi antar peserta.',
      ],
      [
          'question' => 'Apakah ada prasyarat untuk kelas-kelas ini?',
          'answer' =>
              'Prasyarat bervariasi tergantung pada kelas. Beberapa kelas tingkat pemula tidak memerlukan pengetahuan khusus, sementara kelas tingkat lanjut mungkin memerlukan pengetahuan dasar tertentu.',
      ],
      [
          'question' =>
              'Bisakah saya mengunduh materi kelas untuk akses offline?',
          'answer' =>
              'Ya, sebagian besar materi kelas dapat Lo unduh untuk akses offline. Namun, beberapa konten interaktif mungkin memerlukan koneksi internet.',
      ],
  ];
  $benefits = [
      [
          'number' => '01',
          'title' => 'Jadwal Belajar Fleksibel',
          'description' =>
              'Sesuaikan waktu belajar Anda dengan komitmen dan kewajiban yang sudah ada.',
      ],
      [
          'number' => '02',
          'title' => 'Instruktur Ahli',
          'description' =>
              'Belajar dari pakar industri yang memiliki pengalaman langsung dalam desain dan pengembangan.',
      ],
      [
          'number' => '03',
          'title' => 'Beragam Pilihan Kelas',
          'description' =>
              'Jelajahi berbagai kelas desain dan pengembangan yang mencakup beragam topik menarik.',
      ],
      [
          'number' => '04',
          'title' => 'Kurikulum Terkini',
          'description' =>
              'Akses kelas dengan konten up-to-date yang mencerminkan tren dan praktik industri terbaru.',
      ],
      [
          'number' => '05',
          'title' => 'Proyek dan Tugas Praktis',
          'description' =>
              'Kembangkan portofolio yang menampilkan keterampilan dan kemampuan Anda kepada calon pemberi kerja.',
      ],
      [
          'number' => '06',
          'title' => 'Lingkungan Belajar Interaktif',
          'description' =>
              'Berkolaborasi dengan sesama pelajar, bertukar ide dan umpan balik untuk meningkatkan pemahaman Anda.',
      ],
  ];
        $courses = Course::paginate(4);
        return view('home', compact('courses', 'companies', 'stats', 'benefits', 'faqs'));
    }
}
