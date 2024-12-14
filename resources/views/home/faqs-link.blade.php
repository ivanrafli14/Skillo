@php
  $faqs = [
      [
          'question' => 'Bisakah saya mendaftar di beberapa kelas sekaligus?',
          'answer' =>
              'Tentu saja! Lo bisa mendaftar di beberapa kelas secara bersamaan dan mengaksesnya sesuai kenyamanan.',
      ],
      [
          'question' =>
              'Dukungan seperti apa yang bisa saya harapkan dari instruktur?',
          'answer' =>
              'Instruktur kami siap membantu Lo melalui forum diskusi, sesi tanya jawab langsung, dan umpan balik terhadap tugas-tugas Lo sebelumnya.',
      ],
      [
          'question' =>
              'Apakah kelas-kelas ini bersifat self-paced atau memiliki tanggal mulai dan selesai yang spesifik?',
          'answer' =>
              'Mayoritas kelas kami bersifat self-paced, memungkinkan Lo belajar sesuai jadwal yang Lo mau. Namun, beberapa kelas mungkin memiliki jadwal tertentu untuk meningkatkan interaksi antar peserta.',
      ],
      [
          'question' => 'Apakah ada prasyarat untuk kelas-kelas ini?',
          'answer' =>
              'Prasyarat bervariasi tergantung pada kelas. Beberapa kelas tingkat pemula tidak memerlukan pengetahuan khusus, sementara kelas tingkat lanjut mungkin memerlukan pengetahuan dasar tertentu.',
      ],
      [
          'question' =>
              'Bisakah saya mengunduh materi kelas untuk akses offline?',
          'answer' =>
              'Ya, sebagian besar materi kelas dapat Lo unduh untuk akses offline. Namun, beberapa konten interaktif mungkin memerlukan koneksi internet.',
      ],
  ];
@endphp

<section class="w-full pt-20">
  <div class="mx-auto max-w-[1280px] px-[calc(3.5vw+5px)]">
    <div id="faqList">
      <div
        class="flex flex-wrap gap-20 rounded-lg border border-line bg-white p-10">
        <div class="flex w-full max-w-[408px] flex-col gap-6">
          <h2 class="text-3xl font-semibold">
            Frequently Asked Questions</h2>
          <h3 class="">
            Masih punya pertanyaan? Hubungi Tim Kami melalui support@skillo.com
          </h3>
          <a class="w-fit rounded-lg border border-line bg-third px-4 py-3 text-sm font-medium transition hover:bg-primary hover:text-white hover:font-normal"
            href="/faq">
            Baca Selengkapnya
          </a>
        </div>
        <div class="faq__content flex flex-[1_0_0] flex-col items-start gap-8">
          @foreach ($faqs as $faq)
            <div
              class="faq__list flex w-full flex-col gap-6 rounded-lg border border-line bg-white p-8">
              <div
                class="faq__list-question flex w-full items-center justify-between gap-2.5 border-b border-line pb-4">
                <span
                  class="w-full font-medium leading-relaxed text-secondary">{{ $faq['question'] }}</span>
                <span
                  class="rounded bg-[#e6f3fa] transition hover:bg-primary/90">
                  <img
                    class="faq__list-expand w-7 cursor-pointer transition-transform hover:filter-secondary"
                    src="{{ asset('assets/expand.png') }}" alt="expand">
                </span>
              </div>
              <p class="faq__list-answer hidden leading-relaxed">
                {{ $faq['answer'] }}
              </p>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
<script>
  document.querySelectorAll(".faq__list-question").forEach((question) => {
    question.addEventListener("click", function() {
      const answer = this.nextElementSibling;
      if (answer.style.display === "block") {
        answer.style.display = "none";
      } else {
        answer.style.display = "block";
      }
      const img = this.querySelector(".faq__list-expand");
      img.classList.toggle("rotate-45");
    });
  });
</script>
