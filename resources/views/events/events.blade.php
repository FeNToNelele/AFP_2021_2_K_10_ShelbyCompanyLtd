@extends('layouts.app')
@yield('navbar')
@section('title', 'Események')

@section('content')
<script type="text/javascript" src="{{ asset('js/events/extendPanel.js') }}"></script>

    <div class="bg-white rounded-xl shadow-lg mx-5 lg:mx-52 py-10 mt-10 mb-10">
        <p class="font-light text-center text-3xl lg:text-5xl ">Eseményeink:</p>
    </div>
    
    <div class="flex">
        <div class="m-auto">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 justify-center">
                @foreach($esemenyek as $esemeny)
                <div class="p-6 mx-3 max-w-sm inline-block align-middle bg-white rounded-lg border border-gray-200 shadow-md">
                    <a href="/events/{{ $esemeny->id }}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $esemeny->megnevezes }}</h5>
                    </a>
                    <p class="mb-3 text-gray-500">{{ $esemeny->leiras }}</p>
                    <p class="text-gray-500">Kezdet: {{ $esemeny->kezdet }}</p>
                    <p class="mb-4 text-gray-500">Vége: {{ $esemeny->veg }}</p>
                    <a href="/events/{{ $esemeny->id }}" class="py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg transition hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
                        Részletek
                    </a>
                </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection