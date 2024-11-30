@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
  <div class="w-full pt-[75px]">
    <div
      class="mx-auto flex max-w-[1280px] flex-wrap items-center justify-center gap-[80px] px-[calc(3.5vw+5px)]">
      <form action="/"
        class="flex w-[540px] flex-shrink-0 flex-col rounded-[10px] p-10">
        <div class="mb-10 flex flex-col gap-5">
          <h1 class="m-0 text-center text-[32px] font-semibold">
            Masuk
          </h1>
          <h2 class="text-center text-[16px] text-neutral">
            Selamat datang kembali, mari belajar bersama Skillo
          </h2>
        </div>
        <label class="mb-5 text-[16px] font-medium">Email</label>
        <input
          class="mb-5 flex items-center gap-2 rounded-[8px] border border-line bg-third px-[14px] py-3 text-[16px] text-neutral placeholder:text-neutral placeholder:opacity-70 focus:outline-none"
          placeholder="Masukkan Email" />
        <label class="mb-5 text-[16px] font-medium">Kata Sandi</label>
        <div
          class="mb-5 flex items-center justify-between gap-2 rounded-[8px] border border-line bg-third px-3 py-[10px] text-[16px] text-neutral">
          <input type="password"
            class="flex-grow border-none bg-transparent text-[16px] outline-none"
            placeholder="Masukkan Kata Sandi" />
          <img class="w-5 pt-[1.5px]" src="{{ asset('assets/show.png') }}"
            alt="Tampilkan Kata Sandi" />
        </div>
        <button
          class="mb-6 rounded-[8px] bg-primary px-5 py-3 text-center text-[14px] font-medium text-white transition-colors hover:bg-accent"
          type="submit">
          Masuk
        </button>
        <div class="mb-6 flex items-center text-center">
          <div class="mr-2 flex-1 border-b border-[#e4e4e7]"></div>
          <span class="text-[14px] text-[#98989a]">ATAU</span>
          <div class="ml-2 flex-1 border-b border-[#e4e4e7]"></div>
        </div>
        <a href="/dashboard"
          class="mb-6 flex items-center justify-center rounded-[8px] border border-line bg-third px-6 py-[16px] text-[14px] font-medium text-secondary transition-colors hover:bg-[#e6f3fa]">
          <img class="mr-[14px] w-6" src="{{ asset('assets/google.png') }}"
            alt="google" />
          Masuk
        </a>
        <p
          class="flex items-center justify-center gap-[6px] text-center text-[16px] text-secondary">
          Sudah punya akun?
          <a href="/register"
            class="flex items-center text-secondary transition-colors hover:text-accent">
            Daftar
            <img src="{{ asset('assets/arrow.png') }}" alt="login"
              class="ml-1 w-5" />
          </a>
        </p>
      </form>
    </div>
  </div>
@endsection
