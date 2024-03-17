<div>
    <div class="flex justify-between px-2 md:px-20">
        <h2 class="font-[600] font-sans text-xl md:text-2xl">categories</h2>
        <div>
            <a href="{{ route('categories.index') }}" class="inline-flex cursor-pointer">See More
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="rounded-md border ml-1 w-4 h-4 mt-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </a>
        </div>
    </div>
    <div class="grid grid-cols-3 gap-4 pl-10   md:ml-32 py-10">
        <div class="inline-flex flex-col  w-14">
            <a href="{{ route('categories.index') }}"
                class="flex justify-center items-center p-2  rounded-lg bg-[#0E194D] text-gray-100 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5-3.9 19.5m-2.1-19.5-3.9 19.5" />
                </svg>

            </a>
            <p class="text-center mt-1">All</p>
        </div>
    
        @foreach ($categories as $category)
        <div class="inline-flex flex-col  w-14">
            <a href="{{route('categories.show', [$category]) }})}}" title="{{$category->name}}" class="flex justify-center items-center p-2  rounded-lg bg-[#0E194D] text-gray-100 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M7.5 14.25v2.25m3-4.5v4.5m3-6.75v6.75m3-9v9M6 20.25h12A2.25 2.25 0 0 0 20.25 18V6A2.25 2.25 0 0 0 18 3.75H6A2.25 2.25 0 0 0 3.75 6v12A2.25 2.25 0 0 0 6 20.25Z" />
                </svg>
            </a>
            <p class="text-center mt-1 truncate text-xs md:text-sm">{{$category->name}}</p>
        </div>
        @endforeach
    </div>

</div>
