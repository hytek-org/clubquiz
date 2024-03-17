<div class="p-2">
    <div class="bg-white">
        <div>
            <section class="mx-auto max-w-7xl  sm:px-6 lg:px-8">
                <div class="flex items-baseline justify-between border-b border-gray-200 pb-6 ">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900">Explore</h1>
                    <div class="flex items-center pr-4">
                        <div @click.away="open = false" x-data="{ open: false }" class="relative inline-block text-left">
                            <div>
                                <button @click="open = !open"
                                    class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900"
                                    id="menu-button" aria-expanded="false" aria-haspopup="true">
                                    Sort
                                    <svg class="-mr-1 ml-1 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                            <div x-show="open" x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95" style="display: none;"
                                class="absolute right-0 z-20 mt-2 w-40 origin-top-right rounded-md bg-white shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none"
                                role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                <div class="py-1" role="none">
                                    <a href="#" wire:click="sortBy('best_rating')"
                                        class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                                        id="menu-item-1">Best Rating</a>
                                    <a href="#" wire:click="sortBy('newest')"
                                        class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                                        id="menu-item-2">Newest</a>
                                    <a href="#" wire:click="sortBy('oldest')"
                                        class="font-medium text-gray-900 block px-4 py-2 text-sm" role="menuitem"
                                        tabindex="-1" id="menu-item-0">Oldest</a>
                                </div>
                            </div>
                        </div>

                        <div x-data="{ modalOpen: false }" @keydown.escape.window="modalOpen = false"
                            :class="{ 'z-40': modalOpen }" class="relative w-auto h-auto">
                            <button @click="modalOpen=true"
                                class="-m-2 ml-4 p-2 text-gray-400 hover:text-gray-500 sm:ml-6 lg:hidden">
                                <span class="sr-only">Filters</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-6 h-6">
                                    <path
                                        d="M18.75 12.75h1.5a.75.75 0 0 0 0-1.5h-1.5a.75.75 0 0 0 0 1.5ZM12 6a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 12 6ZM12 18a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 12 18ZM3.75 6.75h1.5a.75.75 0 1 0 0-1.5h-1.5a.75.75 0 0 0 0 1.5ZM5.25 18.75h-1.5a.75.75 0 0 1 0-1.5h1.5a.75.75 0 0 1 0 1.5ZM3 12a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 3 12ZM9 3.75a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM12.75 12a2.25 2.25 0 1 1 4.5 0 2.25 2.25 0 0 1-4.5 0ZM9 15.75a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" />
                                </svg>
                            </button>
                            <template x-teleport="body">
                                <div x-show="modalOpen"
                                    class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen"
                                    x-cloak>
                                    <div x-show="modalOpen" x-transition:enter="ease-out duration-300"
                                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                        x-transition:leave="ease-in duration-300" x-transition:leave-start="opacity-100"
                                        x-transition:leave-end="opacity-0" @click="modalOpen=false"
                                        class="absolute inset-0 w-full h-full bg-gray-900 bg-opacity-50 backdrop-blur-sm">
                                    </div>
                                    <div x-show="modalOpen" x-trap.inert.noscroll="modalOpen"
                                        x-transition:enter="ease-out duration-300"
                                        x-transition:enter-start="opacity-0 scale-90"
                                        x-transition:enter-end="opacity-100 scale-100"
                                        x-transition:leave="ease-in duration-200"
                                        x-transition:leave-start="opacity-100 scale-100"
                                        x-transition:leave-end="opacity-0 scale-90"
                                        class="relative w-full py-6 bg-white shadow-md px-7  drop-shadow-md backdrop-blur-sm sm:max-w-lg sm:rounded-lg">
                                        <div class="flex items-center justify-between pb-3 ">
                                            <h3 class="text-lg font-[600]">Popular ClubQuiz</h3>
                                            <button @click="modalOpen=false"
                                                class="absolute top-0 right-0 flex items-center justify-center w-8 h-8 mt-5 mr-5 text-gray-600 rounded-full hover:text-gray-800 hover:bg-gray-50">
                                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                        {{-- small screen filter --}}
                                        <form class="">
                                            <ul role="list"
                                                class="space-y-2 mt-2 border-b border-gray-200 pb-6 text-sm font-medium text-gray-900">

                                                @foreach ($popular as $quiz)
                                                    <li><a title="{{ $quiz->title }}"
                                                            href="{{ route('quiz.play', [$quiz, $quiz->slug]) }}">{{ $quiz->title }}</a>
                                                    </li>
                                                @endforeach

                                            </ul>

                                            <div x-data="{ open: false }" class="border-b border-gray-200 py-6">
                                                <h3 class="-my-3 flow-root">
                                                    <!-- Expand/collapse section button -->
                                                    <button type="button" @click="open = !open"
                                                        class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500"
                                                        aria-controls="filter-section-0"
                                                        :aria-expanded="open.toString()">
                                                        <span class="font-medium text-gray-900">Category</span>
                                                        <span class="ml-6 flex items-center">
                                                            <!-- Expand icon, show/hide based on section open state. -->
                                                            <svg x-show="!open" class="h-5 w-5" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true">
                                                                <path
                                                                    d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                                            </svg>
                                                            <!-- Collapse icon, show/hide based on section open state. -->
                                                            <svg x-show="open" class="h-5 w-5" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true">
                                                                <path fill-rule="evenodd"
                                                                    d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </h3>
                                                <!-- Filter section, show/hide based on section state. -->
                                                <div x-show="open" class="pt-6" id="filter-section-0">
                                                    <div class="space-y-4 h-52 overflow-y-auto">
                                                        @foreach ($categories as $category)
                                                            <div class="flex items-center">
                                                                <input wire:model="selectedCategories"
                                                                    value="{{ $category->id }}"
                                                                    id="category{{ $category->id }}" type="checkbox"
                                                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                <label for="category{{ $category->id }}"
                                                                    class="ml-3 text-sm text-gray-600">{{ $category->name }}</label>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                        <div class="flex flex-col-reverse sm:flex-row sm:justify-between sm:space-x-2">
                                            <button @click="modalOpen=false" type="button"
                                                class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium text-white transition-colors border border-transparent rounded-md focus:outline-none focus:ring-2 focus:ring-neutral-900 focus:ring-offset-2 bg-neutral-950 hover:bg-neutral-900">Apply</button>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>

                    </div>
                </div>

                <section aria-labelledby="Explores-heading" class=" pt-6">
                    <h2 id="Explores-heading" class="sr-only">Popular</h2>

                    <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4">
                        <!-- Filters for large screen -->
                        <form class="hidden lg:block">
                            <h3 class="text-lg font-[600]">Popular ClubQuiz</h3>
                            <ul role="list"
                                class="space-y-4 mt-2 border-b border-gray-200 pb-6 text-sm font-medium text-gray-900">

                                @foreach ($popular as $quiz)
                                    <li><a title="{{ $quiz->title }}"
                                            href="{{ route('quiz.play', [$quiz, $quiz->slug]) }}">{{ $quiz->title }}</a>
                                    </li>
                                @endforeach

                            </ul>

                            <div x-data="{ open: false }" class="border-b border-gray-200 py-6">
                                <h3 class="-my-3 flow-root">
                                    <!-- Expand/collapse section button -->
                                    <button type="button" @click="open = !open"
                                        class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500"
                                        aria-controls="filter-section-0" :aria-expanded="open.toString()">
                                        <span class="font-medium text-gray-900">Category</span>
                                        <span class="ml-6 flex items-center">
                                            <!-- Expand icon, show/hide based on section open state. -->
                                            <svg x-show="!open" class="h-5 w-5" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                            </svg>
                                            <!-- Collapse icon, show/hide based on section open state. -->
                                            <svg x-show="open" class="h-5 w-5" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </button>
                                </h3>
                                <!-- Filter section, show/hide based on section state. -->
                                <div x-show="open" class="pt-6" id="filter-section-0">
                                    <div class="space-y-4 h-52 overflow-x-auto p-2">
                                        @foreach ($categories as $category)
                                            <div class="flex items-center">
                                                <input wire:model="selectedCategories" value="{{ $category->id }}"
                                                    id="category{{ $category->id }}" type="checkbox"
                                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="category{{ $category->id }}"
                                                    class="ml-3 text-sm text-gray-600">{{ $category->name }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>


                        </form>

                        <!-- Explore grid -->
                        <div class="lg:col-span-3 ">

                            <section>
                                <div class="relative items-center w-full h-screen mx-auto ">
                                    <div
                                        class="grid w-full grid-cols-1 gap-6 p-2 mx-auto xl:grid-cols-2 overflow-y-auto h-screen">

                                        @forelse($this->clubquiz as $quiz)
                                            <article
                                                class="flex max-w-md flex-col items-start justify-between bg-white p-4 rounded-lg shadow-2xl shadow-[#89c8f1]">
                                                <div class="flex items-center gap-x-4 text-xs">
                                                    <time datetime="{{ $quiz->updated_at }}" class="text-gray-500">
                                                        {{ $quiz->updated_at->diffForHumans() }}</time>
                                                    <a href="{{ route('categories.show', [$quiz->category->id]) }}"
                                                        class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{ $quiz->category->name }}</a>
                                                </div>
                                                <div class="group relative">
                                                    <h3
                                                        class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">

                                                        <a href="{{ route('quiz.play', [$quiz, $quiz->slug]) }}">
                                                            <span class="absolute inset-0"></span>
                                                            {{ $quiz->title }}
                                                        </a>
                                                    </h3>
                                                    <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">
                                                        {{ $quiz->description }}
                                                    </p>
                                                    <p class="text-sm">Questions:
                                                        <span>{{ $quiz->questions_count }}</span>
                                                    </p>
                                                </div>
                                                <div class="relative w-full flex mt-8 items-center gap-x-2 ">
                                                    <img src="{{ asset('assets/avatars/help-center.jpg') }}"
                                                        alt="user" class="h-8 w-8 rounded-full bg-gray-50">
                                                    <div class="text-xs md:text-sm leading-0 truncate w-full  ">
                                                        <p class="text-gray-600  ">created by</p>
                                                        <p class="font-semibold text-gray-900 truncate">
                                                            <a href="{{ route('profile.show', ['username' => $quiz->user->username]) }}"
                                                                class="truncate">
                                                                {{ $quiz->user->username }}
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <div class="inline-flex justify-end w-full">
                                                        <a title="{{ $quiz->title }}"
                                                            href="{{ route('quiz.play', [$quiz, $quiz->slug]) }}"
                                                            class="py-2 px-4 shadow-xl shadow-blue-500 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-[#0E194D] text-white hover:bg-[#0E194D]/80 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                            Play
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 24 24" fill="currentColor"
                                                                class="w-4 h-4">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.5 5.653c0-1.427 1.529-2.33 2.779-1.643l11.54 6.347c1.295.712 1.295 2.573 0 3.286L7.28 19.99c-1.25.687-2.779-.217-2.779-1.643V5.653Z"
                                                                    clip-rule="evenodd" />
                                                            </svg>

                                                        </a>
                                                    </div>
                                                </div>

                                            </article>
                                        @empty
                                            <div class="mt-2">No public quizzes found.</div>
                                        @endforelse
                                    </div>

                                </div>
                            </section>

                        </div>
                    </div>
                </section>
            </section>
        </div>
    </div>
</div>
