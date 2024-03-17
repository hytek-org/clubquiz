<div class="">
    <div class="flex justify-between pb-2">
        <p class="text-bold">Question {{ $currentQuestionIndex + 1 }} of {{ $this->questionsCount }}</p>
        
        <div  class="text-xs relative" x-data="{ secondsLeft: {{ config('quiz.secondsPerQuestion') }} }" x-init="setInterval(() => {
            if (secondsLeft > 1) {
                secondsLeft--;
            } else {
                secondsLeft = {{ config('quiz.secondsPerQuestion') }};
                $wire.changeQuestion();
            }
        }, 1000);"
          >
            <div class="mb-2 text-white"
                style="width: 120px; height: 20px; border-radius: 10px; background-color: #164ab4; position: relative;">
                <div
                    :style="'width: ' + (secondsLeft / {{ config('quiz.secondsPerQuestion') }} * 100) +
                    '%; height: 100%; border-radius: 10px; background-color: ' + (secondsLeft > 10 ? 'green' : 'red') +
                    '; transition: width 1s; position: absolute; top: 0; left: 0;'">
                </div>
                <div class="absolute text-white top-0 left-2 w-full h-full flex justify-center items-center ">
                    Time:&nbsp;<span x-text="secondsLeft" class="font-bold"></span> sec.
                </div>
            </div>
        </div>
    </div>

    <div>
        <h2 class="mb-4 text-2xl">{{ $currentQuestion->question_text }}</h2>
    </div>

    <div>
        @if ($currentQuestion->code_snippet)
            <pre class="mb-4 border-2 border-solid bg-gray-50 p-2">{{ $currentQuestion->code_snippet }}</pre>
        @endif
    </div>
    <div>
        @foreach ($currentQuestion->questionOptions as $option)
            <div>
                <label for="option.{{ $option->id }}">
                    <input type="radio" id="option.{{ $option->id }}"
                        wire:model.defer="questionsAnswers.{{ $currentQuestionIndex }}"
                        name="questionsAnswers.{{ $currentQuestionIndex }}" value="{{ $option->id }}">
                    {{ $option->option }}
                </label>
            </div>
        @endforeach
    </div>

    <div>
        @if ($currentQuestionIndex < $this->questionsCount - 1)
            <div class="mt-4">
                <x-secondary-button wire:click="changeQuestion">Next question</x-secondary-button>
            </div>
        @else
            <div class="mt-4">
                <x-primary-button wire:click="submit">Submit</x-primary-button>
            </div>
        @endif
    </div>
</div>
