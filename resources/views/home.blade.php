@extends('layouts.app')
@section('content')
  @include('partials.navbar')
  <section class="w-full pt-40">
    <div
      class="mx-auto flex max-w-[1280px] flex-row-reverse items-center gap-10 px-[calc(3.5vw+5px)]">
      <div class="w-full max-w-[41%]">
        <img src="{{ asset('assets/hero.webp') }}" class="w-full max-w-[480px]"
          alt="hero-img" />
      </div>
      <div class="flex w-full max-w-[59%] flex-col gap-8">
        <h1
          class="hero-title relative w-fit p-5 text-3xl font-semibold before:absolute before:bottom-0 before:left-0 before:z-[-2] before:h-full before:w-full before:rounded-lg before:bg-white before:content-['']">
          <span class="text-white">Upgrade Skill Lo dengan Skillo</span>
        </h1>
        <h2 class="text-[22px] font-medium leading-relaxed text-secondary">
          Kelas online khusus dari praktisi industri teknologi, gratis hingga
          premium. Akses di mana saja, kapan saja.
        </h2>
        <h3 class="text-xl">
          Mulai belajar untuk masa depan kariermu di dunia teknologi
        </h3>
        <div class="flex gap-5">
          <a class="rounded-lg bg-primary px-5 py-3 text-sm font-medium text-white transition hover:bg-accent"
            href="/course">Telusuri Kelas</a>
          <a class="rounded-lg border border-line bg-third px-5 py-3 text-sm font-medium transition hover:bg-white"
            href="/pricing">Cek Penawaran</a>
        </div>
      </div>
    </div>
  </section>
  <section class="mt-[75px] w-full bg-white py-[60px]">
    <div class="mx-auto max-w-[1280px] px-[calc(3.5vw+5px)]">
      <div
        class="grid grid-cols-4 items-center justify-around gap-[20px] pb-[60px]">
        @foreach ($stats as $stat)
          <div
            class="flex flex-col items-center gap-[6px] text-[40px] font-semibold">
            <p class="flex min-w-[2vw] items-center justify-center">
              <span class="counter"
                data-target="{{ $stat['value'] }}">{{ $stat['value'] }}</span><span
                class="text-[#3498db]">+</span>
            </p>
            <p
              class="rounded-lg bg-[#e6f3fa] px-[12px] py-[8px] text-sm font-medium">
              {{ $stat['name'] }}
            </p>
          </div>
        @endforeach
      </div>
      <h2 class="mx-auto mb-6 w-fit text-lg text-secondary">
        Perusahaan Besar Telah Percaya
      </h2>
      <div class="grid grid-cols-6 items-center justify-around gap-[60px]">
        @foreach ($companies as $company)
          <div
            class="flex w-full justify-center rounded-lg border border-line py-4">
            <img class="h-[24px] w-auto" src="{{ $company['logo'] }}"
              alt="{{ $company['name'] }}">
          </div>
        @endforeach
      </div>
    </div>
  </section>
  <section class="w-full bg-white pb-[60px] pt-[10px]">
    <div class="relative mx-auto max-w-[960px] bg-white px-[calc(3.5vw+5px)]">
      <video id="video" class="w-full rounded-lg border border-line"
        poster="{{ asset('assets/trailer-thumbnail.webp') }}">
        <source src="https://asset.cloudinary.com/dukifna6a/1cb4131805960cf09fc3a927c2dab0a4" type="video/mp4">
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
    </div>
  </section>
  @include('home.benefits-link')
  @include('home.courses-link')
  @include('home.testimonials-link')
  @include('home.faqs-link')
  @include('partials.footer')
@endsection

@section('script')
  <script>
    document.querySelectorAll('.counter').forEach(function(counter) {
      let target = parseInt(counter.getAttribute('data-target'), 10);
      let start = 0;
      let duration = 1500;
      let startTime = null;

      function animateCounter(currentTime) {
        if (!startTime) startTime = currentTime;
        let elapsed = currentTime - startTime;
        let progress = Math.min(elapsed / duration,
          1);
        let currentValue = Math.ceil(progress * target);
        counter.textContent = currentValue;
        if (progress < 1) {
          requestAnimationFrame(animateCounter);
        }
      }
      requestAnimationFrame(animateCounter);
    });
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
@endsection
