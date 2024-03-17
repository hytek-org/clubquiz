<x-app-layout>
    <x-slot name="header">
        <div class=" py-10  md:px-4 leading-6 ">
            <h1 class="text-5xl sm:text-7xl font-bold "> <span
                    class="text-7xl lg:text-9xl text-[#4247d1]">F</span>avorites ClubQuiz's</h1>
            <p class="text-gray-800 pl-2 ">Explore Your Favorite ClubQuiz's and Stay Updated with the Latest Quiz
                Activities.</p>
        </div>
    </x-slot>
    <x-slot name="sidebar"></x-slot>
    <section aria-labelledby="feature-five" id="feature-five" class="overflow-y-auto bg-white lg:h-screen">
        <livewire:explore.favorites />
    </section>

    <livewire:components.footer/>

</x-app-layout>
