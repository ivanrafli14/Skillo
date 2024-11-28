<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 10; $i++){
            DB::table('testimonials')->insert([
                'user_id' => $faker->numberBetween(1, 5),
                'course_id' => $faker->numberBetween(1, 5),
                'rating' => $faker->numberBetween(1, 5),
                'content' => $faker->paragraph(),
            ]);
        }
    }
}
