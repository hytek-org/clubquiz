<x-app-layout>
 
    <x-slot name="header">
        <div class=" py-10  md:px-4 leading-6 ">
            <h1 class="text-5xl sm:text-7xl font-bold "> <span class="text-7xl lg:text-9xl text-[#4247d1]">A</span>ccount
                Settings</h1>
            <p class="text-gray-800 pl-4 md:pl-8">Manage your account details, preferences, and settings</p>
        </div>
    </x-slot>
    <x-slot name="sidebar">
       
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg pb-5">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
