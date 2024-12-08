@extends('layouts.app')

@section('content')
  <div class="w-full pt-[150px]">
    <div class="mx-auto flex max-w-[1280px] flex-col px-[calc(3.5vw+5px)]">
      <div class="flex">
        <div class="shrink">
          <img src="{{$course->thumbnail_url}}" alt="Course Thumbnail"
            class="w-full max-w-[640px] rounded-lg" />
        </div>
        <div
          class="ml-8 flex max-h-[400px] w-1/2 grow flex-col justify-around gap-1">
          <div class="flex gap-2">
            <span
              class="rounded-full bg-blue-100 px-3 py-1 font-medium text-blue-600">{{$course->categories[0]->name ?? 'No catogory'}}</span>
          </div>
          <h3 class="text-2xl font-bold text-gray-800">{{$course->name}}</h3>
          <div class="flex flex-col gap-1">
            <div class="flex items-center gap-1">
              <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.186 3.647a1 1 0 00.95.69h3.832c.969 0 1.371 1.24.588 1.81l-3.103 2.254a1 1 0 00-.364 1.118l1.187 3.647c.3.921-.755 1.688-1.539 1.118l-3.103-2.254a1 1 0 00-1.175 0l-3.103 2.254c-.784.57-1.838-.197-1.539-1.118l1.187-3.647a1 1 0 00-.364-1.118L2.14 8.074c-.783-.57-.38-1.81.588-1.81h3.832a1 1 0 00.95-.69L9.049 2.927z">
                </path>
              </svg>
              <span class="text-gray-500">Nur Hazbiy Ashfan</span>
            </div>
            <div class="flex items-center gap-1 text-yellow-500">
              <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.186 3.647a1 1 0 00.95.69h3.832c.969 0 1.371 1.24.588 1.81l-3.103 2.254a1 1 0 00-.364 1.118l1.187 3.647c.3.921-.755 1.688-1.539 1.118l-3.103-2.254a1 1 0 00-1.175 0l-3.103 2.254c-.784.57-1.838-.197-1.539-1.118l1.187-3.647a1 1 0 00-.364-1.118L2.14 8.074c-.783-.57-.38-1.81.588-1.81h3.832a1 1 0 00.95-.69L9.049 2.927z">
                </path>
              </svg>
              <span class="font-medium">5.0</span>
              <span class="text-gray-500">• 35 Ulasan</span>
            </div>
            <div class="flex items-center gap-2 text-gray-600">
              <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                <path
                  d="M8 9a3 3 0 100-6 3 3 0 000 6zM12 10a3 3 0 100-6 3 3 0 000 6zM10 18a3 3 0 100-6 3 3 0 000 6z">
                </path>
              </svg>
              <span class="">{{ $course->total_duration}} menit Belajar</span>
            </div>
            <div class="flex items-center gap-2 text-gray-600">
              <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm-2.83-8.46a3 3 0 014.24-4.24l2.12 2.12a3 3 0 01-4.24 4.24l-2.12-2.12zm4.24 1.41a3 3 0 01-4.24 4.24l-2.12-2.12a3 3 0 014.24-4.24l2.12 2.12z"
                  clip-rule="evenodd"></path>
              </svg>
              <span class="">{{ $course->total_user }} peserta</span>
            </div>
          </div>
          <button
            class="rounded-lg border border-blue-500 px-6 py-2 font-medium text-blue-500 transition-colors hover:bg-blue-600">
            Tonton video intruduction
          </button>
          <button
            class="rounded-lg bg-blue-500 px-6 py-2 font-medium text-white transition-colors hover:bg-blue-600">
            Enroll Sekarang
          </button>
        </div>
      </div>
      <div class="flex justify-around border-b border-gray-300 px-5 pb-7 pt-8">
        <button class="menu-item active font-semibold text-secondary"
          data-content="deskripsi">Deskripsi</button>
        <button class="menu-item text-neutral/50"
          data-content="silabus">Silabus</button>
        <button class="menu-item text-neutral/50"
          data-content="proyek">Proyek</button>
        <button class="menu-item text-neutral/50"
          data-content="diskusi">Diskusi</button>
        <button class="menu-item text-neutral/50"
          data-content="testimoni">Testimoni</button>
      </div>
      <div id="content" class="mt-4 rounded-lg bg-white p-6 shadow-md">
        <div class="content-item" id="deskripsi">
          <h2 class="text-lg font-bold">Deskripsi</h2>
          <p class="mt-2 text-gray-700">{{$course->description}}</p>
        </div>
        <div class="content-item hidden" id="proyek">
          <h2 class="text-lg font-bold">Proyek</h2>
          <div class="dropdown-container w-full bg-white">
            <div class="dropdown border-b last:border-b-0">
              <button
                class="dropdown-toggle flex w-full items-center justify-between px-4 py-3 text-left text-gray-700 hover:bg-gray-50">
                <div class="flex flex-col">
                  <span class="font-semibold">Pengenalan Python dan Remote
                    Work</span>
                  <span class="text-gray-500">3 materi · 30 menit</span>
                </div>
                <svg class="h-5 w-5 rotate-0 transform transition-transform"
                  xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </button>
              <div class="dropdown-content hidden bg-gray-50 px-6 py-3">
                <ul class="space-y-2">
                  <li class="flex items-center">
                    <img class="mr-2 flex h-5 w-5 items-center justify-center"
                      src="{{ asset('assets/book-icon.svg') }}" alt="book">
                    <span class="flex-1">Demand Python di Dunia Remote Work</span>
                    <span class="text-gray-500">10 menit</span>
                  </li>
                  <li class="flex items-center">
                    <img class="mr-2 flex h-5 w-5 items-center justify-center"
                      src="{{ asset('assets/book-icon.svg') }}" alt="book">
                    <span class="flex-1">Python di Remote Work</span>
                    <span class="text-gray-500">15 menit</span>
                  </li>
                  <li class="flex items-center">
                    <img class="mr-2 flex h-5 w-5 items-center justify-center"
                      src="{{ asset('assets/book-icon.svg') }}" alt="book">
                    <span class="flex-1">Roadmap Efektif Menguasai Python untuk
                      Remote
                      Work</span>
                    <span class="text-gray-500">5 menit</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="dropdown border-b last:border-b-0">
              <button
                class="dropdown-toggle flex w-full items-center justify-between px-4 py-3 text-left text-gray-700 hover:bg-gray-50">
                <div class="flex flex-col">
                  <span class="font-semibold">Persiapan Python</span>
                  <span class="text-gray-500">7 materi · 1 jam 26 menit</span>
                </div>
                <svg class="h-5 w-5 rotate-0 transform transition-transform"
                  xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </button>
              <div class="dropdown-content hidden bg-gray-50 px-6 py-3">
                <ul class="space-y-2">
                  <li class="flex items-center">
                    <img class="mr-2 flex h-5 w-5 items-center justify-center"
                      src="{{ asset('assets/book-icon.svg') }}" alt="book">
                    <span class="flex-1">Materi 1</span>
                    <span class="text-gray-500">20 menit</span>
                  </li>
                  <li class="flex items-center">
                    <img class="mr-2 flex h-5 w-5 items-center justify-center"
                      src="{{ asset('assets/book-icon.svg') }}" alt="book">
                    <span class="flex-1">Materi 2</span>
                    <span class="text-gray-500">30 menit</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="content-item hidden" id="silabus">
          <h2 class="text-lg font-bold">Silabus</h2>
          <p class="mt-2 text-gray-700">{{$course->sylabus}}</p>
        </div>
        <div class="content-item hidden" id="diskusi">
          <h2 class="text-lg font-bold">Diskusi</h2>
          <p class="mt-2 text-gray-700">Forum diskusi untuk berbagi ide dan
            bertanya seputar materi kursus.</p>
        </div>
        <div class="content-item hidden" id="testimoni">
          <h2 class="text-lg font-bold">Testimoni</h2>
          <p class="mt-2 text-gray-700">Berbagai pengalaman dari peserta kursus
            sebelumnya.</p>
        </div>
      </div>

      <script>
        document.addEventListener('DOMContentLoaded', () => {
          const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
          dropdownToggles.forEach((toggle) => {
            toggle.addEventListener('click', () => {
              const content = toggle.nextElementSibling;
              const icon = toggle.querySelector('svg');
              if (!content.classList.contains('hidden')) {
                content.classList.add('hidden');
                icon.classList.remove(
                  'rotate-180');
              } else {
                document.querySelectorAll('.dropdown-content').forEach((
                  el) => el.classList.add('hidden'));
                document.querySelectorAll('.dropdown-toggle svg').forEach(
                  (svg) => svg.classList.remove('rotate-180'));
                content.classList.remove('hidden');
                icon.classList.add('rotate-180');
              }
            });
          });
        });
      </script>
      <script>
        document.addEventListener('DOMContentLoaded', () => {
          const menuItems = document.querySelectorAll('.menu-item');
          const contentItems = document.querySelectorAll('.content-item');
          menuItems.forEach((item) => {
            item.addEventListener('click', () => {
              menuItems.forEach((btn) => btn.classList.remove(
                'font-semibold', 'text-secondary'));
              menuItems.forEach((btn) => btn.classList.add(
                'text-neutral/50'));
              item.classList.add('font-semibold', 'text-secondary');
              item.classList.remove('text-neutral/50');
              contentItems.forEach((content) => content.classList.add(
                'hidden'));
              const targetId = item.getAttribute('data-content');
              document.getElementById(targetId).classList.remove(
                'hidden');
            });
          });
        });
      </script>
    </div>
  </div>
@endsection
