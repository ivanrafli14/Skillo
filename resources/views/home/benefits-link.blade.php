

<div
  class="mx-auto flex max-w-[1280px] flex-col gap-[30px] px-[calc(3.5vw+5px)] pt-[60px]">
  <div class="flex flex-col">
    <h2 class="flex-grow pb-2 text-3xl font-semibold text-secondary">
      Benefits</h2>
    <div class="flex gap-[250px]">
      <p class="flex-grow leading-relaxed">
        Memilih sumber belajar yang tepat adalah keputusan penting. Skillo
        menjamin bahwa setiap pelajar akan mendapatkan berbagai benefit yang
        relevan dan bermanfaat.
      </p>
      <div class="flex items-end justify-end">
        <a href="/benefits"
          class="text-decoration-none whitespace-nowrap rounded-lg border border-line bg-third px-[20px] py-[14px] text-center text-sm font-normal text-secondary transition ease-in-out hover:bg-primary hover:font-light hover:text-white">
          Lihat Selengkapnya
        </a>
      </div>
    </div>
  </div>
  <div class="w-full">
    <div class="grid grid-cols-[repeat(auto-fit,minmax(300px,1fr))] gap-[20px]">
      @foreach ($benefits as $benefit)
        <div
          class="flex flex-col gap-[40px] rounded-xl border border-line bg-white p-[40px]">
          <h2 class="text-right text-4xl font-bold text-secondary">
            {{ $benefit['number'] }}
          </h2>
          <div>
            <h3 class="pb-2 text-lg font-semibold text-secondary">
              {{ $benefit['title'] }}</h3>
            <p class="leading-relaxed">
              {{ $benefit['description'] }}</p>
          </div>
          <a href="/benefit"
            class="mt-auto cursor-pointer self-end rounded-lg border border-line bg-third p-[14px] transition-colors ease-in-out hover:bg-primary/20 group">
            <img src="./assets/redirect1.png" alt="redirect"
              class="w-[26px]" />
          </a>
        </div>
      @endforeach
    </div>
  </div>
</div>
