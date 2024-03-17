<x-app-layout>
    <x-slot name="header"></x-slot>
    <x-slot name="sidebar"></x-slot>

        <section aria-labelledby="pricing-one" id="pricing-one" class="py-12 bg-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-extrabold text-gray-900 text-center mb-12">Choose the Perfect Plan</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Basic Plan -->
                    <div class="flex flex-col rounded-lg shadow-lg bg-white overflow-hidden">
                        <div class="px-6 py-8 bg-indigo-600 rounded-t-lg">
                            <h3 class="text-lg font-semibold text-white text-center">Basic</h3>
                            <p class="mt-2 text-sm text-white text-center">Start with the essentials.</p>
                            <p class="mt-4 text-4xl font-light tracking-tight text-white text-center">$5</p>
                        </div>
                        <div class="p-6 flex-1 flex flex-col justify-between">
                            <ul class="space-y-3">
                                <li class="flex items-center">
                                    <ion-icon class="w-4 h-4 md hydrated text-green-500" name="checkmark-outline"
                                        role="img" aria-label="checkmark outline"></ion-icon>
                                    <span class="ml-2">Access to 100 quiz questions</span>
                                </li>
                                <li class="flex items-center">
                                    <ion-icon class="w-4 h-4 md hydrated text-green-500" name="checkmark-outline"
                                        role="img" aria-label="checkmark outline"></ion-icon>
                                    <span class="ml-2">Basic analytics dashboard</span>
                                </li>
                                <li class="flex items-center">
                                    <ion-icon class="w-4 h-4 md hydrated text-green-500" name="checkmark-outline"
                                        role="img" aria-label="checkmark outline"></ion-icon>
                                    <span class="ml-2">Email support</span>
                                </li>
                            </ul>
                            <a href="#"
                                class="mt-6 w-full bg-indigo-600 border border-transparent rounded-md py-2 px-4 flex items-center justify-center text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Get started
                            </a>
                        </div>
                    </div>

                    <!-- Pro Plan -->
                    <div class="flex flex-col rounded-lg shadow-lg bg-white overflow-hidden">
                        <div class="px-6 py-8 bg-gray-900 rounded-t-lg">
                            <h3 class="text-lg font-semibold text-white text-center">Pro</h3>
                            <p class="mt-2 text-sm text-gray-100 text-center">Unlock advanced features.</p>
                            <p class="mt-4 text-4xl font-light tracking-tight text-white text-center">$15</p>
                        </div>
                        <div class="p-6 flex-1 flex flex-col justify-between">
                            <ul class="space-y-3 text-gray-700">
                                <li class="flex items-center">
                                    <ion-icon class="w-4 h-4 md hydrated text-green-500" name="checkmark-outline"
                                        role="img" aria-label="checkmark outline"></ion-icon>
                                    <span class="ml-2">Access to 500 quiz questions</span>
                                </li>
                                <li class="flex items-center">
                                    <ion-icon class="w-4 h-4 md hydrated text-green-500" name="checkmark-outline"
                                        role="img" aria-label="checkmark outline"></ion-icon>
                                    <span class="ml-2">Detailed analytics dashboard</span>
                                </li>
                                <li class="flex items-center">
                                    <ion-icon class="w-4 h-4 md hydrated text-green-500" name="checkmark-outline"
                                        role="img" aria-label="checkmark outline"></ion-icon>
                                    <span class="ml-2">Priority email and phone support</span>
                                </li>
                            </ul>
                            <a href="#"
                                class="mt-6 w-full bg-gray-900 border border-transparent rounded-md py-2 px-4 flex items-center justify-center text-sm font-medium text-white hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                                Get started
                            </a>
                        </div>
                    </div>

                    <!-- Enterprise Plan -->
                    <div class="flex flex-col rounded-lg shadow-lg bg-white overflow-hidden">
                        <div class="px-6 py-8 bg-indigo-600 rounded-t-lg">
                            <h3 class="text-lg font-semibold text-white text-center">Enterprise</h3>
                            <p class="mt-2 text-sm text-white text-center">Tailored solutions for your business.</p>
                            <p class="mt-4 text-4xl font-light tracking-tight text-white text-center">$50</p>
                        </div>
                        <div class="p-6 flex-1 flex flex-col justify-between">
                            <ul class="space-y-3 text-gray-700">
                                <li class="flex items-center">
                                    <ion-icon class="w-4 h-4 md hydrated text-green-500" name="checkmark-outline"
                                        role="img" aria-label="checkmark outline"></ion-icon>
                                    <span class="ml-2">Unlimited quiz questions</span>
                                </li>
                                <li class="flex items-center">
                                    <ion-icon class="w-4 h-4 md hydrated text-green-500" name="checkmark-outline"
                                        role="img" aria-label="checkmark outline"></ion-icon>
                                    <span class="ml-2">Customizable analytics dashboard</span>
                                </li>
                                <li class="flex items-center">
                                    <ion-icon class="w-4 h-4 md hydrated text-green-500" name="checkmark-outline"
                                        role="img" aria-label="checkmark outline"></ion-icon>
                                    <span class="ml-2">24/7 priority support</span>
                                </li>
                                <li class="flex items-center">
                                    <ion-icon class="w-4 h-4 md hydrated text-green-500" name="checkmark-outline"
                                        role="img" aria-label="checkmark outline"></ion-icon>
                                    <span class="ml-2">Dedicated account manager</span>
                                </li>
                            </ul>
                            <a href="#"
                                class="mt-6 w-full bg-indigo-600 border border-transparent rounded-md py-2 px-4 flex items-center justify-center text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Get started
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    
        <section aria-labelledby="pricing-one" id="pricing-one">
            <div class="relative items-center w-full px-8 py-24 mx-auto md:px-12 lg:px-16 max-w-7xl">
              <div class="grid max-w-2xl grid-cols-1 -mx-4 gap-y-10 sm:mx-auto lg:max-w-none lg:grid-cols-3 xl:gap-x-4 lg:-mx-8">
                <section class="flex flex-col px-6 sm:px-8 lg:py-8">
                  <h3 class="mt-5 text-lg text-black">Wannabe</h3>
                  <p class="mt-2 text-sm text-gray-500">
                    Good for those trying to get there.
                  </p>
                  <p class="order-first text-5xl font-light tracking-tight text-black">
                    $2
                  </p>
                  <ul role="list" class="flex flex-col order-last mt-10 text-sm text-gray-500 gap-y-3">
                    <li class="flex items-center">
                      <ion-icon class="w-4 h-4 md hydrated" name="checkmark-outline" role="img" aria-label="checkmark outline"></ion-icon>
                      <span class="ml-4"> Connect 1 websites </span>
                    </li>
                    <li class="flex items-center">
                      <ion-icon class="w-4 h-4 md hydrated" name="checkmark-outline" role="img" aria-label="checkmark outline"></ion-icon>
                      <span class="ml-4"> Connect up to 2 bank accounts </span>
                    </li>
                    <li class="flex items-center">
                      <ion-icon class="w-4 h-4 md hydrated" name="checkmark-outline" role="img" aria-label="checkmark outline"></ion-icon>
                      <span class="ml-4"> Track up to 15 credit cards </span>
                    </li>
                    <li class="flex items-center">
                      <ion-icon class="w-4 h-4 md hydrated" name="checkmark-outline" role="img" aria-label="checkmark outline"></ion-icon>
                      <span class="ml-4"> Analytics support </span>
                    </li>
                    <li class="flex items-center">
                      <ion-icon class="w-4 h-4 md hydrated" name="checkmark-outline" role="img" aria-label="checkmark outline"></ion-icon>
                      <span class="ml-4"> Export up to 3 months data </span>
                    </li>
                  </ul>
                  <a class="items-center justify-center w-full px-6 py-2.5 mt-8 text-center text-white duration-200 bg-black border-2 border-black rounded-full nline-flex hover:bg-transparent hover:border-black hover:text-black focus:outline-none focus-visible:outline-black text-sm focus-visible:ring-black" aria-label="Wannabe tier" href="/register">
                    Button
                  </a>
                </section>
                <section class="flex flex-col order-first px-6 py-8 bg-black rounded-3xl sm:px-8 lg:order-none">
                  <h3 class="mt-5 text-lg text-white">Indie Hacker</h3>
                  <p class="mt-2 text-sm text-gray-100">
                    Perfect for those leaving 9-5 and working 24/7.
                  </p>
                  <p class="order-first text-5xl font-light tracking-tight text-white">
                    $29
                  </p>
                  <ul role="list" class="flex flex-col order-last mt-10 text-sm text-white gap-y-3">
                    <li class="flex items-center">
                      <ion-icon class="w-4 h-4 md hydrated" name="checkmark-outline" role="img" aria-label="checkmark outline"></ion-icon>
                      <span class="ml-4"> Connect 80 websites </span>
                    </li>
                    <li class="flex items-center">
                      <ion-icon class="w-4 h-4 md hydrated" name="checkmark-outline" role="img" aria-label="checkmark outline"></ion-icon>
                      <span class="ml-4"> Connect up to 5 bank accounts </span>
                    </li>
                    <li class="flex items-center">
                      <ion-icon class="w-4 h-4 md hydrated" name="checkmark-outline" role="img" aria-label="checkmark outline"></ion-icon>
                      <span class="ml-4"> Track up to 50 credit cards </span>
                    </li>
                    <li class="flex items-center">
                      <ion-icon class="w-4 h-4 md hydrated" name="checkmark-outline" role="img" aria-label="checkmark outline"></ion-icon>
                      <span class="ml-4"> Analytics support </span>
                    </li>
                    <li class="flex items-center">
                      <ion-icon class="w-4 h-4 md hydrated" name="checkmark-outline" role="img" aria-label="checkmark outline"></ion-icon>
                      <span class="ml-4"> Export up to 12 months data </span>
                    </li>
                    <li class="flex items-center">
                      <ion-icon class="w-4 h-4 md hydrated" name="checkmark-outline" role="img" aria-label="checkmark outline"></ion-icon>
                      <span class="ml-4"> Cloud service 24/7 </span>
                    </li>
                    <li class="flex items-center">
                      <ion-icon class="w-4 h-4 md hydrated" name="checkmark-outline" role="img" aria-label="checkmark outline"></ion-icon>
                      <span class="ml-4"> Track in multiple users </span>
                    </li>
                  </ul>
                  <a class="items-center justify-center w-full px-6 py-2.5 mt-8 text-center text-black duration-200 bg-white border-2 border-white rounded-full nline-flex hover:bg-transparent hover:border-white hover:text-white focus:outline-none focus-visible:outline-white text-sm focus-visible:ring-white" aria-label="Indie hacker tier" href="/register">
                    Button
                  </a>
                </section>
                <section class="flex flex-col px-6 sm:px-8 lg:py-8">
                  <h3 class="mt-5 text-lg text-black">Big fish</h3>
                  <p class="mt-2 text-sm text-gray-500">
                    For even the biggest enterprise companies.
                  </p>
                  <p class="order-first text-5xl font-light tracking-tight text-black">
                    $99
                  </p>
                  <ul role="list" class="flex flex-col order-last mt-10 text-sm text-gray-500 gap-y-3">
                    <li class="flex items-center">
                      <ion-icon class="w-4 h-4 md hydrated" name="checkmark-outline" role="img" aria-label="checkmark outline"></ion-icon>
                      <span class="ml-4"> Connect unlimited websites </span>
                    </li>
                    <li class="flex items-center">
                      <ion-icon class="w-4 h-4 md hydrated" name="checkmark-outline" role="img" aria-label="checkmark outline"></ion-icon>
                      <span class="ml-4"> Connect up to 15 bank accounts </span>
                    </li>
                    <li class="flex items-center">
                      <ion-icon class="w-4 h-4 md hydrated" name="checkmark-outline" role="img" aria-label="checkmark outline"></ion-icon>
                      <span class="ml-4"> Track up to 200 credit cards </span>
                    </li>
                    <li class="flex items-center">
                      <ion-icon class="w-4 h-4 md hydrated" name="checkmark-outline" role="img" aria-label="checkmark outline"></ion-icon>
                      <span class="ml-4"> Analytics support </span>
                    </li>
                    <li class="flex items-center">
                      <ion-icon class="w-4 h-4 md hydrated" name="checkmark-outline" role="img" aria-label="checkmark outline"></ion-icon>
                      <span class="ml-4"> Export up to 24 months data </span>
                    </li>
                  </ul>
                  <a class="items-center justify-center w-full px-6 py-2.5 mt-8 text-center text-white duration-200 bg-black border-2 border-black rounded-full nline-flex hover:bg-transparent hover:border-black hover:text-black focus:outline-none focus-visible:outline-black text-sm focus-visible:ring-black" aria-label="Big fish tier" href="/register">
                    Button
                  </a>
                </section>
              </div>
            </div>
          </section>
        
</x-app-layout>
