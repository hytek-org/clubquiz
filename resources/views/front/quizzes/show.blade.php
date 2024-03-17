<x-app-layout>
    <x-slot name="header" >
        <div class="py-2 -ms-6 md:-ms-0 md:px-4 leading-6 overflow-hidden  ">
            <h1 class="text-xl sm:text-4xl font-bold truncate">
                <span class="text-4xl lg:text-6xl text-[#4247d1]">{{ strtoupper(substr($quiz->title, 0, 1)) }}</span>{{ substr($quiz->title, 1) }}
            </h1>
            <p class="text-gray-800 pl-2 truncate">{{ $quiz->description }}</p>
        </div>
    </x-slot>
    
    <x-slot name="sidebar">
    </x-slot>
    <div class="md:py-10 bg-gray-50 border-t-[1px]  border-gray-500">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8 h-screen">
            <div class="bg-white overflow-hidden shadow-xl shadow-[#004AAD] sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (! $quiz->public && ! auth()->check())
                        <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-indigo-500">
                            <span class="inline-block align-middle mr-8">
                                This test is available only for registered users. Please <a href="{{ route('login') }}" class="hover:underline">Log in</a> or <a href="{{ route('register') }}" class="hover:underline">Register</a>
                            </span>
                        </div>
                    @else
                        @livewire('front.quizzes.show', ['quiz' => $quiz])
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
