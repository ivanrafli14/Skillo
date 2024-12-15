@extends('layouts.app')
@section('content')
  @include('partials.navbar')
  <div class="mt-[100px] w-full">
    <div class="mx-auto max-w-[1280px] px-[calc(3.5vw+5px)]">
      <div class="flex flex-col">
        <h1 class="mt-10 text-4xl font-bold">Langganan</h1>
        <p class="text-md mt-5">Mulai perjalanan belajar Lo dengan berlangganan di
          Skillo dan nikmati akses tak terbatas <br> ke semua kelas yang tersedia!
          Dengan satu langganan, Lo bisa mengikuti berbagai kelas.</p>
        <div class="py-[40px]">
          <div
            class="mx-auto flex max-w-[1280px] flex-col justify-center gap-8 rounded-lg border border-gray-300 bg-white px-[calc(3.5vw+5px)] py-[50px] md:flex-row">
            <div
              class="flex w-full max-w-[500px] flex-col items-center gap-12 rounded-lg border border-gray-300 bg-[#f5f7fa] p-6">
              <h2
                class="w-full rounded-md border border-gray-300 bg-[#e6f3fa] px-5 py-2 text-center font-medium leading-[169%]">
                Paket Gratis
              </h2>
              <h3
                class="w-full min-w-[calc(5.5vw)] text-center text-[36px] font-bold leading-[73%]">
                Rp0<span
                  class="text-[16px] font-medium text-gray-700">/bulan</span>
              </h3>
              <div
                class="flex w-full flex-col gap-5 rounded-md border border-gray-300 bg-white p-0">
                <h3
                  class="mb-0 mt-4 text-center text-[18px] font-semibold leading-[150%] text-gray-700">
                  Fitur yang Ditawarkan
                </h3>
                <div
                  class="mx-auto flex w-[75%] items-center gap-2 rounded-md border border-gray-300 p-3">
                  <img class="w-6" src="{{ asset('assets/checked.png') }}"
                    alt="check" />
                  <p class="text-[14px] leading-[150%] text-gray-700">Akses ke
                    kelas gratis pilihan.</p>
                </div>
                <div
                  class="mx-auto flex w-[75%] items-center gap-2 rounded-md border border-gray-300 p-3">
                  <img class="w-6" src="{{ asset('assets/checked.png') }}"
                    alt="check" />
                  <p class="text-[14px] leading-[150%] text-gray-700">Materi dan
                    sumber daya kelas terbatas.</p>
                </div>
                <div
                  class="mx-auto flex w-[75%] items-center gap-2 rounded-md border border-gray-300 p-3">
                  <img class="w-6" src="{{ asset('assets/checked.png') }}"
                    alt="check" />
                  <p class="text-[14px] leading-[150%] text-gray-700">Dukungan
                    komunitas dasar.</p>
                </div>
                <div
                  class="mx-auto flex w-[75%] items-center gap-2 rounded-md border border-gray-300 p-3">
                  <img class="w-6" src="{{ asset('assets/notcheck.png') }}"
                    alt="check" />
                  <p class="text-[14px] leading-[150%] text-gray-700">Sertifikat
                    penyelesaian.</p>
                </div>
                <div
                  class="mx-auto flex w-[75%] items-center gap-2 rounded-md border border-gray-300 p-3">
                  <img class="w-6" src="{{ asset('assets/notcheck.png') }}"
                    alt="check" />
                  <p class="text-[14px] leading-[150%] text-gray-700">Platform
                    bebas iklan.</p>
                </div>
                <div
                  class="mx-auto flex w-[75%] items-center gap-2 rounded-md border border-gray-300 p-3">
                  <img class="w-6" src="{{ asset('assets/notcheck.png') }}"
                    alt="check" />
                  <p class="text-[14px] leading-[150%] text-gray-700">Akses ke
                    forum komunitas eksklusif Paket Pro.</p>
                </div>
                <div
                  class="mx-auto flex w-[75%] items-center gap-2 rounded-md border border-gray-300 p-3">
                  <img class="w-6" src="{{ asset('assets/notcheck.png') }}"
                    alt="check" />
                  <p class="text-[14px] leading-[150%] text-gray-700">Akses awal
                    ke kelas baru dan pembaruan.</p>
                </div>
                <a href="/subscribe"
                  class="mt-2 w-full rounded-b-md bg-primary px-6 py-4 text-center text-[14px] font-semibold leading-[150%] text-white transition duration-300 ease-in-out hover:accent">
                  Pilih Paket
                </a>
              </div>
            </div>
            <div
              class="flex w-full max-w-[500px] flex-col items-center gap-12 rounded-lg border border-gray-300 bg-[#f5f7fa] p-6">
              <h2
                class="w-full rounded-md border border-gray-300 bg-[#e6f3fa] px-5 py-2 text-center font-medium leading-[169%]">
                Paket Premium
              </h2>
              <h3
                class="w-full min-w-[calc(5.5vw)] text-center text-[36px] font-bold leading-[73%]">
                Rp199.000<span
                  class="text-[16px] font-medium text-gray-700">/bulan</span>
              </h3>
              <div
                class="flex w-full flex-col gap-5 rounded-md border border-gray-300 bg-white p-0">
                <h3
                  class="mb-0 mt-4 text-center text-[18px] font-semibold leading-[150%] text-gray-700">
                  Fitur yang Ditawarkan
                </h3>
                <div
                  class="mx-auto flex w-[75%] items-center gap-2 rounded-md border border-gray-300 p-3">
                  <img class="w-6" src="{{ asset('assets/checked.png') }}"
                    alt="check" />
                  <p class="text-[14px] leading-[150%] text-gray-700">Akses ke
                    semua kelas premium.</p>
                </div>
                <div
                  class="mx-auto flex w-[75%] items-center gap-2 rounded-md border border-gray-300 p-3">
                  <img class="w-6" src="{{ asset('assets/checked.png') }}"
                    alt="check" />
                  <p class="text-[14px] leading-[150%] text-gray-700">Materi dan
                    sumber daya kelas lengkap.</p>
                </div>
                <div
                  class="mx-auto flex w-[75%] items-center gap-2 rounded-md border border-gray-300 p-3">
                  <img class="w-6" src="{{ asset('assets/checked.png') }}"
                    alt="check" />
                  <p class="text-[14px] leading-[150%] text-gray-700">Dukungan
                    prioritas dari instruktur.</p>
                </div>
                <div
                  class="mx-auto flex w-[75%] items-center gap-2 rounded-md border border-gray-300 p-3">
                  <img class="w-6" src="{{ asset('assets/checked.png') }}"
                    alt="check" />
                  <p class="text-[14px] leading-[150%] text-gray-700">Sertifikat
                    penyelesaian resmi.</p>
                </div>
                <div
                  class="mx-auto flex w-[75%] items-center gap-2 rounded-md border border-gray-300 p-3">
                  <img class="w-6" src="{{ asset('assets/checked.png') }}"
                    alt="check" />
                  <p class="text-[14px] leading-[150%] text-gray-700">Platform
                    tanpa iklan.</p>
                </div>
                <div
                  class="mx-auto flex w-[75%] items-center gap-2 rounded-md border border-gray-300 p-3">
                  <img class="w-6" src="{{ asset('assets/checked.png') }}"
                    alt="check" />
                  <p class="text-[14px] leading-[150%] text-gray-700">Akses ke
                    forum komunitas eksklusif Paket Pro.</p>
                </div>
                <div
                  class="mx-auto flex w-[75%] items-center gap-2 rounded-md border border-gray-300 p-3">
                  <img class="w-6" src="{{ asset('assets/checked.png') }}"
                    alt="check" />
                  <p class="text-[14px] leading-[150%] text-gray-700">Akses awal
                    ke kelas baru dan pembaruan.</p>
                </div>
                <a href="{{route('payment')}}"
                  class="mt-2 w-full rounded-b-md bg-primary px-6 py-4 text-center text-[14px] font-semibold leading-[150%] text-white transition duration-300 ease-in-out hover:accent">
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
