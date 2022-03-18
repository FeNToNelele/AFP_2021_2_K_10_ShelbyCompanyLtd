@extends('layouts.app')
@section('title', 'Regisztráció')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript" src="{{ asset('js/register.js') }}"></script> 

<div class="flex h-screen">
    <div class="m-auto">
        <div class="p-10 bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 lg:p-8 lg:w-96">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h3 class="text-2xl text-center text-gray-900">Regisztráció</h3>
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Név:</label>
                    <input id="name" type="text" class="form-control bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Gipsz Jakab">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">E-Mail cím:</label>
                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full" placeholder="name@company.com" required>
    
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Jelszó:</label>
                    <input type="password" name="password" id="password" placeholder="••••••••" class="form-controlbg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div class="mt-3">
                    <label for="password-confirm" class="block mb-2 text-sm font-medium text-gray-900">Jelszó megerősítése:</label>
                    <input type="password" id="password-confirm " placeholder="••••••••" class="form-control bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5required name="password_confirmation" required autocomplete="new-password">
                </div>
                <div class="my-2">
                    <label for="accountType" class="block mt-3 mb-2 text-sm font-medium text-gray-900 ">Válasszon fióktípust:</label>
                    <select name="accountType" id="accountType" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" onchange="showExtra()">
                      <option selected disabled hidden>Válasszon...</option>
                      <option value="guest">Külső vendég</option>
                      <option value="student">Hallgató</option>
                      <option value="teacher">Szervező</option>
                    </select>
                </div>
                <div class="my-3" id="guest" style="display: none">
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Település:</label>
                    <input type="text" name="address" id="address" placeholder="Eger" class="form-control bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full">
                </div>
                <div class="my-3" id="student" style="display: none">
                    <label for="neptun" class="block mb-2 text-sm font-medium text-gray-900">Neptun kód:</label>
                    <input type="text" name="neptun" id="neptun" placeholder="ABCDEF" class="form-control bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full">
                </div>
                <div class="my-3" id="teacher" style="display: none">
                    <label for="institute" class="block mb-2 text-sm font-medium text-gray-900 ">Szervezeti egység:</label>
                    <input type="text" name="institute" id="institute" placeholder="Sporttudományi Intézet" class="form-control bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full">
                </div>
                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium mt-3 rounded-lg text-sm px-5 py-2.5 text-center ">Regisztráció</button>
                <div class="text-sm mt-2 font-light text-gray-900">
                    Már regisztrált? <a href="{{ route('login') }}" class="text-blue-700 hover:underline"><i>Bejelentkezés</i></a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection