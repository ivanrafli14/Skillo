@extends('layouts.app')
@section('content')
@include('partials.navbar')
  @if (session('success'))
    <div id="alert"
      class="fixed left-1/2 top-10 z-50 flex w-96 -translate-x-1/2 transform items-center rounded-lg bg-green-200 px-3 py-3.5 text-green-800 shadow-md">
      <img src="{{ asset('assets/check.png') }}" alt="check" class="mr-4 w-5">
      <p>{{session('success')}}</p>
      <div id="progress-bar"
        class="absolute bottom-0 left-0 h-1 w-full rounded-b-lg bg-green-500">
      </div>
    </div>
  @endif

  <div class="dashboard w-full pt-36">
    <div class="dashboard__container mx-auto max-w-7xl px-[calc(3.5vw+5px)]">
      <div class="dashboard__profile flex items-center justify-between gap-6 pb-8">
        <div>
          <img class="dashboard__profile-picture w-[90px] rounded-full"
            src="{{ auth()->user()->photo_url ? asset(auth()->user()->photo_url) : asset('assets/johndoe.webp') }}" alt="John Doe" />
        </div>
        <div class="dashboard__profile-wrap mr-auto flex flex-col gap-2.5">
          <h1 class="dashboard__greetings m-0 text-2xl font-semibold">
            Selamat Datang, {{auth()->user()->name}}
          </h1>
          <p
            class="dashboard__text m-0 text-base font-normal leading-[150%] text-neutral">
            Semoga Proses Belajar Lo Menyenangkan, Tetap Semangat!
          </p>
        </div>
        <div
          class="dashboard__settings flex cursor-pointer items-center gap-3 rounded-lg border border-gray-300 bg-gray-100 p-1.5 px-3.5 text-sm font-medium text-neutral transition hover:bg-blue-50">
          <img src="{{ asset('assets/settings.png') }}" class="w-5"
            alt="settings" />
          <p>Pengaturan</p>
        </div>
      </div>
      <!-- Plan Section -->
      <div
        class="dashboard__plan mb-1.5 flex flex-col rounded-lg border border-gray-300">
        <h2
          class="dashboard__plan-title m-0 rounded-t-lg border-b border-gray-300 bg-gray-100 px-5 py-3.5 text-lg font-semibold leading-[150%]">
          Status Langganan
        </h2>
        <div
          class="dashboard__plan-status flex items-center justify-between gap-3 rounded-b-lg bg-white px-5 py-2.5 text-neutral">
          <p
            class="dashboard__plan-name mr-auto text-base font-normal leading-[150%]">
            Lo belum berlangganan. Pilih paket langganan dan akses semua kelas
            sekarang.
          </p>
          <a class="dashboard__plan-cta whitespace-nowrap rounded-lg bg-primary px-6 py-3 text-sm font-medium text-white transition hover:bg-blue-600"
            href="/subscribe">Pilih Paket</a>
        </div>
      </div>
      <!-- Activity Section -->
      <div class="dashboard__activity flex gap-7">
        <!-- Learning Activity -->
        <div class="dashboard__learn flex flex-[1_0_0] flex-col gap-5 py-6">
          <div
            class="dashboard__learn-title flex items-center justify-between text-lg font-semibold leading-[150%]">
            <span>Aktivitas Belajar</span>
            <span
              class="dashboard__learn-title--dif text-base font-normal text-primary">Selengkapnya</span>
          </div>
          <!-- First Learning Item -->
          <div
            class="dashboard__learn-list flex items-center gap-5 rounded-lg border border-gray-300 bg-white px-6 py-6">
            <div class="dashboard__learn-wrap flex flex-col gap-2.5">
              <p
                class="dashboard__learn-status m-0 flex items-center gap-2 text-base font-semibold text-neutral">
                <img src="{{ asset('assets/check.png') }}" class="w-4"
                  alt="check" />
                Selesai
              </p>
              <h3
                class="dashboard__learn-name m-0 text-base font-normal leading-[150%] text-neutral">
                Dasar Machine Learning dan Artificial Intelligence
              </h3>
            </div>
            <a class="dashboard__learn-cta flex items-center justify-end gap-2 whitespace-nowrap rounded-lg bg-primary px-3 py-2 text-sm font-medium text-white transition hover:bg-blue-600"
              href="/certificate" id="certificateSvg">
              Lihat Sertifikat
            </a>
          </div>
          <!-- Additional Learning Items can be added here -->
        </div>
        <!-- Other Activities -->
        <div class="dashboard__other flex flex-[1_0_0] flex-col gap-5 py-6">
          <h2 class="dashboard__other-title text-lg font-semibold leading-[150%]">
            Aktivitas Lain
          </h2>
          <div
            class="dashboard__other-list grid grid-cols-[repeat(auto-fit,minmax(200px,1fr))] gap-5">
            <a href="/event"
              class="dashboard__other-item flex flex-col gap-5 rounded-lg border border-gray-300 bg-white px-6 py-6 text-base font-normal leading-[150%] text-neutral transition hover:text-blue-600">
              <img src="{{ asset('assets/redirect1.png') }}" class="w-5"
                alt="event" />
              Telusuri event Skillo
            </a>
            <a href="/challenge"
              class="dashboard__other-item flex flex-col gap-5 rounded-lg border border-gray-300 bg-white px-6 py-6 text-base font-normal leading-[150%] text-neutral transition hover:text-blue-600">
              <img src="{{ asset('assets/redirect1.png') }}" class="w-5"
                alt="challenge" />
              Telusuri challenge dari Skillo
            </a>
            <a href="/job"
              class="dashboard__other-item flex flex-col gap-5 rounded-lg border border-gray-300 bg-white px-6 py-6 text-base font-normal leading-[150%] text-neutral transition hover:text-blue-600">
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
    //progressBar.style.transition = `width ${duration}ms linear`;
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
