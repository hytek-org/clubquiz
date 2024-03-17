<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ClubQuiz') }}</title>
    @laravelPWA
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased  select-none">
    <a href="/" class="mx-auto text-center text-[32px] font-[600] hidden md:block">ClubQuiz</a>
    <div class=" grid grid-cols-1 md:grid-cols-2 ">
        
        <div class="hidden md:block ">
            <!-- Page Heading -->
            @if (isset($header))
                {{ $header }}
            @endif
        </div>
        <div class="  md:px-10 pt-4">
            {{ $slot }}
        </div>
    </div>


</body>

</html>
