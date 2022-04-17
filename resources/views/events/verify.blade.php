@extends('layouts.app')
@section('title', 'Megjelenés igazolása')

@section('content')
<div class="flex h-screen">
    <div class="mx-auto">
        @if($applied != 0)
        <form action="{{ route('verify') }}" class="mt-5" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" value="{{ $id }}" name="esemenyId">
            <input type="hidden" value="{{ Auth::user()['id'] }}" name="felhasznaloId">
            <button type="submit" class="rounded-xl text-gray-100 bg-green-600 text-2xl px-5 py-2.5 transition hover:bg-green-500">Megjelentem</button>
        </form>
        @else
            <p>Nem jelentkeztél büdös kölke!</p>
        @endif
    </div>
</div>

@endsection