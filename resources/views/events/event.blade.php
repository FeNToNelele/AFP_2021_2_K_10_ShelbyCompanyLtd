@extends('layouts.app')
@section('title', 'Részletek')

@section('content')
<div class="bg-transparent my-5 rounded-lg shadow-sm lg:mx-52">
    <p class="font-light text-3xl lg:text-5xl text-center pb-5">{{ $esemeny->megnevezes }}</p>
</div>

<div class="flex justify-center items-center h-screen">
    <div class="p-6 mx-3 max-w-md inline-block align-middle bg-white rounded-lg font-light border border-gray-200 shadow-xl dark:bg-gray-800 dark:border-gray-700 text-gray-100">
        <p class="mb-5 lg:text-3xl">
            {{ $esemeny->leiras }}
        </p>
        <p class="mb-2 text-lg lg:text-3xl ">
            Kezdet: {{ $esemeny->kezdet }}
        </p>
        <p class="mb-10 lg:text-3xl">
            Véget ér: {{ $esemeny->veg }}
        </p>
        <p class="mb-3 lg:text-3xl">Szervező: {{ $szervezo->name }}</p>
        
        <p class="mb-10 lg:text-3xl">
            Helyszín: {{ $esemeny->helyszin }}
        </p>
        <p class="mb-3 lg:text-3xl text-center">
            <i>Jelentkezhet még: {{ $esemeny->kapacitas - $jelentkezesek }} fő</i>
        </p>
        
        @if(!$jelentkezettE)
            @guest
                <a href="{{ route('login') }}" class="flex justify-center items-center h-screen rounded-lg w-full text-3xl py-2 px-3 my-5 text-sm font-medium text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Lépjen be először, hogy jelentkezhessen!
                </button>
            @else
                <form action="{{ route('apply') }}" method="POST">
                    @csrf
                    <input type="hidden" name="esemenyId" value="{{ $esemeny->id }}">
                    <button type="submit" class="flex justify-center items-center h-screen rounded-lg w-full text-3xl py-2 px-3 my-5 text-sm font-medium text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Jelentkezek
                    </button>
                </form>
            @endguest
        @else
        <form action="/abandon" method="post">
            @csrf
            {{ method_field('delete') }}
            <input type="hidden" value="{{ $esemeny->id }}" name="esemenyId">
            <button class="flex justify-center items-center h-screen rounded-lg w-full text-3xl py-2 px-3 my-5 text-sm font-medium text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="submit">Jelentkezés visszavonása</button>
        </form>
        @endif
    </div>
</div>
@endsection
