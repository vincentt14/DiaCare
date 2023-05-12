{{-- @dd($diagnoseResults[1]['result']); --}}
@extends('layouts.app')

@section('content')
  <section class="pt-28 pb-24 lg:pt-36 lg:pb-32">
    <div class="container">
      <div class="flex flex-col lg:flex-row">
        <div class="w-full self-center px-4">
          <h1 class="text-base font-medium text-primary md:text-xl">
            Welcome to
            <p class="mt-1 block text-4xl font-bold text-secondary lg:text-5xl">Dia<span class="text-primary">Care</span>.
            </p>
          </h1>
          <h2 class="mb-5 mt-2 text-lg font-light text-primary lg:text-2xl">Dashboard. <span
              class="font-bold capitalize">{{ auth()->user()->name }}</span></h2>
        </div>
        <div class="grid w-full grid-cols-2 gap-1 self-center px-4">
          <div class="rounded-[4px] border border-blue-500 bg-blue-200 px-3 py-7 text-center">
            <p class="font-base text-base text-primary lg:text-xl">
              Diagnosed
            </p>
            <h1 class="text-4xl font-bold text-primary lg:text-4xl">
              @foreach ($diagnoseResults as $diagnoseResult)
                @if ($diagnoseResult['user_id'] == auth()->user()->id)
                  {{ count($diagnoseResults) }}x
                @else
                  <span class="text-slate-500">0x</span>
                @endif
              @endforeach
            </h1>
          </div>
          <div class="rounded-[4px] border border-violet-500 bg-violet-200 p-3 py-7 text-center">
            <p class="font-base text-base text-primary lg:text-xl">
              Latest Result
            </p>
            <h1 class="text-3xl font-bold text-primary lg:text-4xl">
              @foreach ($diagnoseResults as $diagnoseResult)
                @if ($diagnoseResult['user_id'] == auth()->user()->id)
                  {{ $diagnoseResult['result'] }}
                @else
                  <span class="text-slate-500">No Result</span>
                @endif
              @endforeach
            </h1>
          </div>
        </div>
      </div>

      @include('components.user.result')
    </div>
  </section>
@endsection
