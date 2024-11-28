<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = \Faker\Factory::create();

        for($i = 0; $i < 5; $i++){
            DB::table('courses')->insert([
                'name' => $faker->sentence(3),
                'description' => $faker->paragraph(),
                'sylabus' => $faker->sentence(10),
                'video_url' => 'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4',
                
            ]);
        }

    }
}