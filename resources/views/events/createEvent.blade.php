@extends('layouts.app')
@section('title', 'Új esemény')

@section('content')
<script type="text/javascript" src="{{ asset('js/events/getCurrentDate.js') }}"></script>
<div class="flex h-screen">
    <div class="m-auto">
        <div class="p-10 bg-gray-100 rounded-lg border border-gray-200 shadow-md sm:p-6 lg:p-8">
            <form class="space-y-6" method="POST" action="{{ route('registerEvent') }}">
                @csrf
                <h3 class="text-2xl text-center text-gray-900">Új esemény</h3>
                <div>
                    <label for="megnevezes" class="block mb-2 text-sm font-medium text-gray-900">Megnevezés:</label>
                    <input id="megnevezes" type="text" class="form-control bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full" name="megnevezes" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Túrázás az Egeden">
                </div>
                <div class="mt-3">
                    <label for="kapacitas" class="block mb-2 text-sm font-medium text-gray-900">Hány fő jelentkezhet:</label><br>
                    <input type="number" name="kapacitas" id="kapacitas" class="form-control w-16 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block" min="0" max="1000" required>
                </div>
                <div class="mt-3 xl:w-96">
                    <label for="leiras" class="form-label inline-block mb-2 text-sm font-medium text-gray-900">
                        Adjon leírást az eseményről:
                    </label>
                    <textarea
                      class="
                        form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded-xl
                        transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="leiras" rows="5" name="leiras" placeholder="Tartson velünk az Eged hegyre, ahol megvizsgáljuk közösen a hegy élővilágát! Szeles környékről van szó, így mindenképp hozzon magával sapkát!"
                    ></textarea>
                </div>
                <div class="mt-3">
                    <label for="kezdet" class="block mb-2 text-sm font-medium text-gray-900">Kezdés időpontja:</label>
                    <input id="kezdet" name="kezdet" type='datetime-local' min="{{ date('Y-m-d'); }}T{{ date('h:i'); }}" onChange="setMin()" class="form-control bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full" required>
                </div>
                <div class="mt-3">
                    <label for="veg" class="block mb-2 text-sm font-medium text-gray-900">Véget ér:</label>
                    <input id="veg" name="veg" type='datetime-local' min="{{ date('Y-m-d'); }}T{{ date('h:i'); }}" class="form-control bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full" required>
                </div>
                <div class="mt-3">
                    <label for="helyszin" class="block mb-2 text-sm font-medium text-gray-900">Gyülekezés helyszíne:</label>
                    <input id="helyszin" type="text" class="form-control bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full" name="helyszin" value="{{ old('name') }}" required autofocus placeholder="EKKE E Épület bejárat">
                </div>
                <button type="submit" class="w-full mt-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Hozzáadás</button>
            </form>
        </div>
    </div>

</div>

<script>
    function setMin() {
        document.getElementById('veg').min = document.getElementById('kezdet').value;
        console.log("siker");
    }

</script>
@endsection