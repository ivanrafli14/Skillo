<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                    'video_url' => 'https://asset.cloudinary.com/dukifna6a/1cb4131805960cf09fc3a927c2dab0a4',
                    'duration' => 10,
                ],
                [
                    'title' => 'Fungsi Browser Object Model dan Document Object Model',
                    'video_url' => 'https://asset.cloudinary.com/dukifna6a/1cb4131805960cf09fc3a927c2dab0a4',
                    'duration' => 20,
                ],
                [
                    'title' => 'Rangkuman Browser Object Model & Document Object Model',
                    'video_url' => 'https://asset.cloudinary.com/dukifna6a/1cb4131805960cf09fc3a927c2dab0a4',
                    'duration' => 30,
                ],
            ],
            2 => [
                [
                    'title' => 'Apa Itu Event',
                    'video_url' => 'https://asset.cloudinary.com/dukifna6a/1cb4131805960cf09fc3a927c2dab0a4',
                    'duration' => 10,
                ],
                [
                    'title' => 'Menambahkan Event Handler - Menerapkan event handler',
                    'video_url' => 'https://asset.cloudinary.com/dukifna6a/1cb4131805960cf09fc3a927c2dab0a4',
                    'duration' => 15,
                ],
                [
                    'title' => 'Ikhtisar Interaktif dengan Event',
                    'video_url' => 'https://asset.cloudinary.com/dukifna6a/1cb4131805960cf09fc3a927c2dab0a4',
                    'duration' => 35,
                ],
            ],
            3 => [
                [
                    'title' => 'Pengertian dan Fungsi Web Storage',
                    'video_url' => 'https://asset.cloudinary.com/dukifna6a/1cb4131805960cf09fc3a927c2dab0a4',
                    'duration' => 10,
                ],
                [
                    'title' => 'Menggunakan Local Storage - Menerapkan Local Storage',
                    'video_url' => 'https://asset.cloudinary.com/dukifna6a/1cb4131805960cf09fc3a927c2dab0a4',
                    'duration' => 15,
                ],
                [
                    'title' => 'Ikhtisar Penyimpanan Data dengan Web Storage',
                    'video_url' => 'https://asset.cloudinary.com/dukifna6a/1cb4131805960cf09fc3a927c2dab0a4',
                    'duration' => 35,
                ],
            ],
        ];

        $syllabuses = DB::table('syllabuses')->get();
        $faker = \Faker\Factory::create();
        foreach ($syllabuses as $syllabus) {
            if (isset($lessons_fe[$syllabus->id])) {
                foreach ($lessons_fe[$syllabus->id] as $lesson) {
                    DB::table('lessons')->insert([
                        'syllabus_id' => $syllabus->id,  // Using dynamic syllabus_id from database
                        'title' => $lesson['title'],
                        'video_url' => $lesson['video_url'],
                        'duration' => $lesson['duration'],
                    ]);
                }
            } else {
                for($i=0; $i<3; $i++){
                    DB::table('lessons')->insert([
                        'syllabus_id' => $syllabus->id,
                        'title' => $faker->words(5, true),
                        'video_url' => 'https://asset.cloudinary.com/dukifna6a/1cb4131805960cf09fc3a927c2dab0a4',
                        'duration' => $faker->numberBetween(1, 60),
                    ]);
                }
            }
        }

    }
}
