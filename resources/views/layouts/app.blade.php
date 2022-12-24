<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600,800,900" rel="stylesheet" type="text/css">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    @livewireStyles
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
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
        <livewire:search-game/>
    </nav>
</header>
<hr>
{{ $slot }}
@livewireScripts
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
@stack('scripts')
</body>
</html>
