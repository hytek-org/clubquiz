<x-app-layout>
    <x-slot name="header">
        <div class=" py-10  md:px-4 leading-6 ">
                <h1 class="text-5xl sm:text-7xl font-bold "> <span class="text-7xl lg:text-9xl text-[#4247d1]">P</span>opular All ClubQuiz's</h1>
                <p class="text-gray-800 pl-2 ">Today's most popular ClubQuiz's</p>
            </div>
    </x-slot>
    <livewire:explore.popular/>
    <x-slot name="sidebar"></x-slot>
  
</x-app-layout>