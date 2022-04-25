@extends('layouts.app')
@section('title', 'Kezelés')

@section('content')

@if (Session::has('message'))
    <div class="mx-auto mt-3 py-2.5 rounded-xl bg-white shadow-xl">
        <p class="px-2 text-3xl text-black font-light text-center">{{ Session::get('message') }}</p>
    </div>
@endif
<div class="flex mt-10 mb-5">
    <div class="mx-auto">
        <form action="{{ route('createEvent') }}" method="GET">
            <button type="submit" onclick="{{ route('createEvent') }}" class="m-auto bg-green-600 rounded-xl shadow-lg font-iight text-2xl px-5 py-2.5 text-gray-100 transition text-center hover:bg-green-500 hover:text-gray-100">Új esemény hozzáadása</button>
        </form>
    </div>
</div>

<div class="flex h-screen">
    <div class="mx-auto">
        @foreach($esemenyek as $esemeny)
        <div id='pdf_body#{{ $esemeny->id }}' class="p-6 mx-3 max-w-sm inline-block align-middle bg-white rounded-lg">
            <a href="/events/{{ $esemeny->id }}">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $esemeny->megnevezes }}</h5>
            </a>
            <div class="flex s-screen" id="qrcode{{ $esemeny->id }}"></div>
            <p class="mb-3 font-normal text-gray-700">{{ $esemeny->leiras }}</p>
            <p class="mb-3 font-medium text-gray-700">Kezdet: {{ $esemeny->kezdet }}</p>
            <p class="mb-3 font-medium text-gray-700">Vége: {{ $esemeny->veg }}</p>
            <button type="submit" id="btnGenerate#{{ $esemeny->id }}" data-id="{{ $esemeny->id }}" class="QRBtn m-auto mb-2 bg-green-600 rounded-xl shadow-lg font-iight text-2xl px-5 py-2.5 text-gray-100 transition hover:bg-green-500 hover:text-black inline">QR-Kód generálása</button>
            
            <form action="{{ route('statistics', $esemeny->id) }}" method="POST">
                @csrf
                <input type="hidden" value="{{ $esemeny->id }}" name="esemenyId">
                <button type="submit" id="getEventStatistics#{{ $esemeny->id }}" class="m-auto mb-2 bg-blue-600 rounded-xl shadow-lg font-iight text-2xl px-5 py-2.5 text-gray-100 transition hover:bg-blue-500 hover:text-black inline">Statisztika</button>
            </form>

            <form method="POST" action="{{ route('editEventForm', $esemeny->id) }}" class="mb-2">
                @csrf
                <input type="hidden" value="{{ $esemeny->id }}" name="esemenyId">
                <button type="submit" id="updateForm#{{ $esemeny->id }}" class="m-auto bg-yellow-400 rounded-xl shadow-lg font-iight text-2xl px-5 py-2.5 text-gray-100 transition hover:bg-yellow-300 hover:text-black inline">Módosítás</button>
            </form>
            <form action = "{{ route('deleteEvent') }}" method="POST">
                @csrf
                {{ method_field('delete') }}
                <input type="hidden" name="esemenyId" value="{{ $esemeny->id }}">
                <button type="submit" value="Törlés" id="deleteForm#{{ $esemeny->id }}" class="m-auto bg-red-900 rounded-xl shadow-lg font-iight text-2xl px-5 py-2.5 text-gray-100 transition hover:bg-red-700 hover:text-gray-100 inline">Törlés</button>
            </form>
        </div>
        @endforeach
    </div>
</div>
@endsection
