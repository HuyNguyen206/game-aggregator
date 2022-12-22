<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    @livewireStyles
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<header>
    <nav class="flex justify-between flex-col items-center md:flex-row py-4 px-8">
        <div class="flex justify-between space-x-8">
            <div class="text-xl"><a href="/">LARACAST</a></div>
            <ul class="flex space-x-4">
                <li><a href="">Game</a></li>
                <li><a href="">Review</a></li>
                <li><a href="">Coming soon</a></li>
            </ul>
        </div>
        <div class="relative mt-2 md:mt-0">
            <input type="text" placeholder="Search"
                   class="focus:outline-none focus:shadow-gray-600 w-72 rounded-2xl p-3 pl-8">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor" class="absolute left-2 top-3 w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"/>
            </svg>
        </div>
    </nav>
</header>
<hr>
{{ $slot }}
@livewireScripts
</body>
</html>
