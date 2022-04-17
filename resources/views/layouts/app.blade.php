<!doctype html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="../path/to/flowbite/dist/flowbite.bundle.js"></script>
    <script src="{{ asset('js/navbarToggle.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<header>
    <div id="app">
        <nav class="px-2 py-2.5 bg-blue-900 shadow-xl">
            <div class="container flex flex-wrap justify-between items-center mx-auto">
              <a href="{{ route('index') }}" class="flex">
                <img src="{{ asset('logo.png') }}" alt="" class="w-16 lg:w-32">
                  <span class="self-center text-lg whitespace-nowrap text-white pl-5">EKKESport</span>
              </a>
              <button type="button" class="inline-flex items-center p-2 ml-3 text-sm  rounded-lg lg:hidden focus:outline-none focus:ring-2 text-gray-400 hover:bg-gray-700 focus:ring-gray-600" onclick="toggleHamburger()">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              </button>
                <div class="hidden w-full lg:block lg:w-auto font-light" id="mobile-menu">
                    <ul class="flex flex-col mt-4 lg:flex-row lg:space-x-8 lg:mt-0 lg:text-sm lg:font-medium">
                      @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link px-3 py-2 text-gray-100 hover:text-gray-50" href="{{ route('login') }}">{{ __('Bejelentkezés') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link px-3 py-2 text-gray-100 hover:text-gray-50" href="{{ route('register') }}">{{ __('Regisztráció') }}</a>
                                </li>
                            @endif
                        @else
                            <a class="font-light text-gray-100" href="{{ route('myProfile') }}">
                                {{ Auth::user()->name }}
                            </a>
                            <li>
                                <a href="{{ route('events') }}" class="px-3 py-2 text-gray-100 hover:text-gray-50">Események</a>
                            </li>
                            <li>
                                <a href="{{ route('appliedEvents') }}" class="px-3 py-2 text-gray-100 hover:text-gray-50">Jelentkezett eseményeim</a>
                            </li>
                            @if (Auth::user()->accountType == "teacher")
                                <li>
                                    <a href="{{ route('manageEvents') }}" class="px-3 py-2 text-gray-100 hover:text-gray-50">Saját eseményeim</a>
                                </li>                              
                            @endif
                            <li class="text-gray-100">
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @endguest
                    </ul>
                  </div>
            </div>
        </nav>
    </div>
</header>
<body class="h-full min-h-screen bg-gradient-to-b from-gray-100 to-gray-300 pb-10">
    @yield('content')
</body>
</html>