<x-app-layout>
    <x-slot name="header"></x-slot>
    <x-slot name="sidebar"></x-slot>    
        <section>
            <div class="px-8 py-24 mx-auto md:px-12 lg:px-32 ">
                <div class="text-center">
                    <img src="{{asset('assets/logo.png')}}" alt="logo" class="w-24 h-24 mx-auto rounded-full p-4 bg-[#1B1D20]" >
               
                    <p class="mt-8 text-4xl font-semibold tracking-tighter text-gray-900 lg:text-5xl">
                        Building one pagers together,
                        <span class="text-gray-600 md:block">wherever and anywhere</span>
                    </p>
                    <p class="mt-4 text-base text-gray-500">
                        The fastest method for working together
                        <span class="md:block"> on staging and temporary environments.</span>
                    </p>
                    <div class="flex flex-col items-center justify-center gap-2 mx-auto mt-8 md:flex-row">
                        <button
                            class="inline-flex items-center justify-center w-full h-12 gap-3 px-5 py-3 bg-gray-100 md:w-auto rounded-xl hover:bg-gray-200 focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4"
                                viewBox="0 0 512 512">
                                <path
                                    d="M99.617 8.057a50.191 50.191 0 00-38.815-6.713l230.932 230.933 74.846-74.846L99.617 8.057zM32.139 20.116c-6.441 8.563-10.148 19.077-10.148 30.199v411.358c0 11.123 3.708 21.636 10.148 30.199l235.877-235.877L32.139 20.116zM464.261 212.087l-67.266-37.637-81.544 81.544 81.548 81.548 67.273-37.64c16.117-9.03 25.738-25.442 25.738-43.908s-9.621-34.877-25.749-43.907zM291.733 279.711L60.815 510.629c3.786.891 7.639 1.371 11.492 1.371a50.275 50.275 0 0027.31-8.07l266.965-149.372-74.849-74.847z">
                                </path>
                            </svg><span class="text-xs text-gray-600">Download on Goolle Play</span></button><button
                            class="inline-flex items-center justify-center w-full h-12 gap-3 px-5 py-3 bg-gray-100 md:w-auto rounded-xl hover:bg-gray-200 focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4"
                                viewBox="0 0 305 305">
                                <path
                                    d="M40.74 112.12c-25.79 44.74-9.4 112.65 19.12 153.82C74.09 286.52 88.5 305 108.24 305c.37 0 .74 0 1.13-.02 9.27-.37 15.97-3.23 22.45-5.99 7.27-3.1 14.8-6.3 26.6-6.3 11.22 0 18.39 3.1 25.31 6.1 6.83 2.95 13.87 6 24.26 5.81 22.23-.41 35.88-20.35 47.92-37.94a168.18 168.18 0 0021-43l.09-.28a2.5 2.5 0 00-1.33-3.06l-.18-.08c-3.92-1.6-38.26-16.84-38.62-58.36-.34-33.74 25.76-51.6 31-54.84l.24-.15a2.5 2.5 0 00.7-3.51c-18-26.37-45.62-30.34-56.73-30.82a50.04 50.04 0 00-4.95-.24c-13.06 0-25.56 4.93-35.61 8.9-6.94 2.73-12.93 5.09-17.06 5.09-4.64 0-10.67-2.4-17.65-5.16-9.33-3.7-19.9-7.9-31.1-7.9l-.79.01c-26.03.38-50.62 15.27-64.18 38.86z">
                                </path>
                                <path
                                    d="M212.1 0c-15.76.64-34.67 10.35-45.97 23.58-9.6 11.13-19 29.68-16.52 48.38a2.5 2.5 0 002.29 2.17c1.06.08 2.15.12 3.23.12 15.41 0 32.04-8.52 43.4-22.25 11.94-14.5 17.99-33.1 16.16-49.77A2.52 2.52 0 00212.1 0z">
                                </path>
                            </svg><span class="text-xs text-gray-600">Download on App Store</span>
                        </button>
                    </div>
                   
                  
                </div>
                <div class="mx-auto mt-24">
                    <div class="grid grid-cols-2 gap-0.5 md:grid-cols-6">
                        <div class="flex justify-center col-span-1 px-8">
                            <img class="max-h-12" src="https://windstatic.com/images/logos/8.svg" alt="logo">
                        </div>
                        <div class="flex justify-center col-span-1 px-8">
                            <img class="max-h-12" src="https://windstatic.com/images/logos/2.svg" alt="logo">
                        </div>
                        <div class="flex justify-center col-span-1 px-8">
                            <img class="max-h-12" src="https://windstatic.com/images/logos/3.svg" alt="logo">
                        </div>
                        <div class="flex justify-center col-span-1 px-8">
                            <img class="max-h-12" src="https://windstatic.com/images/logos/4.svg" alt="logo">
                        </div>
                        <div class="flex justify-center col-span-1 px-8">
                            <img class="max-h-12" src="https://windstatic.com/images/logos/5.svg" alt="logo">
                        </div>
                        <div class="flex justify-center col-span-1 px-8">
                            <img class="max-h-12" src="https://windstatic.com/images/logos/6.svg" alt="logo">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="scroll-mt-24" id="features">
            <div class="px-8 py-24 mx-auto text-center md:px-12 lg:px-32 max-w-7xl">
                <div>
                    <p class="mt-12 text-4xl font-semibold tracking-tighter text-gray-900 lg:text-5xl">
                        Another feature section
                        <span class="text-gray-500 md:block">to write some features or benefits</span>
                    </p>
                    <p class="mt-4 text-sm text-gray-500">
                        The fastest method for working together
                        <span class="md:block"> on staging and temporary environments.</span>
                    </p>
                </div>
                <div class="max-w-xl py-12 mx-auto lg:max-w-7xl">
                    <div>
                        <div class="grid grid-cols-2 gap-12 md:grid-cols-4 lg:space-y-0">
                            <div>
                                <div>
                                    <div
                                        class="flex items-center justify-center w-12 h-12 mx-auto text-black bg-gray-100 rounded-xl">
                                        1
                                    </div>
                                    <p class="mt-4 font-medium text-gray-900">Authentication</p>
                                </div>
                                <div class="mt-4 text-sm text-gray-500">
                                    You must give appropriate credit to the original creator of the
                                    work. This typically includes providing the name.
                                </div>
                            </div>
                            <div>
                                <div>
                                    <div
                                        class="flex items-center justify-center w-12 h-12 mx-auto text-black bg-gray-100 rounded-xl">
                                        2
                                    </div>
                                    <p class="mt-4 font-medium text-gray-900">
                                        Serverless Functions
                                    </p>
                                </div>
                                <div class="mt-4 text-sm text-gray-500">
                                    You may not impose any additional legal terms or technological
                                    measures on the work.
                                </div>
                            </div>
                            <div>
                                <div>
                                    <div
                                        class="flex items-center justify-center w-12 h-12 mx-auto text-black bg-gray-100 rounded-xl">
                                        3
                                    </div>
                                    <p class="mt-4 font-medium text-gray-900">Payments</p>
                                </div>
                                <div class="mt-4 text-sm text-gray-500">
                                    The CC BY 3.0 License does not include a "Share Alike" (SA)
                                    provision.
                                </div>
                            </div>
                            <div>
                                <div>
                                    <div
                                        class="flex items-center justify-center w-12 h-12 mx-auto text-black bg-gray-100 rounded-xl">
                                        4
                                    </div>
                                    <p class="mt-4 font-medium text-gray-900">
                                        Database with GraphQL
                                    </p>
                                </div>
                                <div class="mt-4 text-sm text-gray-500">
                                    You are allowed to use the licensed work for both non-commercial
                                    and commercial purposes.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="px-8 py-12 mx-auto space-y-24 md:px-12 lg:px-32 max-w-7xl">
                <div class="grid items-center grid-cols-1 gap-4 mt-6 list-none lg:grid-cols-2 lg:gap-24">
                    <div>
                        <span class="text-xs font-bold tracking-wide text-gray-500 uppercase">tokens</span>
                        <p class="mt-8 text-4xl font-semibold tracking-tight text-gray-900">
                            A sustainable approach to
                            <span class="lg:block lg:text-gray-600">blockchain validation</span>
                        </p>
                        <p class="mt-4 text-base text-gray-500">
                            Control and added security. With decentralization, users have more
                            control over their data and transactions, and the platform is less
                            susceptible to malicious attacks.
                        </p>
                    </div>
                    <div class="p-2 border bg-gray-50 rounded-3xl">
                        <div class="h-full overflow-hidden bg-white border shadow-lg rounded-3xl">
                            <img alt="Lexingtøn thumbnail" class="relative w-full rounded-2xl drop-shadow-2xl"
                                src="https://windstatic.com/images/appify/phone.png">
                        </div>
                    </div>
                </div>
                <div class="grid items-center grid-cols-1 gap-4 mt-6 list-none lg:grid-cols-2 lg:gap-24">
                    <div>
                        <span class="text-xs font-bold tracking-wide text-gray-500 uppercase">data</span>
                        <p class="mt-8 text-4xl font-semibold tracking-tight text-gray-900">
                            Empowering users
                            <span class="lg:block lg:text-gray-600">with data control</span>
                        </p>
                        <p class="mt-4 text-base text-gray-500">
                            Control and added security. With decentralization, users have more
                            control over their data and transactions, and the platform is less
                            susceptible to malicious attacks.
                        </p>
                    </div>
                    <div class="p-2 border bg-gray-50 rounded-3xl lg:order-first">
                        <div class="h-full overflow-hidden bg-white border shadow-lg rounded-3xl">
                            <img alt="Lexingtøn thumbnail" class="relative w-full rounded-2xl drop-shadow-2xl"
                                src="https://windstatic.com/images/appify/phone.png">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="px-8 py-12 mx-auto md:px-12 lg:px-32 max-w-7xl">
                <div>
                    <p class="mt-12 text-4xl font-semibold tracking-tighter text-gray-900 lg:text-5xl">
                        Our customers pretend
                        <span class="text-gray-500 md:block">they love us and our app</span>
                    </p>
                </div>
                <ul role="list"
                    class="grid max-w-2xl grid-cols-1 gap-6 mx-auto mt-12 sm:gap-4 lg:max-w-none lg:grid-cols-3">
                    <li class="p-2 border bg-gray-50 rounded-3xl">
                        <figure
                            class="relative flex flex-col justify-between h-full p-6 bg-white border shadow-lg rounded-2xl">
                            <blockquote class="relative">
                                <p class="text-base text-gray-500">
                                    Being in the financial industry, we were always looking for ways
                                    to enhance our transactions' security and efficiency.
                                </p>
                            </blockquote>
                            <figcaption class="relative flex items-center justify-between pt-6 mt-6">
                                <div>
                                    <div class="font-medium text-gray-900">Annur Flint</div>
                                    <div class="mt-1 text-sm text-gray-500">CEO at Flint LLC</div>
                                </div>
                                <div class="overflow-hidden rounded-full bg-gray-50">
                                    <img alt="" src="https://windstatic.com/images/appify/avatar1.png"
                                        width="56" height="56" decoding="async" data-nimg="future"
                                        class="object-cover h-14 w-14 grayscale" loading="lazy"
                                        style="color: transparent">
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="p-2 border bg-gray-50 rounded-3xl">
                        <figure
                            class="relative flex flex-col justify-between h-full p-6 bg-white border shadow-lg rounded-2xl">
                            <blockquote class="relative">
                                <p class="text-base text-gray-500">
                                    Implementing Semplice's blockchain technology has been a
                                    game-changer for our supply chain management.
                                </p>
                            </blockquote>
                            <figcaption class="relative flex items-center justify-between pt-6 mt-6">
                                <div>
                                    <div class="font-medium text-gray-900">Jordan Pettersson</div>
                                    <div class="mt-1 text-sm text-gray-500">
                                        Director at P Industries
                                    </div>
                                </div>
                                <div class="overflow-hidden rounded-full bg-gray-50">
                                    <img alt="" src="https://windstatic.com/images/appify/avatar2.png"
                                        width="56" height="56" decoding="async" data-nimg="future"
                                        class="object-cover h-14 w-14 grayscale" loading="lazy"
                                        style="color: transparent">
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="p-2 border bg-gray-50 rounded-3xl">
                        <figure
                            class="relative flex flex-col justify-between h-full p-6 bg-white border shadow-lg rounded-2xl">
                            <blockquote class="relative">
                                <p class="text-base text-gray-500">
                                    We were initially hesitant about integrating blockchain
                                    technology into our existing systems, fearing the complexity of
                                    the process.
                                </p>
                            </blockquote>
                            <figcaption class="relative flex items-center justify-between pt-6 mt-6">
                                <div>
                                    <div class="font-medium text-gray-900">Oliver Benji</div>
                                    <div class="mt-1 text-sm text-gray-500">
                                        Founder of Benji and Tom
                                    </div>
                                </div>
                                <div class="overflow-hidden rounded-full bg-gray-50">
                                    <img alt="" src="https://windstatic.com/images/appify/avatar3.png"
                                        width="56" height="56" decoding="async" data-nimg="future"
                                        class="object-cover h-14 w-14 grayscale" loading="lazy"
                                        style="color: transparent">
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                </ul>
            </div>
        </section>
        <section>
            <div class="px-8 py-12 mx-auto md:px-12 lg:px-32 max-w-7xl">
                <div class="p-2 border bg-gray-50 rounded-3xl">
                    <div class="p-10 text-center bg-white border shadow-lg md:p-20 rounded-3xl">
                        <p class="text-4xl font-semibold tracking-tighter text-black">
                            Download our app today
                        </p>
                        <p class="mt-4 text-base text-gray-500">
                            The fastest method for working together
                            <span class="md:block">
                                on staging and temporary environments.</span>
                        </p>
                        <div class="flex flex-col items-center justify-center gap-2 mx-auto mt-8 md:flex-row">
                            <button
                                class="inline-flex items-center justify-center w-full h-12 gap-3 px-5 py-3 bg-gray-100 md:w-auto rounded-xl hover:bg-gray-200 focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M99.617 8.057a50.191 50.191 0 00-38.815-6.713l230.932 230.933 74.846-74.846L99.617 8.057zM32.139 20.116c-6.441 8.563-10.148 19.077-10.148 30.199v411.358c0 11.123 3.708 21.636 10.148 30.199l235.877-235.877L32.139 20.116zM464.261 212.087l-67.266-37.637-81.544 81.544 81.548 81.548 67.273-37.64c16.117-9.03 25.738-25.442 25.738-43.908s-9.621-34.877-25.749-43.907zM291.733 279.711L60.815 510.629c3.786.891 7.639 1.371 11.492 1.371a50.275 50.275 0 0027.31-8.07l266.965-149.372-74.849-74.847z">
                                    </path>
                                </svg><span class="text-xs text-gray-600">Download on Goolle
                                    Play</span></button><button
                                class="inline-flex items-center justify-center w-full h-12 gap-3 px-5 py-3 bg-gray-100 md:w-auto rounded-xl hover:bg-gray-200 focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4"
                                    viewBox="0 0 305 305">
                                    <path
                                        d="M40.74 112.12c-25.79 44.74-9.4 112.65 19.12 153.82C74.09 286.52 88.5 305 108.24 305c.37 0 .74 0 1.13-.02 9.27-.37 15.97-3.23 22.45-5.99 7.27-3.1 14.8-6.3 26.6-6.3 11.22 0 18.39 3.1 25.31 6.1 6.83 2.95 13.87 6 24.26 5.81 22.23-.41 35.88-20.35 47.92-37.94a168.18 168.18 0 0021-43l.09-.28a2.5 2.5 0 00-1.33-3.06l-.18-.08c-3.92-1.6-38.26-16.84-38.62-58.36-.34-33.74 25.76-51.6 31-54.84l.24-.15a2.5 2.5 0 00.7-3.51c-18-26.37-45.62-30.34-56.73-30.82a50.04 50.04 0 00-4.95-.24c-13.06 0-25.56 4.93-35.61 8.9-6.94 2.73-12.93 5.09-17.06 5.09-4.64 0-10.67-2.4-17.65-5.16-9.33-3.7-19.9-7.9-31.1-7.9l-.79.01c-26.03.38-50.62 15.27-64.18 38.86z">
                                    </path>
                                    <path
                                        d="M212.1 0c-15.76.64-34.67 10.35-45.97 23.58-9.6 11.13-19 29.68-16.52 48.38a2.5 2.5 0 002.29 2.17c1.06.08 2.15.12 3.23.12 15.41 0 32.04-8.52 43.4-22.25 11.94-14.5 17.99-33.1 16.16-49.77A2.52 2.52 0 00212.1 0z">
                                    </path>
                                </svg><span class="text-xs text-gray-600">Download on App Store</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</x-app-layout>
