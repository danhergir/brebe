<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Monitor your customers' experiences through feedback</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/icons/favicon_16x16.png') }}" rel="icon">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <style>
        .navbar a {
            font-weight: bold;
            color: white;
        }

        #app {
            flex:1;
        }

        .logo-feedbacker {
            width: 200px;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* This ensures that the footer stays at the bottom of the viewport */
            margin: 0;
        }
        
    </style>

</head>
<body>    
    <div id="app">

        <nav class="bg-white border-gray-200 border">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="{{ url('/home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img class="logo-feedbacker img-fluid" src="{{ asset('assets/img/logos/500x150logo.webp') }}" alt="Logo Feedbacker" >
                </a>

                @if(Auth::check())
                {{-- Open/Close Menu Reponsive Design --}}
                    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                        </svg>
                    </button>
                    
                    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                        <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
                            <li>
                                @if(Auth::user()->company->satisfaction_active)
                                    <a href="{{ route('home.satisfaction') }}" class="block py-2 px-2 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-2">Feedbacker Reviews</a>
                                @else
                                    <a class="block py-2 px-2 text-white bg-blue-400 cursor-not-allowed font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-2" disabled>Feedbacker Reviews</a>
                                @endif
                            </li>
                            <li>
                                @if(Auth::user()->company->pqr_active)
                                    <a href="{{ route('home.pqr') }}" class="block py-2 px-2 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-2">Feedbacker PQRSF</a>
                                @else
                                    <a class="block py-2 px-2 text-white bg-blue-400 cursor-not-allowed font-medium rounded-lg text-sm px-5 py-2.5 text-center font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-2" disabled>Feedbacker PQRSF</a>
                                @endif
                            </li>
                            <li>
                                <a href="{{ route('home.settings') }}" class="block py-2 px-2 text-white bg-gradient-to-r from-gray-500 via-gray-600 to-gray-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-gray-300 dark:focus:ring-gray-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-2">
                                Configuración                            
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block py-2 px-2 text-white bg-gradient-to-r from-gray-500 via-gray-600 to-gray-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-2">Cerrar Sesión</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                @endif
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>


    <footer class="bg-gray-50 mt-6">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="{{ url('/home')}}" class="items-center">
                        <span class="self-center text-2xl font-semibold whitespace-nowrap text-dark">Feedbacker</span>
                    </a>
                    <p>
                        Build a customer-oriented organization that actively listens to the Voice of the Customer (VOC)

                    </p>
                </div>
                <div class="grid grid-cols-1 gap-8 sm:gap-6 sm:grid-cols-2">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="{{ route('privacy') }}" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li class="mb-4">
                                <a href="{{ route('terms') }}" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                            <li>
                                <a href="{{ route('cookies') }}" class="hover:underline">Cookies Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-center text-gray-500 md:text-center">
                    <a href="{{ url('/home') }}" class="hover:underline">Feedbacker</a> is a brand from <strong><span><a href="https://dataplicada.com/">Dataplicada</a> &copy; </span></strong>. All Rights Reserved.
                </span>
            </div>
        </div>
    </footer>
    

    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>

</body>
</html>
