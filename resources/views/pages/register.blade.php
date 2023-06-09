@extends('layouts.app')

@section('content')
  <section class="pt-28 pb-24 lg:pt-36 lg:pb-32">
    <div class="container">
      <div class="w-full px-4">
        <div class="mx-auto mb-6 max-w-xl text-center">
          <h2 class="text-3xl font-bold text-primary lg:text-3xl">Register</h2>
        </div>
      </div>
      <div class="mx-auto w-4/5 md:w-2/5">
        <form action="/register" method="post">
          @csrf
          <div class="mb-5 w-full px-4">
            <label for="name" class="text-base font-bold text-primary">
              Name
            </label>
            <input type="text" id="name" name="name"
              class="bayangan_field @error('name') border-red-500 @else border-[#030723] @enderror w-full rounded-sm border-2 bg-white p-3 focus:outline-none focus:ring focus:ring-blue-500"
              value="{{ @old('name') }}" />
            @error('name')
              <p class="mt-2 text-red-500">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-5 w-full px-4">
            <label for="email" class="text-base font-bold text-primary">
              Email
            </label>
            <input type="text" id="email" name="email"
              class="bayangan_field @error('email') border-red-500 @else border-[#030723] @enderror w-full rounded-sm border-2 bg-white p-3 focus:outline-none focus:ring focus:ring-blue-500"
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
              class="bayangan_field @error('password') border-red-500 @else border-[#030723] @enderror w-full rounded-sm border-2 bg-white p-3 focus:outline-none focus:ring focus:ring-blue-500"
              value="{{ @old('password') }}" />
            @error('password')
              <p class="mt-2 text-red-500">{{ $message }}</p>
            @enderror
          </div>
          <div class="w-full px-4">
            <button type="submit"
              class="btnn w-full rounded-sm border-2 border-black bg-black py-3 px-8 text-white duration-300 ease-out hover:bg-white hover:text-black focus:outline-none focus:ring focus:ring-blue-500">
              Register
            </button>
          </div>
        </form>
        <div class="mt-4 w-full px-4">
          <p>Already have an Account? <span class="text-secondary"><a href="/login">Login</a></span> </p>
        </div>
      </div>
    </div>
  </section>
@endsection
