<x-app-layout>
    <x-slot name="header">
        <div class=" py-10  md:px-4 leading-6 ">
            <h1 class="text-5xl sm:text-7xl font-bold "> <span class="text-7xl lg:text-9xl text-[#4247d1]">V</span>iew All
                Categories</h1>
            <p class="text-gray-800 pl-4 md:pl-8">Explore a wide variety of quiz categories on ClubQuiz.</p>
        </div>
    </x-slot>

    <div class="py-12 pt-24 sm:mx-20 mx-4">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden pb-5 pl-2 shadow-sm sm:rounded-lg">

                <div class="p-6 bg-white border-b border-gray-200">

                    <ul class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-6">
                        @foreach ($categories as $category)
                            <li class="mb-5 bg-[#fFffee] rounded-xl border-2 shadow-2xl shadow-[#fFffee]">
                                <div class="flex justify-between bg-[#fFffee] border-b-2 border-gray-500 pt-2">
                                    <p class="text-xs font-bold ps-2">Date - <span
                                            class="text-sm font-light ">{{ $category->created_at->diffForHumans() }}</span>
                                    </p>
                                    @auth
                                        <div class="flex space-x-4 pe-2">
                                            @if (auth()->user()->id === $category->user->id)
                                                <a title="Edit Category"
                                                    class="cursor-pointer text-gray-700 hover:text-black"
                                                    href="{{ route('categories.edit', $category) }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                    </svg>
                                                </a>

                                                <div x-data="{ modalOpen: false }" @keydown.escape.window="modalOpen = false"
                                                    class="relative z-50 w-auto h-auto">
                                                    <button @click="modalOpen=true" class="text-gray-700 hover:text-black">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                        </svg>

                                                    </button>
                                                    <template x-teleport="body">
                                                        <div x-show="modalOpen"
                                                            class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen"
                                                            x-cloak>
                                                            <div x-show="modalOpen"
                                                                x-transition:enter="ease-out duration-300"
                                                                x-transition:enter-start="opacity-0"
                                                                x-transition:enter-end="opacity-100"
                                                                x-transition:leave="ease-in duration-300"
                                                                x-transition:leave-start="opacity-100"
                                                                x-transition:leave-end="opacity-0" @click="modalOpen=false"
                                                                class="absolute inset-0 w-full h-full bg-black bg-opacity-40">
                                                            </div>
                                                            <div x-show="modalOpen" x-trap.inert.noscroll="modalOpen"
                                                                x-transition:enter="ease-out duration-300"
                                                                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                                                x-transition:leave="ease-in duration-200"
                                                                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                                                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                                class="relative w-full py-6 bg-white px-7 sm:max-w-lg sm:rounded-lg">
                                                                <div class="flex items-center justify-between pb-2">
                                                                    <h3 class="text-lg font-semibold">Delete Category</h3>
                                                                    <button @click="modalOpen=false"
                                                                        class="absolute top-0 right-0 flex items-center justify-center w-8 h-8 mt-5 mr-5 text-gray-600 rounded-full hover:text-gray-800 hover:bg-gray-50">
                                                                        <svg class="w-5 h-5"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            fill="none" viewBox="0 0 24 24"
                                                                            stroke-width="1.5" stroke="currentColor">
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                d="M6 18L18 6M6 6l12 12" />
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <div class="relative w-auto">
                                                                    <div
                                                                        class="relative transform overflow-hidden rounded-lg bg-white shadow-lg shadow-red-300 hover:shadow-red-500 text-left  transition-all sm:my-8 sm:w-full sm:max-w-lg">
                                                                        <div
                                                                            class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4 ">
                                                                            <div class="sm:flex sm:items-start">
                                                                                <div
                                                                                    class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                                                                    <svg class="h-6 w-6 text-red-600"
                                                                                        fill="none" viewBox="0 0 24 24"
                                                                                        stroke-width="1.5"
                                                                                        stroke="currentColor"
                                                                                        aria-hidden="true">
                                                                                        <path stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                                                                                    </svg>
                                                                                </div>
                                                                                <div
                                                                                    class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                                                                    <h3 class="text-base font-semibold leading-6 text-gray-900"
                                                                                        id="modal-title">Remove Category
                                                                                    </h3>
                                                                                    <div class="mt-2">
                                                                                        <p class="text-sm text-gray-500">Are
                                                                                            you sure you want to delete your
                                                                                            category? All of your data will
                                                                                            be permanently removed.</p>
                                                                                        <p
                                                                                            class="text-sm font-[500] mt-2 text-black bg-opacity-20 bg-red-500 p-1 shadow shadow-black">
                                                                                            The questions and quizzies
                                                                                            belong to this category also get
                                                                                            permanently removed. This action
                                                                                            cannot be undone.</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                                                            <form
                                                                                action="{{ route('categories.destroy', $category) }}"
                                                                                method="post">
                                                                                @method('delete')
                                                                                @csrf
                                                                                <button type="submit"
                                                                                    class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto">Delete</button>
                                                                            </form>
                                                                            <button @click="modalOpen=false" type="button"
                                                                                class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </template>
                                                </div>
                                            @endif
                                        </div>
                                    @endauth
                                </div>
                                <div class="px-2 pt-2 bg-white">
                                    <h1 class="text-xl font-bold">{{ $category->name }}</h1>
                                    {!! $category->cat_desc !!}
                                    <div class="flex justify-between py-4">
                                        <a  href="{{ route('profile.show', ['username' => $category->user->username]) }}" class="text-xs  truncate w-32">Created by <span
                                                class="text-blue-600">{{ $category->user->username }}</span></a>
                                        <a href="{{ route('categories.show', [$category]) }})}}"
                                            title="{{ $category->name }}"
                                            class=" mr-2 inline-flex items-center  text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                            href="#">
                                            view all
                                            <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="m9 18 6-6-6-6" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                            </li>
                        @endforeach

                    </ul>
                    <!-- pagination -->
                    {{ $categories->links() }}
                </div>
                <div class="mt-4">

                    <a href="{{ route('categories.create') }}"
                        class="inline-flex items-center gap-2 px-3 py-1.5 text-sm text-indigo-600 duration-150 bg-indigo-50 rounded-lg hover:bg-indigo-100 active:bg-indigo-200">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M11.622 1.602a.75.75 0 0 1 .756 0l2.25 1.313a.75.75 0 0 1-.756 1.295L12 3.118 10.128 4.21a.75.75 0 1 1-.756-1.295l2.25-1.313ZM5.898 5.81a.75.75 0 0 1-.27 1.025l-1.14.665 1.14.665a.75.75 0 1 1-.756 1.295L3.75 8.806v.944a.75.75 0 0 1-1.5 0V7.5a.75.75 0 0 1 .372-.648l2.25-1.312a.75.75 0 0 1 1.026.27Zm12.204 0a.75.75 0 0 1 1.026-.27l2.25 1.312a.75.75 0 0 1 .372.648v2.25a.75.75 0 0 1-1.5 0v-.944l-1.122.654a.75.75 0 1 1-.756-1.295l1.14-.665-1.14-.665a.75.75 0 0 1-.27-1.025Zm-9 5.25a.75.75 0 0 1 1.026-.27L12 11.882l1.872-1.092a.75.75 0 1 1 .756 1.295l-1.878 1.096V15a.75.75 0 0 1-1.5 0v-1.82l-1.878-1.095a.75.75 0 0 1-.27-1.025ZM3 13.5a.75.75 0 0 1 .75.75v1.82l1.878 1.095a.75.75 0 1 1-.756 1.295l-2.25-1.312a.75.75 0 0 1-.372-.648v-2.25A.75.75 0 0 1 3 13.5Zm18 0a.75.75 0 0 1 .75.75v2.25a.75.75 0 0 1-.372.648l-2.25 1.312a.75.75 0 1 1-.756-1.295l1.878-1.096V14.25a.75.75 0 0 1 .75-.75Zm-9 5.25a.75.75 0 0 1 .75.75v.944l1.122-.654a.75.75 0 1 1 .756 1.295l-2.25 1.313a.75.75 0 0 1-.756 0l-2.25-1.313a.75.75 0 1 1 .756-1.295l1.122.654V19.5a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
                          </svg>
                          
                        Create a
                        new Category
                    </a>
                </div>

            </div>
        </div>
    </div>
 
    <x-slot name="sidebar"></x-slot>


</x-app-layout>
