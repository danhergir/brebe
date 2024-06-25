<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brebe</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.5.0/flowbite.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
    
    @vite('resources/css/app.css')
    
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; /* Ensure full viewport height */
            background: linear-gradient(180deg, #001f3f 0%, #000000 100%);
            color: white;
        }
        h1 {
            font-size: 6rem; /* Adjusted font size for smaller screens */
            font-weight: 900; /* Higher font-weight */
            text-align: center;
            margin-bottom: 20px;
        }
        .wave {
            position: absolute;
            width: 100%;
            height: 100%;
            background: url('https://cdn.pixabay.com/photo/2017/08/30/09/22/ocean-2699534_960_720.png') repeat-x;
            background-size: cover;
            animation: wave-animation 10s linear infinite;
            z-index: -1; /* Ensure wave animation is behind content */
        }
        @keyframes wave-animation {
            from { transform: translateX(0); }
            to { transform: translateX(-100%); }
        }
        .button-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap; /* Ensure buttons wrap on smaller screens */
            gap: 20px; /* Space between buttons */
            margin-top: 20px;
        }
        .button-container button {
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .button-primary {
            background-color: #007BFF;
            color: white;
        }
        .button-primary:hover {
            background-color: #0056b3;
        }
        .button-secondary {
            background-color: #6c757d;
            color: white;
        }
        .button-secondary:hover {
            background-color: #5a6268;
        }
        .navbar {
            background-color: #ffffff; /* White background */
            padding: 10px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 10; /* Ensure navbar is above content */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Optional: Add shadow for better visibility */
        }
        .navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px; /* Adjusted padding for container */
            max-width: 1200px; /* Limit container width */
            margin: 0 auto; /* Center container */
        }
        .navbar .logo {
            font-size: 2rem;
            font-weight: bold;
            color: #007BFF;
            text-decoration: none;
        }
        .navbar .menu {
            display: flex;
            gap: 20px;
        }
        .navbar .menu a {
            color: #333;
            text-decoration: none;
            font-size: 1rem;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .navbar .menu a:hover {
            background-color: #f0f0f0;
        }
        @media (max-width: 768px) {
            h1 {
                font-size: 4rem; /* Adjust font size for smaller screens */
            }
            .main-content {
                padding-top: 100px; /* Adjusted top padding for smaller screens */
            }
            .button-container {
                flex-direction: column; /* Stack buttons vertically on smaller screens */
                align-items: center;
            }
            .button-container button {
                width: 100%; /* Full width buttons on smaller screens */
            }
        }
    </style>
</head>
<body>

    <!-- Wave Animation Background -->
    <div class="wave"></div>

    <nav class="navbar bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Iniciar Sesión</button>
                <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                    <a href="#" class="block py-2 px-3 md:p-0 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:dark:text-blue-500" aria-current="page">Inicio</a>
                    </li>
                    <li>
                    <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Nosotros</a>
                    </li>
                    <li>
                    <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Servicios</a>
                    </li>
                    <li>
                    <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>

</body>
</html>
