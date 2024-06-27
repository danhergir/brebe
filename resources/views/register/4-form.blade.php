@extends('layouts.app')

@section('content')

<div>
    <section>
        <div class="py-8 px-4 mt-8  mx-auto max-w-screen-xl text-center lg:py-16">
            <h1 class="mt-10 text-3xl md:text-4xl lg:text-4xl font-extrabold tracking-tight leading-none text-white">Más cerca aún de empezar a vender con Brebe.</h1>
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
                <li class="flex items-center text-blue-600 dark:text-blue-500 space-x-2.5 rtl:space-x-reverse">
                    <span class="flex items-center justify-center w-8 h-8 border border-blue-600 rounded-full shrink-0 dark:border-blue-500">4</span>
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
            <h2 class="mb-6 text-3xl font-bold text-white dark:text-white text-center">Datos del Negocio</h2>
            <form action="{{ route('user.save-4') }}" method="POST">
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="product_description" class="block mb-2 text-sm font-medium text-white">Describe lo que vendes *</label>
                        <input type="text" name="product_description" value="{{ old('product_description', $user['product_description'] ?? '') }}" id="product_description" class="bg-whiteborder border-white text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white dark:border-white dark:placeholder-white dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Productos ortopédicos" required="">
                        @error('product_description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="sm:col-span-2">
                        <label for="company_name" class="block mb-2 text-sm font-medium text-white">Nombre comercial *</label>
                        <input type="text" name="company_name" value="{{ old('company_name', $user['company_name'] ?? '') }}" id="company_name" class="bg-whiteborder border-white text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white dark:border-white dark:placeholder-white dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nombre de la marca o del negocio" required="">
                        @error('company_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="sm:col-span-2">
                        <label for="instagram" class="block mb-2 text-white text-sm font-medium text-white dark:text-white">Instagram</label>
                        <input type="text" name="instagram" value="{{ old('instagram', $user['instagram'] ?? '') }}" id="instagram" class="bg-whiteborder border-white text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white dark:border-white dark:placeholder-white dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nombre de usuario">
                        @error('instagram')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="sm:col-span-2">
                        <label for="website" class="block mb-2 text-white text-sm font-medium text-white dark:text-white">Página Web</label>
                        <input type="text" name="website" value="{{ old('website', $user['website'] ?? '') }}" id="website" class="bg-whiteborder border-white text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white dark:border-white dark:placeholder-white dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="https://www.miempresa.com">
                        @error('website')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="sm:col-span-2">
                        <label for="facebook" class="block mb-2 text-white text-sm font-medium text-white dark:text-white">Facebook</label>
                        <input type="text" name="facebook" value="{{ old('facebook', $user['facebook'] ?? '') }}" id="facebook" class="bg-whiteborder border-white text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white dark:border-white dark:placeholder-white dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="https://facebook.com/nombredeusuario">
                        @error('facebook')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>  

                    <div class="sm:col-span-2">
                        <label for="linkedin" class="block mb-2 text-white text-sm font-medium text-white dark:text-white">LinkedIn</label>
                        <input type="text" name="linkedin" id="linkedin" value="{{ old('linkedin', $user['linkedin'] ?? '') }}" class="bg-whiteborder border-white text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white dark:border-white dark:placeholder-white dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="https://linkedin.com/in/usuario">
                        @error('linkedin')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="sm:col-span-2">
                        <label for="whatsapp_business" class="block mb-2 text-white text-sm font-medium text-white dark:text-white">WhatsApp Business</label>
                        <input type="text" name="whatsapp_business" value="{{ old('whatsapp_business', $user['whatsapp_business'] ?? '') }}" id="whatsapp_business" class="bg-whiteborder border-white text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white dark:border-white dark:placeholder-white dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="3113414791">
                        @error('whatsapp_business')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                </div>
                <div class="text-center space-x-2">
                    <a href="{{ route('user.register-3') }}" class="inline-flex text-center items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-black bg-white rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
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