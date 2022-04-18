@extends('layouts.app')
@section('title', 'Értesítés')

@section('content')
  @if (Session::has('message'))
  <div class="mx-auto mt-3 py-2.5 rounded-xl bg-white shadow-xl">
    <div class="px-2 text-3xl text-black font-light text-center">{{ Session::get('message') }}</div>
  </div>
  @else
  <div class="mx-auto mt-3 p-3 rounded-xl bg-white shadow-xl">
    <div class="px-2 text-3xl text-black font-light text-center">Sikeres bejelentkezés!</div>
  </div>
  @endif
@endsection
