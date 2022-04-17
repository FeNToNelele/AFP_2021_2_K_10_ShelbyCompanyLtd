@extends('layouts.app')
@section('title', 'Részletek')

@section('content')
<div class="bg-transparent my-3 rounded-lg lg:mx-52">
    <p class="font-light text-3xl lg:text-5xl text-center">{{ $esemeny->megnevezes }}</p>
</div>

<div class="flex h-screen">
    <div class="mx-auto">
        <div class="p-3 inline-block align-middle bg-white rounded-lg font-light border shadow-xl text-gray-700">
            <p class="font-semibold text-black mb-5 text-2xl">
                {{ $esemeny->leiras }}
            </p>
            <p class="mb-2 text-2xl">
                Kezdet: {{ $esemeny->kezdet }}
            </p>
            <p class="mb-10 text-2xl">
                Véget ér: {{ $esemeny->veg }}
            </p>
            <p class="mb-3 text-2xl">Szervező: {{ $szervezo->name }}</p>
            
            <p class="mb-10 text-2xl">
                Helyszín: {{ $esemeny->helyszin }}
            </p>
            <p class="mb-3 text-2xl text-center">
                <i>Jelentkezhet még: {{ $esemeny->kapacitas - $jelentkezesek }} fő</i>
            </p>
            @if($esemeny->dolgozoid == Auth::user()['id'])
                <form action="{{ route('qr') }}" method="POST">
                    @csrf
                    <input type="hidden" name="eventId" value="{{ $esemeny->id }}" />
                    <button type="submit">QR kód</button>
                </form>
            @endif
            @if(!$jelentkezettE)
                @guest
                    <a href="{{ route('login') }}" class="flex justify-center items-center h-screen rounded-lg w-full text-3xl py-2 px-3 my-5 font-medium text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
                        Lépjen be először, hogy jelentkezhessen!
                    </button>
                @else
                    <form action="{{ route('apply') }}" method="POST">
                        @csrf
                        <input type="hidden" name="esemenyId" value="{{ $esemeny->id }}">
                        <button type="submit" class="rounded-lg w-full py-2.5 px-3 text-sm font-medium text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
                            Jelentkezek
                        </button>
                    </form>
                @endguest
            @else
            <form action="/abandon" method="post">
                @csrf
                {{ method_field('delete') }}
                <input type="hidden" value="{{ $esemeny->id }}" name="esemenyId">
                <button class="rounded-lg w-full py-2.5 px-3 text-lg font-medium text-center text-white bg-blue-700 transition hover:bg-blue-800 focus:ring-4 focus:ring-blue-300" type="submit">Jelentkezés visszavonása</button>
            </form>
            @endif
        </div>
    </div>

</div>
@endsection
