<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function index(Request $request){
        $category_id = $request->query('category_id');
        $sort = $request->query('sort');

        $categories  = Category::all();

        $query = Course::query();

        if ($category_id) {
            $query->where('category_id', $category_id);
        }

        if ($sort == 'popular') {
            $query->leftJoin('course_users', 'courses.id', '=', 'course_users.course_id')
            ->select('courses.*')
            ->selectRaw('COUNT(course_users.user_id) as total_users')
            ->groupBy('courses.id')
            ->orderByDesc('total_users'); // Order by the number of users (popularity)

      // Execute the query to retrieve courses
    }
    $courses = $query->get();
        return view('courses', compact('courses', 'categories'));
    }



    public function classroom(){
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

    public function show($slug){
        $course = Course::where('slug', $slug)->first();
        return view('course-detail', compact('course'));
    }
}
