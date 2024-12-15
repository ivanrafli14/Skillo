<nav
  class="navbar fixed top-0 z-10 w-full border-b border-line transition-colors duration-100 ease-in-out">
  <div
    class="promotion mx-auto flex justify-center bg-primary transition-all duration-200 ease-in-out">
    <a href="/pricing"
      class="flex max-w-[1400px] items-center gap-2 px-[calc(3.5vw+5px)] py-[12px] text-xs font-medium text-white hover:underline">
      Langganan Kelas Sekarang, Diskon Kelas Hingga 50% <img
        src="{{ asset('assets/star.svg') }}"> </a>
  </div>
  <div
    class="mx-auto flex max-w-[1400px] items-center justify-between px-[calc(3.5vw+5px)] py-[14px]">
    <div class="flex items-center gap-[50px]">
      <a href="/">
        <img src="{{ asset('assets/brand-logo.png') }}" alt="brand-logo"
          class="w-11" />
      </a>
      <div class="flex items-center gap-[50px] text-sm">
        <a href="/" class="transition hover:text-primary">Home</a>
        <a href="/courses" class="transition hover:text-primary">Kursus</a>
        <a href="/pricing" class="transition hover:text-primary">Langganan</a>
        <div class="group relative">
          <div
            class="group flex items-center justify-center gap-2 transition group-hover:text-primary">
            Kategori <img src="{{ asset('assets/dropdown.png') }}"
              class="w-2.5 transition group-hover:-rotate-180 group-hover:filter-primary">
          </div>
          <div
            class="fixed -top-96 -translate-y-4 opacity-0 transition duration-300 ease-in-out group-hover:top-auto group-hover:translate-y-0 group-hover:opacity-100">
            <div class="mx-auto mt-7 w-[480px] bg-white shadow-custom">
              <h2
                class="bg-primary/90 p-3 text-center text-sm font-medium text-white">
                Eksplor Kategori Kursus</h2>
              <div class="grid w-full grid-cols-2 gap-3 px-3 py-3">
                <a href="/courses/1"
                  class="block border border-line px-6 py-2 text-sm hover:text-primary">Frontend</a>
                <a href="/courses/4"
                  class="block border border-line px-6 py-2 text-sm hover:text-primary">DevOps/Infra</a>
                <a href="/courses/2"
                  class="block border border-line px-6 py-2 text-sm hover:text-primary">Backend</a>
                <a href="/courses/6"
                  class="block border border-line px-6 py-2 text-sm hover:text-primary">Mobile
                  Development</a>
                <a href="/courses/3"
                  class="block border border-line px-6 py-2 text-sm hover:text-primary">Fullstack</a>
                <a href="/courses/5"
                  class="block border border-line px-6 py-2 text-sm hover:text-primary">Game
                  Development</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @auth
      <div class="group relative">
        <div
          class="flex items-center justify-center gap-4 border border-line px-3 py-1.5 transition group-hover:text-primary">
          <img src="{{ asset('assets/fajar.webp') }}" class="w-8 rounded-full"
            alt="photo">
          <h3 class="text-sm text-secondary group-hover:text-primary">
            {{ auth()->user()->name }}</h3>
          <img src="{{ asset('assets/dropdown.png') }}"
            class="w-3 transition-transform duration-100 group-hover:rotate-180 group-hover:filter-primary"
            alt="dropdown">
        </div>
        <form action="{{ route('logout.submit') }}" method="POST"
          class="fixed -top-96 -translate-y-4 border-line bg-white p-1.5 opacity-0 transition duration-100 group-hover:top-auto group-hover:translate-y-0 group-hover:opacity-100">
          <div class="flex flex-col bg-white shadow-custom">
            @csrf
            <div class="flex w-fit flex-col items-center justify-center gap-1.5">
              <a href="/dashboard"
                class="border border-line p-[49px] py-2 text-sm hover:text-primary">Dashboard</a>
              <button type="submit"
                class="bg-primary px-16 py-2 text-sm text-white hover:bg-red-600">
                Logout
              </button>
            </div>
          </div>
        </form>
      </div>
    @else
      <div class="flex items-center gap-8">
        <a href="{{ route('register.form') }}"
          class="text-sm hover:text-primary">Daftar</a>
        <a href="{{ route('login.form') }}"
          class="rounded-lg bg-primary px-6 py-2.5 text-sm text-white transition-colors duration-300 ease-in-out hover:bg-accent">Masuk</a>
      </div>
    @endauth
  </div>
</nav>
<script>
  window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    const promotion = document.querySelector('.promotion');
    if (window.scrollY > 50) {
      navbar.classList.add('bg-white');
      navbar.classList.add('shadow-custom');
      promotion.classList.add('-translate-y-20');
      promotion.classList.add('h-0');
    } else {
      navbar.classList.remove('bg-white');
      navbar.classList.remove('shadow-custom');
      promotion.classList.remove('-translate-y-20');
      promotion.classList.remove('h-0');
    }
  });
</script>
