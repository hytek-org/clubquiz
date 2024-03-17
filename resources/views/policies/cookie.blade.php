<x-app-layout>
    <x-slot name="header">
        
        <div class=" py-10  md:px-4 leading-6 ">
            <h1 class="text-5xl sm:text-7xl font-bold "><span class="text-7xl lg:text-9xl text-[#4247d1]">C</span>ookies Policy</h1>
            <p class="text-gray-800 pl-2 ">How we handle cookies at ClubQuiz</p> 
        </div>
    </x-slot>
    <x-slot name="sidebar">
    </x-slot>

    <div class="md:w-4/5  px-4 md:ml-10 py-10 mb-10" >
        <img class="w-[200px] sm:w-[300px] md:w-[400px] lg:w-[500px] m-auto" src="assets/cookie.png" alt="">
       
       

        <p class="text-[22px] font-semibold">This Cookies Policy explains how ClubQuiz uses cookies and similar technologies to improve your experience while using our app.</p>
        <div class="pl-[10px]">
            <h3 id="what-are-cookies" class="text-[20px] md:text-[22px] font-semibold mt-6">What are Cookies?</h3>
            <p class=" p-[5px] text-[16px] md:text-[18px]">Cookies are small text files that are stored on your device when you visit a website or use a mobile app. They are widely used to enable certain features, analyze site usage, and personalize content and advertising.</p>

            <h3 id="how-we-use-cookies" class="text-[20px] md:text-[22px] font-semibold mt-6">How We Use Cookies</h3>
            <p class=" p-[5px] text-[16px] md:text-[18px]">ClubQuiz uses cookies for the following purposes:</p>
            <ul class="list-disc list-inside ml-[10%]">
                <li>To provide and improve our services</li>
                <li>To analyze user behavior and usage patterns</li>
                <li>To personalize content and advertisements</li>
                <li>To store user preferences</li>
            </ul>

            <h3 id="types-of-cookies" class="text-[20px] md:text-[22px] font-semibold mt-6">Types of Cookies We Use</h3>
            <p class=" p-[5px] text-[16px] md:text-[18px]">We use the following types of cookies:</p>
            <ul class="list-disc list-inside ml-[10%]">
                <li>Essential Cookies: Necessary for the functioning of the app</li>
                <li>Analytics Cookies: Used to analyze site usage and improve our services</li>
                <li>Advertising Cookies: Used to deliver personalized advertisements</li>
            </ul>
        
            <h3 id="your-choices-regarding-cookies" class="text-[20px] md:text-[22px] font-semibold mt-6">Your Choices Regarding Cookies</h3>
            <p class=" p-[5px] text-[16px] md:text-[18px]">You can control and manage cookies through your browser settings. Please note that disabling cookies may affect the functionality of the ClubQuiz app.</p>
        </div>
    </div>
        <div class="text-[14px] x-[20px] pt-[30px] md:w-4/5  px-4 sm:ml-5 md:ml-10 border-t-[2px] border-gray-400 mb-20">
            <p>If you have any questions or concerns about our Cookies Policy, please contact us at <a class="text-indigo-500 hover:underline " href="mailto:support@clubquiz.hytek.org.in">support@clubquiz.hytek.org.in</a>.</p>

            <p>This Cookies Policy is effective as of 2024 and will remain in effect unless updated or revised.</p>
        </div>
    
    <livewire:components.footer />
</x-app-layout>
