<div class="py-12 pt-24 sm:mx-20 mx-4">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden pb-5 pl-2 shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                @if ($quizzes->count() > 0)
                    <ul class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-6">
                        @foreach ($quizzes as $quiz)
                            <article class="flex max-w-xl flex-col items-start justify-between bg-white p-4 rounded-lg shadow-2xl shadow-[#89c8f1]">
                                <div class="flex items-center gap-x-4 text-xs">
                                    <time datetime="{{ $quiz->updated_at }}" class="text-gray-500">
                                        {{ $quiz->updated_at->diffForHumans() }}</time>
                                    <a href="{{ route('categories.show', [$quiz->category->id]) }}" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">
                                        {{ $quiz->category->name }}
                                    </a>
                                </div>
                                <div class="group relative">
                                    <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
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
                                    <img src="{{ asset('assets/avatars/help-center.jpg') }}" alt="user" class="h-8 w-8 rounded-full bg-gray-50">
                                    <div class="text-xs md:text-sm leading-0 truncate w-full  ">
                                        <p class="text-gray-600  ">created by</p>
                                        <p class="font-semibold text-gray-900 truncate">
                                            <a href="{{ route('profile.show', ['username' => $quiz->user->username]) }}" class="truncate">
                                                {{ $quiz->user->username }}
                                            </a>
                                        </p>
                                    </div>
                                    <div class="inline-flex justify-end w-full">
                                        <a title="{{ $quiz->title }}" href="{{ route('quiz.play', [$quiz, $quiz->slug]) }}" class="py-2 px-4 shadow-xl shadow-blue-500 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-[#0E194D] text-white hover:bg-[#0E194D]/80 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                            Play
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                                <path fill-rule="evenodd" d="M4.5 5.653c0-1.427 1.529-2.33 2.779-1.643l11.54 6.347c1.295.712 1.295 2.573 0 3.286L7.28 19.99c-1.25.687-2.779-.217-2.779-1.643V5.653Z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </ul>
                    <!-- Pagination links -->
                    {{ $quizzes->links() }}
                @else
                    <p>No quizzes found.</p>
                @endif
            </div>
            <div class="mt-4">
                <a href="{{ route('quiz.create') }}" class="inline-flex items-center gap-2 px-3 py-1.5 text-sm text-indigo-600 duration-150 bg-indigo-50 rounded-lg hover:bg-indigo-100 active:bg-indigo-200">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z" />
                    </svg>
                    Create a new ClubQuiz
                </a>
            </div>
        </div>
    </div>
</div>
