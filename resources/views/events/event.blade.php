@extends('layouts.app')
@section('title', 'Részletek')

@section('content')

<div class="bg-transparent my-5 rounded-lg shadow-sm lg:mx-52">
    <p class="font-light text-3xl lg:text-5xl text-center pb-5">ESEMÉNY NEVE:</p>
</div>

<div class="flex justify-center items-center h-screen">
    <div class="p-6 mx-3 max-w-md inline-block align-middle bg-white rounded-lg font-light border border-gray-200 shadow-xl dark:bg-gray-800 dark:border-gray-700 text-gray-100">
        <p class="mb-5 lg:text-3xl">
            ESEMÉNY LEÍRÁSA Tartson velünk a 20 km-es túrán, ahol felfedezzük a Bükk természetét!
        </p>
        <p class="mb-2 text-lg lg:text-3xl ">
            Kezdet: KEZDET IDŐPONT
        </p>
        <p class="mb-10 lg:text-3xl">
            Véget ér: KEZDET VÉGE
        </p>
        <p class="mb-3 lg:text-3xl">Szervező: SZERVEZŐ NEVE</p>
        
        <p class="mb-10 lg:text-3xl">
            Helyszín: HELYSZÍN NEVE
        </p>
        <p class="mb-3 lg:text-3xl text-center">
            <i>Jelentkezhet még: X fő</i>
        </p>
        <form action="" method="POST">
            
            <button type="submit" class="flex justify-center items-center h-screen rounded-lg w-full text-3xl py-2 px-3 my-5 text-sm font-medium text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Jelentkezek
            </button>
        </form>
    </div>
</div>


@endsection