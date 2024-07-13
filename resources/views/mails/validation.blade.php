<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Brebe</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.5.0/flowbite.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
    
        @vite('resources/css/app.css')
    
    </head>
<body>
    {{-- <p>{{ $data['body'] }}</p> --}}

    <section class="max-w-2xl px-6 py-8 mx-auto bg-white dark:bg-gray-900">
        <header>
            <a href="https://imgbb.com/"><img src="https://i.ibb.co/XjRLCT9/favicon.png" width="40" alt="favicon"></a>
        </header>

        <main class="mt-8">
            <h2 class="text-gray-700 dark:text-gray-200">Hola {{ $data['name'] }},</h2>

            <p class="mt-2 leading-loose text-gray-600 dark:text-gray-300">
                Este es tu código de verificación:
            </p>

            <div class="flex items-center mt-4 gap-x-4">
                @foreach ($data['code'] as $character)
                    <p class="flex items-center justify-center w-10 h-10 text-2xl font-medium text-blue-500 border border-blue-500 rounded-md dark:border-blue-400 dark:text-blue-400">
                        {{ $character }}
                    </p>
                @endforeach
            </div>

            <p class="mt-4 leading-loose text-gray-600 dark:text-gray-300">
                Este código solo será válido durante los próximos 5 minutos.
            </p>
            
            {{-- <button class="px-6 py-2 mt-6 text-sm font-medium tracking-wider text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                Verificar corre
            </button> --}}
            
            <p class="mt-8 text-gray-600 dark:text-gray-300">
                Gracias, <br>
                Somos Brebe.
            </p>
        </main>
        

        <footer class="mt-8">
            {{-- <p class="text-gray-500 dark:text-gray-400">
                This email was sent to <a href="#" class="text-blue-600 hover:underline dark:text-blue-400" target="_blank">contact@merakiui.com</a>. 
                If you'd rather not receive this kind of email, you can <a href="#" class="text-blue-600 hover:underline dark:text-blue-400">unsubscribe</a> or <a href="#" class="text-blue-600 hover:underline dark:text-blue-400">manage your email preferences</a>.
            </p> --}}

            <p class="mt-3 text-gray-500 dark:text-gray-400">© 2024 Brebe. Todos los derechos reservados.</p>
        </footer>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>


