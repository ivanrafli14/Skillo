<div
  class="mx-auto flex max-w-[1280px] flex-col gap-5 px-4 pt-8 sm:gap-[30px] sm:px-[calc(3.5vw+5px)] sm:pt-[60px]">

  <!-- Header Section -->
  <div class="flex flex-col">
    <h2 class="flex-grow pb-2 text-2xl font-semibold text-secondary md:text-3xl">
      Kursus
    </h2>
    <div class="flex flex-col gap-3 md:flex-row md:gap-[250px]">
      <p class="flex-grow text-sm leading-relaxed md:text-base">
        Skillo menghadirkan beragam kelas online terlengkap di bidang teknologi,
        siap membantu pelajar menguasai skill terkini dan meraih peluang karier
        yang lebih baik.
      </p>
      <div class="flex items-center justify-center md:items-end md:justify-end">
        <a href="/benefits"
          class="text-decoration-none w-full whitespace-nowrap rounded-lg border border-line bg-third px-4 py-3 text-center text-sm text-secondary transition ease-in-out hover:bg-primary hover:font-light hover:text-white md:w-auto md:px-[20px] md:py-[14px]">
          Lihat Selengkapnya
        </a>
      </div>
    </div>
  </div>

  <!-- Courses Grid -->
  <div class="w-full">
    <div class="flex flex-wrap gap-4 sm:gap-5">
      @foreach ($courses as $course)
        <div
          class="flex w-full flex-col justify-between gap-3 rounded-lg border border-line bg-white p-4 sm:flex-[1_1_300px] sm:gap-4 sm:p-8 md:flex-[1_1_350px] lg:flex-[1_1_400px]">
          <img class="h-[200px] w-full rounded-lg object-cover sm:h-[275px]"
            src="{{ $course->thumbnail_url }}" alt="{{ $course['title'] }}" />

          <div class="flex flex-wrap items-center gap-2 sm:gap-2.5">
            <span
              class="rounded-lg border border-line px-3 py-1.5 text-xs sm:px-4 sm:py-2 sm:text-sm">
              {{ $course->total_video }} Video
            </span>
            <span
              class="rounded-lg border border-line px-3 py-1.5 text-xs sm:px-4 sm:py-2 sm:text-sm">
              {{ $course->total_user }} Peserta
            </span>
            <span class="ml-auto text-xs font-medium sm:text-sm">
              {{ $course->author }}
            </span>
          </div>

          <h2 class="text-base font-semibold text-secondary sm:text-lg">
            {{ $course->name }}
          </h2>

          <p class="text-sm leading-relaxed sm:text-base">
            {{ Str::limit($course->description, 150, '...') }}
          </p>

          <a href="/course-detail"
            class="flex justify-center rounded-lg border border-line bg-third px-4 py-2 text-xs font-medium transition duration-300 ease-in-out hover:bg-primary hover:font-normal hover:text-white sm:px-6 sm:py-3 sm:text-sm">
            Mulai Sekarang
          </a>
        </div>
      @endforeach
    </div>
  </div>

</div>
