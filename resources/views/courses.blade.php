@extends('layouts.app')
@section('content')
  @include('partials.navbar')
  <div class="mt-40 w-full">
    <div class="mx-auto max-w-[1280px] px-[calc(3.5vw+5px)]">
      <div class="flex items-center justify-end pb-4">
        <h2 class="mr-auto text-2xl font-semibold text-secondary">Pilih Kursus</h2>
        <div class="group">
          <button
            class="flex cursor-pointer items-center gap-2.5 rounded-lg border border-line bg-third px-4 py-2.5 text-sm transition hover:bg-primary/20">
            <img class="w-[18px]" src="{{ asset('assets/sort.png') }}"
              alt="sort" />
            Urutkan
          </button>
          <div
            class="absolute -translate-y-96 opacity-0 transition-opacity group-hover:translate-y-0 group-hover:opacity-100">
            <div
              class="mt-1 flex flex-col gap-3 rounded-lg border border-line bg-third px-5 py-4">
              <a href="{{ route('courses.index', ['sort' => 'newest']) }}" class="text-sm hover:text-primary">Terbaru</a>
                <a href="{{ route('courses.index', ['sort' => 'popular']) }}" class="text-sm hover:text-primary">Terpopuler</a>

            </div>
          </div>
        </div>
      </div>
      <div class="flex items-center flex-wrap gap-2 pb-6">
        <a class="activated active-category {{ request('category_id') ? '' : 'bg-primary/20 text-primary' }} cursor-pointer rounded-lg border border-line px-4 py-2.5 text-sm transition hover:bg-primary/20"
          href="{{ route('courses.index') }}">
          Semua
        </a>
        @foreach ($categories as $category)
          <a class="activated {{ request('category_id') == $category->id ? 'bg-primary/20 text-primary' : '' }} cursor-pointer rounded-lg border border-line bg-line/10 px-4 py-2.5 text-sm transition hover:bg-primary/20"
            href="{{ route('courses.index', ['category_id' => $category->id]) }}">
            {{ $category->name }}
          </a>
        @endforeach
      </div>
      <div class="container mx-auto">
        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
          @foreach ($courses as $course)
            <a href="{{ route('courses.show', ['slug' => $course->slug]) }}"
              class="flex max-w-sm flex-col justify-between overflow-hidden rounded-lg border border-line bg-white">
              <img src="{{ $course->thumbnail_url }}" alt="{{ $course->name }}"
                class="h-40 w-full object-cover" />
              <div class="flex flex-grow flex-col justify-between p-4">
                <p
                  class="w-fit rounded-full border border-primary px-2 py-1.5 text-xs text-primary">
                  {{ $course->category->name ?? 'No category' }}</p>
                <h4 class="mt-1 text-base font-medium">
                  {{ $course->name }}
                </h4>
                <ul class="mt-3 flex flex-col justify-between gap-1 text-sm">
                  <li class="flex items-center gap-2">
                    <img class="w-3 filter-primary"
                      src="{{ asset('assets/time.svg') }}" alt="time">
                    <span>{{ $course->total_duration }} menit</span>
                  </li>
                  <li class="flex items-center gap-2">
                    <img class="w-3 filter-primary"
                      src="{{ asset('assets/user.svg') }}" alt="user">
                    <span>{{ $course->total_user }} peserta</span>
                  </li>
                  <li class="flex items-center gap-2">
                    <img class="w-3 filter-primary"
                      src="{{ asset('assets/video.svg') }}" alt="video">
                    <span>{{ $course->total_video }} video</span>
                  </li>
                </ul>
              </div>
            </a>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  @include('partials.footer')
@endsection

@section('script')
  <script>
    const categoryLinks = document.querySelectorAll('.activated');
    categoryLinks.forEach(link => {
      link.addEventListener('click', (event) => {
        categoryLinks.forEach(el => el.classList.remove(
          'active-category', 'bg-primary/20', 'text-primary'));
        event.currentTarget.classList.add('active-category',
          'bg-primary/20', 'text-primary');
      });
    });
  </script>
@endsection
