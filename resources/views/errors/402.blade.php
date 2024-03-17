@extends('errors.layout')
@section('title')
402 Payment Required || {{config('app.name','ClubQuiz')}}
@endsection
@section('message')
<div class="grid h-screen place-content-center bg-white px-4">
    <h1
        class="mb-4 text-4xl font-poppinsmedium font-extrabold tracking-tight leading-none text-[#004AAD] text-center  md:text-5xl lg:text-6xl ">
        402 Payment Required </h1>
    <h5 class="text-xl font-poppins font-bold dark:text-white text-center">Sorry, but you need to make a payment to access this page.</h5>
    <div class="text-center">
       

        <a href="{{route('contact')}}" class="mt-6 text-2xl font-bold tracking-tight text-blue-500 cursor-pointer sm:text-4xl hover:underline">Please contact our support team for assistance.</a>

        <a href="{{ route('home') }}"
            class="mt-4 bg-gray-200 hover:bg-gray-300 p-2.5 rounded text-gray-800 font-poppinsmedium inline-flex justify-center items-center hover:underline ">Return
            Home
            <svg class=" w-3.5 h-3.5 ms-1 -rotate-45 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
        </a>
    </div>
</div>
@endsection