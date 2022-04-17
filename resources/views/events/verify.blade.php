@extends('layouts.app')
@section('title', 'Megjelenés igazolása')

@section('content')
<div class="flex h-screen">
    <div class="mx-auto">
        <form action="" class="mt-5">
            <input type="hidden" value="{{ $esemeny->id }}" name="esemenyId">
            <input type="hidden" value="{{ $felhasznalo->id }}" name="felhasznaloId">
            <button type="submit" class="rounded-xl text-gray-100 bg-green-600 text-2xl px-5 py-2.5 transition hover:bg-green-500">Megjelentem</button>
        </form>
    </div>
</div>

@endsection