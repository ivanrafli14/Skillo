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
        <a href="/courses"
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
          class="flex flex-[1_1_400px] flex-col justify-between gap-4 rounded-lg border border-line bg-white p-8 object-cover">
          <img class="h-[275px] object-cover rounded-lg" src="{{ $course->thumbnail_url}}"
            alt="{{ $course['title'] }}" />
          <div class="flex flex-wrap items-center gap-2.5">
            <span class="rounded-lg border border-line px-4 py-2 text-sm">
              {{ $course->total_video }} Video </span>
            <span class="rounded-lg border border-line px-4 py-2 text-sm">
              {{ $course->total_user }} Peserta
            </span>
            <span class="ml-auto text-sm font-medium">
              {{ $course->author}}
            </span>
          </div>
          <h2 class="text-lg font-semibold text-secondary">
            {{ $course->name }}
          </h2>
          <p class="leading-relaxed">
            {{ Str::limit($course->description, 150, '...') }}
          </p>
          <a href="{{route('courses.show', ['slug' => $course->slug])}}"
            class="flex justify-center rounded-lg border border-line bg-third px-6 py-3 text-sm font-medium transition duration-300 ease-in-out hover:bg-primary hover:font-normal hover:text-white">
            Mulai Sekarang
          </a>
        </div>
      @endforeach
    </div>
  </div>

</div>
