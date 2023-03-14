@extends('layouts.app')

@section('content')
  <section class="pt-28 pb-24 lg:pt-36 lg:pb-32">
    <div class="container">
      <div class="w-full px-4">
        <div class="mx-auto mb-10 max-w-xl text-center">
          <h2 class="text-3xl font-bold text-primary lg:text-3xl">Login</h2>
        </div>
      </div>
      <div class="mx-auto w-4/5 md:w-2/5">
        <form action="/" method="post">

          <div class="mb-5 w-full px-4">
            <label for="username" class="text-base font-bold text-primary">
              Username
            </label>
            <input type="text" id="username" name="username"
              class="bayangan_field w-full rounded-sm border-2 border-[#030723] bg-white p-3 focus:outline-none focus:ring focus:ring-blue-500"
              required autofocus />
          </div>
          <div class="mb-8 w-full px-4">
            <label for="password" class="text-base font-bold text-primary">
              Password
            </label>
            <input type="password" id="password" name="password"
              class="bayangan_field w-full rounded-sm border-2 border-[#030723] bg-white p-3 focus:outline-none focus:ring focus:ring-blue-500"
              required />
          </div>
          <div class="w-full px-4">
            <button type="submit"
              class="btnn w-full rounded-sm border-2 border-black bg-black py-3 px-8 text-white duration-300 ease-out hover:bg-white hover:text-black focus:outline-none focus:ring focus:ring-blue-500">
              Login
            </button>
          </div>
        </form>
        <div class="mt-3 w-full px-4">
          <p>Don't Have an Account? <span class="text-secondary"><a href="/register">Register</a></span> </p>
        </div>
      </div>
    </div>
  </section>
@endsection
