<footer class="mt-20 w-full bg-white">
  <div class="mx-auto flex max-w-[1400px] flex-col px-[3.5vw] py-16">
    <div class="flex w-full flex-wrap justify-between gap-5">
      <address class="flex w-[20%] flex-col gap-4">
        <img class="max-w-[110px]" src="{{ asset('assets/logo.png') }}"
          alt="brand-logo" />
        <a href="/mail"
          class="flex items-center gap-2 text-base font-normal leading-[150%] text-secondary no-underline">
          <img class="h-5 w-5" src="{{ asset('assets/mail.png') }}"
            alt="mail" />
          hello@skillo.com
        </a>
        <a href="/address"
          class="flex items-start gap-2 text-base font-normal leading-[150%] text-secondary no-underline">
          <img class="h-5 w-5" src="{{ asset('assets/place.png') }}"
            alt="address" />
          Skillo Camp Office <br />
          Jl. Raya Dieng No. 12, Bandulan, Kecamatan Sukun, Kota Malang, Jawa
          Timur, 65174
        </a>
      </address>
      <div class="flex w-[70%] flex-wrap gap-5">
        <div
          class="flex min-w-[150px] flex-[1_0_calc(25%-24px)] flex-col gap-2">
          <h2 class="text-base font-semibold leading-[150%] text-secondary">
            Skillo
          </h2>
          <a class="text-base font-normal leading-[150%] text-secondary no-underline transition-colors hover:text-accent"
            href="/">Home</a>
          <a class="text-base font-normal leading-[150%] text-secondary no-underline transition-colors hover:text-accent"
            href="/course">Kelas</a>
          <a class="text-base font-normal leading-[150%] text-secondary no-underline transition-colors hover:text-accent"
            href="/subscribe">Langganan</a>
        </div>
        <div
          class="flex min-w-[150px] flex-[1_0_calc(25%-24px)] flex-col gap-2">
          <h2 class="text-base font-semibold leading-[150%] text-secondary">
            Konten
          </h2>
          <a class="text-base font-normal leading-[150%] text-secondary no-underline transition-colors hover:text-accent"
            href="/blog">Blog</a>
          <a class="text-base font-normal leading-[150%] text-secondary no-underline transition-colors hover:text-accent"
            href="/career">Karir</a>
          <a class="text-base font-normal leading-[150%] text-secondary no-underline transition-colors hover:text-accent"
            href="/partnership">Kerjasama</a>
        </div>
        <div
          class="flex min-w-[150px] flex-[1_0_calc(25%-24px)] flex-col gap-2">
          <h2 class="text-base font-semibold leading-[150%] text-secondary">
            Lainnya
          </h2>
          <a class="text-base font-normal leading-[150%] text-secondary no-underline transition-colors hover:text-accent"
            href="/benefit">Benefit</a>
          <a class="text-base font-normal leading-[150%] text-secondary no-underline transition-colors hover:text-accent"
            href="/testimonial">Testimoni</a>
          <a class="text-base font-normal leading-[150%] text-secondary no-underline transition-colors hover:text-accent"
            href="/faq">FAQ</a>
          <a class="text-base font-normal leading-[150%] text-secondary no-underline transition-colors hover:text-accent"
            href="/about">Tentang</a>
        </div>
        <div
          class="flex min-w-[150px] flex-[1_0_calc(25%-24px)] flex-col gap-2">
          <h2 class="text-base font-semibold leading-[150%] text-secondary">
            Media Sosial
          </h2>
          <div class="flex gap-3">
            <a class="rounded-md border border-[#ecf0f1] p-3 transition hover:bg-[#ecf0f1]"
              href="https://x.com/" target="_blank"><img class="w-5"
                src="{{ asset('assets/x.png') }}" alt="x" /></a>
            <a class="rounded-md border border-[#ecf0f1] p-3 transition hover:bg-[#ecf0f1]"
              href="https://web.facebook.com/" target="_blank"><img
                class="w-5" src="{{ asset('assets/facebook.png') }}"
                alt="facebook" /></a>
            <a class="rounded-md border border-[#ecf0f1] p-3 transition hover:bg-[#ecf0f1]"
              href="https://www.instagram.com/" target="_blank"><img
                class="w-5" src="{{ asset('assets/instagram.png') }}"
                alt="instagram" /></a>
          </div>
        </div>
      </div>
    </div>
    <div
      class="mt-10 flex w-full flex-wrap justify-between border-t border-line pt-6 text-sm font-normal leading-[150%] text-secondary">
      <p>&copy; 2024 Skillo Indonesia. All rights reserved.</p>
      <div class="flex items-center gap-5">
        <a href="/terms"
          class="text-secondary no-underline transition-colors hover:text-accent">Terms</a>
        <a href="/privacy"
          class="text-secondary no-underline transition-colors hover:text-accent">Privacy</a>
      </div>
    </div>
  </div>
</footer>
