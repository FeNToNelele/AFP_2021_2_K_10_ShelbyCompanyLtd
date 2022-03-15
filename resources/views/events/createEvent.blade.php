@extends('layouts.app')
@section('title', 'Új esemény')

@section('content')
<script type="text/javascript" src="{{ asset('js/events/getCurrentDate.js') }}"></script>
<div class="flex justify-center items-center h-screen">
    <div class="mt-10 p-10 w-96 bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 lg:p-8 dark:bg-gray-800 dark:border-gray-700">
        <form class="space-y-6" method="POST" action="{{ route('register') }}">
            @csrf
            <h3 class="text-2xl text-center text-gray-100 dark:text-gray-300 my-5">Új esemény</h3>
            <div>
                <label for="megnevezes" class="block mb-2 text-sm font-medium text-gray-100 dark:text-gray-300">Megnevezés:</label>
                <input id="megnevezes" type="text" class="form-control bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black" name="megnevezes" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Túrázás az Egeden">
            </div>
            <div class="mt-5">
                <label for="kapacitas" class="block mb-2 text-sm font-medium text-gray-100 dark:text-gray-300">Hány fő jelentkezhet:</label><br>
                <input type="number" name="kapacitas" id="kapacitas" class="form-control w-16 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black" min="0" max="1000" required>
                <span class="text-gray-100"> fő</span>
            </div>
            <div class="mt-5 xl:w-96">
                <label for="leiras" class="form-label inline-block mb-2 text-sm font-medium text-gray-100 dark:text-gray-300">
                    Adjon leírást az eseményről:
                </label>
                <textarea
                  class="
                    form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded-xl
                    transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                  id="leiras" rows="5" placeholder="Tartson velünk az Eged hegyre, ahol megvizsgáljuk közösen a hegy élővilágát! Szeles környékről van szó, így mindenképp hozzon magával sapkát!"
                ></textarea>
            </div>
            <div class="mt-5">
                <label for="kezdet" class="block mb-2 text-sm font-medium text-gray-100 dark:text-gray-300">Kezdés időpontja:</label>
                <input id="kezdet" type='datetime-local' min='setNow()' class="form-control bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black" required></input>
            </div>
            <div class="mt-5">
                <label for="veg" class="block mb-2 text-sm font-medium text-gray-100 dark:text-gray-300">Véget ér:</label>
                <input id="veg" type='datetime-local' min='setNow()' class="form-control bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black" required></input>
            </div>
            <div class="mt-5">
                <label for="helyszin" class="block mb-2 text-sm font-medium text-gray-100 dark:text-gray-300">Gyülekezés helyszíne:</label>
                <input id="helyszin" type="text" class="form-control bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black" name="helyszin" value="{{ old('name') }}" required autofocus placeholder="EKKE E Épület bejárat">
            </div>
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Hozzáadás</button>
        </form>
    </div>
</div>
@endsection