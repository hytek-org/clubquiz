<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
   
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header class=" py-4 px-6 sm:px-8 flex items-center justify-between">
        <!-- Left Section: ClubQuiz Logo -->
        <div class="flex items-center">
         <a href="{{route('home')}}" class="font-railway font-[700] text-xl">ClubQuiz</a>
        </div>
        
        <!-- Center Section: Static Links -->
        <nav class="hidden sm:flex flex-grow justify-center">
            <a href="{{route('home')}}" class="text-gray-800 hover:text-gray-800/50 hover:underline px-4 py-2">Home</a>
            <a href="{{route('home')}}" class="text-gray-800 hover:text-gray-800/50 hover:underline px-4 py-2">About</a>
            <a href="{{route('home')}}" class="text-gray-800 hover:text-gray-800/50 hover:underline px-4 py-2">Explore</a>
            <a href="{{route('home')}}" class="text-gray-800 hover:text-gray-800/50 hover:underline px-4 py-2">Contact</a>
        </nav>
        
        <!-- Right Section: Button -->
        <div >
            <a href="#" onclick="window.history.back();" class="inline-flex bg-[#004AAD] text-white p-3 rounded-full hover:bg-[#0E194D]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                  </svg>                  
            </a>
        </div>
    </header>

    <div class="title">
        @yield('message')
    </div>

</body>

</html>
