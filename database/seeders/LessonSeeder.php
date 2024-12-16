<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define the lessons data
        $lessons_fe = [
            1 => [
                [
                    'title' => 'Pendahuluan Browser Object Model dan Document Object Model',

                    'duration' => 10,
                ],
                [
                    'title' => 'Fungsi Browser Object Model dan Document Object Model',

                    'duration' => 20,
                ],
                [
                    'title' => 'Rangkuman Browser Object Model & Document Object Model',

                    'duration' => 30,
                ],
            ],
            2 => [
                [
                    'title' => 'Apa Itu Event',

                    'duration' => 10,
                ],
                [
                    'title' => 'Menambahkan Event Handler - Menerapkan event handler',

                    'duration' => 15,
                ],
                [
                    'title' => 'Ikhtisar Interaktif dengan Event',

                    'duration' => 35,
                ],
            ],
            3 => [
                [
                    'title' => 'Pengertian dan Fungsi Web Storage',

                    'duration' => 10,
                ],
                [
                    'title' => 'Menggunakan Local Storage - Menerapkan Local Storage',

                    'duration' => 15,
                ],
                [
                    'title' => 'Ikhtisar Penyimpanan Data dengan Web Storage',

                    'duration' => 35,
                ],
            ],
        ];

        $syllabuses = DB::table('syllabuses')->get();
        $faker = \Faker\Factory::create();
        $idx = 0;
        $url = ['https://res.cloudinary.com/dukifna6a/video/upload/v1734324861/106700-673786402_medium_jji8tn.mp4', 'https://res.cloudinary.com/dukifna6a/video/upload/v1734324858/1625-148614367_small_mnt96f.mp4', 'https://res.cloudinary.com/dukifna6a/video/upload/v1734224370/trailer-video_cqwodd.mp4'];
        foreach ($syllabuses as $syllabus) {
            if (isset($lessons_fe[$syllabus->id])) {
                foreach ($lessons_fe[$syllabus->id] as $lesson) {
                    DB::table('lessons')->insert([
                        'syllabus_id' => $syllabus->id,  // Using dynamic syllabus_id from database
                        'title' => $lesson['title'],
                        'video_url' => $url[$idx++%3],
                        'duration' => $lesson['duration'],
                        'slug' => Str::slug($lesson['title']),
                    ]);
                }
            } else {
                for($i=0; $i<3; $i++){
                    $temp = $faker->words(5, true);
                    DB::table('lessons')->insert([
                        'syllabus_id' => $syllabus->id,
                        'title' => $temp,
                        'video_url' => $url[$idx++%3],
                        'duration' => $faker->numberBetween(1, 60),
                        'slug' => Str::slug($temp),
                    ]);
                }
            }
        }

    }
}
