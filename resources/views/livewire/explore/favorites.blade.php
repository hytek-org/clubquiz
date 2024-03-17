<div>
    <div class="px-8 py-24 mx-auto lg:px-16 max-w-7xl md:px-12 xl:px-36 lg:flex">
        <div class="lg:w-1/2">
            <div class="top-0 pt-8 pb-16 lg:sticky">
                <div>
                    <div class="lg:pr-24 md:pr-12">
                        <div>
                            <p class="text-2xl font-medium tracking-tight text-black sm:text-4xl">
                                ClubQuiz: Create, Explore, and Enjoy Interactive Quizzes!
                            </p>
                            <p class="max-w-xl mt-4 text-lg tracking-tight text-gray-600">
                                Create engaging quizzes, explore a variety of topics, and enjoy the learning journey!
                            </p>
                        </div>

                        <div class="flex flex-col items-center justify-center gap-3 mt-10 lg:flex-row lg:justify-start">
                            <a href="#view"
                                class="items-center justify-center w-full px-6 py-2.5 text-center text-white duration-200 bg-black border-2 border-black rounded-full inline-flex hover:bg-transparent hover:border-black hover:text-black focus:outline-none lg:w-auto focus-visible:outline-black text-sm focus-visible:ring-black">
                                View
                            </a>
                            <a href="#_"
                                class="inline-flex items-center justify-center text-sm font-semibold text-black duration-200 hover:text-blue-500 focus:outline-none focus-visible:outline-gray-600">
                                Learn more &nbsp; →
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:w-1/2">
            <div class="flex-shrink-0">
                <div>
                    <ul id="view" class="grid grid-cols-1 gap-12 mt-6 list-none lg:mt-0 lg:gap-24" role="list">
                        @forelse($clubquizs as $quiz)
                            <li>
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
                            </li>
                            @empty
                            <div class="mt-2">No Favorites ClubQuiz found.</div>
                        @endforelse


                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
