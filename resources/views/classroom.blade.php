<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Skillo</title>
  <link rel="icon" type="image/svg+xml"
    href="{{ asset('assets/brand-logo.png') }}" />
  <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;600;700&display=swap"
    rel="stylesheet" />
  @vite('resources/css/app.css')
</head>

<body>
  <section class="min-h-svh bg-zinc-950">
    <div class="relative flex w-full">
      <div class="flex w-3/4 px-[calc(2.5vw+5px)]">
        <div class="left-0 w-full overflow-hidden">
          <h2 class="bg-black/10 py-[calc(3.5vh+5px)] text-line"> Data Science dengan Python: Dari A sampai Z
          </h2>
          <div class="relative aspect-video w-full">
            <video id="video" class="h-full w-full object-contain"
              src="{{ asset('assets/trailer-video.mp4') }}"></video>
            <div id="controls"
              class="absolute bottom-0 left-0 right-0 bg-zinc-900 p-4 text-white">
              <div class="flex items-center justify-between">
                <button id="playPauseBtn" class="focus:outline-none">
                  <svg class="h-6 w-6" fill="none" stroke="#000000"
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
      <aside class="w-1/4 bg-third min-h-screen">
        @foreach ($syllabus as $item)
          <div class="dropdown border-b">
            <button
              class="dropdown-toggle flex w-full items-center justify-between px-4 py-3 text-left">
              <div class="flex flex-col gap-1.5">
                <span class="font text-sm">{{ $item['title'] }}</span>
                <span class="text-xs">{{ $item['description'] }}</span>
              </div>
              <img class="ml-3 w-2 transition hover:filter-primary"
                src="{{ $item['icon'] }}" alt="dropdown icon">
            </button>
            <div class="dropdown-content hidden bg-third px-6 py-3">
              <ul class="space-y-2">
                @foreach ($item['materials'] as $material)
                  <li class="flex justify-center items-center  text-xs">
                    <img class="mr-2 flex w-2.5 filter-primary"
                      src="{{ $material['icon'] }}" alt="material icon">
                    <div class="flex justify-between items-center w-full gap-2">
                      <span>{{ $material['title'] }}</span>
                      <span>{{ $material['duration'] }}</span>
                    </div>
                  </li>
                @endforeach
              </ul>
            </div>
          </div>
        @endforeach
      </aside>
    </div>
  </section>
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
</body>

</html>
