<div>

    <form class="max-w-md mx-auto ">
        <label for="default-search" class="mb-2 text-sm font-medium text-[#FAF5F3] sr-only">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-[#FAF5F3] " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input wire:model.live="query" type="search" id="default-search"
                class=" block w-full p-4 ps-10 text-sm text-[#FAF5F3] placeholder:text-[#FAF5F3] border border-[#FAF5F3] rounded-full bg-[#0E194D] focus:ring-[#0E194D] focus:border-[#0E194D] "
                placeholder="Search..." required />

        </div>
    </form>
    <div class="inline-flex justify-center items-center w-full my-4">
        <div wire:loading.delay
            class=" animate-spin  p-4 border-[3px] border-current border-t-transparent text-[#0E194D] rounded-full "
            role="status" aria-label="loading">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <section>
        <main>
            <!-- === Remove and replace with your own content... === -->
            <ul class="space-y-2 md:space-y-0 overflow-x-hidden md:grid grid-cols-4 mx-auto gap-4 ml-4">
                @if ($quizs)
                    @forelse ($quizs as $key => $quiz)
                        <li>
                            <div
                                class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                                <div
                                    class="bg-gray-100 border-b rounded-t-xl py-3 px-4 md:py-4 md:px-5 ">
                                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-500 inline-flex">
                                        <span ><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 18v-5.25m0 0a6.01 6.01 0 0 0 1.5-.189m-1.5.189a6.01 6.01 0 0 1-1.5-.189m3.75 7.478a12.06 12.06 0 0 1-4.5 0m3.75 2.383a14.406 14.406 0 0 1-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 1 0-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                                            </svg>
                                        </span>
                                        <span class="font-medium  ">{{ $quiz->category->name }}</span>

                                    </p>
                                    
                                </div>
                                <div class="p-4 md:p-5">
                                    <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                                        {{ $quiz->title }}
                                    </h3>
                                    <p class="mt-2 text-gray-500 dark:text-gray-400">
                                        {{ $quiz->description }}
                                    </p>
                                    <a href="{{ route('quiz.play', [$quiz, $quiz->slug]) }}" class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                       >
                                        Play ClubQuiz
                                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="m9 18 6-6-6-6" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        
                        </li>
                    @empty
                        <li class="col-span-full">
                            <div class="min-h-60 flex flex-col bg-white border shadow-sm rounded-xl w-full mx-4 dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                                <div class="flex flex-auto flex-col justify-center items-center p-4 md:p-5">
                                  <svg class="size-10 text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="22" x2="2" y1="12" y2="12"/>
                                    <path d="M5.45 5.11 2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"/>
                                    <line x1="6" x2="6.01" y1="16" y2="16"/>
                                    <line x1="10" x2="10.01" y1="16" y2="16"/>
                                  </svg>
                                  <p class="mt-5 text-sm text-gray-800 dark:text-gray-300">
                                    No ClubQuiz Found
                                  </p>
                                </div>
                              </div>
                        </li>
                    @endforelse
                @endif

            </ul>

            <!-- === End ===  -->
        </main>
    </section>


</div>
