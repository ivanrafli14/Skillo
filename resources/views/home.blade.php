@extends('layouts.app')
@section('content')
  @include('partials.navbar')
  <section class="w-full overflow-x-hidden pt-40">
    <div
      class="mx-auto flex max-w-[1280px] flex-col items-center gap-6 overflow-hidden px-4 md:flex-row-reverse md:gap-10 md:px-[calc(3.5vw+5px)]">
      <div class="w-full md:max-w-[41%]">
        <img src="{{ asset('assets/hero.webp') }}"
          class="mx-auto w-full max-w-[480px] object-contain" alt="hero-img" />
      </div>
      <div
        class="flex w-full flex-col gap-4 text-center md:max-w-[59%] md:gap-8 md:text-left">
        <h1
          class="hero-title w-fit relative mx-auto inline-block p-3 text-lg font-semibold before:absolute before:bottom-0 before:left-0 before:z-[-2] before:h-full before:w-full before:rounded-lg before:bg-white before:content-[''] md:mx-0 md:p-5 md:text-3xl">
          <span class="text-white">Upgrade Skill Lo dengan Skillo</span>
        </h1>
        <h2
          class="text-lg font-medium leading-relaxed text-secondary md:text-[22px]">
          Kelas online khusus dari praktisi industri teknologi, gratis hingga
          premium. Akses di mana saja, kapan saja.
        </h2>
        <h3 class="text-base md:text-xl">
          Mulai belajar untuk masa depan karier Lo di dunia teknologi
        </h3>
        <div class="flex flex-col gap-3 md:flex-row md:gap-5">
          <a class="w-full rounded-lg bg-primary px-4 py-3 text-center text-sm font-medium text-white transition hover:bg-accent md:w-auto md:px-5"
            href="{{route('courses.index')}}">Telusuri Kelas</a>
          <a class="w-full rounded-lg border border-line bg-third px-4 py-3 text-center text-sm font-medium transition hover:bg-white md:w-auto md:px-5"
            href="{{route('payment.pricing')}}">Cek Penawaran</a>
        </div>
      </div>
    </div>
  </section>
  <section
    class="mt-10 w-full overflow-x-hidden bg-white py-8 md:mt-[75px] md:py-[60px]">
    <div class="mx-auto max-w-[1280px] px-4 md:px-[calc(3.5vw+5px)]">
      <div
        class="grid grid-cols-2 items-center justify-around gap-4 pb-8 md:grid-cols-4 md:gap-[20px] md:pb-[60px]">
        @foreach ($stats as $stat)
          <div
            class="flex flex-col items-center gap-[6px] text-xl font-semibold md:text-[40px]">
            <p class="flex min-w-[2vw] items-center justify-center">
              <span class="counter"
                data-target="{{ $stat['value'] }}">{{ $stat['value'] }}</span>
              <span class="text-[#3498db]">+</span>
            </p>
            <p
              class="rounded-lg bg-[#e6f3fa] px-2 py-2 text-center text-xs font-medium md:px-[12px] md:py-[8px] md:text-sm">
              {{ $stat['name'] }}
            </p>
          </div>
        @endforeach
      </div>
      <h2 class="mx-auto mb-4 w-fit text-base text-secondary md:mb-6 md:text-lg">
        Perusahaan Besar Telah Percaya
      </h2>
      <div
        class="grid grid-cols-2 items-center justify-around gap-4 sm:grid-cols-3 md:grid-cols-6 md:gap-[60px]">
        @foreach ($companies as $company)
          <div
            class="flex w-full justify-center rounded-lg border border-line py-3 md:py-4">
            <img class="h-[20px] w-auto md:h-[24px]" src="{{ $company['logo'] }}"
              alt="{{ $company['name'] }}">
          </div>
        @endforeach
      </div>
    </div>
  </section>
  <section class="w-full overflow-x-hidden bg-white pb-8 pt-[10px] md:pb-[60px]">
    <div
      class="relative mx-auto max-w-[960px] bg-white px-4 md:px-[calc(3.5vw+5px)]">
      <video id="video" class="w-full rounded-lg border border-line"
        poster="{{ asset('assets/trailer-thumbnail.webp') }}">
        <source src="{{ asset('assets/trailer-video.mp4') }}" type="video/mp4">
      </video>
      <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
        <button id="playButton"
          class="flex h-[50px] w-[50px] cursor-pointer items-center justify-center rounded-full bg-primary transition duration-200 hover:bg-accent md:h-[70px] md:w-[70px]">
          <img src="{{ asset('assets/play.png') }}" alt="play"
            class="w-[30px] md:w-[40px]">
        </button>
        <button id="pauseButton"
          class="hidden h-[50px] w-[50px] cursor-pointer items-center justify-center rounded-full bg-primary opacity-20 transition duration-200 hover:bg-accent md:h-[70px] md:w-[70px]">
          <img src="{{ asset('assets/play-pause.png') }}" alt="pause"
            class="w-[30px] md:w-[40px]">
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
@endsection
