<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $categories = ['Front End', 'Back End', 'Full Stack', 'DevOps', 'Game Development', 'Mobile Development'];

        for($i = 0; $i < count($categories); $i++){
            DB::table('categories')->insert([
                'name' => $categories[$i],
            ]);
        }
    }
}
