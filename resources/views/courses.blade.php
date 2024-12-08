
@extends('layouts.app')

@section('content')
  <div class="mt-[100px] w-full">
    <div class="mx-auto max-w-[1280px] px-[calc(3.5vw+5px)]">
      <div class="flex items-end justify-end pb-7">
        <h2 class="mr-auto text-2xl font-bold">Pilih Kelas</h2>
        <button
          class="ml-3 flex cursor-pointer items-center gap-2.5 rounded-lg border border-gray-300 bg-gray-100 px-5 py-3 text-sm font-medium text-slate-800 transition-colors hover:bg-blue-50">
          <img class="w-[18px]" src="{{ asset('assets/tile.png') }}"
            alt="category" />
          Tampilan
        </button>
        <button
          class="ml-3 flex cursor-pointer items-center gap-2.5 rounded-lg border border-gray-300 bg-gray-100 px-5 py-3 text-sm font-medium text-slate-800 transition-colors hover:bg-blue-50">
          <img class="w-[18px]" src="{{ asset('assets/sort.png') }}"
            alt="category" />
          Kategori
        </button>
      </div>
      <div class="container mx-auto">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
          @foreach ($courses as $course)

            <a href="{{ route('courses.show', ['id' => $course->id]) }}"
              class="max-w-sm overflow-hidden rounded-lg border border-line bg-third shadow-sm">
              <!-- Image Section -->
              <img src="{{ $course->thumbnail_url }}" alt="{{ $course->name }}"
                class="h-40 w-full object-cover" />
              <!-- Content Section -->
              <div class="p-5">
                <p class="text-sm text-neutral">{{ $course->categories[0]->name ?? 'No category' }}</p>
                <h4 class="mt-1 text-base font-semibold">
                  {{ $course->name }}
                </h4>
                <ul
                  class="mt-3 flex flex-col justify-between gap-1 text-sm text-neutral">
                  <li class="flex items-center space-x-2">
                    <img src="{{ asset('assets/time.svg') }}" alt="time">
                    <span>{{ $course->total_duration}} menit</span>
                  </li>
                  <li class="flex items-center space-x-2">
                    <img src="{{ asset('assets/user.svg') }}" alt="user">
                    <span>{{ $course->total_user }} peserta</span>
                  </li>
                  <li class="flex items-center space-x-2">
                    <img src="{{ asset('assets/video.svg') }}" alt="video">
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
@endsection
