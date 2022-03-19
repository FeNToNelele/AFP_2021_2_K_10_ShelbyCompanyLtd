@extends('layouts.app')
@section('title', 'Kezelés')

@section('content')
<div class="flex h-screen">
    <a href="{{ route('createEvent') }}" class="m-auto bg-green-600 rounded-xl shadow-lg font-iight text-2xl px-5 py-2.5 text-gray-100 transition text-center hover:bg-green-500 hover:text-gray-100">
        Új esemény hozzáadása
    </a>
</div>
<div class="flex h-screen">
    <div class="mx-auto">
        @foreach($esemenyek as $esemeny)
        <div class="p-6 mx-3 max-w-sm inline-block align-middle bg-white rounded-lg">
            <a href="/events/{{ $esemeny->id }}">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $esemeny->megnevezes }}</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500">{{ $esemeny->leiras }}</p>
            <p class="mb-3 font-medium text-gray-500">Kezdet: {{ $esemeny->kezdet }}</p>
            <p class="mb-3 font-medium text-gray-500">Vége: {{ $esemeny->veg }}</p>
            <a href="{{ route('editEvent') }}" class="m-auto bg-yellow-600 rounded-xl shadow-lg font-iight text-2xl px-5 py-2.5 text-gray-100 transition text-center hover:bg-yellow-500 hover:text-gray-100">
                Módosítás
            </a>
            <a href="{{ route('deleteEvent') }}" class="m-auto bg-red-600 rounded-xl shadow-lg font-iight text-2xl px-5 py-2.5 text-gray-100 transition text-center hover:bg-red-500 hover:text-gray-100">
                Törlés
            </a>
        @endforeach
    </div>
</div>
@endsection