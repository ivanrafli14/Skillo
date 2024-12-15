@extends('layouts.app')
@section('content')
  @include('partials.navbar')
  <div class="mt-[100px] w-full">
    <div class="mx-auto max-w-[1280px] px-[calc(3.5vw+5px)]">
      <div class="flex flex-col">
        <h1 class="mt-12 text-2xl font-semibold text-secondary">Langganan</h1>
        <p class="mt-3">Mulai perjalanan belajar Lo dengan berlangganan di
          Skillo dan nikmati akses tak terbatas ke semua kelas yang tersedia!
          Dengan satu langganan, Lo bisa mengikuti berbagai kelas.</p>
        <div class="py-[20px]">
          <div
            class="mx-auto flex max-w-[1280px] flex-col justify-center gap-10 rounded-lg border border-line bg-white px-[calc(3.5vw)] py-[30px] md:flex-row">
            <div
              class="flex w-full max-w-[500px] flex-col items-center gap-12 rounded-lg border border-line bg-[#f5f7fa] p-6">
              <h2
                class="w-full rounded-lg border border-line bg-[#e6f3fa] px-5 py-2 text-center font-medium leading-[169%]">
                Paket Gratis
              </h2>
              <h3
                class="w-full min-w-[calc(5.5vw)] text-center text-[36px] font-bold leading-[73%]">
                Rp0<span class="text-[16px] font-medium">/bulan</span>
              </h3>
              <div
                class="flex w-full flex-col gap-5 rounded-lg border border-line bg-white p-0">
                <h3 class="mt-4 text-center font-semibold">
                  Fitur yang Ditawarkan
                </h3>
                <div
                  class="mx-auto flex w-[75%] items-center gap-2 rounded-lg border border-line p-3">
                  <img class="w-6" src="{{ asset('assets/checked.png') }}"
                    alt="check" />
                  <p class="text-[14px]">Akses ke
                    kelas gratis pilihan.</p>
                </div>
                <div
                  class="mx-auto flex w-[75%] items-center gap-2 rounded-lg border border-line p-3">
                  <img class="w-6" src="{{ asset('assets/checked.png') }}"
                    alt="check" />
                  <p class="text-[14px]">Materi dan
                    sumber daya kelas terbatas.</p>
                </div>
                <div
                  class="mx-auto flex w-[75%] items-center gap-2 rounded-lg border border-line p-3">
                  <img class="w-6" src="{{ asset('assets/checked.png') }}"
                    alt="check" />
                  <p class="text-[14px]">Dukungan
                    komunitas dasar.</p>
                </div>
                <div
                  class="mx-auto flex w-[75%] items-center gap-2 rounded-lg border border-line p-3">
                  <img class="w-6" src="{{ asset('assets/notcheck.png') }}"
                    alt="check" />
                  <p class="text-[14px]">Sertifikat
                    penyelesaian.</p>
                </div>
                <div
                  class="mx-auto flex w-[75%] items-center gap-2 rounded-lg border border-line p-3">
                  <img class="w-6" src="{{ asset('assets/notcheck.png') }}"
                    alt="check" />
                  <p class="text-[14px]">Platform
                    bebas iklan.</p>
                </div>
                <div
                  class="mx-auto flex w-[75%] items-center gap-2 rounded-lg border border-line p-3">
                  <img class="w-6" src="{{ asset('assets/notcheck.png') }}"
                    alt="check" />
                  <p class="text-[14px]">Akses ke
                    forum komunitas eksklusif Paket Pro.</p>
                </div>
                <div
                  class="mx-auto flex w-[75%] items-center gap-2 rounded-lg border border-line p-3">
                  <img class="w-6" src="{{ asset('assets/notcheck.png') }}"
                    alt="check" />
                  <p class="text-[14px]">Akses awal
                    ke kelas baru dan pembaruan.</p>
                </div>
                <button disabled
                  class="hover:accent mt-2 w-full rounded-b-md bg-line px-6 py-4 text-center text-[14px] font-semibold text-white transition duration-300 ease-in-out">
                  Pilih Paket
                </button>
              </div>
            </div>
            <div
              class="flex w-full max-w-[500px] flex-col items-center gap-12 rounded-lg border border-line bg-[#f5f7fa] p-6">
              <h2
                class="w-full rounded-lg border border-line bg-[#e6f3fa] px-5 py-2 text-center font-medium leading-[169%]">
                Paket Premium
              </h2>
              <h3
                class="w-full min-w-[calc(5.5vw)] text-center text-[36px] font-bold leading-[73%]">
                Rp199.000<span class="text-[16px] font-medium">/bulan</span>
              </h3>
              <div
                class="flex w-full flex-col gap-5 rounded-lg border border-line bg-white p-0">
                <h3 class="mt-4 text-center font-semibold">
                  Fitur yang Ditawarkan
                </h3>
                <div
                  class="mx-auto flex w-[75%] items-center gap-2 rounded-lg border border-line p-3">
                  <img class="w-6" src="{{ asset('assets/checked.png') }}"
                    alt="check" />
                  <p class="text-[14px]">Akses ke
                    semua kelas premium.</p>
                </div>
                <div
                  class="mx-auto flex w-[75%] items-center gap-2 rounded-lg border border-line p-3">
                  <img class="w-6" src="{{ asset('assets/checked.png') }}"
                    alt="check" />
                  <p class="text-[14px]">Materi dan
                    sumber daya kelas lengkap.</p>
                </div>
                <div
                  class="mx-auto flex w-[75%] items-center gap-2 rounded-lg border border-line p-3">
                  <img class="w-6" src="{{ asset('assets/checked.png') }}"
                    alt="check" />
                  <p class="text-[14px]">Dukungan
                    prioritas dari instruktur.</p>
                </div>
                <div
                  class="mx-auto flex w-[75%] items-center gap-2 rounded-lg border border-line p-3">
                  <img class="w-6" src="{{ asset('assets/checked.png') }}"
                    alt="check" />
                  <p class="text-[14px]">Sertifikat
                    penyelesaian resmi.</p>
                </div>
                <div
                  class="mx-auto flex w-[75%] items-center gap-2 rounded-lg border border-line p-3">
                  <img class="w-6" src="{{ asset('assets/checked.png') }}"
                    alt="check" />
                  <p class="text-[14px]">Platform
                    tanpa iklan.</p>
                </div>
                <div
                  class="mx-auto flex w-[75%] items-center gap-2 rounded-lg border border-line p-3">
                  <img class="w-6" src="{{ asset('assets/checked.png') }}"
                    alt="check" />
                  <p class="text-[14px]">Akses ke
                    forum komunitas eksklusif Paket Pro.</p>
                </div>
                <div
                  class="mx-auto flex w-[75%] items-center gap-2 rounded-lg border border-line p-3">
                  <img class="w-6" src="{{ asset('assets/checked.png') }}"
                    alt="check" />
                  <p class="text-[14px]">Akses awal
                    ke kelas baru dan pembaruan.</p>
                </div>
                <a href="{{ route('payment') }}"
                  class="hover:accent mt-2 w-full rounded-b-md bg-primary px-6 py-4 text-center text-[14px] font-semibold text-white transition duration-300 ease-in-out">
                  Pilih Paket
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('partials.footer')
@endsection

