@php
  $cards = [
      [
          'title' => 'Golang 101: Cara Termudah Untuk Mulai Bagi Pemula',
          'category' => 'Backend',
          'time' => '12 jam',
          'users' => '53.258 peserta',
          'videos' => '24 video',
          'image' => asset('assets/go.webp'),
      ],
      [
          'title' => 'Fundamental HTML & CSS untuk Pemula',
          'category' => 'Frontend',
          'time' => '8 jam',
          'users' => '41.200 peserta',
          'videos' => '18 video',
          'image' => asset('assets/go.webp'),
      ],
      [
          'title' => 'Belajar Javascript untuk Frontend Developer',
          'category' => 'Frontend',
          'time' => '10 jam',
          'users' => '35.450 peserta',
          'videos' => '20 video',
          'image' => asset('assets/go.webp'),
      ],
      [
          'title' => 'Membangun Backend API dengan Laravel',
          'category' => 'Backend',
          'time' => '15 jam',
          'users' => '50.120 peserta',
          'videos' => '30 video',
          'image' => asset('assets/go.webp'),
      ],
      [
          'title' => 'Desain UI/UX dengan Figma untuk Pemula',
          'category' => 'UI/UX',
          'time' => '6 jam',
          'users' => '20.000 peserta',
          'videos' => '12 video',
          'image' => asset('assets/go.webp'),
      ],
      [
          'title' => 'Dasar-Dasar Python untuk Pemrograman',
          'category' => 'Backend',
          'time' => '7 jam',
          'users' => '45.600 peserta',
          'videos' => '15 video',
          'image' => asset('assets/go.webp'),
      ],
      [
          'title' => 'React.js: Library Populer untuk Frontend',
          'category' => 'Frontend',
          'time' => '11 jam',
          'users' => '32.500 peserta',
          'videos' => '22 video',
          'image' => asset('assets/go.webp'),
      ],
      [
          'title' => 'Belajar Database dengan MySQL',
          'category' => 'Database',
          'time' => '9 jam',
          'users' => '39.800 peserta',
          'videos' => '25 video',
          'image' => asset('assets/go.webp'),
      ],
  ];
@endphp

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
          @foreach ($cards as $card)
            <div
              class="max-w-sm overflow-hidden rounded-lg border border-line bg-third shadow-sm">
              <!-- Image Section -->
              <img src="{{ $card['image'] }}" alt="{{ $card['title'] }}"
                class="h-40 w-full object-cover" />
              <!-- Content Section -->
              <div class="p-5">
                <p class="text-sm text-neutral">{{ $card['category'] }}</p>
                <h4 class="mt-1 text-base font-semibold">
                  {{ $card['title'] }}
                </h4>
                <ul
                  class="mt-3 flex flex-col justify-between gap-1 text-sm text-neutral">
                  <li class="flex items-center space-x-2">
                    <img src="{{ asset('assets/time.svg') }}" alt="time">
                    <span>{{ $card['time'] }}</span>
                  </li>
                  <li class="flex items-center space-x-2">
                    <img src="{{ asset('assets/user.svg') }}" alt="user">
                    <span>{{ $card['users'] }}</span>
                  </li>
                  <li class="flex items-center space-x-2">
                    <img src="{{ asset('assets/video.svg') }}" alt="video">
                    <span>{{ $card['videos'] }}</span>
                  </li>
                </ul>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
@endsection
