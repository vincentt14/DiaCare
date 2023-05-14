{{-- @dd($medicines); --}}
<div class="w-full self-center px-4">
  <div class="flex flex-wrap">
    <div class="bayangan_field mt-5 mb-6 self-center rounded-sm border-2 border-black bg-white text-slate-500 lg:w-2/3">
      @if (count($person))
        <button type="button" id="buttonTrigger" onclick="showHistory()"
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
    <div class="mt-5 mb-6 hidden w-full self-center lg:w-1/3" id="lottieHistory">
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
      <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_q4uh69ab.json" background="transparent"
        speed="1" style="width: 250px; height: 250px;" loop autoplay class="mx-auto"></lottie-player>
    </div>
  </div>
  <div class="w-full lg:mx-auto">
    <div class="w-full">
      <div class="w-full rounded-sm border border-[#BBBBBB] bg-white p-3">
        <div class="m-3">
          @if (count($person))
            @php
              $results = $diseases->where('diseases', $p['result']);
              // echo $results;
            @endphp
            @foreach ($results as $result)
              <p class="font-base mb-3 text-lg text-primary lg:text-2xl">{{ $result['diseases'] }}</p>
              <div class="h-[170px] overflow-hidden rounded-sm border-2 border-secondary shadow-lg">
                <img src="{{ $result['img'] }}" alt="{{ $result['diseases'] }}" class="h-full w-full object-cover" />
              </div>
              <p class="mt-5 text-justify text-lg font-bold text-primary">Type:</p>
              <p class="mt-1 text-justify text-lg font-light text-primary">{{ $result['type'] }}</p>
              <p class="mt-5 text-justify text-lg font-bold text-primary">Description:</p>
              <p class="mt-1 text-justify text-lg font-light text-primary">{{ $result['description'] }}</p>
              @if ($result['diseases'] == 'Negative')
              @else
                <p class="mt-5 text-justify text-lg font-bold text-primary">Solutions:</p>
                <ol>
                  @foreach ($solutions as $solution)
                    @if ($solution['disease_id'] == $result['id'])
                      <li class="mt-1 text-justify text-lg font-light text-primary">• {{ $solution['solution'] }}
                      </li>
                    @endif
                  @endforeach
                </ol>
                <p class="mt-5 text-justify text-lg font-bold text-primary">Medicines:</p>
                <ol>
                  @foreach ($medicines as $medicine)
                    @if ($medicine['disease_id'] == $result['id'])
                      <li class="mt-1 text-justify text-lg font-light text-primary">• {{ $medicine['name'] }}
                      </li>
                    @endif
                  @endforeach
                </ol>
              @endif
            @endforeach
          @else
            <h1 class="mt-1 mb-3 text-center text-lg font-light text-primary lg:text-2xl">There is no
              result.</h1>
          @endif
        </div>
      </div>
    </div>
  </div>
  @if (count($person))
    @if ($p['result'] == 'Negative')
      @include('components.prevent')
    @else
    @endif
  @else
    @include('components.prevent')
  @endif
</div>
<script>
  const historyTable = document.getElementById('historyTable');
  const lottieHistory = document.getElementById('lottieHistory');

  const showHistory = () => {
    historyTable.classList.toggle('hidden')
    lottieHistory.classList.toggle('hidden')
  }
</script>
