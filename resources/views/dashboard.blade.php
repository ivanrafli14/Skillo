@extends('layouts.app')

@section('content')
  @include('partials.navbar')
  @if (session('success'))
    <div id="alert"
      class="fixed left-1/2 top-10 z-50 flex w-96 -translate-x-1/2 transform items-center rounded-lg bg-green-200 px-3 py-3.5 text-green-800 shadow-md">
      <img src="{{ asset('assets/check.png') }}" alt="check" class="mr-4 w-5">
      <p>{{ session('success') }}</p>
      <div id="progress-bar"
        class="absolute bottom-0 left-0 h-1 w-full rounded-b-lg bg-green-500">
      </div>
    </div>
  @endif
  <div class="w-full pt-36">
    <div class="mx-auto max-w-7xl px-[calc(3.5vw+5px)]">
      <div class="flex items-center justify-between gap-6 pb-8">
        <div>
          <img class="w-[90px] rounded-full"
            src="{{ auth()->user()->photo_url }}"
            alt="John Doe" />
        </div>
        <div class="mr-auto flex flex-col gap-2.5">
          <h1 class="text-xl font-semibold">
            Selamat Datang, {{ auth()->user()->name }}
          </h1>
          <p class="">
            Semoga Proses Belajar Lo Menyenangkan, Tetap Semangat!
          </p>
        </div>
        <div
          class="flex cursor-pointer items-center gap-3 rounded-lg border border-line bg-gray-100 px-3.5 py-2.5 text-sm font-medium transition hover:bg-blue-50">
          <img src="{{ asset('assets/settings.png') }}" class="w-5"
            alt="settings" />
          <p>Pengaturan</p>
        </div>
      </div>
      <!-- Plan Section -->
      <div class="mb-1.5 flex flex-col rounded-lg border border-line">

        <h2
          class="rounded-t-lg border-b border-line bg-gray-100 px-5 py-3.5 font-medium">
          Status Langganan
        </h2>
        @if (auth()->user()->status == 'free')
        <div
        class="flex items-center justify-between gap-3 rounded-b-lg bg-white px-5 py-2.5 text-sm">
        <p class="mr-auto">
          Lo belum berlangganan. Pilih paket langganan dan akses semua kelas
          sekarang.
        </p>
        <a class="whitespace-nowrap rounded-lg bg-primary px-5 py-2 text-sm font-medium text-white transition hover:bg-accent"
          href={{route('payment')}}>Pilih Paket</a>
      </div>
        @else
        <div class="flex items-center justify-between bg-white px-5 py-2.5">
            <p class="text-sm">
              <span class="font-semibold text-primary">Paket
                Premium Tahunan:</span> Akses penuh semua kelas premium
            </p>
            <div class="flex items-center justify-center gap-2 py-2 text-sm">
              <img src="{{ asset('assets/time.svg') }}" alt="time">
              s.d. 16 Desember 2025
            </div>
          </div>
        @endif

      </div>
      <!-- Activity Section -->
      <div class="flex gap-7">
        <!-- Learning Activity -->
        <div class="flex flex-[1_0_0] flex-col gap-5 py-6">
          <div class="flex items-center justify-between font-medium">
            <span>Aktivitas Belajar</span>
          </div>
          <!-- First Learning Item -->
          @if ($courseUsers->isEmpty())
            <h1 class="text-xl text-center text-primary">Belum ada Kursus yang diikuti.</h1>
        @endif
          @foreach ($courseUsers as $courseUser)
            @continue($courseUser->progress != 100)
          <div
            class="flex items-center justify-between gap-5 rounded-lg border border-line bg-white px-6 py-6">
            <div class="flex flex-col gap-2.5">
              <p class="flex items-center gap-2 text-sm font-semibold">
                <img src="{{ asset('assets/check.png') }}" class="w-4"
                  alt="check" />
                Selesai
              </p>
              <h3 class="text-seconday text-sm">
               {{$courseUser->course->name}}
              </h3>
            </div>
            <a class="flex items-center justify-end gap-2 whitespace-nowrap rounded-lg bg-primary px-3 py-2 text-sm text-white transition hover:bg-accent"
              href="/certificate" id="certificateSvg">
              Lihat Sertifikat
            </a>
          </div>
          @endforeach

          @foreach ($courseUsers as $courseUser)
            @continue($courseUser->progress == 100)
          <div
          class="flex items-center justify-between gap-5 rounded-lg border border-line bg-white px-6 py-6">

          <div class="flex w-full flex-col gap-2.5">
            <p class="flex items-center gap-2 text-sm font-semibold">
              Dalam Progress
            </p>
            <div class="rounded-lg bg-gray-200 p-0.5 shadow-inner">
              <div
                class="flex h-4 flex-row-reverse items-center justify-end rounded-lg text-xs font-semibold text-white transition-all duration-500 ease-in-out">
                <span
                  class="flex w-[{{$courseUser->progress}}%] justify-center rounded-lg bg-emerald-500">{{$courseUser->progress}}%</span>
              </div>
            </div>
            <h3 class="text-seconday text-sm">
              {{$courseUser->course->name}}
            </h3>
          </div>
          <a class="flex items-center justify-end gap-2 whitespace-nowrap rounded-lg bg-primary px-3 py-2 text-sm text-white transition hover:bg-accent"
            href="{{route('courses.classroom', ['id' => $courseUser->course_id, 'lesson_slug' => $courseUser->course->syllabusses[0]->lessons[0]->slug])}}" id="certificateSvg">
            Lanjutkan Kursus
          </a>
        </div>
          @endforeach

          <!-- Additional Learning Items can be added here -->
        </div>
        <!-- Other Activities -->
        <div class="flex flex-[1_0_0] flex-col gap-5 py-6">
          <h2 class="font-medium">
            Aktivitas Lain
          </h2>
          <div class="grid grid-cols-[repeat(auto-fit,minmax(200px,1fr))] gap-5">
            <a href="/event"
              class="flex flex-col gap-3.5 rounded-lg border border-line bg-white px-6 py-6 text-sm text-secondary transition hover:text-primary">
              <img src="{{ asset('assets/redirect1.png') }}" class="w-5"
                alt="event" />
              Telusuri event Skillo
            </a>
            <a href="/challenge"
              class="flex flex-col gap-3.5 rounded-lg border border-line bg-white px-6 py-6 text-sm text-secondary transition hover:text-primary">
              <img src="{{ asset('assets/redirect1.png') }}" class="w-5"
                alt="challenge" />
              Telusuri challenge dari Skillo
            </a>
            <a href="/job"
              class="flex flex-col gap-3.5 rounded-lg border border-line bg-white px-6 py-6 text-sm text-secondary transition last:col-span-2 hover:text-primary">
              <img src="{{ asset('assets/redirect1.png') }}" class="w-5"
                alt="job" />
              Telusuri lowongan pekerjaan utama
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('partials.footer')
@endsection

@section('script')
  <script>
    const alert = document.getElementById("alert");
    const progressBar = document.getElementById("progress-bar");
    const duration = 5000;
    progressBar.style.transition = `width ${duration}ms linear`;
    setTimeout(() => {
      progressBar.style.width = "0%";
    }, 10);
    setTimeout(() => {
      alert.style.transition = "opacity 500ms ease";
      alert.style.opacity = "0";
      setTimeout(() => alert.remove(), 500);
    }, duration);
  </script>
@endsection
