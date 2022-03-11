@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center h-screen">
    <div class="mt-10 p-10 w-96 bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 lg:p-8 dark:bg-gray-800 dark:border-gray-700">
        <form class="space-y-6" method="POST" action="{{ route('password.update') }}">
            @csrf
            <h3 class="text-2xl text-center text-gray-900 dark:text-white my-5">Jelszó módosítása</h3>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-100 dark:text-gray-300">E-Mail cím:</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black" name="email" value="{{ $email ?? old('email') }}" placeholder="name@company.com" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mt-5">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-100 dark:text-gray-300">Jelszó:</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black" name="password" required autocomplete="new-password" placeholder="••••••••">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="my-5">
                <label for="password-confirm" class="block mb-2 text-sm font-medium text-gray-100 dark:text-gray-300">Jelszó megerősítése:</label>
                <input id="password-confirm" type="password" class="form-control bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black" name="password_confirmation" required autocomplete="new-password" placeholder="••••••••">
            </div>
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Jelszó frissítése</button>
        </form>
    </div>
</div>
@endsection
