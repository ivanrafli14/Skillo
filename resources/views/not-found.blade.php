@extends('layouts.app')
@section('content')
    @include('partials.navbar')
    <body class="bg-gray-100">
        <div class="min-h-screen flex flex-col justify-center items-center">
          <img src="https://www.svgrepo.com/show/426192/cogs-settings.svg" alt="Logo" class="mb-8 h-40">
          <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-center text-gray-700 mb-5">Situs sedang dalam pengembangan</h1>
          <p class="text-center text-gray-500 text-lg md:text-xl lg:text-2xl mb-8">Kami bekerja keras untuk meningkatkan pengalaman pengguna. Nantikan informasi selanjutnya!</p>
          <div class="flex space-x-4">
            <a href="{{route('home')}}" class="bg-primary hover:bg-accent text-white font-bold py-3 px-6 rounded">Kembali</a>
          </div>
        </div>
      </body>
    @include('partials.footer')
@endsection
