@extends('layouts.app')
@yield('navbar')
@section('title', 'Főoldal')


@section('content')
    <div class="bg-white rounded-xl shadow-lg mx-5 lg:mx-52 py-10 mt-10">
        <p class="font-light text-center text-3xl lg:text-5xl ">Üdvözöljük!</p>
    </div>

    <div class="bg-transparent my-5 rounded-lg shadow-sm lg:mx-52">
        <p class="font-light text-3xl lg:text-5xl text-center pb-5">Mai programjaink:</p>
    </div>

    <div class="h-auto grid grid-cols-1 lg:grid-cols-3 gap-4 justify-center first-line:content-center px-0 lg:px-60">
        <!--Programok ciklikusan-->
        <div class="p-6 mx-3 max-w-sm inline-block align-middle bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Túrázás a Bükkbe</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Tartson velünk a 20 km-es túrán, ahol felfedezzük a Bükk természetét!</p>
            <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Érdekel
                <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
        <div class="p-6 mx-3 max-w-sm inline-block align-middle bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Lorem Ipsum dolor</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum hendrerit arcu, vitae dignissim orci finibus ac. Nulla nisi nunc, consequat id turpis in, elementum cursus ex.</p>
            <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Érdekel
                <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
        <div class="p-6 mx-3 max-w-sm inline-block align-middle bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Eros eu aliquam</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Aliquam ullamcorper felis mollis, faucibus eros eu, aliquam dolor. Nullam id ultrices quam. </p>
            <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Érdekel
                <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
      </div>

@endsection