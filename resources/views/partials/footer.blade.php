<footer class="mt-20 w-full bg-white">
  <div class="mx-auto flex max-w-[1400px] flex-col px-[calc(3.5vw+5px)] py-16">
    <div class="flex w-full pb-8"><img class="max-h-[28px] md:max-h-[32px]"
        src="{{ asset('assets/logo.png') }}" alt="brand-logo" /></div>
    <div class="flex w-full flex-col gap-5 md:flex-row md:justify-between">
      <address class="flex w-full flex-col gap-4 not-italic md:w-[20%]">
        <a href="/mail" class="flex items-center gap-2 text-xs md:text-sm">
          <img class="h-5 w-5" src="{{ asset('assets/mail.png') }}"
            alt="mail" />
          hello@skillo.com
        </a>
        <a href="/address"
          class="flex items-start gap-2 text-xs leading-loose md:text-sm">
          <img class="mt-0.5 h-5 w-5" src="{{ asset('assets/place.png') }}"
            alt="address" />
          Skillo Camp Office <br />
          Jl. Raya Dieng No. 12, Bandulan, Kecamatan Sukun, Kota Malang, Jawa
          Timur, 65174
        </a>
      </address>
      <div class="flex w-full flex-col flex-wrap gap-5 md:w-[70%] md:flex-row">
        <div
          class="flex min-w-[150px] flex-[1_0_calc(25%-24px)] flex-col gap-2 md:pl-12">
          <h2 class="text-xs font-semibold text-secondary md:text-sm">
            Skillo
          </h2>
          <a class="text-xs transition hover:text-primary md:text-sm"
            href="/">Home</a>
          <a class="text-xs transition hover:text-primary md:text-sm"
            href="/course">Kursus</a>
          <a class="text-xs transition hover:text-primary md:text-sm"
            href="/subscribe">Langganan</a>
        </div>
        <div
          class="flex min-w-[150px] flex-[1_0_calc(25%-24px)] flex-col gap-2 md:pl-12">
          <h2 class="text-xs font-semibold text-secondary md:text-sm">
            Konten
          </h2>
          <a class="text-xs transition hover:text-primary md:text-sm"
            href="/blog">Blog</a>
          <a class="text-xs transition hover:text-primary md:text-sm"
            href="/career">Karir</a>
          <a class="text-xs transition hover:text-primary md:text-sm"
            href="/partnership">Kerjasama</a>
        </div>
        <div
          class="flex min-w-[150px] flex-[1_0_calc(25%-24px)] flex-col gap-2 md:pl-12">
          <h2 class="text-xs font-semibold text-secondary md:text-sm">
            Lainnya
          </h2>
          <a class="text-xs transition hover:text-primary md:text-sm"
            href="/benefit">Benefit</a>
          <a class="text-xs transition hover:text-primary md:text-sm"
            href="/testimonial">Testimoni</a>
          <a class="text-xs transition hover:text-primary md:text-sm"
            href="/faq">FAQ</a>
          <a class="text-xs transition hover:text-primary md:text-sm"
            href="/about">Tentang</a>
        </div>
        <div
          class="flex min-w-[150px] flex-[1_0_calc(25%-24px)] flex-col gap-2 md:pl-12">
          <h2 class="text-xs font-semibold text-secondary md:text-sm">
            Media Sosial
          </h2>
          <div class="flex gap-3">
            <a class="rounded-lg border border-line p-3 transition hover:bg-[#ecf0f1]"
              href="https://x.com/" target="_blank"><img class="w-5"
                src="{{ asset('assets/x.png') }}" alt="x" /></a>
            <a class="rounded-lg border border-line p-3 transition hover:bg-[#ecf0f1]"
              href="https://web.facebook.com/" target="_blank"><img
                class="w-5" src="{{ asset('assets/facebook.png') }}"
                alt="facebook" /></a>
            <a class="rounded-lg border border-line p-3 transition hover:bg-[#ecf0f1]"
              href="https://www.instagram.com/" target="_blank"><img
                class="w-5" src="{{ asset('assets/instagram.png') }}"
                alt="instagram" /></a>
          </div>
        </div>
      </div>
    </div>
    <div
      class="mt-10 flex w-full flex-col-reverse flex-wrap gap-3 border-t border-line pt-2 text-xs md:flex-row md:justify-between md:pt-6 md:text-sm">
      <p>&copy; 2024 Skillo Indonesia. All rights reserved.</p>
      <div class="flex items-center gap-5">
        <a href="/terms"
          class="text-xs transition hover:text-primary md:text-sm">Terms</a>
        <a href="/privacy"
          class="text-xs transition hover:text-primary md:text-sm">Privacy</a>
      </div>
    </div>
  </div>
</footer>
