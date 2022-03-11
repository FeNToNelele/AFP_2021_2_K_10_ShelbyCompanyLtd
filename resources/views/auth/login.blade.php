@extends('layouts.app')
@section('title', 'Bejelentkezés')

@section('content')
<div class="flex justify-center items-center h-screen">
    <div class="mt-10 p-10 w-96 bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 lg:p-8 dark:bg-gray-800 dark:border-gray-700">
        <form class="space-y-6" method="POST" action="{{ route('login') }}">
            <h3 class="text-2xl text-center text-gray-900 dark:text-white my-5">Bejelentkezés</h3>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-100 dark:text-gray-300">E-Mail cím:</label>
                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black" placeholder="name@company.com" required>
            </div>
            <div class="mt-5">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-100 dark:text-gray-300">Jelszó:</label>
                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black" required>
            </div>
            <div class="flex items-start my-5">
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                    <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required>
                    </div>
                    <div class="ml-3 text-sm">
                    <label for="remember" class="font-medium text-gray-100 dark:text-gray-300">Emlékezz rám</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Bejelentkezés</button>
            <div class="flex items-start my-5">
                <a href="{{ route('password.request') }}" class="text-sm font-light text-right text-white dark:text-white"><u><i>Elfelejtette jelszavát?</i></u></a>
            </div>
            <div class="text-sm font-light text-white dark:text-white">
                Nincs még fiókja? <a href="{{ route('register') }}" class="text-blue-700 hover:underline dark:text-blue-500"><i><u>Regisztráljon</u></i></a>
            </div>
        </form>
    </div>
</div>
@endsection
