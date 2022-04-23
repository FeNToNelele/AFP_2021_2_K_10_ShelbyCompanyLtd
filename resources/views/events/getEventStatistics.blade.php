@extends('layouts.app')

@section('title', 'Statisztika')
@section('content')
    <script src="{{ asset('js/table2excel.js') }}"></script>

    <div class="flex">
        <button id="export" class="m-auto my-3 bg-green-600 rounded-xl shadow-lg font-iight text-2xl px-5 py-2.5 text-gray-100 transition text-center hover:bg-green-500 hover:text-gray-100" onclick="">
            Letöltés Excel-táblázatként
        </button>
    </div>

    <div class="mx-3">
        <table class="w-full text-sm text-left text-gray-500 border-2 border-gray-700">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <th class="px-6 py-3">Név</th>
                <th class="px-6 py-3">E-Mail cím</th>
                <th class="px-6 py-3">Fiók típusa</th>
                <th class="px-6 py-3">Neptunkód</th>
                <th class="px-6 py-3">Lakhely</th>
                <th class="px-6 py-3">Szervezeti egység</th>
            </thead>
            <tbody>
                @foreach ($hallgatok as $hallgato)
                    <tr class="bg-white border-b">
                        <td>{{ $hallgato->name }}</td>
                        <td>{{ $hallgato->email }}</td>
                        <td>Hallgató</td>
                        <td>{{ $hallgato->neptunKod }}</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                @endforeach
                @foreach ($dolgozok as $dolgozo)
                    <tr>
                        <td>{{ $dolgozo->name }}</td>
                        <td>{{ $dolgozo->email }}</td>
                        <td>Dolgozó</td>
                        <td>-</td>
                        <td>-</td>
                        <td>{{ $dolgozo->szervezetiEgyseg }}</td>
                    </tr>
                @endforeach
                @foreach ($kulsosok as $kulsos)
                    <tr>
                        <td>{{ $kulsos->name }}</td>
                        <td>{{ $kulsos->email }}</td>
                        <td>Külső vendég</td>
                        <td>-</td>
                        <td>{{ $kulsos->telepules }}</td>
                        <td>-</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        var table2excel = new Table2Excel();

        document.getElementById('export').addEventListener('click', function() {
        table2excel.export(document.querySelectorAll('table'));
      });
    </script>
@endsection