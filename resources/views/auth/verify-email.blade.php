<x-guest-layout>
    <x-slot name="header">
        <img class="object-center" src="{{ asset('assets/logo.png') }}" alt="">
    </x-slot>
    <div>
        <div class="h-32 sm:h-44 md:h-10  -mt-4 md:hidden flex justify-between">
            <div class="bg-gradient-to-r from-blue-500/80 via-blue-600 to-blue-900 w-1/2 h-full rounded-ee-full ">
                <h2 class="text-[2rem] sm:text-[4rem] font-medium pl-4 pt-10 text-white">Verify</h2>
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
            <h2 class="text-[3rem] font-medium pt-10 pl-8 text-black">Verify Email...</h2>
        </div>
        <div class="mt-10 px-4 sm:px-10 ">
            <div class="mb-4 text-sm text-gray-600">
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif

            <div class="mt-4 flex items-center justify-between">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <div>
                        <button type="submit"
                            class=" w-auto ml-4 justify-center px-4 py-2 text-sm font-medium tracking-wide text-white transition-colors duration-200 bg-blue-600 rounded-md hover:bg-blue-700 focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 focus:shadow-outline focus:outline-none">
                            Resend Verification Email
                        </button>
                    </div>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit"
                        class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
</x-guest-layout>
