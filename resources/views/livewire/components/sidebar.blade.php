<div x-data="{
    opensidebar: false,

}" class="bg-[#FAF5F3]  z-40" x-cloak>
    <div class="flex justify-between  ">
        <a wire:navigate href="{{ route('home') }}" class="mt-2 ml-2 text-[25px] sm:hidden font-bold">ClubQuiz</a>
        <div class="inline-flex mr-4 space-x-2 mt-4">
            <a wire:navigate href="{{ route('notifications') }}">
                <span>
                    @if (request()->routeIs('notifications'))
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-7 h-7  sm:hidden">
                            <path fill-rule="evenodd"
                                d="M5.25 9a6.75 6.75 0 0 1 13.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 0 1-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 1 1-7.48 0 24.585 24.585 0 0 1-4.831-1.244.75.75 0 0 1-.298-1.205A8.217 8.217 0 0 0 5.25 9.75V9Zm4.502 8.9a2.25 2.25 0 1 0 4.496 0 25.057 25.057 0 0 1-4.496 0Z"
                                clip-rule="evenodd" />
                        </svg>
                    @else
                        <svg class=" w-7 h-7  sm:hidden" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                        </svg>
                    @endif
                </span>
            </a>
            <button class=" mr-4 w-7 h-7" @click="opensidebar = true" type="button">
                <span class="sr-only">Open sidebar</span>
                <svg class="  sm:hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>

            </button>
        </div>
    </div>

    {{-- desktop sidebar --}}
    <aside
        class="hidden sm:flex sm:flex-shrink-0 fixed top-0  z-40 bg-gray-50 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="large screen Sidebar">
        <div class="flex flex-col w-64">
            <div class="flex flex-col flex-grow pt-5 overflow-y-auto bg-white border-r">
                <div class="flex flex-col flex-shrink-0 px-4">
                    <a wire:navigate href="{{ route('home') }}" title="clubquiz"
                        class="flex items-center font-bold text-[25px] px-[25%]  ">
                        ClubQuiz
                    </a>
                </div>
                <div class="flex flex-col flex-grow px-4 mt-5">
                    @guest
                        <nav class="flex-1 space-y-1 bg-white">
                            <p class="px-4 pt-4 text-xs font-semibold text-gray-400 uppercase">
                                Getting started
                            </p>
                            <ul>
                                <li>
                                    <a title="clubquiz guides"
                                        class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                        wire:navigate href="{{ route('guides') }}">
                                        <ion-icon class="w-4 h-4 md hydrated" name="aperture-outline" role="img"
                                            aria-label="aperture outline"></ion-icon>
                                        <span class="ml-4">
                                            Guides
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a title="clubquiz demos"
                                        class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                        wire:navigate href="{{ route('demos') }}">
                                        <ion-icon class="w-4 h-4 md hydrated" name="trending-up-outline" role="img"
                                            aria-label="trending up outline"></ion-icon>
                                        <span class="ml-4">
                                            Demos
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <p class="px-4 pt-4 text-xs font-semibold text-gray-400 uppercase">
                                Content
                            </p>
                            <ul>
                                <li>
                                    <a title="popular clubquiz's"
                                        class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                        wire:navigate href="{{ route('popular.clubquiz') }}">
                                        <ion-icon class="w-4 h-4 md hydrated" name="newspaper-outline" role="img"
                                            aria-label="newspaper outline"></ion-icon>
                                        <span class="ml-4">
                                            Popular ClubQuiz's
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a title="Recent clubquiz's"
                                        class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                        wire:navigate href="{{ route('recent.clubquiz') }}">
                                        <ion-icon class="w-4 h-4 md hydrated" name="sync-outline" role="img"
                                            aria-label="sync outline"></ion-icon>
                                        <span class="ml-4">
                                            Recent ClubQuiz's
                                        </span>
                                        {{-- <span
                                        class="inline-flex ml-auto items-center rounded-full bg-blue-50 px-2.5 py-0.5 text-xs font-medium text-blue-500">
                                        25
                                    </span> --}}
                                    </a>
                                </li>
                                <li>
                                    <a title="Browse categories of clubquiz's"
                                        class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                        wire:navigate href="{{ route('categories.index') }}">
                                        <ion-icon class="w-4 h-4 md hydrated" name="shield-checkmark-outline" role="img"
                                            aria-label="shield checkmark outline"></ion-icon>
                                        <span class="ml-4">
                                            Browse categories
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a title="Explore clubquiz"
                                        class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                        wire:navigate href="{{ route('explore') }}">
                                        <ion-icon class="w-4 h-4 md hydrated" name="thumbs-up-outline" role="img"
                                            aria-label="thumbs up outline"></ion-icon>
                                        <span class="ml-4">
                                            Explore
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <p class="px-4 pt-4 text-xs font-semibold text-gray-400 uppercase">
                                Contribute
                            </p>
                            <ul>
                                <li>
                                    <a title="Github ClubQuiz"class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                        href="https://github.com/hytek-org/clubquiz" target="_blank">
                                        <ion-icon class="w-4 h-4 md hydrated" name="albums-outline" role="img"
                                            aria-label="albums outline"></ion-icon>
                                        <span class="ml-4">
                                            Github
                                        </span>
                                        {{-- <span
                                        class="inline-flex ml-auto items-center rounded-full bg-red-100 px-2.5 py-0.5 text-xs font-medium text-red-500">
                                        25
                                    </span> --}}
                                    </a>
                                </li>
                                <li>
                                    <a title="ClubQuiz Resources"
                                        class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                        wire:navigate href="{{ route('links') }}">
                                        <ion-icon class="w-4 h-4 md hydrated" name="link-outline" role="img"
                                            aria-label="link outline"></ion-icon>
                                        <span class="ml-4">
                                            Links
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    @endguest
                    @auth
                        <nav class="flex-1 space-y-1 bg-white">
                            <p class="px-4 pt-4 text-xs font-semibold text-gray-400 uppercase">
                                Home
                            </p>
                            <ul>

                                <li>
                                    <a title="Leaderboared ClubQuiz"
                                        class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                        wire:navigate href="{{ route('leaderboard') }}">
                                        <ion-icon class="w-4 h-4 md hydrated" name="aperture-outline" role="img"
                                            aria-label="aperture outline"></ion-icon>
                                        <span class="ml-4">
                                            Leaderboared
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a title="Results ClubQuiz"
                                        class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                        wire:navigate href="{{ route('results.index') }}">
                                        <ion-icon class="w-4 h-4 md hydrated" name="trending-up-outline" role="img"
                                            aria-label="trending up outline"></ion-icon>
                                        <span class="ml-4">
                                            My Results
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a title="Tests ClubQuiz"
                                        class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                        wire:navigate href="{{ route('tests') }}">
                                        <ion-icon class="w-4 h-4 md hydrated" name="trending-up-outline" role="img"
                                            aria-label="trending up outline"></ion-icon>
                                        <span class="ml-4">
                                            ClubQuiz Analytics
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div x-data="{ open: false }">
                                        <button
                                            class="inline-flex items-center justify-between w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500 group"
                                            @click="open = ! open">
                                            <span class="inline-flex items-center text-base font-light">
                                                <ion-icon class="w-4 h-4 md hydrated" name="home-outline" role="img"
                                                    aria-label="home outline"></ion-icon>
                                                <span class="ml-4">
                                                    Create
                                                </span>
                                            </span>
                                            <svg fill="currentColor" viewBox="0 0 20 20"
                                                :class="{ 'rotate-180': open, 'rotate-0': !open }"
                                                class="inline w-5 h-5 ml-auto transition-transform duration-200 transform group-hover:text-accent rotate-0">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                        <div class="p-2 pl-6 -px-px" x-show="open" @click.outside="open = false"
                                            style="display: none;">
                                            <ul>
                                                <li>
                                                    <a href="{{ route('quiz.create') }}" title="Create ClubQuiz"
                                                        class="inline-flex items-center w-full p-2 pl-3 text-sm font-light text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                                                        <span class="inline-flex items-center w-full">
                                                            <ion-icon class="w-4 h-4 md hydrated" name="document-outline"
                                                                role="img" aria-label="document outline"></ion-icon>
                                                            <span class="ml-4">
                                                                ClubQuiz
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('questions.create') }}"
                                                        title="Create Questions for ClubQuiz"
                                                        class="inline-flex items-center w-full p-2 pl-3 text-sm font-light text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                                                        <span class="inline-flex items-center w-full">
                                                            <ion-icon class="w-4 h-4 md hydrated" name="mail-outline"
                                                                role="img" aria-label="mail outline"></ion-icon>
                                                            <span class="ml-4">
                                                                Questions
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('categories.create') }}" title="create category "
                                                        class="inline-flex items-center w-full p-2 pl-3 text-sm font-light text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                                                        <span class="inline-flex items-center w-full">
                                                            <ion-icon class="w-4 h-4 md hydrated" name="mail-outline"
                                                                role="img" aria-label="mail outline"></ion-icon>
                                                            <span class="ml-4">
                                                                Categories
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <p class="px-4 pt-4 text-xs font-semibold text-gray-400 uppercase">
                                Content
                            </p>
                            <ul>
                                <li>
                                    <a title="Popular ClubQuiz"
                                        class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                        wire:navigate href="{{ route('popular.clubquiz') }}">
                                        <ion-icon class="w-4 h-4 md hydrated" name="newspaper-outline" role="img"
                                            aria-label="newspaper outline"></ion-icon>
                                        <span class="ml-4">
                                            Popular ClubQuiz's
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a title="Recent ClubQuiz"
                                        class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                        wire:navigate href="{{ route('recent.clubquiz') }}">
                                        <ion-icon class="w-4 h-4 md hydrated" name="sync-outline" role="img"
                                            aria-label="sync outline"></ion-icon>
                                        <span class="ml-4">
                                            Recent ClubQuiz's
                                        </span>
                                        {{-- <span
                                    class="inline-flex ml-auto items-center rounded-full bg-blue-50 px-2.5 py-0.5 text-xs font-medium text-blue-500">
                                    25
                                </span> --}}
                                    </a>
                                </li>
                                <li>
                                    <a title="Browse ClubQuiz Categories"
                                        class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                        wire:navigate href="{{ route('categories.index') }}">
                                        <ion-icon class="w-4 h-4 md hydrated" name="shield-checkmark-outline"
                                            role="img" aria-label="shield checkmark outline"></ion-icon>
                                        <span class="ml-4">
                                            Browse categories
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a title="Explore ClubQuiz"
                                        class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                        wire:navigate href="{{ route('explore') }}">
                                        <ion-icon class="w-4 h-4 md hydrated" name="thumbs-up-outline" role="img"
                                            aria-label="thumbs up outline"></ion-icon>
                                        <span class="ml-4">
                                            Explore
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div x-data="{
                                        slideOverOpen: false
                                    }" class=" w-auto h-auto">
                                        <button @click="slideOverOpen=true"
                                            class="ml-8 inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500">Notifications</button>
                                        <template x-teleport="body">
                                            <div x-show="slideOverOpen" @keydown.window.escape="slideOverOpen=false"
                                                class="relative z-[99]">
                                                <div x-show="slideOverOpen" x-transition.opacity.duration.600ms
                                                    @click="slideOverOpen = false"
                                                    class="fixed inset-0 bg-black bg-opacity-10"></div>
                                                <div class="fixed inset-0 overflow-hidden">
                                                    <div class="absolute inset-0 overflow-hidden">
                                                        <div class="fixed inset-y-0 right-0 flex max-w-full pl-10">
                                                            <div x-show="slideOverOpen"
                                                                @click.away="slideOverOpen = false"
                                                                x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                                                                x-transition:enter-start="translate-x-full"
                                                                x-transition:enter-end="translate-x-0"
                                                                x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                                                                x-transition:leave-start="translate-x-0"
                                                                x-transition:leave-end="translate-x-full"
                                                                class="w-screen max-w-md">
                                                                <div
                                                                    class="flex flex-col h-full py-5 overflow-y-scroll bg-white border-l shadow-lg border-neutral-100/70">
                                                                    <div class="px-4 sm:px-5">
                                                                        <div class="flex items-start justify-between pb-1">
                                                                            <h2 class="text-base font-semibold leading-6 text-gray-900"
                                                                                id="slide-over-title">Notifications</h2>
                                                                            <div class="flex items-center h-auto ml-3">
                                                                                <button @click="slideOverOpen=false"
                                                                                    class="absolute top-0 right-0 z-30 flex items-center justify-center px-3 py-2 mt-4 mr-5 space-x-1 text-xs font-medium uppercase border rounded-md border-neutral-200 text-neutral-600 hover:bg-neutral-100">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        fill="none" viewBox="0 0 24 24"
                                                                                        stroke-width="1.5"
                                                                                        stroke="currentColor"
                                                                                        class="w-4 h-4">
                                                                                        <path stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            d="M6 18L18 6M6 6l12 12"></path>
                                                                                    </svg>
                                                                                    <span>Close</span>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="relative flex-1 px-4 mt-5 sm:px-5">
                                                                        <div class="absolute inset-0 px-4 sm:px-5">
                                                                            <div
                                                                                class="relative h-full overflow-y-auto border border-dashed rounded-md border-neutral-300">
                                                                                <livewire:components.notification />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </template>
                                    </div>
                                </li>
                            </ul>
                            <p class="px-4 pt-4 text-xs font-semibold text-gray-400 uppercase">
                                Contribute
                            </p>
                            <ul>
                                <li>
                                    <a title="Github ClubQuiz"
                                        class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                        href="https://github.com/hytek-org/clubquiz" target="_blank">
                                        <ion-icon class="w-4 h-4 md hydrated" name="albums-outline" role="img"
                                            aria-label="albums outline"></ion-icon>
                                        <span class="ml-4">
                                            Github
                                        </span>
                                        {{-- <span
                                    class="inline-flex ml-auto items-center rounded-full bg-red-100 px-2.5 py-0.5 text-xs font-medium text-red-500">
                                    25
                                </span> --}}
                                    </a>
                                </li>
                                <li>
                                    <a title="ClubQuiz Resources"
                                        class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                        wire:navigate href="{{ route('links') }}">
                                        <ion-icon class="w-4 h-4 md hydrated" name="link-outline" role="img"
                                            aria-label="link outline"></ion-icon>
                                        <span class="ml-4">
                                            Links
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    @endauth
                </div>
                <div class="flex flex-shrink-0 p-4 px-4 bg-gray-50">
                    @auth
                        <div @click.away="open = false" class="relative inline-flex items-center w-full"
                            x-data="{ open: false }">
                            <button @click="open = !open"
                                class="inline-flex items-center justify-between w-full px-4 py-3 text-lg font-medium text-center text-white transition duration-500 ease-in-out transform rounded-xl hover:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                <span>
                                    <span class="flex-shrink-0 block group">
                                        <div class="flex items-center">
                                            <div>
                                                <img class="inline-block object-cover rounded-full h-9 w-9"
                                                    src="{{ asset('assets/avatars/male.jpg') }}" alt="user image">
                                            </div>
                                            <div class="ml-3 text-left">
                                                <p
                                                    class="text-sm font-medium text-gray-500 group-hover:text-blue-500 truncate w-32">
                                                    {{ Auth::user()->username }}
                                                </p>
                                                <p class="text-xs font-medium text-gray-500 group-hover:text-blue-500">
                                                    More...
                                                </p>
                                            </div>
                                        </div>
                                    </span>
                                </span>
                                <svg :class="{ 'rotate-180': open, 'rotate-0': !open }" xmlns="http://www.w3.org/2000/svg"
                                    class="inline w-5 h-5 ml-4 text-black transition-transform duration-200 transform rotate-0"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div x-show="open" x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95"
                                class="absolute bottom-0 z-50 w-full mx-auto mt-2 origin-bottom-right bg-white rounded-xl"
                                style="display: none;">
                                <div class="px-2 py-2 bg-white rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                                    <ul>
                                        <li>
                                            <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                                href="{{ route('profile.update') }}">
                                                <ion-icon class="w-4 h-4 md hydrated" name="body-outline" role="img"
                                                    aria-label="body outline"></ion-icon>
                                                <span class="ml-4">
                                                    Account
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                                href="{{ route('profile.show', ['username' => Auth::user()->username]) }}">
                                                <ion-icon class="w-4 h-4 md hydrated" name="person-circle-outline"
                                                    role="img" aria-label="person circle outline"></ion-icon>
                                                <span class="ml-4">
                                                    Profile
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <form method="POST" action="{{ route('logout') }}"
                                                class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500">
                                                @csrf
                                                <ion-icon class="w-4 h-4 md hydrated" name="person-circle-outline"
                                                    role="img" aria-label="person circle outline"></ion-icon>
                                                <span>
                                                    <x-dropdown-link class="text-base font-[500]" :href="route('logout')"
                                                        onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                                        {{ __('Log Out') }}
                                                    </x-dropdown-link></span>

                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endauth
                    @guest
                        <div @click.away="open = false" class="relative inline-flex items-center w-full"
                            x-data="{ open: false }">
                            <button @click="open = !open"
                                class="inline-flex items-center justify-between w-full px-4 py-3 text-lg font-medium text-center text-white transition duration-500 ease-in-out transform rounded-xl hover:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                <span>
                                    <span class="flex-shrink-0 block group">
                                        <div class="flex items-center">
                                            <div>
                                                <img class="inline-block object-cover rounded-full h-9 w-9"
                                                    src="{{ asset('assets/logo.png') }}" alt="user image">
                                            </div>
                                            <div class="ml-3 text-left">
                                                <p class="text-sm font-medium text-gray-500 group-hover:text-blue-500">
                                                    Sign In
                                                </p>
                                                <p class="text-xs font-medium text-gray-500 group-hover:text-blue-500">
                                                    to continue...
                                                </p>
                                            </div>
                                        </div>
                                    </span>
                                </span>
                                <svg :class="{ 'rotate-180': open, 'rotate-0': !open }" xmlns="http://www.w3.org/2000/svg"
                                    class="inline w-5 h-5 ml-4 text-black transition-transform duration-200 transform rotate-0"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div x-show="open" x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95"
                                class="absolute bottom-0 z-50 w-full mx-auto mt-2 origin-bottom-right bg-white rounded-xl"
                                style="display: none;">
                                <div class="px-2 py-2 bg-white rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                                    <ul>
                                        <li>
                                            <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                                href="{{ route('login') }}">
                                                <ion-icon class="w-4 h-4 md hydrated" name="body-outline" role="img"
                                                    aria-label="body outline"></ion-icon>
                                                <span class="ml-4">
                                                    Sign In
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                                href="{{ route('register') }}">
                                                <ion-icon class="w-4 h-4 md hydrated" name="person-circle-outline"
                                                    role="img" aria-label="person circle outline"></ion-icon>
                                                <span class="ml-4">
                                                    Sign Up
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </aside>


    {{-- mobile sidebar --}}
    <aside x-show="opensidebar" x-cloak
        aria-label="small screen Sidebar"class="w-60  sm:hidden fixed top-0 right-0 z-40 bg-white h-screen  "
        aria-label="Sidebar">
        <div class="h-full pb-10   overflow-y-auto overflow-x-hidden  w-auto">
            <div class="flex justify-between">
                <a title="ClubQuiz" wire:navigate href="{{ route('home') }}"
                    class="flex font-bold text-[25px] pl-4 mt-4">
                    ClubQuiz
                </a>
                <svg @click="opensidebar = false" class="w-4 h-4 text-gray-500 mt-6 mr-6 sm:hidden "
                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>

            </div>

            <div class="flex flex-col flex-grow px-4 mt-5">
                @guest
                    <nav class="flex-1 space-y-1 bg-white">
                        <p class="px-4 pt-4 text-xs font-semibold text-gray-400 uppercase">
                            Getting started
                        </p>
                        <ul>
                            <li>
                                <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                    wire:navigate href="{{ route('guides') }}">
                                    <ion-icon class="w-4 h-4 md hydrated" name="aperture-outline" role="img"
                                        aria-label="aperture outline"></ion-icon>
                                    <span class="ml-4">
                                        Guides
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                    wire:navigate href="{{ route('demos') }}">
                                    <ion-icon class="w-4 h-4 md hydrated" name="trending-up-outline" role="img"
                                        aria-label="trending up outline"></ion-icon>
                                    <span class="ml-4">
                                        Demos
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <p class="px-4 pt-4 text-xs font-semibold text-gray-400 uppercase">
                            Content
                        </p>
                        <ul>
                            <li>
                                <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                    wire:navigate href="{{ route('popular.clubquiz') }}">
                                    <ion-icon class="w-4 h-4 md hydrated" name="newspaper-outline" role="img"
                                        aria-label="newspaper outline"></ion-icon>
                                    <span class="ml-4">
                                        Popular ClubQuiz's
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                    wire:navigate href="{{ route('recent.clubquiz') }}">
                                    <ion-icon class="w-4 h-4 md hydrated" name="sync-outline" role="img"
                                        aria-label="sync outline"></ion-icon>
                                    <span class="ml-4">
                                        Recent ClubQuiz's
                                    </span>
                                    {{-- <span
                                    class="inline-flex ml-auto items-center rounded-full bg-blue-50 px-2.5 py-0.5 text-xs font-medium text-blue-500">
                                    25
                                </span> --}}
                                </a>
                            </li>
                            <li>
                                <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                    wire:navigate href="{{ route('categories.index') }}">
                                    <ion-icon class="w-4 h-4 md hydrated" name="shield-checkmark-outline" role="img"
                                        aria-label="shield checkmark outline"></ion-icon>
                                    <span class="ml-4">
                                        Browse categories
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                    wire:navigate href="{{ route('explore') }}">
                                    <ion-icon class="w-4 h-4 md hydrated" name="thumbs-up-outline" role="img"
                                        aria-label="thumbs up outline"></ion-icon>
                                    <span class="ml-4">
                                        Explore
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <p class="px-4 pt-4 text-xs font-semibold text-gray-400 uppercase">
                            Contribute
                        </p>
                        <ul>
                            <li>
                                <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                    href="https://github.com/hytek-org/clubquiz" target="_blank">
                                    <ion-icon class="w-4 h-4 md hydrated" name="albums-outline" role="img"
                                        aria-label="albums outline"></ion-icon>
                                    <span class="ml-4">
                                        Github
                                    </span>
                                    {{-- <span
                                    class="inline-flex ml-auto items-center rounded-full bg-red-100 px-2.5 py-0.5 text-xs font-medium text-red-500">
                                    25
                                </span> --}}
                                </a>
                            </li>
                            <li>
                                <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                    wire:navigate href="{{ route('links') }}">
                                    <ion-icon class="w-4 h-4 md hydrated" name="link-outline" role="img"
                                        aria-label="link outline"></ion-icon>
                                    <span class="ml-4">
                                        Links
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                @endguest
                @auth
                    <nav class="flex-1 space-y-1 bg-white">
                        <p class="px-4 pt-4 text-xs font-semibold text-gray-400 uppercase">
                            Home
                        </p>
                        <ul>
                            <li>
                                <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                    wire:navigate href="{{ route('leaderboard') }}">
                                    <ion-icon class="w-4 h-4 md hydrated" name="aperture-outline" role="img"
                                        aria-label="aperture outline"></ion-icon>
                                    <span class="ml-4">
                                        Leaderboared
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                    wire:navigate href="{{ route('results.index') }}">
                                    <ion-icon class="w-4 h-4 md hydrated" name="trending-up-outline" role="img"
                                        aria-label="trending up outline"></ion-icon>
                                    <span class="ml-4">
                                        My Results
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                    wire:navigate href="{{ route('tests') }}">
                                    <ion-icon class="w-4 h-4 md hydrated" name="trending-up-outline" role="img"
                                        aria-label="trending up outline"></ion-icon>
                                    <span class="ml-4">
                                        ClubQuiz Analytics
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <p class="px-4 pt-4 text-xs font-semibold text-gray-400 uppercase">
                            Content
                        </p>
                        <ul>
                            <li>
                                <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                    wire:navigate href="{{ route('popular.clubquiz') }}">
                                    <ion-icon class="w-4 h-4 md hydrated" name="newspaper-outline" role="img"
                                        aria-label="newspaper outline"></ion-icon>
                                    <span class="ml-4">
                                        Popular ClubQuiz's
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                    wire:navigate href="{{ route('recent.clubquiz') }}">
                                    <ion-icon class="w-4 h-4 md hydrated" name="sync-outline" role="img"
                                        aria-label="sync outline"></ion-icon>
                                    <span class="ml-4">
                                        Recent ClubQuiz's
                                    </span>
                                    {{-- <span
                                class="inline-flex ml-auto items-center rounded-full bg-blue-50 px-2.5 py-0.5 text-xs font-medium text-blue-500">
                                25
                            </span> --}}
                                </a>
                            </li>
                            <li>
                                <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                    wire:navigate href="{{ route('categories.index') }}">
                                    <ion-icon class="w-4 h-4 md hydrated" name="shield-checkmark-outline" role="img"
                                        aria-label="shield checkmark outline"></ion-icon>
                                    <span class="ml-4">
                                        Browse categories
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                    wire:navigate href="{{ route('explore') }}">
                                    <ion-icon class="w-4 h-4 md hydrated" name="thumbs-up-outline" role="img"
                                        aria-label="thumbs up outline"></ion-icon>
                                    <span class="ml-4">
                                        Explore
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <p class="px-4 pt-4 text-xs font-semibold text-gray-400 uppercase">
                            Contribute
                        </p>
                        <ul>
                            <li>
                                <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                    href="https://github.com/hytek-org/clubquiz" target="_blank">
                                    <ion-icon class="w-4 h-4 md hydrated" name="albums-outline" role="img"
                                        aria-label="albums outline"></ion-icon>
                                    <span class="ml-4">
                                        Github
                                    </span>
                                    {{-- <span
                                class="inline-flex ml-auto items-center rounded-full bg-red-100 px-2.5 py-0.5 text-xs font-medium text-red-500">
                                25
                            </span> --}}
                                </a>
                            </li>
                            <li>
                                <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                    wire:navigate href="{{ route('links') }}">
                                    <ion-icon class="w-4 h-4 md hydrated" name="link-outline" role="img"
                                        aria-label="link outline"></ion-icon>
                                    <span class="ml-4">
                                        Links
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                @endauth
            </div>

            <div class="flex flex-shrink-0 p-4 px-4 bg-gray-50">
                @auth
                    <div @click.away="open = false" class="relative inline-flex items-center w-full"
                        x-data="{ open: false }">
                        <button @click="open = !open"
                            class="inline-flex items-center justify-between w-full px-4 py-3 text-lg font-medium text-center text-white transition duration-500 ease-in-out transform rounded-xl hover:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            <span>
                                <span class="flex-shrink-0 block group">
                                    <div class="flex items-center">
                                        <div>
                                            <img class="inline-block object-cover rounded-full h-9 w-9"
                                                src="{{ asset('assets/avatars/male.jpg') }}" alt="user image">
                                        </div>
                                        <div class="ml-3 text-left w-10">
                                            <p
                                                class="text-sm font-medium text-gray-500 group-hover:text-blue-500 truncate w-20">
                                                {{ Auth::user()->username }}
                                            </p>
                                            <p class="text-xs font-medium text-gray-500 group-hover:text-blue-500">
                                                More...
                                            </p>
                                        </div>
                                    </div>
                                </span>
                            </span>
                            <svg :class="{ 'rotate-180': open, 'rotate-0': !open }" xmlns="http://www.w3.org/2000/svg"
                                class="inline w-5 h-5 ml-4 text-black transition-transform duration-200 transform rotate-0"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute bottom-0 z-50 w-full mx-auto mt-2 origin-bottom-right bg-white rounded-xl"
                            style="display: none;">
                            <div class="px-2 py-2 bg-white rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                                <ul>
                                    <li>
                                        <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                            href="{{ route('profile.edit') }}">
                                            <ion-icon class="w-4 h-4 md hydrated" name="body-outline" role="img"
                                                aria-label="body outline"></ion-icon>
                                            <span class="ml-4">
                                                Account
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                            href="{{ route('profile.show', ['username' => Auth::user()->username]) }}">
                                            <ion-icon class="w-4 h-4 md hydrated" name="person-circle-outline"
                                                role="img" aria-label="person circle outline"></ion-icon>
                                            <span class="ml-4">
                                                Profile
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}"
                                            class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500">
                                            @csrf
                                            <ion-icon class="w-4 h-4 md hydrated" name="person-circle-outline"
                                                role="img" aria-label="person circle outline"></ion-icon>
                                            <span>
                                                <x-dropdown-link class="text-base font-[500]" :href="route('logout')"
                                                    onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                                    {{ __('Log Out') }}
                                                </x-dropdown-link></span>

                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endauth
                @guest
                    <div @click.away="open = false" class="relative inline-flex items-center w-full"
                        x-data="{ open: false }">
                        <button @click="open = !open"
                            class="inline-flex items-center justify-between w-full px-4 py-3 text-lg font-medium text-center text-white transition duration-500 ease-in-out transform rounded-xl hover:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            <span>
                                <span class="flex-shrink-0 block group">
                                    <div class="flex items-center">
                                        <div>
                                            <img class="inline-block object-cover rounded-full h-9 w-9"
                                                src="{{ asset('assets/logo.png') }}" alt="user image">
                                        </div>
                                        <div class="ml-3 text-left">
                                            <p class="text-sm font-medium text-gray-500 group-hover:text-blue-500">
                                                Sign In
                                            </p>
                                            <p class="text-xs font-medium text-gray-500 group-hover:text-blue-500">
                                                to continue...
                                            </p>
                                        </div>
                                    </div>
                                </span>
                            </span>
                            <svg :class="{ 'rotate-180': open, 'rotate-0': !open }" xmlns="http://www.w3.org/2000/svg"
                                class="inline w-5 h-5 ml-4 text-black transition-transform duration-200 transform rotate-0"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute bottom-0 z-50 w-full mx-auto mt-2 origin-bottom-right bg-white rounded-xl"
                            style="display: none;">
                            <div class="px-2 py-2 bg-white rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                                <ul>
                                    <li>
                                        <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                            href="{{ route('login') }}">
                                            <ion-icon class="w-4 h-4 md hydrated" name="body-outline" role="img"
                                                aria-label="body outline"></ion-icon>
                                            <span class="ml-4">
                                                Sign In
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                            href="{{ route('register') }}">
                                            <ion-icon class="w-4 h-4 md hydrated" name="person-circle-outline"
                                                role="img" aria-label="person circle outline"></ion-icon>
                                            <span class="ml-4">
                                                Sign Up
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endguest
            </div>
        </div>

    </aside>

</div>
