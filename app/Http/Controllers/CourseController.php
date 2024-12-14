<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function index(){
        $courses = Course::all();
        return view('courses', compact('courses'));
    }

    public function syllabus(){
      $syllabus = [
          [
              'title' => 'Pengenalan Python dan Remote Work',
              'description' => '3 materi · 30 menit',
              'icon' => asset('assets/dropdown.png'),
              'materials' => [
                  [
                      'title' => 'Python di Remote Work',
                      'duration' => '15.00',
                      'icon' => asset('assets/play.png'),
                  ],
                  [
                      'title' => 'Pengenalan Sintaks Python',
                      'duration' => '10.00',
                      'icon' => asset('assets/play.png'),
                  ],
                  [
                      'title' => 'Instalasi dan Setup Python',
                      'duration' => '5.00',
                      'icon' => asset('assets/play.png'),
                  ],
              ],
          ],
          [
              'title' => 'Dasar-Dasar Pemrograman',
              'description' => '5 materi · 45 menit',
              'icon' => asset('assets/dropdown.png'),
              'materials' => [
                  [
                      'title' => 'Variabel dan Tipe Data',
                      'duration' => '10.00',
                      'icon' => asset('assets/play.png'),
                  ],
                  [
                      'title' => 'Operator dan Ekspresi',
                      'duration' => '8.00',
                      'icon' => asset('assets/play.png'),
                  ],
                  [
                      'title' => 'Struktur Kondisional',
                      'duration' => '12.00',
                      'icon' => asset('assets/play.png'),
                  ],
                  [
                      'title' => 'Perulangan',
                      'duration' => '10.00',
                      'icon' => asset('assets/play.png'),
                  ],
                  [
                      'title' => 'Fungsi Dasar',
                      'duration' => '5.00',
                      'icon' => asset('assets/play.png'),
                  ],
              ],
          ],
          [
              'title' => 'Pengembangan Aplikasi Sederhana',
              'description' => '4 materi · 50 menit',
              'icon' => asset('assets/dropdown.png'),
              'materials' => [
                  [
                      'title' => 'Membuat Program Kalkulator',
                      'duration' => '20.00',
                      'icon' => asset('assets/play.png'),
                  ],
                  [
                      'title' => 'Membaca dan Menulis File',
                      'duration' => '15.00',
                      'icon' => asset('assets/play.png'),
                  ],
                  [
                      'title' => 'Penggunaan Library Eksternal',
                      'duration' => '10.00',
                      'icon' => asset('assets/play.png'),
                  ],
                  [
                      'title' => 'Debugging dan Testing',
                      'duration' => '5.00',
                      'icon' => asset('assets/play.png'),
                  ],
              ],
          ],
      ];
      return view('classroom', compact('syllabus'));
    }

    public function show($id){
        $course = Course::find($id);
        return view('course-detail', compact('course'));
    }
}
