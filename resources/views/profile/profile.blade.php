<x-app-layout>
    <x-slot name="header">
        <div class=" py-10  md:px-4 leading-6 ">
            <h1 class="text-5xl sm:text-7xl font-bold "> <span class="text-7xl lg:text-9xl text-[#4247d1]">P</span>rofile
            </h1>
            <p class="text-gray-800 pl-4 md:pl-8">Manage your account details, preferences, and settings</p>
        </div>
    </x-slot>
    <x-slot name="sidebar">
       
    </x-slot>
    <div class="py-12">
        <section class="">
        
            <livewire:profile.home :user="$user"/>
        </section>
    </div>
    <livewire:components.footer/>
</x-app-layout>
