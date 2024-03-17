<div
    class="max-w-xl mx-auto bg-white  overflow-hidden  border border-gray-400 border-t-4 border-t-blue-600 hover:border-t-green-500 shadow-black hover:shadow-gray-400 transition-shadow shadow-md rounded-xl ">

    <div class="flex flex-col bg-white border shadow-sm rounded-xl ">
        <div class="bg-gray-100 border-b rounded-t-xl py-3 px-4 md:py-4 md:px-5  flex flex-col space-y-5 md:space-y-0 md:flex-row justify-between">
            <div class="flex items-center gap-x-4 text-xs">
                <p class="text-gray-500">
                    Category :
                </p>
                <a href="{{ route('categories.show', [$this->quiz->category->id]) }}"
                    class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{ $this->quiz->category->name }}</a>
            </div>
           
            <div class="flex items-center ">
                    <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    <p class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">{{ number_format($this->quiz->averageRating(), 1) }}</p>
                    <p class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">out of</p>
                    <p class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">5</p>
                </div>
        </div>
        <div class="p-4 md:p-5">
            <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                {{ $this->quiz->title }}
            </h3>
            <p class="mt-2 text-gray-500 dark:text-gray-400">
                {{ $this->quiz->description }}
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 px-2 pt-4">
                <div class="bg-gray-100 p-2 rounded-md md:mr-2">
                    <p class="text-gray-700 overflow-hidden">Total Questions:
                        <span class="font-[600]">{{ $this->questionsCount }}</span>
                    </p>
                    <p class="text-gray-700 overflow-hidden">Total Time:<span class="font-[600]">
                            {{ $this->questionsCount }}</span>
                        minutes</p>
                </div>
                <div class="bg-gray-100 my-2 md:my-0 p-2 rounded-md">
                    <a href="{{ route('profile.show', ['username' => $this->quiz->user->username]) }}"
                        class="text-gray-700 truncate overflow-hidden">Created by:
                        <span class="font-[600]">{{ $this->quiz->user->username }}</span>
                    </a>
                    <p class="text-gray-700 overflow-hidden">Last updated:
                        <span class="font-[600]">{{ $this->quiz->updated_at->diffForHumans() }}</span>
                    </p>
                </div>
            </div>
            <div class="flex justify-between">
                <a href="{{ route('quiz.show', [$quiz, $this->quiz->slug]) }}"
                    class="inline-flex bg-[#0E194D] border border-transparent text-sm  text-white px-4 py-2 rounded-full mt-6 hover:bg-[#004AAD] shadow-2xl shadow-black ">Start
                    this
                    ClubQuiz
                    <svg class="" xmlns="http://www.w3.org/2000/svg" width="16" height="20"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </a>
            
               
               {{-- Bookmark/favorites --}}
            <p class="mt-6">
                @if ($quiz->hasBeenFavoritedBy(auth()->user()))
                    <button wire:click='toggleFavorite()'>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#004AAD" class="w-8 h-8">
                            <path fill-rule="evenodd"
                                d="M6.32 2.577a49.255 49.255 0 0111.36 0c1.497.174 2.57 1.46 2.57 2.93V21a.75.75 0 01-1.085.67L12 18.089l-7.165 3.583A.75.75 0 013.75 21V5.507c0-1.47 1.073-2.756 2.57-2.93z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                @else
                    <button wire:click='toggleFavorite()'>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8"
                            stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                        </svg>
                    </button>
                @endif
            </p>
              
                
            </div>


            <div class="mt-4">
                @foreach ($this->quiz->tags as $tag)
                    <a href="#"
                        class="inline-block px-2 ml-1 py-1.5 text-xs font-semibold text-gray-800 bg-gray-100 border border-gray-200 rounded-full   ">#{{ $tag->name }}</a>
                @endforeach
            </div>
        </div>
    </div>
</div>
