<x-guest-layout>
    <x-slot name="header">
        <img class="object-center" src="{{ asset('assets/logo.png') }}" alt="">
    </x-slot>
    <div>
        <div class="h-32 sm:h-44 md:h-10  -mt-4 md:hidden flex justify-between">
            <div class="bg-gradient-to-r from-blue-500/80 via-blue-600 to-blue-900 w-1/2 h-full rounded-ee-full ">
                <h2 class="text-[2rem] sm:text-[4rem] font-medium pl-4 pt-10 text-white">SignUp</h2>
            </div>
            <div class="pr-5 mt-2 ">
                <a href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-20 h-20 bg-gray-100 rounded-full p-5">
                        <path fill-rule="evenodd"
                            d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="hidden md:block">
            <h2 class="text-[3rem] font-medium pt-10 pl-8 text-black">Sigup in here...</h2>
        </div>
        <div class="mt-10 px-4 sm:px-10 ">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <!-- Name -->
                <div class="relative">
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus
                        autocomplete="name"
                        class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none   dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " />
                    <label for="name"
                        class="absolute text-sm text-gray-500  duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white  px-2 peer-focus:px-2 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Name</label>

                </div>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                <!-- Name -->
                <div class="relative mt-4">
                    <input type="text" id="username" name="username" value="{{ old('username') }}" required autofocus
                        autocomplete="username"
                        class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none   dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " />
                    <label for="username"
                        class="absolute text-sm text-gray-500  duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white  px-2 peer-focus:px-2 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Username</label>

                </div>
                <x-input-error :messages="$errors->get('username')" class="mt-2" />
                <!-- Email Address -->
                <div class="relative mt-4">
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required
                        autocomplete="email"
                        class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none   dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " />
                    <label for="email"
                        class="absolute text-sm text-gray-500  duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white  px-2 peer-focus:px-2 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Email</label>

                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                <!-- Password -->
                <div class="relative mt-4">
                    <input type="password" id="password" name="password" required autocomplete="new-password"
                        class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none   dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " />
                    <label for="password"
                        class="absolute text-sm text-gray-500  duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white  px-2 peer-focus:px-2 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Password</label>

                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                <!-- Confirm Password -->
                <div class="relative mt-4">
                    <input type="password" id="password_confirmation" name="password_confirmation" required
                        autocomplete="new-password"
                        class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none   dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " />
                    <label for="password_confirmation"
                        class="absolute text-sm text-gray-500  duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white  px-2 peer-focus:px-2 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Confirm
                        Password</label>

                </div>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                <div class="flex flex-col  md:flex-row-reverse items-center md:justify-end mt-4">

                    <button type="submit"
                        class=" w-2/3 md:w-auto ml-4 justify-center px-4 py-2 text-sm font-medium tracking-wide text-white transition-colors duration-200 bg-blue-600 rounded-md hover:bg-blue-700 focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 focus:shadow-outline focus:outline-none">
                        SignUp
                    </button>
                    <a class="inline-flex flex-col md:flex-row mt-3  text-sm font-[700] text-gray-600 hover:text-gray-900 rounded-full focus:outline-none focus:ring-2  focus:ring-offset-2 focus:ring-blue-500"
                        href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                        <span class="text-center md:hidden font-[500] ">Log in here</span>
                    </a>


                </div>
            </form>
        </div>
    </div>

</x-guest-layout>
