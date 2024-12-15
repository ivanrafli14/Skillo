@extends('layouts.app')
@section('content')
  @include('partials.navbar')
  <div class="w-full pt-40">
    <div class="mx-auto flex max-w-[1080px] flex-col px-[calc(3.5vw+5px)]">
      <div class="flex w-full items-center gap-8">
        <img src="{{ $course->thumbnail_url }}" alt="Course Thumbnail"
          class="w-full max-w-[360px] rounded-lg border border-line" />
        <div class="flex flex-col gap-1.5">
          <p
            class="w-fit rounded-full border border-primary px-4 py-2 text-sm font-medium text-primary">
            {{ $course->category->name ?? 'Other' }}</p>
          <h3 class="pb-3 pt-1 text-2xl font-semibold text-secondary">
            {{ $course->name }}</h3>
          <div class="flex items-center gap-2.5">
            <img class="w-4 filter-primary" src="{{ asset('assets/user.svg') }}"
              alt="user">
            <span class="">{{$course->author}}</span>
          </div>
          <div class="flex items-center gap-2.5 text-yellow-500">
            <img class="w-4 filter-primary" src="{{ asset('assets/user.svg') }}"
              alt="user">
            <span class="">{{$course->total_testimonial}} Ulasan • {{$course->rating}} </span>
          </div>
          <div class="flex items-center gap-2.5">
            <img class="w-4 filter-primary" src="{{ asset('assets/user.svg') }}"
              alt="user">
            <span class="">{{ $course->total_duration }} menit
              Belajar</span>
          </div>
          <div class="flex items-center gap-2.5">
            <img class="w-4 filter-primary" src="{{ asset('assets/user.svg') }}"
              alt="user">
            <span class="">{{ $course->total_user }} peserta</span>

          </div>
        </div>
      </div>
      <div class="flex justify-around gap-2.5 pt-6">
        <button
          class="w-full rounded-lg border border-primary/20 bg-primary/10 py-2.5 text-primary transition">
          Tonton Video Intro
        </button>
        @guest
            <a href="{{route('pricing')}}"
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
                    class="font-medium text-secondary">{{ $item->title}}</span>
                  <span class="text-sm">{{$item->total_item}} materi . {{$item->total_duration}} menit </span>
                </div>
                <img class="w-4 transition hover:filter-primary"
                  src={{asset('assets/dropdown.png')}} alt="dropdown icon">
              </button>
              <div class="dropdown-content hidden bg-third px-6 py-3">
                <ul class="space-y-2">
                  @foreach ($item->lessons as $material)
                    <li class="flex items-center text-sm">
                      <img
                        class="mr-2 flex h-5 w-5 items-center justify-center filter-primary"
                        src="{{asset('assets/play.png') }}" alt="material icon">
                      <span class="flex-1">{{ $material->title }}</span>
                      <span>{{ $material->duration }} Menit</span>
                    </li>
                  @endforeach
                </ul>
              </div>
            </div>
          @endforeach
        </div>
        <div class="content-item hidden flex flex-col justify-center" id="testimoni">
            @if (count($course->testimonials) === 0)
              <p class="text-center">Belum ada testimoni</p>

            @else
            <div class="cardTestimoni grid grid-cols-2 gap-4">
            @foreach ($course->testimonials as $testimonial)
              <div class="rounded border border-line p-4">
                <div class="flex items-center gap-3 pb-2">
                  <img src="{{ $testimonial->user->photo_url }}"
                    alt="user" class="w-12">
                  <div class="flex flex-col">
                    <h3 class="pb-1">{{ $testimonial->user->name}}</h3>
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
                <p class="text-sm leading-relaxed">{{ $testimonial->content}}
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
@endsection
