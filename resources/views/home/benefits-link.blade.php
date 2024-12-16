<div
  class="mx-auto flex max-w-[1280px] flex-col gap-5 px-4 pt-8 md:gap-[30px] md:px-[calc(3.5vw+5px)] md:pt-[60px]"
  id="benefits">
  <div class="flex flex-col">
    <h2 class="flex-grow pb-2 text-2xl font-semibold text-secondary md:text-3xl">
      Benefits
    </h2>
    <div class="flex flex-col gap-3 md:flex-row md:gap-[250px]">
      <p class="flex-grow text-sm leading-relaxed md:text-base">
        Memilih sumber belajar yang tepat adalah keputusan penting. Skillo
        menjamin bahwa setiap pelajar akan mendapatkan berbagai benefit yang
        relevan dan bermanfaat.
      </p>
      <div class="flex items-center justify-center md:items-end md:justify-end">
        <a href="/#benefits"
          class="text-decoration-none w-full whitespace-nowrap rounded-lg border border-line bg-third px-4 py-3 text-center text-sm font-normal text-secondary transition ease-in-out hover:bg-primary hover:font-light hover:text-white md:w-auto md:px-[20px] md:py-[14px]">
          Lihat Selengkapnya
        </a>
      </div>
    </div>
  </div>

  <div class="w-full">
    <div
      class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:gap-[20px] lg:grid-cols-3">
      @foreach ($benefits as $benefit)
        <div
          class="flex flex-col gap-6 rounded-xl border border-line bg-white p-6 md:gap-[40px] md:p-[40px]">
          <h2 class="text-right text-3xl font-bold text-secondary md:text-4xl">
            {{ $benefit['number'] }}
          </h2>
          <div>
            <h3 class="pb-2 text-base font-semibold text-secondary md:text-lg">
              {{ $benefit['title'] }}
            </h3>
            <p class="text-sm leading-relaxed md:text-base">
              {{ $benefit['description'] }}
            </p>
          </div>
          <a href="/benefit"
            class="group mt-auto cursor-pointer self-end rounded-lg border border-line bg-third p-3 transition-colors ease-in-out hover:bg-primary/20 md:p-[14px]">
            <img src="./assets/redirect1.png" alt="redirect"
              class="w-[20px] md:w-[26px]" />
          </a>
        </div>
      @endforeach
    </div>
  </div>
</div>
