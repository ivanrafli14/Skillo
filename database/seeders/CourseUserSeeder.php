<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 60; $i++){
            DB::table('course_users')->insert([
                'user_id' => $faker->numberBetween(1, 30),
                'course_id' => $faker->numberBetween(1, 6),
                'progress' => $faker->numberBetween(0, 100),

            ]);
        }
    }
}
