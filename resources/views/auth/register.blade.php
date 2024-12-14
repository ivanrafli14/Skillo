@extends('layouts.app')
@include('partials.navbar')
@section('content')
  <div class="w-full pt-40">
    <div
      class="mx-auto flex max-w-[1280px] flex-wrap items-center justify-center gap-[80px] px-[calc(3.5vw+5px)]">
      <form action="{{ route('register.submit') }}"
        class="flex w-[540px] flex-shrink-0 flex-col rounded-[10px] px-10 pb-10"
        method="POST">
        @csrf
        <div class="mb-8 flex flex-col gap-5">
          <h1 class="m-0 text-center text-[32px] font-semibold">
            Daftar
          </h1>
          <h2 class="text-center text-[16px] text-neutral">
            Mulai belajar dengan membuat akun sekarang
          </h2>
        </div>
        <label class="mb-3 text-[16px] font-medium">Nama Lengkap</label>
        <input
          class="{{ $errors->has('full_name') ? 'border-red-500' : '' }} flex items-center gap-2 rounded-[8px] border border-line bg-third p-3 text-[16px] text-neutral placeholder:text-neutral placeholder:opacity-70 focus:outline-primary"
          placeholder="Masukkan Nama Lengkap" name="full_name"
          value="{{ old('full_name') }}" />
        @error('full_name')
          <span class="text-red-500">{{ $message }}</span>
        @enderror
        <label class="mt-4 text-[16px] font-medium">Email</label>
        <input
          class="{{ $errors->has('email') ? 'border-red-500' : '' }} mt-3 flex items-center gap-2 rounded-[8px] border border-line bg-third p-3 text-[16px] text-neutral placeholder:text-neutral placeholder:opacity-70 focus:outline-primary"
          placeholder="Masukkan Email" name="email" type="email"
          value="{{ old('email') }}" />
        @error('email')
          <span class="text-red-500">{{ $message }}</span>
        @enderror
        <label class="mt-4 text-[16px] font-medium">Kata Sandi</label>
        <div
          class="{{ $errors->has('password') ? 'border-red-500' : '' }} error-removed mt-3 flex items-center justify-between rounded-[8px] border border-line bg-third text-[16px] text-neutral">
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
        <label class="mt-4 text-[16px] font-medium">Konfirmasi Kata Sandi</label>
        <div
          class="{{ $errors->has('password_confirmation') ? 'border-red-500' : '' }} error-removed mt-3 flex items-center justify-between rounded-[8px] border border-line bg-third text-[16px] text-neutral">
          <input id="passwordConfirmation" type="password"
            class="flex-grow rounded-[8px] bg-third p-3 text-[16px] outline-primary"
            placeholder="Masukkan Kata Sandi" name="password_confirmation" />
          <div class="px-3">
            <img class="w-5 cursor-pointer" id="toggle-passwordConfirmation"
              src="{{ asset('assets/show.png') }}" alt="Tampilkan Kata Sandi" />
          </div>
        </div>
        @error('password_confirmation')
          <span class="text-red-500">{{ $message }}</span>
        @enderror
        <div class="my-4 flex items-center justify-center gap-2">
          <input class="w-6 scale-[1.5]" type="checkbox" required />
          <label class="flex-1 pt-[3px] text-[16px] text-neutral">
            Saya setuju dengan
            <a class="text-primary no-underline" href="/terms">Syarat
              Penggunaan</a>
            dan
            <a class="text-primary no-underline" href="/privacy">Kebijakan
              Privasi</a>
          </label>
        </div>
        <button
          class="mb-6 rounded-[8px] bg-primary px-5 py-3 text-center text-[14px] font-medium text-white transition-colors hover:bg-accent"
          type="submit">
          Daftar
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
          Daftar dengan Google
        </a>
        <p
          class="flex items-center justify-center gap-[6px] text-center text-[16px] text-secondary">
          Sudah punya akun?
          <a href="{{ route('login.form') }}"
            class="flex items-center text-secondary transition-colors hover:text-accent">
            Masuk
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
    const inputs = document.querySelectorAll("input");
    inputs.forEach(function(input) {
      input.addEventListener("focus", function() {
        this.classList.remove("border-red-500");
        const parent = this.closest(
          ".error-removed");
        if (parent) {
          parent.classList.remove(
            "border-red-500");
        }
      });
    });
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
    const togglePasswordConfirmation = document.getElementById(
      'toggle-passwordConfirmation');
    const passwordConfirmation = document.getElementById(
      'passwordConfirmation');
    togglePasswordConfirmation.addEventListener('click', function() {
      const type = passwordConfirmation.type === 'password' ?
        'text' : 'password';
      passwordConfirmation.type = type;
      this.src = type === 'password' ?
        '{{ asset('assets/show.png') }}' :
        '{{ asset('assets/hide.png') }}';
    });
  </script>
@endsection
