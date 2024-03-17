<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ClubQuiz') }}</title>
    @laravelPWA
  
    
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="font-main antialiased  select-none">
    <div class="h-full sm:flex">
        <!-- Sidebar -->
        <div class="inline w-full sm:w-56  sm:overflow-y-auto md:block bg-[#FAF5F3]">
            <livewire:components.sidebar />
        </div>
        <!-- Content Area -->
        <div class="flex-1 flex flex-col overflow-hidden">
     
            <div class="pl-10 pt-4 bg-[#FAF5F3]">
             
                {{ $header }}
            </div>
           
         

            <!-- Main Content -->
            <div class="flex-1 flex items-stretch overflow-hidden">
                <main class="flex-1 overflow-y-auto">
                    <!-- Primary Column Section -->
                    <section class=" flex-1 h-full flex flex-col ">

                        {{ $slot }}
                        <p wire:offline
                            class="text-black  mx-auto  my-20 px-4 bg-[#c4a2a2] rounded-md py-4 z-[99] w-2/3 shadow-2xl shadow-black">
                            Whoops, your device has lost connection. The web page you are viewing is offline.
                        </p>
                        <!-- Your main content for this section goes here -->

                    </section>

                </main>

                <!-- Secondary Column (hidden on smaller screens) -->
                <div class="">
                    <!-- Your content for this aside section goes here -->
                  
                    {{ $sidebar }}
                </div>
            </div>
           
        </div>
        <livewire:components.bottomnav />
    </div>


    @livewireScripts
    @stack('scripts')
</body>



</html>
