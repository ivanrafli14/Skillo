@php
  $payments = [
      [
          'method' => 'QRIS',
          'logo' => './assets/payment_4.svg',
          'icon' => './assets/instan.svg',
          'process' => 'Proses instant',
      ],
      [
          'method' => 'Bank BCA',
          'logo' => './assets/payment_5.svg',
          'icon' => './assets/time.svg',
          'process' => 'Proses 5-10 Menit',
      ],
      [
          'method' => 'Bank Mandiri',
          'logo' => './assets/payment_6.svg',
          'icon' => './assets/time.svg',
          'process' => 'Proses 5-10 Menit',
      ],
      [
          'method' => 'Bank BRI',
          'logo' => './assets/payment_7.svg',
          'icon' => './assets/time.svg',
          'process' => 'Proses 5-10 Menit',
      ],
      [
          'method' => 'Bank BNI',
          'logo' => './assets/payment_8.svg',
          'icon' => './assets/time.svg',
          'process' => 'Proses 5-10 Menit',
      ],
      [
          'method' => 'Indomaret',
          'logo' => './assets/payment_9.svg',
          'icon' => './assets/time.svg',
          'process' => 'Proses 5-10 Menit',
      ],
      [
          'method' => 'Alfamart',
          'logo' => './assets/payment_10.svg',
          'icon' => './assets/time.svg',
          'process' => 'Proses 5-10 Menit',
      ],
  ];
@endphp

