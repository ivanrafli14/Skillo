@extends('layouts.app')
@section('content')
  <section class="min-h-svh w-full bg-zinc-950">
    <div class="relative flex w-full flex-col md:flex-row">
      <div class="flex w-full md:w-3/4 px-[calc(2.5vw+5px)]">
        <div class="left-0 w-full overflow-hidden">
          <h2 class="bg-black/10 py-[calc(3.5vh+5px)] text-line"> {{$course->name}}
          </h2>
          <div class="relative aspect-video w-full">
            <video id="video" class="h-full w-full object-contain" controls>
                <source src="{{$video}}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div id="controls"
              class="absolute bottom-0 left-0 right-0 bg-zinc-900 p-4 text-white">
              <div class="flex items-center justify-between">
                <button id="playPauseBtn" class="focus:outline-none">
                  <svg class="h-6 w-6" fill="none" stroke="#ffffff"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="2"
                      d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                    </path>
                    <path stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                    </path>
                  </svg>
                </button>
                <div class="mx-4 flex-grow">
                  <input type="range" id="progressBar" class="w-full"
                    min="0" max="100" value="0" />
                </div>
                <div id="time" class="text-sm">
                  0:00 / 0:00
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <aside class="min-h-screen w-full md:w-1/4 bg-third">
        @foreach ($course->syllabusses as $syllabus)
          <div class="dropdown border-b">
            <button
              class="dropdown-toggle flex w-full items-center justify-between px-4 py-3 text-left">
              <div class="flex flex-col gap-1.5">
                <span class="font text-sm">{{ $syllabus->title }}</span>
              </div>
              <img class="ml-3 w-2 transition hover:filter-primary"
                src="{{ asset('assets/dropdown.png')}}" alt="dropdown icon">
            </button>
            <div class="dropdown-content hidden bg-third px-6 py-3">
              <ul class="space-y-2">
                @foreach ($syllabus->lessons as $lesson)
                <li class="flex items-center justify-center text-xs hover:bg-gray-100 cursor-pointer">
                    <a href="{{ route('courses.classroom', ['id' => $course->id, 'lesson_slug' => $lesson->slug]) }}" class="flex items-center w-full text-inherit no-underline">
                      <img class="mr-2 flex w-2.5 filter-primary" src="{{ asset('assets/play.png') }}" alt="material icon">
                      <div class="flex w-full items-center justify-between gap-2">
                        <span>{{ $lesson->title }}</span>
                        <span>{{ $lesson->duration }} Menit</span>
                      </div>
                    </a>
                  </li>
                @endforeach
              </ul>
            </div>
          </div>
        @endforeach
      </aside>
    </div>
  </section>
@endsection

@section('script')
  <script type="module">
    const video = document.getElementById("video");
    const playPauseBtn = document.getElementById("playPauseBtn");
    const progressBar = document.getElementById("progressBar");
    const timeDisplay = document.getElementById("time");

    playPauseBtn.addEventListener("click", togglePlayPause);
    video.addEventListener("timeupdate", updateProgress);
    progressBar.addEventListener("change", setVideoProgress);

    function togglePlayPause() {
      if (video.paused) {
        video.play();
        playPauseBtn.innerHTML = `
                      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9v6m4-6v6m7-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                      </svg>
                  `;
      } else {
        video.pause();
        playPauseBtn.innerHTML = `
                      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                      </svg>
                  `;
      }
    }

    function updateProgress() {
      const progress = (video.currentTime / video.duration) * 100;
      progressBar.value = progress;

      const currentMinutes = Math.floor(video.currentTime / 60);
      const currentSeconds = Math.floor(video.currentTime % 60);
      const durationMinutes = Math.floor(video.duration / 60);
      const durationSeconds = Math.floor(video.duration % 60);

      timeDisplay.textContent =
        `${currentMinutes}:${currentSeconds.toString().padStart(2, "0")} / ${durationMinutes}:${durationSeconds.toString().padStart(2, "0")}`;
    }

    function setVideoProgress() {
      const time = (progressBar.value * video.duration) / 100;
      video.currentTime = time;
    }
  </script>
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
@endsection
