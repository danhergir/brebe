@extends('layouts.app')

@section('content')

<div>
    <section>
        <div class="px-4 mx-auto max-w-screen-xl text-center py-8">
            <h1 class="mt-10 text-3xl md:text-4xl lg:text-4xl font-extrabold tracking-tight leading-none text-white">A nada de empezar a vender con Brebe.</h1>
        </div>
    </section>

    <div class="text-center">
        <div class="linear-stepper">
            <ol class="items-center w-full space-y-4 sm:flex sm:space-x-8 sm:space-y-0 rtl:space-x-reverse">
                <!-- Step items here -->
                <li class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                    <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-blue-500">1</span>
                    <span>
                        <h3 class="font-medium leading-tight">Información Personal</h3>
                    </span>
                </li>
                <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                </svg>
                <li class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                    <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-blue-500">2</span>
                    <span>
                        <h3 class="font-medium leading-tight">Ubicación</h3>
                    </span>
                </li>
                <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                </svg>
                <li class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                    <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">3</span>                    <span>
                        <h3 class="font-medium leading-tight">Datos Bancarios</h3>
                    </span>
                </li>
                <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                </svg>
                <li class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                    <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">4</span>                    <span>
                        <span>
                        <h3 class="font-medium leading-tight">Datos del Negocio</h3>
                    </span>
                </li>
                <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                </svg>
                <li class="flex items-center text-blue-600 dark:text-blue-500 space-x-2.5 rtl:space-x-reverse">
                    <span class="flex items-center justify-center w-8 h-8 border border-blue-600 rounded-full shrink-0 dark:border-blue-500">5</span>
                    <span>
                        <h3 class="font-medium leading-tight">Validación</h3>
                    </span>
                </li>
            </ol>
        </div>
        <div class="radial-stepper hidden mx-auto text-center">
            <ol class="mx-auto text-center w-full space-y-4 sm:flex sm:space-x-8 sm:space-y-0 rtl:space-x-reverse">
                <li class="mx-auto text-center text-blue-600 dark:text-blue-500 space-x-2.5 rtl:space-x-reverse">
                    <button type="button" class="text-white bg-blue-600 border font-medium rounded-full text-md px-5 py-2.5 text-center mb-2">5 de 5</button>
                    <span>
                        {{-- <h3 class="font-medium text-2xl text-center">Información Personal</h3> --}}
                        <p class="text-sm text-center text-blue-600 mt-2">¡Estás en el último paso!</p>
                    </span>
                </li>
            </ol>
        </div>    
    </div>
    
    
    <section class="text-white">
        <div class="py-8 px-4 mt-8 mx-auto max-w-2xl lg:py-16">
            {{-- <h2 class="mb-6 text-3xl font-bold text-white dark:text-white text-center">Datos del Negocio</h2> --}}
            <form action="{{ route('user.save-4') }}" method="POST">
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="code" class="block mb-2 text-sm font-medium text-white">Código de validación</label>
                        
                        <p id="helper-text-explanation" class="text-sm text-gray-500 dark:text-gray-400">
                            Haz click en enviar para recibir un código único que nos ayudará a validar tu correo electrónico.
                        </p>

                        <div class="flex items-center space-x-2 mt-2">
                            <input type="text" autocomplete="off" name="code" value="{{ old('code', $user['code'] ?? '') }}" id="code" class="bg-white border border-white text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white dark:border-white dark:placeholder-white dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                            <span onclick="send_mail()" class="px-4 py-2.5 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-700">Enviar</span>
                        </div>
                        @error('code')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                                                    

                    <div class="flex items-center">
                        <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="link-checkbox" class="ms-2 text-sm font-medium text-white dark:text-gray-300">Acepto los <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">términos y condiciones</a>.</label>
                    </div>                    
                </div>
                <div class="text-center space-x-2 mt-8">
                    <a href="{{ route('user.register-4') }}" class="inline-flex text-center items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-black bg-white rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        Volver
                    </a>
                    <button type="submit" class="inline-flex bg-blue-700 text-center items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        Registrarme
                    </button>
                </div>
            </form>
        </div>
    </section>
</div>

<script>
    function send_mail() {
        const email = 'danielandres65@gmail.com'
        const url = 'http://localhost:8000/send/validation/'+email;

        console.log('send mail')

        fetch(url, {
            method: "GET",
        })
        .then((response) => response.json())
        .then(() => console.log(json))
        .catch((error) => {
            console.error(error);
        })
    }


</script>

@endsection