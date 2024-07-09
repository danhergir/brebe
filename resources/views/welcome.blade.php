@extends('layouts.app')

@section('content')

<div>
    {{-- <h1>Brebe.</h1> --}}
    <img src="{{ asset('img/logo-1.png') }}" width="300" class="text-center" alt="">
    <div id="button-container" class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
        <a href="{{ route('user.register') }}" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
            Regístrate
            <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
        <a href="#" class="py-3 px-5 sm:ms-4 text-sm font-medium text-gray-900 text-center focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-70">
            Paga ahora
        </a>  
    </div>
</div>

@endsection
