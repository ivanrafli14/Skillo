<section class="w-full pt-20">
  <div class="mx-auto max-w-[1280px] px-4 sm:px-[calc(3.5vw+5px)]">
    <div id="faqList">
      <div
        class="flex flex-col gap-8 rounded-lg border border-line bg-white p-4 sm:p-6 md:flex-row md:gap-20 md:p-10">
        <div class="flex w-full flex-col gap-4 md:w-1/3 md:gap-6">
          <h2 class="text-2xl font-semibold md:text-3xl">
            Frequently Asked Questions
          </h2>
          <h3 class="text-sm md:text-base">
            Masih punya pertanyaan? Hubungi Tim Kami melalui support@skillo.com
          </h3>
          <a class="w-full rounded-lg border border-line bg-third px-4 py-2 text-center text-sm font-medium transition hover:bg-primary hover:font-normal hover:text-white md:w-fit lg:py-3"
            href="/faq">
            Baca Selengkapnya
          </a>
        </div>
        <div
          class="faq__content w-full md:w-2/3  flex flex-1 flex-col items-start gap-4 md:gap-8">
          @foreach ($faqs as $faq)
            <div
              class="faq__list flex w-full flex-col gap-4 rounded-lg border border-line bg-white p-4 md:gap-6 md:p-8">
              <div
                class="faq__list-question flex w-full items-center justify-between gap-2.5 border-b border-line pb-4">
                <span
                  class="w-full text-sm font-medium leading-relaxed text-secondary md:text-base">
                  {{ $faq['question'] }}
                </span>
                <span
                  class="flex-shrink-0 rounded bg-[#e6f3fa] transition hover:bg-primary/90">
                  <img
                    class="faq__list-expand w-6 cursor-pointer transition-transform hover:filter-secondary md:w-7"
                    src="{{ asset('assets/expand.png') }}" alt="expand">
                </span>
              </div>
              <p
                class="faq__list-answer hidden text-sm leading-relaxed md:text-base">
                {{ $faq['answer'] }}
              </p>
            </div>
          @endforeach
        </div>

      </div>
    </div>
  </div>
</section>

<script>
  document.querySelectorAll(".faq__list-question").forEach((question) => {
    question.addEventListener("click", function() {
      const answer = this.nextElementSibling;
      if (answer.style.display === "block") {
        answer.style.display = "none";
      } else {
        answer.style.display = "block";
      }
      const img = this.querySelector(".faq__list-expand");
      img.classList.toggle("rotate-45");
    });
  });
</script>
