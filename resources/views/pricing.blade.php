@extends('layouts.app')

@section('content')
    <div class="mt-[100px] w-full">
        <div class="mx-auto max-w-[1280px] px-[calc(3.5vw+5px)] ">
            <div class="flex flex-col">
                <h1 class="font-bold text-4xl mt-10">Langganan</h1>
                <p class="mt-5 text-md">Mulai perjalanan belajar Lo dengan berlangganan di Skillo dan nikmati akses tak terbatas <br> ke semua kelas yang tersedia! Dengan satu langganan, Lo bisa mengikuti berbagai kelas.</p>
                <div class="py-[40px]">
                    <div class="max-w-[1280px] px-[calc(3.5vw+5px)] py-[50px] flex flex-col md:flex-row gap-8 rounded-lg bg-white border border-gray-300 justify-center mx-auto">
                      <!-- Pricing Item -->
                      <div class="flex flex-col items-center gap-12 w-full max-w-[500px] p-6 rounded-lg border border-gray-300 bg-[#f5f7fa]">
                        <!-- Plan -->
                        <h2 class="w-full text-center px-5 py-2 rounded-md border border-gray-300 bg-[#e6f3fa] font-medium leading-[169%]">
                          Paket Gratis
                        </h2>
                  
                        <!-- Price -->
                        <h3 class="text-[36px] font-bold leading-[73%] text-center w-full min-w-[calc(5.5vw)]">
                          Rp0<span class="text-[16px] font-medium text-gray-700">/bulan</span>
                        </h3>
                  
                        <!-- Features Section -->
                        <div class="flex flex-col gap-5 w-full rounded-md border border-gray-300 bg-white p-0">
                          <h3 class="text-[18px] font-semibold text-center text-gray-700 leading-[150%] mb-0 mt-4">
                            Fitur yang Ditawarkan
                          </h3>
                          <div class="flex items-center gap-2 w-[75%] mx-auto p-3 rounded-md border border-gray-300">
                            <img class="w-6" src="{{asset('assets/checked.png')}}" alt="check" />
                            <p class="text-[14px] leading-[150%] text-gray-700">Akses ke kelas gratis pilihan.</p>
                          </div>
                          <div class="flex items-center gap-2 w-[75%] mx-auto p-3 rounded-md border border-gray-300">
                            <img class="w-6" src="{{asset('assets/checked.png')}}" alt="check" />
                            <p class="text-[14px] leading-[150%] text-gray-700">Materi dan sumber daya kelas terbatas.</p>
                          </div>
                          <div class="flex items-center gap-2 w-[75%] mx-auto p-3 rounded-md border border-gray-300">
                            <img class="w-6" src="{{asset('assets/checked.png')}}" alt="check" />
                            <p class="text-[14px] leading-[150%] text-gray-700">Dukungan komunitas dasar.</p>
                          </div>
                          <div class="flex items-center gap-2 w-[75%] mx-auto p-3 rounded-md border border-gray-300">
                            <img class="w-6" src="{{asset('assets/notcheck.png')}}" alt="check" />
                            <p class="text-[14px] leading-[150%] text-gray-700">Sertifikat penyelesaian.</p>
                          </div>
                          <div class="flex items-center gap-2 w-[75%] mx-auto p-3 rounded-md border border-gray-300">
                            <img class="w-6" src="{{asset('assets/notcheck.png')}}" alt="check" />
                            <p class="text-[14px] leading-[150%] text-gray-700">Platform bebas iklan.</p>
                          </div>
                          <div class="flex items-center gap-2 w-[75%] mx-auto p-3 rounded-md border border-gray-300">
                            <img class="w-6" src="{{asset('assets/notcheck.png')}}" alt="check" />
                            <p class="text-[14px] leading-[150%] text-gray-700">Akses ke forum komunitas eksklusif Paket Pro.</p>
                          </div>
                          <div class="flex items-center gap-2 w-[75%] mx-auto p-3 rounded-md border border-gray-300">
                            <img class="w-6" src="{{asset('assets/notcheck.png')}}" alt="check" />
                            <p class="text-[14px] leading-[150%] text-gray-700">Akses awal ke kelas baru dan pembaruan.</p>
                          </div>
                          <a
                            href="/subscribe"
                            class="w-full mt-2 text-center py-4 px-6 rounded-b-md bg-blue-500 text-white font-semibold text-[14px] leading-[150%] hover:bg-blue-600 transition ease-in-out duration-300"
                          >
                            Pilih Paket
                          </a>
                        </div>
                  
                        <!-- Button -->
                      </div>
                  
                      <!-- Pricing Item Example 2 -->
                      <div class="flex flex-col items-center gap-12 w-full max-w-[500px] p-6 rounded-lg border border-gray-300 bg-[#f5f7fa]">
                        <!-- Plan -->
                        <h2 class="w-full text-center px-5 py-2 rounded-md border border-gray-300 bg-[#e6f3fa] font-medium leading-[169%]">
                          Paket Premium
                        </h2>
                  
                        <!-- Price -->
                        <h3 class="text-[36px] font-bold leading-[73%] text-center w-full min-w-[calc(5.5vw)]">
                          Rp199.000<span class="text-[16px] font-medium text-gray-700">/bulan</span>
                        </h3>
                  
                        <!-- Features Section -->
                        <div class="flex flex-col gap-5 w-full rounded-md border border-gray-300 bg-white p-0">
                          <h3 class="text-[18px] font-semibold text-center text-gray-700 leading-[150%] mb-0 mt-4">
                            Fitur yang Ditawarkan
                          </h3>
                          <div class="flex items-center gap-2 w-[75%] mx-auto p-3 rounded-md border border-gray-300">
                            <img class="w-6" src="{{asset('assets/checked.png')}}" alt="check" />
                            <p class="text-[14px] leading-[150%] text-gray-700">Akses ke semua kelas premium.</p>
                          </div>
                          <div class="flex items-center gap-2 w-[75%] mx-auto p-3 rounded-md border border-gray-300">
                            <img class="w-6" src="{{asset('assets/checked.png')}}" alt="check" />
                            <p class="text-[14px] leading-[150%] text-gray-700">Materi dan sumber daya kelas lengkap.</p>
                          </div>
                          <div class="flex items-center gap-2 w-[75%] mx-auto p-3 rounded-md border border-gray-300">
                            <img class="w-6" src="{{asset('assets/checked.png')}}" alt="check" />
                            <p class="text-[14px] leading-[150%] text-gray-700">Dukungan prioritas dari instruktur.</p>
                          </div>
                          <div class="flex items-center gap-2 w-[75%] mx-auto p-3 rounded-md border border-gray-300">
                            <img class="w-6" src="{{asset('assets/checked.png')}}" alt="check" />
                            <p class="text-[14px] leading-[150%] text-gray-700">Sertifikat penyelesaian resmi.</p>
                          </div>
                          <div class="flex items-center gap-2 w-[75%] mx-auto p-3 rounded-md border border-gray-300">
                            <img class="w-6" src="{{asset('assets/checked.png')}}" alt="check" />
                            <p class="text-[14px] leading-[150%] text-gray-700">Platform tanpa iklan.</p>
                          </div>
                          <div class="flex items-center gap-2 w-[75%] mx-auto p-3 rounded-md border border-gray-300">
                            <img class="w-6" src="{{asset('assets/checked.png')}}" alt="check" />
                            <p class="text-[14px] leading-[150%] text-gray-700">Akses ke forum komunitas eksklusif Paket Pro.</p>
                          </div>
                          <div class="flex items-center gap-2 w-[75%] mx-auto p-3 rounded-md border border-gray-300">
                            <img class="w-6" src="{{asset('assets/checked.png')}}" alt="check" />
                            <p class="text-[14px] leading-[150%] text-gray-700">Akses awal ke kelas baru dan pembaruan.</p>
                          </div>
                          <a
                            href="/subscribe"
                            class="w-full mt-2 text-center py-4 px-6 rounded-b-md bg-blue-500 text-white font-semibold text-[14px] leading-[150%] hover:bg-blue-600 transition ease-in-out duration-300"
                          >
                            Pilih Paket
                          </a>
                        </div>
                  
                        <!-- Button -->
                      </div>
                    </div>
                  </div>
                  
            </div>
        </div>

    </div>
@endsection