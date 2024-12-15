<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SyllabusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $syllabuses = [
            ['Browser Object Model dan Document Object Model', 'Interaktif dengan Event', 'Penyimpanan Data dengan Web Storage'],
            ['Pengenalan ke Back-End','Dasar Dasar Node.js', 'Membangun Web Service menggunakan Node.js'],
            ['Pengenalan PHP Dasar untuk Website Development', 'Pengenalan Laravel', 'Membangun Website menggunakan Laravel'],
            ['Pengenalan CI/CD', 'Continuous Integration', 'Continuous Deployment'],
            ['Pengenalan Unity', 'Unity Interface', 'Unity Physics','Unity Scripting'],
            ['Pengenalan Flutter', 'Flutter Layout', 'Flutter Navigation', 'Flutter State Management'],
        ];

        for($i=0; $i<count($syllabuses); $i++){
            for($j=0; $j<count($syllabuses[$i]); $j++){
                DB::table('syllabuses')->insert([
                    'course_id' => $i+1,
                    'title' => $syllabuses[$i][$j],
                ]);
            }
        }
    }
}
