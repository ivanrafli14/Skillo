@extends('layouts.app')
@section('content')
@include('partials.navbar')
  @if (session('message'))
    <div id="alert"
      class="fixed left-1/2 top-10 z-50 flex w-96 -translate-x-1/2 transform items-center rounded-lg bg-green-200 px-3 py-3.5 text-green-800 shadow-md">
      <img src="{{ asset('assets/check.png') }}" alt="check" class="mr-4 w-5">
      <p>{{ session('message') }}</p>
      <div id="progress-bar"
        class="absolute bottom-0 left-0 h-1 w-full rounded-b-lg bg-green-500">
      </div>
    </div>
  @endif
  @if (session('error'))
    <div id="alert"
      class="fixed left-1/2 top-10 z-50 flex w-96 -translate-x-1/2 transform items-center rounded-lg bg-red-200 px-3 py-3.5 text-red-800 shadow-md">
      <img src="{{ asset('assets/check.png') }}" alt="check" class="mr-4 w-5">
      <p>{{ session('error') }}</p>
      <div id="progress-bar"
        class="absolute bottom-0 left-0 h-1 w-full rounded-b-lg bg-red-500">
      </div>
    </div>
  @endif
  <div class="w-full pt-40">
    <div
      class="mx-auto flex max-w-[1280px] flex-wrap items-center justify-center gap-[80px] px-[calc(3.5vw+5px)]">
      <form action="{{ route('login.submit') }}" method="POST"
        class="flex w-[540px] flex-shrink-0 flex-col rounded-[10px] px-10 pb-10">
        @csrf
        <div class="mb-8 flex flex-col gap-5">
          <h1 class="text-center text-[32px] font-semibold">
            Masuk
          </h1>
          <h2 class="text-center text-[16px] text-neutral">
            Selamat datang kembali, mari belajar bersama Skillo
          </h2>
        </div>
        <label class="mb-3 text-[16px] font-medium">Email</label>
        <input
          class="{{ $errors->has('email') ? 'border-red-500' : '' }} mb-2 flex items-center gap-2 rounded-[8px] border border-line bg-third p-3 text-[16px] text-neutral placeholder:text-neutral placeholder:opacity-70 focus:outline-primary"
          placeholder="Masukkan Email" name="email" />
        @error('email')
          <span class="text-red-500">{{ $message }}</span>
        @enderror

        <label class="mb-3 mt-3 text-[16px] font-medium">Kata Sandi</label>
        <div
          class="{{ $errors->has('password') ? 'border-red-500' : '' }} mb-4 flex items-center justify-between rounded-[8px] border border-line bg-third text-[16px] text-neutral">
          <input id="password" type="password"
            class="flex-grow rounded-[8px] bg-third p-3 text-[16px] outline-primary"
            placeholder="Masukkan Kata Sandi" name="password" />
          <div class="px-3">
            <img class="w-5 cursor-pointer" src="{{ asset('assets/show.png') }}"
              id="toggle-password" alt="Tampilkan Kata Sandi" />
          </div>
        </div>
        @error('password')
          <span class="text-red-500">{{ $message }}</span>
        @enderror
        <button
          class="mb-6 mt-5 rounded-[8px] bg-primary px-5 py-3 text-center text-[14px] font-medium text-white transition-colors hover:bg-accent"
          type="submit">
          Masuk
        </button>
        <div class="mb-6 flex items-center text-center">
          <div class="mr-2 flex-1 border-b border-[#e4e4e7]"></div>
          <span class="text-[14px] text-[#98989a]">ATAU</span>
          <div class="ml-2 flex-1 border-b border-[#e4e4e7]"></div>
        </div>
        <a href="{{ route('google.redirect') }}"
          class="mb-6 flex items-center justify-center rounded-[8px] border border-line bg-third px-6 py-[16px] text-[14px] font-medium text-secondary transition-colors hover:bg-[#e6f3fa]">
          <img class="mr-[14px] w-6" src="{{ asset('assets/google.png') }}"
            alt="google" />
          Masuk
        </a>
        <p
          class="flex items-center justify-center gap-[6px] text-center text-[16px] text-secondary">
          Belum punya akun?
          <a href="{{ route('register.form') }}"
            class="flex items-center text-secondary transition-colors hover:text-accent">
            Daftar
            <img src="{{ asset('assets/arrow.png') }}" alt="login"
              class="ml-1 w-5" />
          </a>
        </p>
      </form>
    </div>
  </div>
  @include('partials.footer')
@endsection
@section('script')
  <script>
    const togglePassword = document.getElementById('toggle-password');
    const passwordInput = document.getElementById('password');
    togglePassword.addEventListener('click', function() {
      const type = passwordInput.type === 'password' ? 'text' :
        'password';
      passwordInput.type = type;
      this.src = type === 'password' ?
        '{{ asset('assets/show.png') }}' :
        '{{ asset('assets/hide.png') }}';
    });

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
