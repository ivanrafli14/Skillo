@extends('layouts.app')
@section('content')
  @include('partials.navbar')
  <div class="w-full pt-40">
    <div class="mx-auto flex max-w-[1080px] flex-col px-[calc(3.5vw+5px)]">
      <div class="flex w-full items-center gap-8">
        <img src="{{ $course->thumbnail_url }}" alt="Course Thumbnail"
          class="h-[240px] w-auto object-cover max-w-[360px] rounded-lg border border-line" />
        <div class="flex flex-col gap-1.5">
          <p
            class="w-fit rounded-full border border-primary px-4 py-1.5 text-sm font-medium text-primary">
            {{ $course->category->name ?? 'No category' }}</p>
          <h3 class="pb-3 pt-1 text-2xl font-semibold text-secondary">
            {{ $course->name }}</h3>
          <div class="flex items-center gap-2.5 text-yellow-500">
            <svg width="20" height="20" class="-ml-0.5" viewBox="0 0 24 24"
              fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M12.0009 18.26L4.94789 22.208L6.52289 14.28L0.587891 8.792L8.61489 7.84L12.0009 0.5L15.3869 7.84L23.4139 8.792L17.4789 14.28L19.0539 22.208L12.0009 18.26Z"
                fill="#F59E0B"></path>
            </svg>
            <span class="">{{$course->rating}} • {{$course->total_testimonial}} Ulasan</span>
          </div>
          <div class="flex items-center gap-2.5">
            <img class="w-4 filter-primary" src="{{ asset('assets/user.svg') }}"
              alt="user">
            <span class="">{{$course->author}}</span>
          </div>
          <div class="flex items-center gap-2.5">
            <svg width="20" height="20" class="-ml-0.5 filter-primary"
              viewBox="0 0 24 24" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M13 7C13 6.44772 12.5523 6 12 6C11.4477 6 11 6.44772 11 7V12C11 12.2652 11.1054 12.5196 11.2929 12.7071L14.7929 16.2071C15.1834 16.5976 15.8166 16.5976 16.2071 16.2071C16.5976 15.8166 16.5976 15.1834 16.2071 14.7929L13 11.5858V7Z"
                fill="#3F3F46"></path>
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM4 12C4 7.58172 7.58172 4 12 4C16.4183 4 20 7.58172 20 12C20 16.4183 16.4183 20 12 20C7.58172 20 4 16.4183 4 12Z"
                fill="#3F3F46"></path>
            </svg>
            <span class="">{{ $course->total_duration }} menit
            </span>
          </div>
          <div class="flex items-center gap-2.5">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
              viewBox="0 0 16 16" class="-ml-0.5 filter-primary" width="20"
              height="20">
              <path fill-rule="evenodd"
                d="M5 2.667a2.333 2.333 0 100 4.666 2.333 2.333 0 000-4.666zM4 5a1 1 0 112 0 1 1 0 01-2 0zM11 2.667a2.333 2.333 0 100 4.666 2.333 2.333 0 000-4.666zM10 5a1 1 0 112 0 1 1 0 01-2 0zM8 9.558a3.667 3.667 0 00-6.667 2.109V14c0 .368.299.667.667.667h12a.667.667 0 00.667-.667v-2.333A3.667 3.667 0 008 9.558zm-.667 3.775v-1.668a2.333 2.333 0 00-4.666.002v1.666h4.666zm1.334-1.668v1.668h4.666v-1.666a2.333 2.333 0 00-4.666-.002z"
                clip-rule="evenodd"></path>
            </svg>
            <span class="">{{ $course->total_user }} pelajar
              terdaftar</span>
          </div>
        </div>
      </div>
      <div class="flex justify-around gap-2.5 pt-6">
        <button id="openModalButton"
          class="w-full rounded-lg border border-primary/20 bg-primary/10 py-2.5 text-primary transition">
          Tonton Video Intro
        </button>
        @guest
            <a href="{{route('payment.pricing')}}"
            id="confirm"
            class="w-full rounded-lg bg-primary py-2 text-white hover:bg-accent text-center block">
            Enroll Kelas
            </a>
        @endguest

        @auth
            @if($course->is_enrolled == false)
            <form action="{{ route('payment.enroll', ['id' => $course->id]) }}" method="POST">
                @csrf  <!-- CSRF token for security -->
                <button type="submit"
                        id="confirm"
                        class="w-full py-2 px-4 rounded-lg bg-primary text-white hover:bg-accent text-center">
                    Enroll Kelas
                </button>
            </form>


            @else
                <a href="{{route('dashboard')}}"
                id="confirm"
                class="w-full rounded-lg bg-primary py-2 text-white hover:bg-accent text-center block">
                Masuk ke Kelas
                </a>
            @endif
        @endauth


      </div>
      <div
        class="flex justify-around border-b border-line px-5 pb-6 pt-10 text-sm">
        <button class="menu-item active font-semibold"
          data-content="deskripsi">Deskripsi</button>
        <button class="menu-item text-neutral/50"
          data-content="silabus">Silabus</button>
        <button class="menu-item text-neutral/50"
          data-content="testimoni">Testimoni</button>
      </div>
      <div id="content" class="mt-4 rounded-lg bg-white p-6">
        <div class="content-item" id="deskripsi">
          <p class="mt-2">{{ $course->description }}</p>
        </div>
        <div class="content-item hidden" id="silabus">
          {{-- @dd($course->syllabusses) --}}
          @foreach ($course->syllabusses as $item)
            <div class="dropdown border-b">
              <button
                class="dropdown-toggle flex w-full items-center justify-between px-4 py-3 text-left">
                <div class="flex flex-col gap-1.5">
                  <span
                    class="font-medium text-secondary">{{ $item->title }}</span>
                  <span class="text-sm">{{ $item->total_item }} materi .
                    {{ $item->total_duration }} menit </span>
                </div>
                <img class="w-4 transition hover:filter-primary"
                  src={{ asset('assets/dropdown.png') }} alt="dropdown icon">
              </button>
              <div class="dropdown-content hidden bg-third px-6 py-3">
                <ul class="space-y-2">
                  @foreach ($item->lessons as $material)
                    <li class="flex items-center text-sm">
                      <img
                        class="mr-2 flex h-5 w-5 items-center justify-center filter-primary"
                        src="{{ asset('assets/play.png') }}" alt="material icon">
                      <span class="flex-1">{{ $material->title }}</span>
                      <span>{{ $material->duration }} Menit</span>
                    </li>
                  @endforeach
                </ul>
              </div>
            </div>
          @endforeach
        </div>
        <div class="content-item flex hidden flex-col justify-center"
          id="testimoni">

          @if (count($course->testimonials) === 0)
            <p class="text-center">Belum ada testimoni</p>
          @else
            <div class="cardTestimoni grid grid-cols-2 gap-4">
              @foreach ($course->testimonials as $testimonial)
                <div class="rounded border border-line p-4">
                  <div class="flex items-center gap-3 pb-2">
                    <img src="{{ $testimonial->user->photo_url }}" alt="user"
                      class="w-12">
                    <div class="flex flex-col">
                      <h3 class="pb-1">{{ $testimonial->user->name }}</h3>
                      <div class="flex gap-1">
                        @for ($i = 0; $i < 5; $i++)
                          @if ($i < $testimonial->rating)
                            <img src="{{ asset('assets/star-fill.png') }}"
                              class="w-4" alt="star">
                          @else
                            <img src="{{ asset('assets/star-border.png') }}"
                              class="w-4" alt="star">
                          @endif
                        @endfor
                      </div>
                    </div>
                  </div>
                  <p class="text-sm leading-relaxed">{{ $testimonial->content }}
                  </p>
                </div>
              @endforeach
          @endif

        </div>
        <button id="showMore" style="display: none;"
          class="mt-4 w-full rounded-lg bg-primary px-4 py-2 text-white">
          Lihat Lebih Banyak
        </button>
      </div>
    </div>
  </div>
  </div>

  <section id="modal"
    class="min-h-svh fixed left-0 top-0 z-50 hidden w-full bg-black/80">
    <div class="relative mx-auto mt-12 max-w-[960px] px-[calc(3.5vw+5px)]">
      <video id="video" class="w-full rounded-lg shadow-custom"
        poster="{{ asset('assets/trailer-thumbnail.webp') }}">
        <source src="{{ asset('assets/trailer-video.mp4') }}" type="video/mp4">
      </video>
      <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
        <button id="playButton"
          class="flex h-[70px] w-[70px] cursor-pointer items-center justify-center rounded-full bg-primary transition duration-200 hover:bg-accent">
          <img src="{{ asset('assets/play.png') }}" alt="play"
            class="w-[40px]">
        </button>
        <button id="pauseButton"
          class="hidden h-[70px] w-[70px] cursor-pointer items-center justify-center rounded-full bg-primary opacity-20 transition duration-200 hover:bg-accent">
          <img src="{{ asset('assets/play-pause.png') }}" alt="pause"
            class="w-[40px]">
        </button>
      </div>
      <button id="closeModalButton"
        class="absolute -bottom-12 left-1/2 -translate-x-1/2 rounded-lg bg-red-600 px-3.5 py-2 text-white shadow-custom hover:bg-red-700">
        Tutup
      </button>
    </div>
  </section>
  @include('partials.footer')
