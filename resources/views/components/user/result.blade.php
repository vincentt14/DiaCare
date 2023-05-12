{{-- @dd($person); --}}
<div class="w-full self-center px-4">
  <div class="bayangan_field mt-5 mb-6 rounded-sm border-2 border-black bg-white text-slate-500 md:max-w-3xl">
    @if (count($person))
      <button type="button" id="buttonTrigger"
        class="w-full border-2 border-black bg-black py-3 px-8 text-white duration-300 ease-out hover:bg-white hover:text-black focus:outline-none focus:ring focus:ring-blue-500">
        Diagnose History
      </button>
      <table id="historyTable" class="hidden w-full rounded-xl border text-slate-800">
        <thead class="text-slate-700">
          <tr>
            <th class="border bg-slate-50 px-6 py-3">
              No
            </th>
            <th class="border bg-slate-50 px-6 py-3">
              Diagnose Date and Time
            </th>
            <th class="border bg-slate-50 px-6 py-3">
              Result
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($person as $per)
            <tr class="px-6 py-3 text-center">
              <td class="border px-6 py-2">{{ $loop->iteration }}</td>
              <td class="border px-6 py-2 text-justify">
                {{ date('d F Y', strtotime($per['created_at'])) }} at
                {{ date('g:i a', strtotime($per['created_at'])) }}</td>
              <td class="border px-6 py-2 text-justify">{{ $per['result'] }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @else
      <div class="flex items-center">
        <div class="my-2 mx-3 w-full text-lg font-light text-primary md:text-xl">
          There is no history, diagnose now!
        </div>
        <button
          class="my-2 mx-3 w-full rounded-sm border-2 border-black bg-black py-3 px-8 text-white duration-300 ease-out hover:bg-white hover:text-black focus:outline-none focus:ring focus:ring-blue-500">
          <a href="/diagnose">Diagnose Right Now!</a>
        </button>
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
<script>
  const buttonTrigger = document.getElementById('buttonTrigger');
  const historyTable = document.getElementById('historyTable');

  buttonTrigger.addEventListener('click', function() {
    historyTable.classList.toggle('hidden')
  });
</script>
