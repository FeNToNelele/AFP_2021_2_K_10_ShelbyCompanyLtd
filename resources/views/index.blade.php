@extends('layouts.app')
@yield('navbar')
@section('title', 'Főoldal')


@section('content')
<script type="text/javascript" src="{{ asset('js/events/extendPanel.js') }}"></script>

    <div class="bg-white rounded-xl shadow-lg mx-5 lg:mx-52 py-10 mt-10">
        <p class="font-light text-center text-3xl lg:text-5xl ">Üdvözöljük!</p>
    </div>

    <div class="bg-transparent my-5 rounded-lg shadow-sm lg:mx-52">
        <p class="font-light text-3xl lg:text-5xl text-center pb-5">Mai programjaink:</p>
    </div>

    @foreach( $maiEsemenyek as $esemeny )
    <div class="p-6 mx-3 max-w-sm inline-block align-middle bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
       <a href="/events/{{ $esemeny->id }}">
           <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $esemeny->megnevezes }}</h5>
       </a>
       <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $esemeny->leiras }}</p>
       @if(Auth::check())
       <a href="/events/{{ $esemeny->id }}" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
           Részletek
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
            </svg>
        </a>
       @endif
   </div>
    @endforeach
@endsection