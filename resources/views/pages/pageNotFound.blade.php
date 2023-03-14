@extends('layouts.app')

@section('content')
  <section class="pt-28 pb-24 lg:pt-36 lg:pb-10">
    <div class="container">
      <div class="w-full self-center px-4">
        <h1 class="font-bold text-primary text-4xl lg:text-5xl">Sorry 🙁, this Page not Found</h1>
        <h2 class="font-light text-primary text-lg mb-5 lg:text-2xl mt-2">Go back to Home Page to see more options
        </h2>
      </div>
      <Lottie options={defaultOptions} height={300} width={300} />
    </div>
  </section>
@endsection
