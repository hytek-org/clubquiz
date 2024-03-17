<div wire:poll="notifications" x-init="Echo.private('users.{{ auth()->user()->id }}')
    .notification((notification) => {
        @this.$refresh();
    });" class="w-full p-3">

    <x-slot name="header">
        <div class=" py-10  md:px-4 leading-6 -ms-7 sm:-ms-0 ">
            <h1 class="text-5xl sm:text-7xl font-bold "> <span
                    class="text-7xl lg:text-9xl text-[#4247d1]">N</span>otifications</h1>
            <p class="text-gray-800 pl-2 ">Latest updates for you</p>
        </div>
    </x-slot>
    <x-slot name="sidebar"></x-slot>

    <div class="my-7 w-full -ms-4 sm:-ms-0 pl-10 max-w-xl pb-20">
        <div class="bg-red-100 rounded-md px-2 py-2">
            <a href="#"
                class="cursor-pointer w-full h-full text-xs leading-6 text-black duration-150 ease-out sm:flex-row sm:items-center opacity-80 hover:opacity-100">
                <span class="">
                    <span
                        class="bg-orange-200 text-orange-800 text-sm font-semibold me-2 px-2.5 py-0.5 rounded dark:bg-orange-200 dark:text-orange-900">Beta</span>
                    <strong class="font-semibold">New Release</strong>
                    <span class="block leading-none pt-1">This is beta release wait for official rollout.</span>
                </span>
            </a>
        </div>

        <div>
            @foreach ($notifications as $notification)
                @switch($notification->type)
                    @case('App\Notifications\NewFollowerNotification')
                        @php
                            $user = \App\Models\User::find($notification->data['user_id']);
                        @endphp
                        <div class="bg-[#FAF5F3] rounded-md px-2 py-2 my-4">
                            <a
                                href="{{ route('profile.show', $user->username) }}"class="cursor-pointer w-full h-full text-xs leading-6 text-black duration-150 ease-out sm:flex-row sm:items-center opacity-80 hover:opacity-100">

                                <span class="">
                                    <span
                                        class="bg-blue-200 text-blue-800 text-sm font-semibold me-2 px-2.5 py-0.5 rounded ">New</span>
                                    <strong class="font-semibold">New Follwer</strong>
                                    <span class="block leading-none pt-1">{{ $user->name }}
                                        {{ $notification->created_at->shortAbsoluteDiffForHumans() }} ago</span>

                                </span>
                                <div class="flex justify-end -mt-5">
                                    @if (auth()->user()->isFollowing($user))
                                        <button wire:click="toggleFollow({{ $user->id }})"
                                            class="font-bold text-sm bg-gray-200 text-black/90 px-3 py-1 rounded">Following</button>
                                    @else
                                        <button wire:click="toggleFollow({{ $user->id }})"
                                            class="font-bold text-sm bg-[#40e36b] text-white px-3 py-1 rounded">Follow</button>
                                    @endif
                                </div>
                            </a>
                        </div>
                    @break

                    @default
                        {{-- Handle any other notification type if needed --}}
                @endswitch
            @endforeach
        </div>
    </div>
</div>
