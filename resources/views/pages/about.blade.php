@extends('layouts.app')

@section('content')
  <section class="pt-28 pb-24 lg:pt-36 lg:pb-32">
    <div class="container">
      <div class="flex flex-wrap">
        <div class="w-full self-center px-4 lg:w-1/2">
          <h1 class="text-base font-medium text-primary md:text-xl">
            What is
            <p class="mt-1 block text-4xl font-bold text-secondary lg:text-5xl">Dia<span class="text-primary">Care</span>?
            </p>
          </h1>
          <h2 class="mb-5 mt-2 text-lg font-light text-primary lg:text-2xl">A place that provides all about Diabetes
            Mellitus.</h2>
          <p class="mb-5 max-w-md text-xl font-light text-slate-500">
            <span class="text-primary">DiaCare</span> is a <span class="text-primary">web-based</span> <span
              class="text-secondary">diagnose application</span> to help people <span class="text-primary">diagnose
              diabetes mellitus disease</span>.
          </p>
          <p class="mb-5 max-w-md text-xl font-light text-slate-500"> <span class="text-primary">This application also
              provides</span> a <span class="text-secondary">dashboard</span> for users to be able to <span
              class="text-primary">check the diagnosis history</span>.
          </p>
          <p class="mb-10 max-w-md text-xl font-light text-slate-500">There is also <span
              class="text-secondary">information</span> about diabetes as a <span class="text-primary">whole along with
              its management</span> and <span class="text-primary">how to prevent it</span>.
          </p>
        </div>
        <div
          class="bayangan hidden w-full self-center rounded-sm border-2 border-primary bg-white px-4 md:block lg:w-1/2">
          {{-- Lottie --}}
          <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
          <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_v1yudlrx.json" background="transparent"
            speed="1" style="width: 550px; height: 350px;" loop autoplay class="mx-auto"></lottie-player>
        </div>
      </div>
    </div>
  </section>
@endsection