@endsection

@section('script')
  <script>
    const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
    dropdownToggles.forEach((toggle) => {
      toggle.addEventListener('click', () => {
        const content = toggle.nextElementSibling;
        const icon = toggle.querySelector('img');
        if (!content.classList.contains('hidden')) {
          content.classList.add('hidden');
          icon.classList.remove(
            'rotate-180');
        } else {
          document.querySelectorAll('.dropdown-content').forEach((
            el) => el.classList.add('hidden'));
          document.querySelectorAll('.dropdown-toggle img').forEach(
            (img) => img.classList.remove('rotate-180'));
          content.classList.remove('hidden');
          icon.classList.add('rotate-180');
        }
      });
    });
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
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const parent = document.querySelector(".cardTestimoni");
      const children = Array.from(parent.children);
      const maxVisible = 4;
      const showMoreButton = document.getElementById("showMore");

      if (children.length > maxVisible) {
        children.slice(maxVisible).forEach((child) => {
          child.style.display = "none";
        });
        showMoreButton.style.display = "inline-block";

        showMoreButton.addEventListener("click", () => {
          children.forEach((child) => {
            child.style.display = "block";
          });
          showMoreButton.style.display = "none";
        });
      }
    });
  </script>
  <script>
    const video = document.getElementById("video");
    const playButton = document.getElementById("playButton");
    const pauseButton = document.getElementById("pauseButton");
    playButton.addEventListener("click", function() {
      video.play();
      playButton.classList.add('hidden');
      pauseButton.classList.remove('hidden');
      pauseButton.classList.add('flex');
    });
    pauseButton.addEventListener("click", function() {
      video.pause();
      pauseButton.classList.add('hidden');
      pauseButton.classList.remove('flex');
      playButton.classList.remove('hidden');
    });
  </script>
  <script>
    const modal = document.getElementById('modal');
    const openModalButton = document.getElementById('openModalButton');
    const closeModalButton = document.getElementById('closeModalButton');
    openModalButton.addEventListener('click', () => {
      modal.classList.remove('hidden');
    });
    closeModalButton.addEventListener('click', () => {
      modal.classList.add('hidden');
    });
    modal.addEventListener('click', (event) => {
      if (event.target === modal) {
        modal.classList.add('hidden');
      }
    });
  </script>
@endsection
