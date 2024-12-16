<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        $url = ['https://cdn-icons-png.flaticon.com/512/4645/4645949.png', 'https://res.cloudinary.com/dukifna6a/image/upload/v1734323043/Andi_ew4xnk.webp', 'https://res.cloudinary.com/dukifna6a/image/upload/v1734323043/rina_jpkjlb.webp', 'https://res.cloudinary.com/dukifna6a/image/upload/v1734247490/fajar_hvm7p0.webp'];
        for($i = 0; $i < 50; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'password' => Hash::make('password'),
                'photo_url' => $faker->randomElement($url),
                'subscription' => $faker->randomElement(['free', 'premium']),
            ]);
        }
    }
}
