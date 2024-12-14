<footer class="mt-20 w-full bg-white">
  <div class="mx-auto flex max-w-[1400px] flex-col px-[calc(3.5vw+5px)] py-16">
    <div class="flex w-full pb-8"><img class="max-h-[32px]"
        src="{{ asset('assets/logo.png') }}" alt="brand-logo" /></div>
    <div class="flex w-full flex-wrap justify-between gap-5">
      <address class="flex w-[20%] flex-col gap-4 not-italic">
        <a href="/mail" class="flex items-center gap-2 text-sm">
          <img class="h-5 w-5" src="{{ asset('assets/mail.png') }}"
            alt="mail" />
          hello@skillo.com
        </a>
        <a href="/address" class="flex items-start gap-2 text-sm leading-loose">
          <img class="mt-0.5 h-5 w-5" src="{{ asset('assets/place.png') }}"
            alt="address" />
          Skillo Camp Office <br />
          Jl. Raya Dieng No. 12, Bandulan, Kecamatan Sukun, Kota Malang, Jawa
          Timur, 65174
        </a>
      </address>
      <div class="flex w-[70%] flex-wrap gap-5">
        <div
          class="flex min-w-[150px] flex-[1_0_calc(25%-24px)] flex-col gap-2 pl-12">
          <h2 class="text-sm font-semibold text-secondary">
            Skillo
          </h2>
          <a class="text-sm transition hover:text-primary"
            href="/">Home</a>
          <a class="text-sm transition hover:text-primary"
            href="/course">Kursus</a>
          <a class="text-sm transition hover:text-primary"
            href="/subscribe">Langganan</a>
        </div>
        <div
          class="flex min-w-[150px] flex-[1_0_calc(25%-24px)] flex-col gap-2 pl-12">
          <h2 class="text-sm font-semibold text-secondary">
            Konten
          </h2>
          <a class="text-sm transition hover:text-primary"
            href="/blog">Blog</a>
          <a class="text-sm transition hover:text-primary"
            href="/career">Karir</a>
          <a class="text-sm transition hover:text-primary"
            href="/partnership">Kerjasama</a>
        </div>
        <div
          class="flex min-w-[150px] flex-[1_0_calc(25%-24px)] flex-col gap-2 pl-12">
          <h2 class="text-sm font-semibold text-secondary">
            Lainnya
          </h2>
          <a class="text-sm transition hover:text-primary"
            href="/benefit">Benefit</a>
          <a class="text-sm transition hover:text-primary"
            href="/testimonial">Testimoni</a>
          <a class="text-sm transition hover:text-primary"
            href="/faq">FAQ</a>
          <a class="text-sm transition hover:text-primary"
            href="/about">Tentang</a>
        </div>
        <div
          class="flex min-w-[150px] flex-[1_0_calc(25%-24px)] flex-col gap-2 pl-12">
          <h2 class="text-sm font-semibold text-secondary">
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
      class="mt-10 flex w-full flex-wrap justify-between border-t border-line pt-6 text-sm">
      <p>&copy; 2024 Skillo Indonesia. All rights reserved.</p>
      <div class="flex items-center gap-5">
        <a href="/terms"
          class="text-sm transition hover:text-primary">Terms</a>
        <a href="/privacy"
          class="text-sm transition hover:text-primary">Privacy</a>
      </div>
    </div>
  </div>
</footer>
