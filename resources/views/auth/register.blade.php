@extends('layouts.app')
@section('title', 'Regisztráció')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
    function showExtra() {
        var accountType = document.getElementById('accountType');

        var guestUIState = document.getElementById('guest');
        var studentUIState = document.getElementById('student');
        var teacherUIState = document.getElementById('teacher');

        switch (accountType.value) {
            case "guest":
                guestUIState.style.display = "block";
                studentUIState.style.display = "none";
                document.getElementById('neptun').value = "";
                teacherUIState.style.display = "none";
                document.getElementById('institute').value = "";
                break;
            case "student":
                guestUIState.style.display = "none";
                document.getElementById('address').value = "";
                studentUIState.style.display = "block";
                teacherUIState.style.display = "none";
                document.getElementById('institute').value = "";
                break;
            case "teacher":
                guestUIState.style.display = "none";
                document.getElementById('address').value = "";
                studentUIState.style.display = "none";
                document.getElementById('neptun').value = "";
                teacherUIState.style.display = "block";
                break;
            default:
                guestUIState.style.display = "none";
                document.getElementById('address').value = "";
                studentUIState.style.display = "none";
                document.getElementById('neptun').value = "";
                teacherUIState.style.display = "none;"
                document.getElementById('institute').value = "";
                break;
        }
    }
</script> 

<div class="flex justify-center items-center h-screen">
    <div class="mt-10 p-10 w-96 bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 lg:p-8 dark:bg-gray-800 dark:border-gray-700">
        <form class="space-y-6" method="POST" action="{{ route('register') }}">
            <h3 class="text-2xl text-center text-gray-100 dark:text-gray-300 my-5">Regisztráció</h3>
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
                <label for="accountType" class="block mb-2 text-sm font-medium text-gray-100 dark:text-gray-300">Válasszon fióktípust:</label>
                <select id="accountType" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-900 dark:focus:ring-blue-500 dark:focus:border-blue-500" onchange="showExtra();">
                  <option selected>Válasszon...</option>
                  <option value="guest">Külső vendég</option>
                  <option value="student">Hallgató</option>
                  <option value="teacher">Szervező</option>
                </select>
            </div>
            <div class="my-5" id="guest" style="display: none">
                <label for="address" class="block mb-2 text-sm font-medium text-gray-100 dark:text-gray-300">Település:</label>
                <input type="text" name="address" id="address" placeholder="Eger" class="form-control bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black @error('address') is-invalid @enderror">
            </div>
            <div class="my-5" id="student" style="display: none">
                <label for="neptun" class="block mb-2 text-sm font-medium text-gray-100 dark:text-gray-300">Neptun kód:</label>
                <input type="text" name="neptun" id="neptun" placeholder="ABCDEF" class="form-control bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black @error('neptun') is-invalid @enderror">
            </div>
            <div class="my-5" id="teacher" style="display: none">
                <label for="institute" class="block mb-2 text-sm font-medium text-gray-100 dark:text-gray-300">Szervezeti egység:</label>
                <input type="text" name="institute" id="institute" placeholder="Sporttudományi Intézet" class="form-control bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black @error('institute') is-invalid @enderror">
            </div>
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Regisztráció</button>
            <div class="text-sm font-light text-white dark:text-white">
                Már regisztrált? <a href="{{ route('login') }}" class="text-blue-700 hover:underline dark:text-blue-500"><i><u>Bejelentkezés</u></i></a>
            </div>
        </form>
    </div>
</div>
@endsection