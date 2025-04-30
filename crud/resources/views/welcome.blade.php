<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased min-h-screen bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 transition-colors duration-300">
    
    <div class="bg-gray-100 dark:bg-gray-800 text-black dark:text-white min-h-screen flex flex-col items-center justify-center p-6">
        <button id="darkModeToggle"
            class="px-4 py-2 rounded-md bg-gray-800 text-white dark:bg-gray-200 dark:text-gray-800 transition-colors duration-200">
            Toggle Dark Mode
        </button>

        <h1 class="text-4xl font-bold mb-6">¡Bienvenido a Laravel!</h1>
        <p class="text-lg mb-6">Estás viendo una página con soporte para modo claro y oscuro.</p>


    </div>

    <footer class="py-4 text-center text-sm text-gray-500 dark:text-gray-400">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (Tailwind + Dark Mode)
    </footer>

    @vite('resources/js/app.js')
</body>
</html>