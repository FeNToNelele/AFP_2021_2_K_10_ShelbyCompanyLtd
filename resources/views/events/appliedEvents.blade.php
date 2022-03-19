
@extends('layouts.app')
@yield('navbar')
@section('title', 'Eseményeim')

@section('content')
<script type="text/javascript" src="{{ asset('js/events/extendPanel.js') }}"></script>

<div class="bg-white rounded-xl shadow-lg mx-5 lg:mx-52 py-10 mt-10 mb-10">
    <p class="font-light text-center text-3xl lg:text-5xl ">Eseményeim:</p>
</div>
@if( Auth::user()['accountType'] == 'teacher' )
<div class="flex h-screen">
    <a href="{{ route('createEvent') }}" class="m-auto bg-green-600 rounded-xl shadow-lg font-iight text-2xl px-5 py-2.5 text-gray-100 transition text-center hover:bg-green-500 hover:text-gray-100">
        Új esemény hozzáadása
    </a>
</div>
@endif

    <div class="flex justify-center items-center h-screen">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 justify-center">
            <!--Programok ciklikusan-->
            @foreach($esemenyek as $esemeny)
            <div class="p-6 mx-3 max-w-sm inline-block align-middle bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <a href="/events/{{ $esemeny->id }}">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $esemeny->megnevezes }}</h5>
                </a>
                <p class="mb-3 font-normal text-gray-400 dark:text-gray-400">{{ $esemeny->leiras }}</p>
                <p class="mb-3 font-medium text-gray-400 dark:text-gray-400">Kezdet: {{ $esemeny->kezdet }}</p>
                <p class="mb-3 font-medium text-gray-400 dark:text-gray-400">Vége: {{ $esemeny->veg }}</p>
                <a href="/events/{{ $esemeny->id }}">
                <div class="flex justify-center items-center h-screen py-2 px-3 my-5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Részletek
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                    </svg>
                </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
