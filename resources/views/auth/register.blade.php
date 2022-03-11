@extends('layouts.app')
@section('title', 'Regisztráció')

@section('content')
<div class="flex justify-center items-center h-screen">
    <div class="mt-10 p-10 w-96 bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 lg:p-8 dark:bg-gray-800 dark:border-gray-700">
        <form class="space-y-6" method="POST" action="{{ route('register') }}">
            <h3 class="text-2xl text-center text-gray-100 dark:text-gray-300 dark:text-white my-5">Regisztráció</h3>
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-100 dark:text-gray-300">Név:</label>
                <input id="name" type="text" class="form-control bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Gipsz Jakab">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mt-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-100 dark:text-gray-300">E-Mail cím:</label>
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black" placeholder="name@company.com" required>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mt-5">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-100 dark:text-gray-300">Jelszó:</label>
                <input type="password" name="password" id="password" placeholder="••••••••" class="form-control @error('password') is-invalid @enderror bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mt-5">
                <label for="password-confirm" class="block mb-2 text-sm font-medium text-gray-100 dark:text-gray-300">Jelszó megerősítése:</label>
                <input type="password-confirm" id="password" placeholder="••••••••" class="form-control @error('password') is-invalid @enderror bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black" required name="password_confirmation" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="my-5">
                <label for="dropdownButton" class="block mb-2 text-sm font-medium text-gray-100 dark:text-gray-300">Fiók típusa:</label>
                <button id="dropdownButton" data-dropdown-toggle="dropdown" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Válasszon...<svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>


                <div id="dropdown" class="hidden z-10 w-44 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                    <ul class="py-1" aria-labelledby="dropdownButton">
                      <li>
                        <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Külső vendég</a>
                      </li>
                      <li>
                        <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Hallgató</a>
                      </li>
                      <li>
                        <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dolgozó</a>
                      </li>
                    </ul>
                </div>
            </div>
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Regisztráció</button>
            <div class="text-sm font-light text-white dark:text-white">
                Már regisztrált? <a href="{{ route('login') }}" class="text-blue-700 hover:underline dark:text-blue-500"><i><u>Bejelentkezés</u></i></a>
            </div>
        </form>
    </div>
</div>
@endsection
