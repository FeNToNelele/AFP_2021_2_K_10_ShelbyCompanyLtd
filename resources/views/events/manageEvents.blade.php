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
            <form method="POST" action="{{ route('editEventForm') }}" >
                @csrf
                <input type="hidden" value="{{ $esemeny->id }}" name="esemenyId">
                <input type="submit" value="Módosítás" class="m-auto bg-red-600 rounded-xl shadow-lg font-iight text-2xl px-5 py-2.5 text-gray-100 transition text-center hover:bg-red-500 hover:text-gray-100">
            </form>
            <form action = "{{ route('deleteEvent') }}" method="POST">
                @csrf
                {{ method_field('delete') }}
                <input type="hidden" name="esemenyId" value="{{ $esemeny->id }}">
                <input type="submit" value="Törlés"  class="m-auto bg-red-600 rounded-xl shadow-lg font-iight text-2xl px-5 py-2.5 text-gray-100 transition text-center hover:bg-red-500 hover:text-gray-100"> 
            </form>
        </div>
        @endforeach
    </div>
</div>
@endsection