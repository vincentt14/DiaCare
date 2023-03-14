@extends('layouts.app')

@section('content')
  <section class="pt-28 pb-24 lg:pt-36 lg:pb-32">
    <div class="container">
      <div class="flex flex-wrap">
        <div class="w-full self-center px-4 lg:w-1/2">
          <h1 class="text-base font-medium text-primary md:text-xl">
            Welcome to
            <p class="mt-1 block text-4xl font-bold text-secondary lg:text-5xl">Dia<span class="text-primary">Care</span>.
            </p>
          </h1>
          <h2 class="mb-5 mt-2 text-lg font-light text-primary lg:text-2xl">A place where you can find all books around the
            world.</h2>
          <h2 class="mb-5 mt-2 text-lg font-light text-primary lg:text-2xl">
            You can
            <span style=" color: 'black', fontWeight: '400' ">
              test
              {{-- <Typewriter loop cursor cursorStyle="|" typeSpeed={70} deleteSpeed={70} delaySpeed={1500} words={["find your favourite books.", "review books.", "downloads books", "save books.", "add your own books."]} /> --}}
            </span>
          </h2>

          <p class="mb-10 max-w-md text-slate-500">
            "A reader lives a thousand lives before he dies."
            <span class="mt-1 block text-secondary">- George R. R. Martin.</span>
          </p>
          <div class="flex flex-col md:flex-row">
            <button
              class="btnn mb-5 rounded-sm border-2 border-black bg-black py-3 px-8 text-white duration-300 ease-out hover:bg-white hover:text-black focus:outline-none focus:ring focus:ring-blue-500 md:mb-16 lg:mb-20">
              <a href="#books">View All Books</a>
            </button>
            <button
              class="btnn mb-16 rounded-sm border-2 border-black bg-black py-3 px-8 text-white duration-300 ease-out hover:bg-white hover:text-black focus:outline-none focus:ring focus:ring-blue-500 md:ml-10 lg:mb-20">
              <Link to="/add">Add A Book</Link>
            </button>
          </div>
          <StatusUser books={books} />
        </div>
        <div class="bayangan hidden w-full self-end rounded-sm border-2 border-primary bg-white px-4 md:block lg:w-1/2">
          <div class="mt-10 lg:right-0">
            <Lottie options={defaultOptions} height={400} width={400} />
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="books" class="bg-[#f2f6fc] pb-16 pt-32 lg:pb-28">
    <div class="container">
      <div class="w-full px-4">
        <div class="mb-16 max-w-xl">
          <h4 class="mb-2 text-lg font-semibold text-secondary">Books</h4>
          <h2 class="mt-1 mb-4 text-4xl font-bold text-primary lg:text-5xl">Available Books</h2>
          <p class="text-md font-mono font-medium text-slate-500 lg:text-lg">
            View book detail by clicking <span class="font-bold text-secondary">the book title</span>
          </p>
          {{-- <SearchInput keyword={keyword} keywordChange={onKeywordChangeHandler} /> --}}
        </div>
      </div>
    </div>
    {{-- <BookList books={filteredBooks} /> --}}
  </section>
@endsection
