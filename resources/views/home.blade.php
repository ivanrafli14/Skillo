@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
  <section class="w-full pt-[140px]">
    <div
      class="mx-auto flex max-w-[1280px] flex-row-reverse items-center gap-10 px-[calc(3.5vw+5px)]">
      <div class="w-full max-w-[41%] text-center">
        <img src="{{ asset('assets/hero.webp') }}" class="w-full max-w-[500px]"
          alt="hero-img" />
      </div>
      <div class="flex w-full max-w-[59%] flex-col gap-8">
        <h1
          class="relative m-0 inline-block w-fit p-5 text-[32px] font-semibold before:absolute before:bottom-0 before:left-0 before:z-[-2] before:h-full before:w-full before:rounded-[10px] before:bg-white before:content-[''] after:absolute after:bottom-0 after:left-0 after:z-[-1] after:h-full after:w-full after:origin-right after:scale-x-0 after:animate-[highlight_1s_ease-in-out_forwards] after:rounded-[10px] after:bg-gradient-to-t after:from-[rgba(52,152,219,0.98)] after:to-[rgba(52,152,219,0.8)] after:delay-[6.5s] after:content-['']">
          <span class="text-primary">Upgrade Skill Lo dengan Skillo</span>
        </h1>
        <h2 class="m-0 text-[24px] font-medium leading-[150%]">
          Kelas online khusus dari praktisi industri teknologi, gratis hingga
          premium. Akses di mana saja, kapan saja.
        </h2>
        <h3 class="m-0 text-[20px] font-normal text-neutral">
          Mulai belajar untuk masa depan kariermu di dunia teknologi
        </h3>
        <div class="flex gap-5">
          <a class="rounded-[6px] bg-primary px-5 py-[14px] font-normal text-white no-underline transition-colors hover:bg-accent"
            href="/course">Telusuri Kelas</a>
          <a class="rounded-[6px] border border-line bg-third px-5 py-[14px] font-medium text-neutral no-underline transition-colors hover:bg-[#e6f3fa]"
            href="/pricing">Cek Penawaran</a>
        </div>
      </div>
    </div>
  </section>
@endsection
