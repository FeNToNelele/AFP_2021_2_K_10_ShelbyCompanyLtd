@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center h-screen">
    <div class="card mt-10">
        <div class="card-body">
            @if (Session::has('message'))
            <div class="flex justify-center font-sans text-center px-5 py-3 rounded-xl bg-white shadow-xl">
              <div class="w-full md:w-1/2 mb-10">
                <div class="px-5 text-3xl text-black font-light">{{ Session::get('message') }}</div>
              </div>
            </div>
            @else
            <div class="flex justify-center font-sans text-center px-5 py-3 rounded-xl bg-white shadow-xl">
                <div class="w-full md:w-1/2 mb-10">
                  <div class="px-5 text-3xl text-black font-light">Sikeres bejelentkezés!</div>
                </div>
              </div>
            @endif
        </div>
    </div>
</div>


@endsection
