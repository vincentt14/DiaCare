{{-- @dd($user);   --}}
<div class="w-full self-center px-4">
  <h1 class="text-2xl font-bold text-primary lg:text-3xl">
    Lastest diagnose <span class="text-secondary">History</span>.
  </h1>
  <div class="mt-5">
    <div
      class="bayangan_field mb-6 grid max-w-xl grid-cols-2 border-2 border-black bg-white py-2 text-slate-500 md:max-w-2xl">
      @if (auth()->user()->result == '')
        <div class="my-2 mx-3 self-center text-lg font-light text-primary md:text-xl">
          There is no history, diagnose now!
        </div>
        <button
          class="my-2 mx-3 rounded-sm border-2 border-black bg-black py-3 px-8 text-white duration-300 ease-out hover:bg-white hover:text-black focus:outline-none focus:ring focus:ring-blue-500">
          <a href="/diagnose">Diagnose</a>
        </button>
      @else
        <div class="font-base my-2 mx-2 text-lg text-primary md:text-xl">
          Date : <span class="text-slate-500">{{ auth()->user()->name }}</span>
        </div>
        <div class="font-base my-2 mx-2 text-lg text-primary md:text-xl">
          Result : <span class="text-red-500">{{ auth()->user()->result }}</span>
        </div>
      @endif
    </div>

    <div class="w-full lg:mx-auto">
      <div class="mb-10 w-full">
        <div class="w-full rounded-sm border border-[#BBBBBB] bg-white p-3">
          <div class="m-3">
            @if (auth()->user()->result == '')
              <h1 class="mt-1 mb-3 text-center text-lg font-light text-primary lg:text-2xl">There is no result.</h1>
            @else
              <p class="font-base mb-3 text-lg text-primary lg:text-2xl">{{ auth()->user()->result }}</p>
              <p class="text-justify text-lg font-light text-primary">Type 1 diabetes is thought to be caused by an
                autoimmune reaction (the body attacks itself by mistake). This reaction stops your body from making
                insulin. Approximately 5-10% of the people who have diabetes have type 1. Symptoms of type 1 diabetes
                often develop quickly. It’s usually diagnosed in children, teens, and young adults. If you have type 1
                diabetes, you’ll need to take insulin every day to survive. Currently, no one knows how to prevent type
                1
                diabetes.</p>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
