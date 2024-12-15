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
        $courses = [
            [
                'name' => 'Belajar Membuat Front-End Web untuk Pemula',
                'description' => 'Website sudah menjadi kebutuhan utama yang tidak bisa diabaikan. Hal ini karena website tidak hanya digunakan sebagai media informasi, tetapi bisa juga sebagai tools untuk menunjang bisnis Anda. Untuk membuat website yang memiliki fungsionalitas lebih dan interaktif, web developer perlu belajar teknik manipulasi DOM. Kelas ini membahas secara tuntas dan lengkap mengenai DOM Manipulation dan Web Storage dalam membuat website yang memiliki fungsionalitas lebih dan interaktif.',
                'video_url' => 'https://asset.cloudinary.com/dukifna6a/1cb4131805960cf09fc3a927c2dab0a4',
                'thumbnail_url' => 'https://cdn.pixabay.com/photo/2016/03/27/18/54/technology-1283624_640.jpg',
                'author' => 'Azkan Nawal',
                'category_id' => 1,
            ],

            [
                'name' => 'Menjadi Back-End Developer Expert dengan JavaScript',
                'description' => 'Seiring perkembangan bisnis, semakin banyak data yang disimpan oleh perusahaan. Data pada sistem aplikasi dikelola oleh Back-End Developer dan disimpan pada server. Sebagai Back-End Developer, pastikan service yang dibuat sudah menerapkan best practice yang ada. Dengan begitu service akan selalu berjalan dengan baik dan selalu mudah untuk dikembangkan. Materi di kelas ini membahas bagaimana cara menerapkan best practice dalam membangun Back-End Service yang testable, scalable, reliable dan agile.',
                'video_url' => 'https://asset.cloudinary.com/dukifna6a/1cb4131805960cf09fc3a927c2dab0a4',
                'thumbnail_url' => 'https://media.istockphoto.com/id/1451309715/photo/young-asian-woman-software-developers-mentor-leader-manager-talking-to-executive-team.jpg?s=612x612&w=0&k=20&c=d9-kML7EZA1j0X_yae8O6u4a0sRbxly_pgRg5xsRsdk=',
                'author' => 'Azkan Nawal',
                'category_id' => 2,
            ],
            [
                'name' => 'Belajar Membuat Aplikasi Full-Stack untuk Pemula',
                'description' => 'Full-Stack Developer adalah seorang developer yang memiliki kemampuan dalam mengembangkan aplikasi baik dari sisi client maupun server. Seorang Full-Stack Developer harus memiliki pengetahuan yang luas dalam mengembangkan aplikasi baik dari sisi client maupun server. Kelas ini membahas secara tuntas dan lengkap mengenai teknik pengembangan aplikasi Full-Stack untuk pemula.',
                'video_url' => 'https://asset.cloudinary.com/dukifna6a/1cb4131805960cf09fc3a927c2dab0a4',
                'thumbnail_url' => 'https://media.istockphoto.com/id/1451456915/photo/female-freelance-developer-coding-and-programming-coding-on-two-with-screens-with-code.jpg?s=612x612&w=0&k=20&c=BFFIc-xOwzeRyR8ui9VkFKEqqqQFBbISJzr-ADN6hS8=',
                'author' => 'Eko Edhy',
                'category_id' => 3,
            ],
            [
                'name' => 'Belajar Implementasi CI/CD',
                'description' => 'CI/CD mampu membuat proses delivery aplikasi menjadi lebih cepat dan efisien. Perusahaan berskala global seperti Amazon, Facebook, Tesla, Adobe, hingga Netflix telah mengimplementasi CI/CD dan mereka berhasil meningkatkan proses bisnis, kebahagiaan pegawai, dan pengalaman pengguna. Kini CI/CD telah menjadi praktik umum yang diterapkan baik oleh startup, nasional, hingga multinasional. Jadi, tingkatkan kemampuan Anda agar mampu memahami dan mempraktikkan CI/CD dengan belajar di kelas ini.',
                'video_url' => 'https://asset.cloudinary.com/dukifna6a/1cb4131805960cf09fc3a927c2dab0a4',
                'thumbnail_url' => 'https://media.istockphoto.com/id/1354729632/photo/devops-concept.jpg?s=612x612&w=0&k=20&c=_rQFxoNk5um1Woo73kZsyIQfo9Jgg8vLtOIcamdXd5U=',
                'author' => 'John Nicholas',
                'category_id' => 4,
            ],
            [
                'name' => 'Belajar Membuat Game dengan Unity untuk Pemula',
                'description' => 'Unity adalah sebuah platform pengembangan game yang sangat populer di kalangan developer game. Dengan menggunakan Unity, Anda bisa membuat game yang memiliki tampilan menarik dan gameplay yang seru. Kelas ini membahas secara tuntas dan lengkap mengenai teknik pengembangan game dengan Unity untuk pemula.',
                'video_url' => 'https://asset.cloudinary.com/dukifna6a/1cb4131805960cf09fc3a927c2dab0a4',
                'thumbnail_url' => 'https://media.istockphoto.com/id/1209777450/photo/communication-network-concept-gui.jpg?s=612x612&w=0&k=20&c=6rycqm_St3iDJxXDCbKqtHcm9WFPv9unfw75ln0GDv4=',
                'author' => 'John Nicholas',
                'category_id' => 5,
            ],
            [
                'name' => 'Belajar Membuat Aplikasi Flutter untuk Pemula',
                'description' => 'Flutter adalah sebuah framework open-source yang dikembangkan oleh Google untuk membangun antarmuka aplikasi Android dan iOS. Dengan menggunakan Flutter, Anda bisa membuat aplikasi yang memiliki tampilan menarik dan responsif. Kelas ini membahas secara tuntas dan lengkap mengenai teknik pengembangan aplikasi Flutter untuk pemula.',
                'video_url' => 'https://asset.cloudinary.com/dukifna6a/1cb4131805960cf09fc3a927c2dab0a4',
                'thumbnail_url' => 'https://media.istockphoto.com/id/1187869343/photo/developing-mobile-application.jpg?s=612x612&w=0&k=20&c=x0OkgjkD_j5AD2b70_3IST3UgSexxdGtRhB56Xk0aFg=',
                'author' => 'Eko Edhy',
                'category_id' => 6,
            ]
        ];

        foreach ($courses as $item) {
            DB::table('courses')->insert([
                'name' => $item['name'],
                'description' => $item['description'],
                'video_url' => $item['video_url'],
                'thumbnail_url' => $item['thumbnail_url'],
                'category_id' => $item['category_id'],
                'author' => $item['author'],
            ]);
        }

    }
}