@section('content')
@extends('layouts.app')
  <section class="w-full bg-white">
    <div
      class="mx-auto flex max-w-[1080px] items-center justify-between bg-white px-[calc(3.5vw+5px)] py-4 shadow-custom">
      <img src="{{ asset('assets/logo.png') }}" alt="logo" class="w-36">
    </div>
  </section>
  <section class="w-full">
    <div class="mx-auto max-w-[1080px] px-[calc(3.5vw+5px)]">
      <div class="mt-7 flex flex-row gap-8">
        <div class="flex flex-1 flex-col gap-4">
          <div class="flex flex-col gap-2 pt-4">
            <h2
              class="mb-2 border-b border-line pb-2 text-lg font-semibold text-secondary">
              Metode Pembayaran
            </h2>
            @foreach ($payments as $payment)
              <div
                class="trigger flex cursor-pointer items-center justify-between rounded-lg border border-line p-3 transition hover:bg-third">
                <div class="flex items-center gap-4">
                  <div
                    class="point flex h-5 w-5 items-center justify-center rounded-full border border-line p-1">
                    <div class="fill item h-full w-full rounded-full">
                    </div>
                  </div>
                  <img class="w-9" src="{{ $payment['logo'] }}" alt="logo">
                  <p class="text-sm font-semibold text-secondary">
                    {{ $payment['method'] }}</p>
                </div>
                <div class="flex items-center gap-2">
                  <img class="h-3" src="{{ $payment['icon'] }}" alt="">
                  <p class="text-sm opacity-80">
                    <span>{{ $payment['process'] }}</span>
                  </p>
                </div>
              </div>
            @endforeach
          </div>
        </div>
        <div class="mt-4 flex h-fit flex-1 flex-col gap-2 rounded-lg">
          <h2
            class="mb-2 border-b border-line pb-2 text-lg font-semibold text-secondary">
            Profil Pengguna</h2>
          <div class="flex flex-col gap-4">
            <div class="flex items-center gap-4">
              <img class="h-16 w-16" src="{{ asset('assets/johndoe.webp') }}"
                alt="photo">
              <div>
                <p class="pb-0.5 text-sm font-semibold text-secondary">{{ auth()->user()->name }}</p>
                </p>
                <p class="text-sm opacity-60">{{ auth()->user()->email }}</p>
              </div>
            </div>
            <div class="item flex flex-col gap-4">
              <div class="flex items-center gap-2 border-b border-line pb-2">
                <p class="text-sm font-medium">Berlangganan: Paket Premium</p>
              </div>
              <div class="flex items-center self-end">
                <div class="flex cursor-pointer" id="monthly-trigger">
                  <div
                    class="point mr-1.5 flex h-5 w-5 items-center justify-center rounded-full border border-line p-1">
                    <div class="fill item h-full w-full rounded-full bg-primary"
                      id="monthly"></div>
                  </div>
                  <p class="mr-2.5 text-sm text-secondary">
                    Bulanan</p>
                </div>
                <div class="flex cursor-pointer" id="yearly-trigger">
                  <div
                    class="point mr-1.5 flex h-5 w-5 items-center justify-center rounded-full border border-line p-1">
                    <div class="fill item h-full w-full rounded-full"
                      id="yearly"></div>
                  </div>
                  <p class="text-sm text-secondary">Tahunan
                  </p>
                </div>
              </div>
              <div class="bottom flex items-center justify-between">
                <p class="text-sm opacity-60">Harga :</p>
                <p class="text-sm font-semibold" id="price">Rp 199.000</p>
              </div>
            </div>
          </div>
          <div class="boxTotal flex flex-col gap-6">
            <div class="total flex items-center justify-between">
              <p class="text-sm font-semibold opacity-80">Total :</p>
              <p class="text-sm font-bold" id="total">Rp 199.000</p>
            </div>
            <form action="{{ route('payment.store', ['id' => auth()->user()->id]) }}" method="POST">
                @csrf
                <button type="submit"
                        id="confirm"
                        class="w-full rounded-lg bg-primary py-2 text-white hover:bg-accent text-center block">
                        Konfirmasi
                </button>
            </form>
          </div>
        </div>
        <div id="modal"
          class="fixed inset-0 hidden items-center justify-center bg-gray-900 bg-opacity-50">
          <div class="w-[360px] rounded-lg bg-white p-6 text-center shadow-lg">
            <h2 class="mb-4 text-2xl font-bold">Pembayaran berhasil</h2>
            <p class="mb-6">
              Status langganan Anda telah terverifikasi, upgrade skill Lo dengan
              semua kursus di Skillo sekarang
            </p>
            <a href="/dashboard"
              class="mx-auto mb-4 block w-3/4 rounded bg-primary px-4 py-2 text-white hover:bg-accent">
              Menuju Dashboard
            </a>
            <p class="text-sm">Otomatis dalam <span id="countdown">6</span> detik
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('script')
  <script>
    const triggers = document.querySelectorAll(".trigger");
    const items = document.querySelectorAll(".item");
    triggers.forEach((trigger, index) => {
      trigger.addEventListener("click", function() {
        items.forEach((el) => el.classList.remove("bg-primary"));
        items[index].classList.add("bg-primary");
      });
    });
  </script>
  <script>
    const monthlyButton = document.getElementById("monthly");
    const yearlyButton = document.getElementById("yearly");
    const monthlyTrigger = document.getElementById("monthly-trigger");
    const yearlyTrigger = document.getElementById("yearly-trigger");
    const priceElement = document.getElementById("price");
    const totalElement = document.getElementById("total");

    const monthlyPrice = "Rp. 199.000";
    const yearlyPrice = "Rp. 2.000.000";

    function setActive(button) {
      monthlyButton.classList.remove("bg-primary");
      yearlyButton.classList.remove("bg-primary");
      button.classList.add("bg-primary");
    }

    monthlyTrigger.addEventListener("click", function() {
      priceElement.textContent = monthlyPrice;
      totalElement.textContent = monthlyPrice;
      setActive(monthlyButton);
    });

    yearlyTrigger.addEventListener("click", function() {
      priceElement.textContent = yearlyPrice;
      totalElement.textContent = yearlyPrice;
      setActive(yearlyButton);
    });
  </script>
  <script>
    const confirmBtn = document.getElementById("confirm");
    const modal = document.getElementById("modal");
    const countdownSpan = document.getElementById("countdown");
    confirmBtn.addEventListener("click", () => {
      modal.classList.remove("hidden");
      modal.classList.add("flex");

      let countdown = 6;
      const timer = setInterval(() => {
        countdown--;
        countdownSpan.textContent = countdown;

        if (countdown <= 0) {
          clearInterval(timer);
          window.location.href = "/dashboard";
        }
      }, 1000);
    });
  </script>
@endsection
