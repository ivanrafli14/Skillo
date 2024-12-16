@php
  $testimonials = [
      [
          'text' =>
              'Skillo benar-benar membantu saya yang tidak punya latar belakang IT. Kursusnya terstruktur, dan materinya mudah dipahami. Setelah mengikuti kelas di skillo, saya merasa lebih percaya diri dalam menggapai pekerjaan impian saya. Tutor juga responsif dalam menjawab pertanyaan.',
          'imgSrc' => './assets/Andi.webp',
          'name' => 'Andi Wijaya',
      ],
      [
          'text' =>
              'Saya tertarik dengan kursus Web 5.0 dan Blockchain di Skillo. Kursus ini memberikan pemahaman yang mendalam tentang tren teknologi terbaru. Sangat bermanfaat untuk pekerjaan saya yang berhubungan dengan pengembangan web. Saya merasa lebih siap untuk tantangan baru.',
          'imgSrc' => './assets/rina.webp',
          'name' => 'Rina Siregar',
      ],
      [
          'text' =>
              'Saya ikut kelas Machine Learning di Skillo dan sangat puas dengan hasilnya. Penjelasannya detail dan menggunakan studi kasus nyata, jadi mudah untuk dipahami. Sekarang saya bisa mengaplikasikan ilmunya di proyek kerja saya. Sangat direkomendasikan untuk yang mau belajar AI.',
          'imgSrc' => './assets/fajar.webp',
          'name' => 'Fajar Sinaga',
      ],
      [
          'text' =>
              'Kursus React Native di Skillo sangat membantu dalam meningkatkan keterampilan saya. Kelasnya padat, tapi tidak terasa membingungkan. Materinya relevan dan langsung bisa diterapkan. Saya juga suka karena bisa belajar dengan fleksibel sesuai jadwal saya.',
          'imgSrc' => './assets/dewi.webp',
          'name' => 'Dewi Ruci',
      ],
  ];
@endphp

<div class="mx-auto flex max-w-[1280px] flex-col gap-5 md:gap-[30px] px-4 md:px-[calc(3.5vw+5px)] pt-8 md:pt-[60px]">
  <div class="flex flex-col">
    <h2 class="flex-grow pb-2 text-2xl md:text-3xl font-semibold text-secondary">
      Testimoni
    </h2>
    <div class="flex flex-col gap-3 md:flex-row md:gap-[250px]">
      <p class="flex-grow text-sm md:text-base leading-relaxed">
        Lihat bagaimana Skillo mengubah banyak orang. Kami senang
        mendengar kisah sukses dari para pelajar yang telah meraih pencapaian setelah
        mengikuti kelas yang kami tawarkan.
      </p>
      <div class="flex items-center md:items-end justify-center md:justify-end">
        <a href="/benefits"
          class="text-decoration-none whitespace-nowrap rounded-lg border border-line bg-third px-4 md:px-[20px] py-3 md:py-[14px] text-center text-sm text-secondary transition ease-in-out hover:bg-primary hover:font-light hover:text-white w-full md:w-auto">
          Lihat Selengkapnya
        </a>
      </div>
    </div>
  </div>

  <div class="w-full">
    <div class="flex flex-col flex-wrap gap-4 md:gap-5 md:flex-row">
      @foreach ($testimonials as $testimonial)
        <div
          class="flex flex-col items-center justify-between rounded-lg border border-line bg-white w-full md:min-w-[400px] md:flex-1">
          <p class="p-4 md:p-8 text-sm md:text-[15px] leading-loose">
            {{ $testimonial['text'] }}
          </p>
          <div
            class="flex w-full flex-wrap items-center justify-between gap-3 md:gap-4 rounded-b-lg bg-third p-4 md:p-6">
            <img class="w-[40px] md:w-[50px] rounded-md" src="{{ $testimonial['imgSrc'] }}"
              alt="Andi Wijaya">
            <h2 class="mr-auto text-sm md:text-base font-medium text-secondary">
              {{ $testimonial['name'] }}</h2>
            <a href="/testimonial"
              class="rounded-lg border w-full md:w-auto text-center border-line bg-white px-3 md:px-4 py-2 md:py-3 text-xs md:text-sm font-medium transition hover:bg-primary hover:font-normal hover:text-white">Baca
              Selengkapnya</a>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
