@extends('layouts.app')
@yield('navbar')
@section('title', 'Események')

@section('content')
<script type="text/javascript" src="{{ asset('js/events/extendPanel.js') }}"></script>

    <div class="bg-white rounded-xl shadow-lg mx-5 lg:mx-52 py-10 mt-10 mb-10">
        <p class="font-light text-center text-3xl lg:text-5xl ">Eseményeink:</p>
    </div>
    
    <div class="flex justify-center items-center h-screen">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 justify-center">
            <!--Programok ciklikusan-->
            <div class="p-6 mx-3 max-w-sm inline-block align-middle bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Túrázás a Bükkbe</h5>
                </a>
                <p class="mb-3 font-normal text-gray-400 dark:text-gray-400">Tartson velünk a 20 km-es túrán, ahol felfedezzük a Bükk természetét!</p>
                <p class="mb-3 font-medium text-gray-400 dark:text-gray-400">Kezdet: 2022. március 14. 17:00</p>
                <p class="mb-3 font-medium text-gray-400 dark:text-gray-400">Vége: 2022. március 14. 19:00</p>
                <div class="flex justify-center items-center h-screen py-2 px-3 my-5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="extendPanel(1)">
                    Részletek
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                    </svg>
                </div>
                <div class="bg-gray-300 rounded-xl shadow-lg hidden transition-all" id="1">
                    <p class="text-left font-light p-2">
                        Szervező: Kiss János
                    </p>
                    <p class="text-left font-light p-2">
                        Helyszín: EKKE E épület
                    </p>
                    <p class="text-left font-light p-2">
                        Szabad hely: 19 fő
                    </p>
                    <a href="#" class="flex justify-center items-center h-screen py-2 px-3 my-5 text-sm font-medium text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Jelentkezek
                    </a>
                </div>
            </div>
            <div class="p-6 mx-3 max-w-sm inline-block align-middle bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Lorem Ipsum</h5>
                </a>
                <p class="mb-3 font-normal text-gray-400 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut turpis sit amet velit viverra malesuada vitae nec sem. Nulla.</p>
                <p class="mb-3 font-medium text-gray-400 dark:text-gray-400">Kezdet: 2022. április 7. 7:00</p>
                <p class="mb-3 font-medium text-gray-400 dark:text-gray-400">Vége: 2022. április 9. 11:00</p>
                <div class="flex justify-center items-center h-screen py-2 px-3 my-5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="extendPanel(2)">
                    Részletek
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                    </svg>
                </div>
                <div class="bg-gray-300 rounded-xl shadow-lg hidden transition-all" id="2">
                    <p class="text-left font-light p-2">
                        Szervező: Dr. Nagy Izolda
                    </p>
                    <p class="text-left font-light p-2">
                        Helyszín: 3300 Eger, Eszterházy tér 1. A-220 terem
                    </p>
                    <p class="text-left font-light p-2">
                        Szabad hely: 3 fő
                    </p>
                    <a href="#" class="flex justify-center items-center h-screen py-2 px-3 my-5 text-sm font-medium text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Jelentkezek
                    </a>
                </div>
            </div>
            <div class="p-6 mx-3 max-w-sm inline-block align-middle bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Szakdolgozati témaválasztó szeminárium I. gy.</h5>
                </a>
                <p class="mb-3 font-normal text-gray-400 dark:text-gray-400">Oracle APEX! Nincs jobb dolguk?</p>
                <p class="mb-3 font-medium text-gray-400 dark:text-gray-400">Kezdet: 2022. március 9. 17:00</p>
                <p class="mb-3 font-medium text-gray-400 dark:text-gray-400">Vége: 2022. március 9. 19:00</p>
                <div class="flex justify-center items-center h-screen py-2 px-3 my-5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="extendPanel(3)">
                    Részletek
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                    </svg>
                </div>
                <div class="bg-gray-300 rounded-xl shadow-lg hidden transition-all" id="3">
                    <p class="text-left font-light p-2">
                        Szervező: Mátyás György István
                    </p>
                    <p class="text-left font-light p-2">
                        Helyszín: E.C.I.114
                    </p>
                    <p class="text-left font-light p-2">
                        Szabad hely: 0 fő
                    </p>
                    <a href="#" class="flex justify-center items-center h-screen py-2 px-3 my-5 text-sm font-medium text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Jelentkezek
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection