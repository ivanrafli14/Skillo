@php
  $categories = [
      ['name' => 'Semua'],
      ['name' => 'Frontend'],
      ['name' => 'Backend'],
      ['name' => 'Fullstack'],
      ['name' => 'DevOps/Infra'],
      ['name' => 'Mobile Development'],
      ['name' => 'Game'],
  ];
@endphp

@extends('layouts.app')

@section('content')
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
              <span class="text-sm hover:text-primary">Terbaru</span>
              <span class="text-sm hover:text-primary">Terpopuler</span>
            </div>
          </div>
        </div>
      </div>
      <div class="flex items-center gap-2 pb-6">
        @foreach ($categories as $category)
          <button
            class="cursor-pointer rounded-lg border border-line bg-line/10 px-4 py-2.5 text-sm transition hover:bg-primary/20">
            {{ $category['name'] }}
          </button>
        @endforeach
      </div>
      <div class="container mx-auto">
        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
          @foreach ($courses as $course)
            <a href="{{ route('courses.show', ['id' => $course->id]) }}"
              class="flex max-w-sm flex-col justify-between overflow-hidden rounded-lg border border-line bg-white">
              <img src="{{ $course->thumbnail_url }}" alt="{{ $course->name }}"
                class="h-40 w-full object-cover" />
              <div class="flex flex-grow flex-col justify-between p-4">
                <p class="text-xs">
                  {{ $course->categories[0]->name ?? 'No category' }}</p>
                <h4 class="mt-1 text-base font-medium">
                  {{ $course->name }}
                </h4>
                <ul class="mt-3 flex flex-col justify-between gap-1 text-sm">
                  <li class="flex items-center gap-2">
                    <img class="filter-primary w-3" src="{{ asset('assets/time.svg') }}"
                      alt="time">
                    <span>{{ $course->total_duration }} menit</span>
                  </li>
                  <li class="flex items-center gap-2">
                    <img class="filter-primary w-3" src="{{ asset('assets/user.svg') }}"
                      alt="user">
                    <span>{{ $course->total_user }} peserta</span>
                  </li>
                  <li class="flex items-center gap-2">
                    <img class="filter-primary w-3" src="{{ asset('assets/video.svg') }}"
                      alt="video">
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
