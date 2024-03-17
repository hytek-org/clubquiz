<x-app-layout>

    <x-slot name="header">
        <!-- component -->
        <div class="px-6 pt-20 pb-5 bg-[#FAF5F3] ">
            <livewire:components.search />
        </div>
    </x-slot>
    <x-slot name="sidebar">
    </x-slot>


    <div class="py-12  mx-2 mt-2 z-10">
        <livewire:explore.components.header />
        <section>
            <div class="bg-[#FAF5F3]  py-24 sm:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl lg:mx-0">
                        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">From the Public
                            ClubQuiz's
                        </h2>
                        <p class="mt-2 text-lg leading-8 text-gray-600">Learn how to grow your skill with our ClubQuiz

                        </p>
                    </div>
                    <div
                        class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                        @forelse($public as $quiz)
                            <article
                                class="flex max-w-xl flex-col items-start justify-between bg-white p-4 rounded-lg shadow-2xl shadow-[#89c8f1]">
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
                                    <p class="text-sm">Questions: <span>{{ $quiz->questions_count }}</span></p>
                                </div>
                                <div class="relative w-full flex mt-8 items-center gap-x-2 ">
                                    <img src="{{ asset('assets/avatars/help-center.jpg') }}" alt="user"
                                        class="h-8 w-8 rounded-full bg-gray-50">
                                    <div class="text-xs md:text-sm leading-0 truncate w-full  ">
                                        <p class="text-gray-600  ">created by</p>
                                        <p class="font-semibold text-gray-900 truncate">
                                            <a  href="{{ route('profile.show', ['username' => $quiz->user->username]) }}" class="truncate">
                                                {{ $quiz->user->username }}
                                            </a>
                                        </p>
                                    </div>
                                    <div class="inline-flex justify-end w-full">
                                        <a title="{{ $quiz->title }}"
                                            href="{{ route('quiz.play', [$quiz, $quiz->slug]) }}"
                                            class="py-2 px-4 shadow-xl shadow-blue-500 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-[#0E194D] text-white hover:bg-[#0E194D]/80 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                            Play
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="w-4 h-4">
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
            </div>
            <div class="bg-[#FAF5F3]/50  py-24 sm:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl lg:mx-0 ">
                        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">From the Registered
                            ClubQuiz's
                        </h2>
                        <p class="mt-2 text-lg leading-8 text-gray-600">Learn with clubquiz and get rewarded for your learning.

                        </p>
                    </div>
                    <div
                        class="mx-auto  mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                        @forelse($registered as $quiz)
                            <article
                                class="flex max-w-xl flex-col items-start justify-between bg-white p-4 rounded-lg shadow-2xl shadow-[#89c8f1]">
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
                                    <p class="text-sm">Questions: <span>{{ $quiz->questions_count }}</span></p>
                                </div>
                                <div class="relative w-full flex mt-8 items-center gap-x-2 ">
                                    <img src="{{ asset('assets/avatars/help-center.jpg') }}" alt="user"
                                        class="h-8 w-8 rounded-full bg-gray-50">
                                    <div class="text-xs md:text-sm leading-0 truncate w-full  ">
                                        <p class="text-gray-600  ">created by</p>
                                        <p class="font-semibold text-gray-900 truncate">
                                            <a  href="{{ route('profile.show', ['username' => $quiz->user->username]) }}" class="truncate">
                                                {{ $quiz->user->username }}
                                            </a>
                                        </p>
                                    </div>
                                    <div class="inline-flex justify-end w-full">
                                        <a title="{{ $quiz->title }}"
                                            href="{{ route('quiz.play', [$quiz, $quiz->slug]) }}"
                                            class="py-2 px-4 shadow-xl shadow-blue-500 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-[#0E194D] text-white hover:bg-[#0E194D]/80 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                            Play
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="w-4 h-4">
                                                <path fill-rule="evenodd"
                                                    d="M4.5 5.653c0-1.427 1.529-2.33 2.779-1.643l11.54 6.347c1.295.712 1.295 2.573 0 3.286L7.28 19.99c-1.25.687-2.779-.217-2.779-1.643V5.653Z"
                                                    clip-rule="evenodd" />
                                            </svg>

                                        </a>
                                    </div>
                                </div>

                            </article>
                        @empty
                            <div class="mt-2">No published quizzes found.</div>
                        @endforelse
                    </div>
                </div>
            </div>
        </section>


    </div>

    <livewire:components.footer />



</x-app-layout>
