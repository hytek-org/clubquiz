<x-app-layout>
    <x-slot name="header">
        <div class=" py-10  md:px-4 leading-6 ">
                <h1 class="text-5xl sm:text-7xl font-bold "> <span class="text-7xl lg:text-9xl text-[#4247d1]">R</span>ecently Added</h1>
                <p class="text-gray-800 pl-2 ">Recently uploaded ClubQuiz's</p>
            </div>
    </x-slot>
    <livewire:explore.recent/>
    <x-slot name="sidebar"></x-slot>
  
</x-app-layout>