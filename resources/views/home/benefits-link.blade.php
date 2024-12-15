@php
  $benefits = [
      [
          'number' => '01',
          'title' => 'Jadwal Belajar Fleksibel',
          'description' =>
              'Sesuaikan waktu belajar Anda dengan komitmen dan kewajiban yang sudah ada.',
      ],
      [
          'number' => '02',
          'title' => 'Instruktur Ahli',
          'description' =>
              'Belajar dari pakar industri yang memiliki pengalaman langsung dalam desain dan pengembangan.',
      ],
      [
          'number' => '03',
          'title' => 'Beragam Pilihan Kelas',
          'description' =>
              'Jelajahi berbagai kelas desain dan pengembangan yang mencakup beragam topik menarik.',
      ],
      [
          'number' => '04',
          'title' => 'Kurikulum Terkini',
          'description' =>
              'Akses kelas dengan konten up-to-date yang mencerminkan tren dan praktik industri terbaru.',
      ],
      [
          'number' => '05',
          'title' => 'Proyek dan Tugas Praktis',
          'description' =>
              'Kembangkan portofolio yang menampilkan keterampilan dan kemampuan Anda kepada calon pemberi kerja.',
      ],
      [
          'number' => '06',
          'title' => 'Lingkungan Belajar Interaktif',
          'description' =>
              'Berkolaborasi dengan sesama pelajar, bertukar ide dan umpan balik untuk meningkatkan pemahaman Anda.',
      ],
  ];
@endphp

<div
  class="mx-auto flex max-w-[1280px] flex-col gap-[30px] px-[calc(3.5vw+5px)] pt-[60px]" id="benefits">
  <div class="flex flex-col">
    <h2 class="flex-grow pb-2 text-3xl font-semibold text-secondary">
      Benefits</h2>
    <div class="flex gap-[250px]">
      <p class="flex-grow leading-relaxed">
        Memilih sumber belajar yang tepat adalah keputusan penting. Skillo
        menjamin bahwa setiap pelajar akan mendapatkan berbagai benefit yang
        relevan dan bermanfaat.
      </p>
      <div class="flex items-end justify-end">
        <a href="/#benefits"
          class="text-decoration-none whitespace-nowrap rounded-lg border border-line bg-third px-[20px] py-[14px] text-center text-sm font-normal text-secondary transition ease-in-out hover:bg-primary hover:font-light hover:text-white">
          Lihat Selengkapnya
        </a>
      </div>
    </div>
  </div>
  <div class="w-full">
    <div class="grid grid-cols-[repeat(auto-fit,minmax(300px,1fr))] gap-[20px]">
      @foreach ($benefits as $benefit)
        <div
          class="flex flex-col gap-[40px] rounded-xl border border-line bg-white p-[40px]">
          <h2 class="text-right text-4xl font-bold text-secondary">
            {{ $benefit['number'] }}
          </h2>
          <div>
            <h3 class="pb-2 text-lg font-semibold text-secondary">
              {{ $benefit['title'] }}</h3>
            <p class="leading-relaxed">
              {{ $benefit['description'] }}</p>
          </div>
          <a href="/benefit"
            class="mt-auto cursor-pointer self-end rounded-lg border border-line bg-third p-[14px] transition-colors ease-in-out hover:bg-primary/20 group">
            <img src="./assets/redirect1.png" alt="redirect"
              class="w-[26px]" />
          </a>
        </div>
      @endforeach
    </div>
  </div>
</div>
