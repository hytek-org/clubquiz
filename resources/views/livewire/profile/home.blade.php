<div class="">


 
    <div class="bg-white px-4 pb-10">
        <div class="mx-auto md:px-8">
            <div class="flex flex-col overflow-hidden rounded-lg bg-gray-900 sm:flex-row md:h-80">
                <!-- content - start -->
                <div class="flex w-full flex-col p-4 sm:p-8 ">
                    <h2 class="mb-4 text-2xl font-bold text-white md:text-3xl lg:text-4xl">{{ ucwords($user->name) }}</h2>
                    <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8 py-5">
                        <p class="rounded-md p-1 bg-gray-200 font-bold" wire:key="{{ time() }}">{{ $user->quizs_count }} ClubQuiz's</p>
                        <p class="rounded-md p-1 bg-gray-200 font-bold">{{ $user->followers_count }} Followers</p>
                        <p class="rounded-md p-1 bg-gray-200 font-bold">{{ $user->followings_count }} Following</p>
                    </div>
                    <div class="mt-auto">
                        @auth
                            {{-- Check if user owns profile or not --}}
                            @if (auth()->id() == $user->id)
                                <a href="{{ route('profile.edit') }}"
                                    class="inline-block rounded-lg bg-white px-8 py-3 text-center text-sm font-semibold text-gray-800 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:text-base">
                                    Edit Profile
                                </a>
                            @else
                                <button wire:click="toggleFollow()" type="button"
                                    class="inline-block rounded-lg bg-white px-8 py-3 text-center text-sm font-semibold text-gray-800 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:text-base">
                                    @if (auth()->user()->isFollowing($user))
                                        Following
                                    @else
                                        Follow
                                    @endif
                                </button>
                            @endif
                        @endauth
                    </div>
                </div>
                <!-- content - end -->
    
                <!-- image - start -->
                <div class="relative order-first h-48 w-full bg-gray-700 sm:order-none sm:h-auto sm:w-1/2 lg:w-3/5">
                    <img src="{{ asset('assets/avatars/profile-background.png') }}" loading="lazy"
                        alt="Photo by Dom Hill" class="h-full w-full object-cover object-center" />
                    <div class="absolute inset-0 flex items-center justify-center">
                        <h1 class="text-white text-4xl lg:text-6xl font-bold"> <span>@</span>{{ $user->username }}</h1>
                    </div>
                </div>
                <!-- image - end -->
            </div>
        </div>
    </div>
    
  
    <div class="p-6 bg-white border-b border-gray-200 px-4 md:px-20">
        @if ($clubquizs->count() > 0)
            <ul class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-6">
                @foreach ($clubquizs as $quiz)
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
            
        @else
            <p>No quizzes found.</p>
        @endif
    </div>

</div>
