@php
  $courses = [
      [
          'imgSrc' => './assets/course1.webp',
          'duration' => '6 Minggu',
          'level' => 'Pemula',
          'tutor' => 'Lina Wijayanti',
          'title' => 'Dasar Machine Learning dan Artificial Intelligence',
          'description' =>
              'Pelajari bagaimana algoritma machine learning bekerja, dari supervised hingga unsupervised learning, serta integrasi AI dalam aplikasi modern. Kuasai konsep neural networks, natural language processing, dan computer vision untuk penerapan dalam berbagai industri.',
      ],
      [
          'imgSrc' => './assets/course2.webp',
          'duration' => '6 Minggu',
          'level' => 'Lanjutan',
          'tutor' => 'Rian Suryadi',
          'title' => 'Web 5.0 dan Blockchain untuk Pengembangan Web',
          'description' =>
              'Siapkan diri menghadapi tantangan era Web 5.0 dengan memahami konsep Web terdesentralisasi. Pelajari integrasi teknologi blockchain, keamanan data, dan inovasi dalam pengembangan web yang siap menyongsong masa depan internet.',
      ],
      [
          'imgSrc' => './assets/course3.webp',
          'duration' => '5 Minggu',
          'level' => 'Menengah',
          'tutor' => 'Indra Maulana',
          'title' => 'Pengembangan Aplikasi Mobile dengan React Native',
          'description' =>
              'Pelajari cara membangun aplikasi mobile lintas platform menggunakan React Native. Kuasai komponen, navigasi, dan integrasi API untuk menciptakan aplikasi mobile yang responsif dan efisien.',
      ],
      [
          'imgSrc' => './assets/course4.webp',
          'duration' => '6 Minggu',
          'level' => 'Pemula',
          'tutor' => 'Rina Wijaya',
          'title' => 'Analisis dan Visualisasi Data Menggunakan Python',
          'description' =>
              'Kuasai teknik analisis dan visualisasi data menggunakan Python. Pelajari cara mengumpulkan, membersihkan, dan menganalisis big data serta membuat visualisasi yang mendukung keputusan bisnis.',
      ],
  ];
@endphp

<div
  class="mx-auto flex max-w-[1280px] flex-col gap-[30px] px-[calc(3.5vw+5px)] pt-[60px]">
  <div class="flex flex-col">
    <h2 class="flex-grow pb-2 text-3xl font-semibold text-secondary">
      Kursus</h2>
    <div class="flex gap-[250px]">
      <p class="flex-grow leading-relaxed">
        Skillo menghadirkan beragam kelas online terlengkap di bidang teknologi,
        siap membantu pelajar menguasai skill terkini dan meraih peluang karier
        yang lebih baik.
      </p>
      <div class="flex items-end justify-end">
        <a href="/benefits"
          class="text-decoration-none whitespace-nowrap rounded-lg border border-line bg-third px-[20px] py-[14px] text-center text-sm text-secondary transition ease-in-out hover:bg-primary hover:font-light hover:text-white">
          Lihat Selengkapnya
        </a>
      </div>
    </div>
  </div>
  <div class="w-full">
    <div class="flex flex-wrap gap-5">
      @foreach ($courses as $course)
        <div
          class="flex flex-[1_1_400px] flex-col justify-between gap-4 rounded-lg border border-line bg-white p-8">
          <img class="w-full rounded-lg" src="{{ $course['imgSrc'] }}"
            alt="{{ $course['title'] }}" />
          <div class="flex flex-wrap items-center gap-2.5">
            <span class="rounded-lg border border-line px-4 py-2 text-sm">
              {{ $course['duration'] }}
            </span>
            <span class="rounded-lg border border-line px-4 py-2 text-sm">
              {{ $course['level'] }}
            </span>
            <span class="ml-auto text-sm font-medium">
              {{ $course['tutor'] }}
            </span>
          </div>
          <h2 class="text-lg font-semibold text-secondary">
            {{ $course['title'] }}
          </h2>
          <p class="leading-relaxed">
            {{ Str::limit($course['description'], 150, '...') }}
          </p>
          <a href="/course-detail"
            class="flex justify-center rounded-lg border border-line bg-third px-6 py-3 text-sm font-medium transition duration-300 ease-in-out hover:bg-primary hover:font-normal hover:text-white">
            Mulai Sekarang
          </a>
        </div>
      @endforeach
    </div>
  </div>

</div>
