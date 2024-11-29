<nav class="fixed top-0 z-50 w-full bg-white shadow transition-all duration-100">
  <div
    class="mx-auto flex max-w-[1400px] items-center justify-between px-[calc(3.5vw+5px)] py-4">
    <!-- Logo -->
    <div class="flex items-center gap-12">
      <a href="/home">
        <img src="{{ asset('assets/brand-logo.png') }}" alt="brand-logo"
          class="w-11" />
      </a>
      <!-- Primary Menu -->
      <div class="hidden items-center gap-6 lg:flex">
        <a href="/"
          class="text-sm text-gray-800 transition hover:text-blue-600">Home</a>
        <a href="/course"
          class="text-sm text-gray-800 transition hover:text-blue-600">Kelas</a>
        <a href="/pricing"
          class="text-sm text-gray-800 transition hover:text-blue-600">Langganan</a>
        <div class="group relative">
          <a href="/other"
            class="text-sm text-gray-800 transition hover:text-blue-600">Lainnya</a>
          <div
            class="absolute top-full hidden w-48 rounded-lg border border-gray-200 bg-white shadow-lg group-hover:block">
            <a href="/blog"
              class="block px-6 py-2 text-sm text-gray-800 hover:text-blue-600">Blog</a>
            <a href="/career"
              class="block px-6 py-2 text-sm text-gray-800 hover:text-blue-600">Karir</a>
            <a href="/partenership"
              class="block px-6 py-2 text-sm text-gray-800 hover:text-blue-600">Kerjasama</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Secondary Menu -->
    <div class="hidden items-center gap-6 lg:flex">
      <a href="/register"
        class="rounded-md border border-gray-800 px-4 py-2 text-sm text-gray-800">Daftar</a>
      <a href="/login"
        class="rounded-md bg-primary px-4 py-2 text-sm text-white">Masuk</a>
    </div>

    {{-- <!-- Dashboard Menu -->
    <div class="hidden items-center gap-3 lg:flex">
      <img src="{{ asset('assets/profile.png') }}" alt="profile" class="w-8 h-8 rounded-full" />
      <div class="relative group">
        <img src="{{ asset('assets/dropdown.png') }}" alt="menu" class="w-4 cursor-pointer transition-transform group-hover:rotate-180" />
        <div class="absolute right-0 hidden w-48 rounded-lg border border-gray-200 bg-white shadow-lg group-hover:block">
          <a href="/dashboard" class="block px-6 py-2 text-sm text-gray-800 hover:text-blue-600">Dashboard</a>
          <a href="/" class="block px-6 py-2 text-sm text-red-600 hover:text-red-800">Keluar</a>
        </div>
      </div>
    </div>

    <!-- Mobile Toggle -->
    <button class="flex h-10 w-10 flex-col items-center justify-center gap-1 rounded-lg border lg:hidden">
      <span class="block h-[3px] w-6 bg-gray-800"></span>
      <span class="block h-[3px] w-6 bg-gray-800"></span>
      <span class="block h-[3px] w-6 bg-gray-800"></span>
    </button>
  </div>
  <!-- Mobile Menu -->
  <div class="absolute top-0 hidden h-screen w-full flex-col bg-white px-8 pt-28 lg:hidden">
    <a href="/" class="mb-4 text-sm text-gray-800">Home</a>
    <a href="/course" class="mb-4 text-sm text-gray-800">Kelas</a>
    <a href="/pricing" class="mb-4 text-sm text-gray-800">Langganan</a>
    <a href="/other" class="mb-4 text-sm text-gray-800">Lainnya</a>
    <a href="/register" class="mb-4 rounded-md border border-gray-800 px-4 py-2 text-sm text-gray-800">Daftar</a>
    <a href="/login" class="mb-4 rounded-md bg-gray-800 px-4 py-2 text-sm text-white">Masuk</a>
  </div> --}}
</nav>
