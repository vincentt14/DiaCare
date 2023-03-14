@extends('pages.discussion')

@section('section')
  <div class="w-full self-center px-4">
    <div class="flex flex-col md:flex-row">
      <input type="text" placeholder="search for discussion"
        class="bayangan_field my-4 w-full rounded-sm border-2 border-[#030723] bg-white p-3 focus:outline-none focus:ring focus:ring-blue-500 lg:w-1/2" />
      <button
        class="btnn rounded-sm border-2 border-black bg-black py-3 px-8 text-white duration-300 ease-out hover:bg-white hover:text-black focus:outline-none focus:ring focus:ring-blue-500 md:my-3.5 md:ml-10 md:py-0">
        <a href="/create">Create Discussion</a>
      </button>
    </div>
  </div>
@endsection
