<x-app-layout>
    <x-slot name="header">
        <div class=" py-10  md:px-4 leading-6 ">
                <h1 class="text-5xl sm:text-7xl font-bold "> <span class="text-7xl lg:text-9xl text-[#4247d1]">E</span>xplore All ClubQuiz's</h1>
                <p class="text-gray-800 pl-2 ">Explore a wide variety of clubquiz'</p>
            </div>
    </x-slot>
    <section class="md:mx-10 md:px-10 my-5 md:py-10 border rounded">
        <livewire:explore.home/>
    </section>

    <x-slot name="sidebar">
    </x-slot>
  
</x-app-layout>