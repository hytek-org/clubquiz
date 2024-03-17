<x-app-layout>
    <x-slot name="header"></x-slot>
    <x-slot name="sidebar"></x-slot>

    <section class="bg-white dark:bg-gray-900">
        <div class="container flex flex-col items-center px-4 py-12 mx-auto xl:flex-row">
            <div class="flex justify-center xl:w-1/2">
                <img class="h-80 w-80 sm:w-[28rem] sm:h-[28rem] flex-shrink-0 object-cover rounded-full"
                    src="{{asset('assets/avatars/help-center.jpg')}}"
                    alt="help center">
                   
            </div>

            <div class="flex flex-col items-center mt-6 xl:items-start xl:w-1/2 xl:mt-0">
                <h2 class="text-2xl font-semibold tracking-tight text-gray-800 xl:text-3xl dark:text-white">
                    How can we assist you today?
                </h2>

                <p class="mt-4 max-w-lg text-gray-600 dark:text-gray-300">
                    ClubQuiz, operated and managed by HYTEK organization, is here to help you excel in your quiz
                    endeavors. Whether you're a beginner or an experienced quizzer, we're dedicated to providing you
                    with the support and resources you need to succeed.
                </p>

                <div class="mt-6 sm:flex">
                    <a href="#solve"
                        class="inline-block w-full px-6 py-3 mt-4 text-sm font-medium text-white bg-blue-600 rounded-lg shadow-sm sm:w-auto sm:mt-0 hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        Get Your Query Solved
                    </a>
                </div>
            </div>

        </div>
    </section>
    <section class="scroll-mt-24 o" id="solve">
        <div class="h-full max-w-6xl px-8 py-24 mx-auto md:px-12 lg:px-32">
            <div class="text-center">
                <h2 class="text-4xl font-semibold tracking-tighter text-gray-900 lg:text-6xl">
                    Explore Our Help Center
                </h2>
                <p class="max-w-xs mx-auto mt-4 text-sm text-gray-500">
                    Get assistance in various aspects of your quiz journey with our categorized help center.
                </p>
            </div>
            <div class="grid grid-cols-1 gap-2 mt-24 lg:grid-cols-3">
                <div class="flex flex-col justify-between h-full gap-8 p-8 bg-gray-100 rounded-2xl ">
                    <div>
                        <h3 class="text-base font-medium tracking-tight text-gray-900">
                            Technical Support
                        </h3>
                        <p class="mt-4 text-sm text-gray-500">
                            Get help with technical issues, troubleshooting, and platform usage.
                        </p>
                    </div>
                    <a class="flex items-center justify-center w-auto h-10 px-4 py-2 text-sm font-semibold text-gray-900 transition-all bg-white rounded-full shrink-0 hover:bg-gray-800 hover:text-white"
                        href="{{route('contact.showForm')}}">Explore</a>
                </div>
                <div class="flex flex-col justify-between h-full gap-8 p-10 bg-black rounded-3xl">
                    <div>
                        <h3 class="text-base font-medium tracking-tight text-white">
                            Quiz Assistance
                        </h3>
                        <p class="mt-4 text-sm text-white">
                            Find guidance on quiz strategies, preparation tips, and best practices.
                        </p>
                    </div>
                    <a class="flex items-center justify-center w-auto h-10 px-4 py-2 text-sm font-semibold text-gray-900 transition-all bg-white rounded-full shrink-0 hover:bg-gray-800 hover:text-white"
                    href="{{route('contact.showForm')}}">Explore</a>
                </div>
                <div class="flex flex-col justify-between h-full gap-8 p-8 bg-gray-100 rounded-2xl">
                    <div>
                        <h3 class="text-base font-medium tracking-tight text-gray-900">
                            Account Management
                        </h3>
                        <p class="mt-4 text-sm text-gray-500">
                            Learn about account settings, billing inquiries, and subscription management.
                        </p>
                    </div>
                    <a class="flex items-center justify-center w-auto h-10 px-4 py-2 text-sm font-semibold text-gray-900 transition-all bg-white rounded-full shrink-0 hover:bg-gray-800 hover:text-white"
                    href="{{route('contact.showForm')}}">Explore</a>
                </div>
            </div>
        </div>
    </section>


    <section class="scroll-mt-24" id="faq">
        <div class="h-full max-w-6xl px-8 py-24 mx-auto md:px-12 lg:px-32">
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-3">
                <div>
                    <p class="text-4xl font-semibold tracking-tighter text-gray-900 lg:text-6xl">
                        FAQ
                    </p>
                    <p class="max-w-xs mx-auto mt-4 text-sm text-gray-500">
                        Frequently Asked Questions
                    </p>
                </div>
                <div class="flex flex-col gap-6 text-base text-gray-400 lg:col-span-2">
                    <details>
                        <summary class="text-base font-medium tracking-tight text-gray-900">
                            What is ClubQuiz all about?
                        </summary>
                        <p class="pt-4 text-sm text-gray-500">
                            ClubQuiz is an online platform that offers a wide range of quizzes on various topics,
                            providing users with an engaging and educational experience.
                        </p>
                    </details>
                    <details>
                        <summary class="text-base font-medium tracking-tight text-gray-900">
                            How do I create a quiz?
                        </summary>
                        <p class="pt-4 text-sm text-gray-500">
                            Creating a quiz on ClubQuiz is easy! Simply sign up for an account, navigate to the
                            dashboard, and follow the intuitive interface to create your quiz questions and set up the
                            quiz parameters.
                        </p>
                    </details>
                    <details>
                        <summary class="text-base font-medium tracking-tight text-gray-900">
                            Can I customize the appearance of my quiz?
                        </summary>
                        <p class="pt-4 text-sm text-gray-500">
                            Yes, ClubQuiz provides customization options for the appearance of your quiz, allowing you
                            to match it to your brand or personal preferences.
                        </p>
                    </details>
                    <details>
                        <summary class="text-base font-medium tracking-tight text-gray-900">
                            Is ClubQuiz suitable for educational purposes?
                        </summary>
                        <p class="pt-4 text-sm text-gray-500">
                            Absolutely! ClubQuiz is an excellent tool for educators to create interactive and engaging
                            quizzes for students, helping to enhance learning outcomes.
                        </p>
                    </details>
                    <details>
                        <summary class="text-base font-medium tracking-tight text-gray-900">
                            How can I track quiz performance?
                        </summary>
                        <p class="pt-4 text-sm text-gray-500">
                            ClubQuiz provides detailed analytics and reporting features to track quiz performance,
                            including user engagement, completion rates, and more.
                        </p>
                    </details>
                </div>
            </div>
        </div>
    </section>

    <livewire:components.footer />

</x-app-layout>
