<div>
   
    <x-slot name="header">
        <div class="py-5 -ml-4 md:pl-4 md:max-w-lg">
            <h1 class="text-2xl font-bold sm:text-5xl">{{ $editing ? 'Edit Question' : 'Create Question' }} </h1>

            <p class="mt-4 text-gray-500">
                {{ $editing ? 'Fix your Question' : 'Make learning fun and easy to follow?' }} 
            </p>
        </div>
    </x-slot>
    <x-slot name="sidebar">
     
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form wire:submit.prevent="save">
                        <div class="mt-4">
                            <x-input-label for="category" value="Category" />
                            <x-select-list class="w-full" :options="$this->listsForFields['categories']" wire:model="question.category_id" />
                            <x-input-error :messages="$errors->get('question.category_id')" class="mt-2" />
                        </div>
                        
                        
                        <div>
                            <x-input-label for="question_text" value="Question text" />
                            <x-textarea wire:model.defer="question.question_text" id="question_text" class="block mt-1 w-full" type="text" name="question_text" required />
                            <x-input-error :messages="$errors->get('question_text')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="code_snippet" value="Code snippet" />
                            <x-textarea wire:model.defer="question.code_snippet" id="code_snippet" class="block mt-1 w-full" type="text" name="code_snippet" />
                            <x-input-error :messages="$errors->get('question.code_snippet')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="answer_explanation" value="Answer explanation" />
                            <x-textarea wire:model.defer="question.answer_explanation" id="answer_explanation" class="block mt-1 w-full" type="text" name="answer_explanation" />
                            <x-input-error :messages="$errors->get('question.answer_explanation')" class="mt-2" />
                        </div>
                     
                        
                        <div class="mt-4">
                            <x-input-label for="more_info_link" value="More info link of IPOST" />
                            <div class="flex">
                                <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                  https://ipost.hytek.org.in/
                                </span>
                                {{-- <input type="text" id="website-admin" class="" > --}}
                                <input type="text"  wire:model.defer="question.more_info_link" id="more_info_link" class=" rounded-none rounded-e-lg bg-gray-50 border text-gray-900 focus:ring[#004AAD] focus:border[#004AAD] flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  " type="text" name="more_info_link" />
                              </div>
                            <x-input-error :messages="$errors->get('question.more_info_link')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="question_options" value="Question options"/>
                            @foreach($questionOptions as $index => $questionOption)
                                <div class="flex flex-col  md:flex-row-reverse mt-2 bg-gray-100  md:p-2.5 rounded"> 
                                    <div class="flex justify-end md:items-center py-2 md:py-0">
                                        <div >
                                            <input id="correctoption{{ $index }}" type="checkbox" class="mr-1 ml-4 cursor-pointer shrink-0 mt-0.5  border-gray-200 rounded text-[#004AAD] focus:ring-[#0E194D] disabled:opacity-50 disabled:pointer-events-none " wire:model.defer="questionOptions.{{ $index }}.correct"> 
                                            <label class="hidden md:blocktext-sm text-gray-500 ms-3 " for="correctoption{{ $index }}">Correct</label> 
                                        </div>
                                        <button wire:click="removeQuestionsOption({{ $index }})" type="button" class="ml-4  border border-transparent   rounded-lg hover:rounded-2xl text-xs uppercase text-red-500 hover:bg-red-300 hover:text-red-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                                              </svg>
                                        </button>
                                    </div>
                                    <x-text-input type="text" wire:model.defer="questionOptions.{{ $index }}.option" class="w-full" name="questions_options_{{ $index }}" id="questions_options_{{ $index }}" autocomplete="off"/>
                                </div>
                                <x-input-error :messages="$errors->get('questionOptions.' . $index . '.option')" class="mt-2" />
                            @endforeach

                            <x-input-error :messages="$errors->get('questionOptions')" class="mt-2" />

                            <x-primary-button wire:click="addQuestionsOption" type="button" class="mt-4  inline-flex ">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-1">
                                    <path fill-rule="evenodd" d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
                                  </svg>
                                    Add
                            </x-primary-button>
                        </div>

                        <div class="mt-4">
                            <x-primary-button @class([' bg-green-500 mt-4', 'font-bold' => true])>
                                Save
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
