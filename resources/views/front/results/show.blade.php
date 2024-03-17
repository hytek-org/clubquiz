<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col xl:flex-row 2xl:justify-between ">
        <div class=" xl:py-32   md:px-4 leading-6 ">
            <h1 class="text-5xl sm:text-7xl font-bold "> <span class="text-7xl lg:text-9xl text-[#4247d1]">M</span>y
                Result</h1>
            <p class="text-gray-800 pl-4 md:pl-8">Check your clubquiz progress below.</p>
        </div>
        <div class="-ms-10">
            @auth
            @if (auth()->user()->id === $test->user->id)
            <livewire:feedback.rating :quizId="$test->quiz_id" />
            @endif
            @endauth
        </div>
    </div>
    </x-slot>
    <x-slot name="sidebar">
      
    </x-slot>

  


    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h6 class="text-xl font-bold">Details</h6>

                    <table class="mt-4 table w-full table-view">
                        <tbody class="bg-white">
                            @if(auth()->user()?->is_admin)
                                <tr class="w-28">
                                    <th class="border border-solid bg-slate-100 px-6 py-3 text-left text-sm font-semibold uppercase text-slate-600">User</th>
                                    <td class="border border-solid px-6 py-3">{{ $test->user->name ?? '' }} ({{ $test->user->email ?? '' }})</td>
                                </tr>
                            @endif
                            <tr class="w-28">
                                <th class="border border-solid bg-slate-100 px-6 py-3 text-left text-sm font-semibold uppercase text-slate-600">Date</th>
                                <td class="border border-solid px-6 py-3">{{ $test->created_at->diffforHumans() ?? '' }}</td>
                            </tr>
                            <tr class="w-28">
                                <th class="border border-solid bg-slate-100 px-6 py-3 text-left text-sm font-semibold uppercase text-slate-600">Result</th>
                                <td class="border border-solid px-6 py-3">
                                    {{ $test->result }} / {{ $total_questions }}
                                    @if($test->time_spent)
                                        (time: {{ intval($test->time_spent / 60) }}:{{ gmdate('s', $test->time_spent) }}
                                        minutes)
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @if($users)
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pb-12">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h6 class="text-xl font-bold">Leaderboard</h6>

                    <table class="table mt-4 w-full table-view">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Username</th>
                                <th>Correct answers</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @forelse($users as $user)
                                <tr @class(['bg-slate-100' => auth()->user() && auth()->user()->name == $user->name])>
                                    <td class="w-9">{{ $loop->iteration }}</td>
                                    <td class="w-1/2">{{ $user->name }}</td>
                                    <td>{{ $user->correct }} / {{ $total_questions }}
                                        (time: {{ intval($user->time_spent / 60) }}:{{ gmdate('s', $user->time_spent) }} minutes)</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">No results</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pb-20">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                @foreach($results as $result)
                    <table class="table table-view w-full my-4 bg-white">
                        <tbody class="bg-white">
                        <tr class="bg-slate-100">
                            <td class="w-1/2">Question #{{ $loop->iteration }}</td>
                            <td>{!! nl2br($result->question->question_text) !!}</td>
                        </tr>
                        <tr>
                            <td>Options</td>
                            <td>
                                @foreach($result->question->questionOptions as $option)
                                    <li @class([
                                        'underline' => $result->option_id == $option->id,
                                        'font-bold' => $option->correct == 1,
                                    ])>
                                        {{ $option->option }}
                                        @if ($option->correct == 1) <span class="italic">(correct answer)</span> @endif
                                        @if ($result->option_id == $option->id) <span class="italic">(your answer)</span> @endif
                                    </li>
                                @endforeach
                                @if(is_null($result->option_id))
                                    <span class="font-bold italic">Question unanswered.</span>
                                @endif
                            </td>
                        </tr>
                            @if($result->question->answer_explanation || $result->question->more_info_link)
                                <tr>
                                    <td>Answer Explanation</td>
                                    <td>
                                        {!! $result->question->answer_explanation  !!}
                                        @if ($result->question->more_info_link)
                                            <div class="mt-4">
                                                Read more:
                                                <a href="{{ $result->question->more_info_link }}" class="hover:underline" target="_blank">
                                                    {{ $result->question->more_info_link }}
                                                </a>
                                            </div>
                                        @endif
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>

                    @if(!$loop->last)
                        <hr class="my-4 md:min-w-full">
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
