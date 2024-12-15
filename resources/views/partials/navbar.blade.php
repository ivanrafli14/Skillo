<nav
  class="navbar duration-10 0 fixed top-0 border-b border-line z-10 w-full transition-colors ease-in-out">
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
      <a href="/home">
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
            class="fixed -top-96 -translate-y-4 opacity-0 transition duration-200 ease-in-out group-hover:top-auto group-hover:translate-y-0 group-hover:opacity-100">
            <div
              class="mx-auto mt-7 w-[480px] rounded-lg border-[0.7px] bg-white shadow-custom">
              <h2
                class="rounded-t-lg bg-primary/90 p-3 text-center text-sm font-medium text-white">
                Eksplor Kategori Kursus</h2>
              <div class="grid grid-cols-2 px-10 py-3">
                <a href="/frontend"
                  class="block px-6 py-2 text-sm hover:text-primary">Frontend</a>
                <a href="/devops"
                  class="block px-6 py-2 text-sm hover:text-primary">DevOps/Infra</a>
                <a href="/backend"
                  class="block px-6 py-2 text-sm hover:text-primary">Backend</a>
                <a href="/mobile"
                  class="block px-6 py-2 text-sm hover:text-primary">Mobile
                  Development</a>
                <a href="/fullstack"
                  class="block px-6 py-2 text-sm hover:text-primary">Fullstack</a>
                <a href="/game"
                  class="block px-6 py-2 text-sm hover:text-primary">Game</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="flex items-center justify-center gap-[40px]">
      @auth
        <h1>Halo, {{ auth()->user()->name }}</h1>
        <form action="{{ route('logout.submit') }}" method="POST" class="inline">
          @csrf
          <button type="submit"
            class="rounded-md bg-primary px-6 py-3 text-sm text-white">
            Logout
          </button>
        </form>
      @else
        <a href="{{ route('register.form') }}"
          class="text-sm hover:text-primary">Daftar</a>
        <a href="{{ route('login.form') }}"
          class="rounded-lg bg-primary px-6 py-2.5 text-sm text-white transition-colors duration-300 ease-in-out hover:bg-accent">Masuk</a>
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
