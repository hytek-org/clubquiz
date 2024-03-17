<div>
    <x-slot name="header">
        <div class="py-5 -ml-4 md:pl-4 md:max-w-lg">
            <h1 class="text-2xl font-bold sm:text-5xl">{{ $editing ? 'Edit ClubQuiz' : 'Create a new ClubQuiz' }} </h1>

            <p class="mt-4 text-gray-500">
                {{ $editing ? 'Fix your ClubQuiz' : 'Get Started with Your ClubQuiz!' }}
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
                            <x-input-label for="questions" value="Questions" />
                            <div class="flex space-x-2">
                                @foreach($listsForFields['questions'] as $questionId => $questionText)
                                    <label class="inline-flex items-center ">
                                        <input type="checkbox" value="{{ $questionId }}" wire:model="questions"
                                            class="form-checkbox h-5 w-5 text-blue-600">
                                        <span class="ml-2 text-gray-700">{{ $questionText }}</span>
                                    </label>
                                @endforeach
                            </div>
                            <x-input-error :messages="$errors->get('questions')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="title" value="Title" />
                            <x-text-input wire:model.lazy="quiz.title" id="title" class="block mt-1 w-full"
                                type="text" name="title" required />
                            <x-input-error :messages="$errors->get('quiz.title')" class="mt-2" />
                        </div>

                        <div class="mt-4 select-none hidden">
                            <x-input-label for="slug" value="Slug" />
                            <x-text-input readonly wire:model.lazy="quiz.slug" id="slug" disabled
                                class="block mt-1 select-none bg-gray-50 bg-opacity-50 w-full" type="text"
                                name="slug" />
                            <x-input-error :messages="$errors->get('quiz.slug')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="description" value="Description" />
                            <x-textarea wire:model.defer="quiz.description" id="description" class="block mt-1 w-full"
                                type="text" name="description" />
                            <x-input-error :messages="$errors->get('quiz.description')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="category" value="Category" />
                            
                            <x-select-list class="w-full" :options="$this->listsForFields['categories']" wire:model="quiz.category_id" />
                          
                            <x-input-error :messages="$errors->get('quiz.category_id')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="tags" value="Tags" />
                            <textarea wire:model="tags" id="tags" minlength="5"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Write your tags here with separated by (#)..."></textarea>
                            <x-input-error :messages="$errors->get('tags')" class="mt-2" />
                        </div>



                        <div class="mt-4">
                            <div class="flex">
                                <input wire:model.defer="quiz.published" type="checkbox"
                                    class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                    id="published">
                                <label for="published" class="text-sm text-gray-500 ms-3 ">Published</label>
                            </div>
                            <x-input-error :messages="$errors->get('quiz.published')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                          
                            <div class="flex">
                                <input wire:model.defer="quiz.public" type="checkbox"
                                    class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                    id="public">
                                <label for="public" class="text-sm text-gray-500 ms-3 ">Public</label>
                            </div>
                            <x-input-error :messages="$errors->get('quiz.public')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-primary-button @class(['bg-green-500 mt-4', 'font-bold' => true])>
                                Save
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
