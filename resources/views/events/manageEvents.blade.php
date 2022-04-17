@extends('layouts.app')
@section('title', 'Kezelés')

@section('content')
<div class="flex">
    <div class="grid grid-rows-1 grid-cols-3 w-full my-5">
        <div></div>
        <div>
            <a href="{{ route('createEvent') }}" class="m-auto bg-green-600 rounded-xl shadow-lg font-iight text-2xl px-5 py-2.5 text-gray-100 transition text-center hover:bg-green-500 hover:text-gray-100">
                Új esemény hozzáadása
            </a>
        </div>
        <div></div>
    </div>
</div>

<div class="flex h-screen">
    <div class="mx-auto">
        @foreach($esemenyek as $esemeny)
        <div class="p-6 mx-3 max-w-sm inline-block align-middle bg-white rounded-lg">
            <a href="/events/{{ $esemeny->id }}">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $esemeny->megnevezes }}</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700">{{ $esemeny->leiras }}</p>
            <p class="mb-3 font-medium text-gray-700">Kezdet: {{ $esemeny->kezdet }}</p>
            <p class="mb-3 font-medium text-gray-700">Vége: {{ $esemeny->veg }}</p>
            <form method="POST" action="{{ route('editEventForm') }}" class="mb-2">
                @csrf
                <input type="hidden" value="{{ $esemeny->id }}" name="esemenyId">
                <button type="submit" class="m-auto bg-green-600 rounded-xl shadow-lg font-iight text-2xl px-5 py-2.5 text-gray-100 transition hover:bg-green-500 hover:text-black">QR-Kód generálása</button>
            </form>
            <form method="POST" action="{{ route('editEventForm') }}" class="mb-2">
                    @csrf
                <input type="hidden" value="{{ $esemeny->id }}" name="esemenyId">
                <button type="submit" class="m-auto bg-yellow-400 rounded-xl shadow-lg font-iight text-2xl px-5 py-2.5 text-gray-100 transition hover:bg-yellow-300 hover:text-black">Módosítás</button>
            </form>
            <form action = "{{ route('deleteEvent') }}" method="POST">
                @csrf
                {{ method_field('delete') }}
                <input type="hidden" name="esemenyId" value="{{ $esemeny->id }}">
                <button type="submit" value="Törlés"  class="m-auto bg-red-900 rounded-xl shadow-lg font-iight text-2xl px-5 py-2.5 text-gray-100 transition hover:bg-red-700 hover:text-gray-100">Törlés</button>
            </form>
        </div>
        @endforeach
    </div>
</div>
@endsection