<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 5; $i++){
            DB::table('course_category')->insert([
                'category_id' => $faker->numberBetween(1, 5),
                'course_id' => $faker->numberBetween(1, 5),
            ]);
    }
    }
}
