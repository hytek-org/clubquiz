<x-app-layout>
    <x-slot name="header">
        <div class="px-6 pt-10 md:pt-20 pb-5 ">
          <div class="text-center">
            <h2 class="text-2xl md:text-[3rem] font-bold">Get in Touch with ClubQuiz Support</h2>
            <h4 class="text-sm text-gray-600 md:mt-4">Reach out to our team for assistance, inquiries, and feedback</h4>
          </div>
        </div>
    </x-slot>
    <x-slot name="sidebar"></x-slot>
    <div class="bg-white ">
        <div class="mx-auto max-w-7xl  lg:px-8">

            <div
                class="mx-auto mt-4 max-w-2xl rounded-3xl ring-1 ring-gray-200 sm:mt-20 lg:mx-0 lg:flex justify-between lg:max-w-none mb-10">
                <div class="p-8 sm:p-10 ">
                    <h3 class="text-2xl font-bold tracking-tight text-gray-900">Contact Us</h3>

                    <div class="mt-10 flex items-center gap-x-4">
                        <h4 class="flex-none text-sm font-semibold leading-6 text-indigo-600">Contact Information</h4>
                        <div class="h-px flex-auto bg-gray-100"></div>
                    </div>
                    <ul role="list"
                        class="mt-8 grid grid-cols-1 gap-4 text-sm leading-6 text-gray-600 sm:grid-cols-2 sm:gap-6">
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd" />
                            </svg>
                            Name: john doe
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd" />
                            </svg>
                            Email: john@mail.com
                        </li>
                        <li class="flex gap-x-3 w-full">
                            <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd" />
                            </svg>
                            Message: I wanted to reach out to discuss about clubQuiz?
                        </li>

                    </ul>
                </div>

                <div class="sm:py-5 sm:px-4  w-full">
                    <div
                        class="rounded-2xl bg-gray-50 py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16">
                        <div class="mx-auto px-8">
                            <form action="{{ route('contact.send') }}" method="POST" class=" ">
                                @csrf

                                @if (session('success'))
                                    <p id="toast-simple"
                                        class="inline-flex justify-between items-center py-1 px-1 pr-4 mb-7 text-sm text-gray-700 bg-gray-100 rounded-full dark:bg-gray-800 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700"
                                        role="alert">
                                        <span
                                            class="text-xs bg-green-500 rounded-full text-white px-4 py-1.5 mr-3">Success!</span>
                                        <span class="text-sm font-medium">{{ session('success') }}</span>


                                    </p>
                                @endif
                                @if (session('fail'))
                                    <p id="toast-simple1"
                                        class="inline-flex justify-between items-center py-1 px-1 pr-4 mb-7 text-sm text-gray-700 bg-gray-100 rounded-full dark:bg-gray-800 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700"
                                        role="alert">
                                        <span
                                            class="text-xs bg-red-500 rounded-full text-white px-4 py-1.5 mr-3">Failed!</span>
                                        <span class="text-sm font-medium">{{ session('fail') }}</span>


                                    </p>
                                @endif
                                <div class=" flex flex-col space-y-4 ">
                                    <div class="relative ">
                                        <input type="text" id="name" name="name" value="{{ old('name') }}"
                                            required
                                            class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none   dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" " />
                                        <label for="name"
                                            class="absolute text-sm text-gray-500  duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-gray-50  px-2 peer-focus:px-2 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Name</label>

                                    </div>
                                    <div class="relative ">
                                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                                            required
                                            class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none   dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" " />
                                        <label for="email"
                                            class="absolute text-sm text-gray-500  duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-gray-50  px-2 peer-focus:px-2 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Email</label>

                                    </div>
                                    <div class="relative ">
                                        <input type="text" id="subject" name="subject" value="{{ old('subject') }}"
                                            required
                                            class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none   dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" " />
                                        <label for="subject"
                                            class="absolute text-sm text-gray-500  duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-gray-50  px-2 peer-focus:px-2 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Subject</label>

                                    </div>
                                    <div class="w-full  mx-auto">
                                        <textarea name="message" x-data="{
                                            resize() {
                                                $el.style.height = '0px';
                                                $el.style.height = $el.scrollHeight + 'px'
                                            }
                                        }" x-init="resize()" @input="resize()" type="text"
                                            placeholder="Type your message here. "
                                            class="flex w-full h-auto min-h-[80px] px-3 py-2 text-sm bg-white border rounded-md border-blue-300 ring-offset-background placeholder:text-neutral-400 focus:border-blue-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-400 disabled:cursor-not-allowed disabled:opacity-50"></textarea>
                                    </div>

                                    <div x-data="{ switchOn: false }" class="flex gap-x-4 sm:col-span-2">
                                        <input id="thisId" type="checkbox" name="switch" class="hidden"
                                            :checked="switchOn">

                                        <button x-ref="switchButton" type="button" @click="switchOn = ! switchOn"
                                            :class="switchOn ? 'bg-blue-900' : 'bg-neutral-200'"
                                            class="relative inline-flex h-4 py-0.5 ml-4 rounded-full focus:outline-none w-6"
                                            x-cloak>
                                            <span :class="switchOn ? 'translate-x-[10px]' : 'translate-x-0.5'"
                                                class="w-3 h-3 duration-200 ease-in-out bg-white rounded-full shadow-md"></span>
                                        </button>

                                        <label @click="$refs.switchButton.click(); $refs.switchButton.focus()"
                                            :id="$id('switch')"
                                            :class="{ 'text-neutral-900': switchOn, 'text-gray-400': !switchOn }"
                                            class="text-xs font-medium select-none" x-cloak>
                                            you agree to our
                                            <a href="{{ route('privacy') }}"
                                                class="inline font-semibold text-indigo-600">privacy&nbsp;policy</a>.
                                        </label>
                                    </div>

                                </div>
                                <button type="submit"
                                    class="mt-10 block w-full rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Let's
                                    talk</button>
                            </form>
                            <p class="mt-6 text-xs leading-5 text-gray-600">Please ensure your message complies with
                                our policies to avoid any issues.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <livewire:components.footer />
</x-app-layout>
