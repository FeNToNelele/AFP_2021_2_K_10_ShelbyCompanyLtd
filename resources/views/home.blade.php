@extends('layouts.app')
@section('title', 'Értesítés')

@section('content')
<div class="flex h-screen">
  @if (Session::has('message'))
  <div class="m-auto py-2.5 rounded-xl bg-white shadow-xl">
    <div class="px-5 text-3xl text-black font-light">{{ Session::get('message') }}</div>
  </div>
  @else
  <div class="lg:m-auto py-2.5 rounded-xl bg-white shadow-xl">
    <div class="px-5 text-3xl text-black font-light">Sikeres bejelentkezés!</div>
  </div>
  @endif
</div>


@endsection
