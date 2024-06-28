@extends('layouts.app')

@section('content')

<div>
    <section>
        <div class="py-8 px-4 mt-8  mx-auto max-w-screen-xl text-center lg:py-16">
            <h1 class="mt-10 text-3xl md:text-4xl lg:text-4xl font-extrabold tracking-tight leading-none text-white">Así de fácil es empezar a vender con Brebe.</h1>
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
                <li class="flex items-center text-blue-600 dark:text-blue-500 space-x-2.5 rtl:space-x-reverse">
                    <span class="flex items-center justify-center w-8 h-8 border border-blue-600 rounded-full shrink-0 dark:border-blue-500">3</span>
                    <span>
                        <h3 class="font-medium leading-tight">Datos Bancarios</h3>
                    </span>
                </li>
                <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                </svg>
                <li class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                    <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">4</span>
                    <span>
                        <h3 class="font-medium leading-tight">Datos del Negocio</h3>
                    </span>
                </li>
                <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                </svg>
                <li class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                    <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">5</span>
                    <span>
                        <h3 class="font-medium leading-tight">Validación</h3>
                    </span>
                </li>
            </ol>
        </div>
        <div class="radial-stepper hidden mx-auto text-center">
            <ol class="mx-auto text-center w-full space-y-4 sm:flex sm:space-x-8 sm:space-y-0 rtl:space-x-reverse">
                <li class="mx-auto text-center text-blue-600 dark:text-blue-500 space-x-2.5 rtl:space-x-reverse">
                    <button type="button" class="text-white bg-blue-600 border font-medium rounded-full text-md px-5 py-2.5 text-center mb-2">3 de 5</button>
                    <span>
                        {{-- <h3 class="font-medium text-2xl text-center">Información Personal</h3> --}}
                        <p class="text-sm text-center text-blue-600 mt-2">Siguiente paso: Datos del Negocio</p>
                    </span>
                </li>
            </ol>            
        </div>    
    </div>
    
    
    <section class="text-white">
        <div class="py-5 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-6 text-3xl font-bold text-white dark:text-white text-center">Ubicación</h2>
            <form action="{{ route('user.save-3') }}" method="POST">
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="bank_name" class="block mb-2 text-sm font-medium text-white">Nombre del banco *</label>
                        <select id="bank_name" name="bank_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <option value="">Seleccione un banco</option>
                            @foreach ($banks as $bank)
                                <option value="{{ $bank->id }}" {{ (isset($user['bank_name']) && $user['bank_name'] == $bank->id ? 'selected' : '') }}>{{ $bank->name }}</option>
                            @endforeach
                        </select>                      
                    </div>

                    <div class="sm:col-span-2">
                        <label for="account_type" class="block mb-2 text-sm font-medium text-white">Tipo de cuenta *</label>
                        <select id="account_type" name="account_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <option value="ahorros">Cuenta Ahorros</option>
                            <option value="corriente">Cuenta Corriente</option>
                        </select>                      
                    </div>

                    <div class="sm:col-span-2">
                        <label for="account_number" class="block mb-2 text-white text-sm font-medium text-white dark:text-white">Número de cuenta bancaria *</label>
                        <input type="text" name="account_number" value="{{ old('account_number', $user['account_number'] ?? '') }}" id="account_number" class="bg-whiteborder border-white text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white dark:border-white dark:placeholder-white dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Número de cuenta" required="">
                        @error('account_number')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror        
                    </div>

                    <div class="sm:col-span-2">
                        <label for="document_type" class="block mb-2 text-white text-sm font-medium text-white dark:text-white">Tipo de documento de indentidad *</label>
                        <select id="document_type" name="document_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <option value="CC">Cédula de ciudadanía</option>
                            <option value="CE">Cédula de extranjería</option>
                        </select>                      
                    </div>

                    <div class="sm:col-span-2">
                        <label for="document_number_bank" class="block mb-2 text-white text-sm font-medium text-white dark:text-white">Número de documento *</label>
                        <input type="text" name="document_number_bank" value="{{ old('document_number_bank', $user['document_number_bank'] ?? '') }}" id="document_number_bank" class="bg-whiteborder border-white text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white dark:border-white dark:placeholder-white dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Número de documento" required="">
                        @error('document_number_bank')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="text-center space-x-2">
                    <a href="{{ route('user.register-2') }}" class="inline-flex text-center items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-black bg-white rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        Volver
                    </a>
                    <button type="submit" class="inline-flex bg-blue-700 text-center items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        Guardar
                    </button>
                </div>
            </form>
        </div>
    </section>
</div>

@endsection