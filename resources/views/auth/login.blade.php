@extends('layouts.app')
@section('title', 'Bejelentkezés')

@section('content')
<div class="flex justify-center items-center h-screen">
    <div class="p-5 w-96 bg-white rounded-lg border border-gray-200 shadow-md">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h3 class="text-2xl text-center text-gray-900 mb-3">Bejelentkezés</h3>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">E-Mail cím:</label>
                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full" placeholder="name@company.com" required>
            </div>
            <div class="mt-3">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Jelszó:</label>
                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
            </div>
            <div class="flex items-start my-3">
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                    <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 bg-gray-50 rounded border border-gray-900 focus:ring-3 focus:ring-blue-300">
                    </div>
                    <div class="ml-3 text-sm">
                    <label for="remember" class="font-medium text-gray-900">Emlékezz rám</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Bejelentkezés</button>
            <div class="flex items-start my-3">
                <a href="{{ route('password.request') }}" class="text-sm font-light text-right text-blue-700 hover:underline"><i>Elfelejtette jelszavát?</i></a>
            </div>
            <div class="text-sm font-light text-gray-900">
                Nincs még fiókja? <a href="{{ route('register') }}" class="text-blue-700 hover:underline"><i>Regisztráljon</i></a>
            </div>
        </form>
    </div>
</div>
@endsection
