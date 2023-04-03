@extends('layouts.app')

@section('content')
  <section class="pt-28 pb-24 lg:pt-36 lg:pb-32">
    <div class="container">
      <div class="w-full px-4">
        <div class="mx-auto mb-6 max-w-xl text-center">
          <h2 class="text-3xl font-bold text-primary lg:text-3xl">Login</h2>
        </div>
      </div>
      <div class="mx-auto w-4/5 md:w-2/5">
        <form action="/login" method="post">
          @csrf
          <div class="mb-5 w-full px-4">
            <label for="email" class="text-base font-bold text-primary">
              Email
            </label>
            <input type="text" id="email" name="email"
              class="@error('email') border-red-500 @else border-[#030723] @enderror bayangan_field w-full rounded-sm border-2 bg-white p-3 focus:outline-none focus:ring focus:ring-blue-500"
              value="{{ @old('email') }}" />
            @error('email')
              <p class="mt-2 text-red-500">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-8 w-full px-4">
            <label for="password" class="text-base font-bold text-primary">
              Password
            </label>
            <input type="password" id="password" name="password"
              class="@error('password') border-red-500 @else border-[#030723] @enderror bayangan_field w-full rounded-sm border-2 bg-white p-3 focus:outline-none focus:ring focus:ring-blue-500"
              value="{{ @old('password') }}" />
            @error('password')
              <p class="mt-2 text-red-500">{{ $message }}</p>
            @enderror
          </div>
          <div class="w-full px-4">
            <button type="submit"
              class="btnn w-full rounded-sm border-2 border-black bg-black py-3 px-8 text-white duration-300 ease-out hover:bg-white hover:text-black focus:outline-none focus:ring focus:ring-blue-500">
              Login
            </button>
          </div>
        </form>
        <div class="mt-4 w-full px-4">
          <p>Don't Have an Account? <span class="text-secondary"><a href="/register">Register</a></span> </p>
        </div>
      </div>
    </div>
  </section>
@endsection
