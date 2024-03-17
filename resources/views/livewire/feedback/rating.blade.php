<div class="">
    <section class="">
        <div class="relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-16 max-w-7xl">
            <div class="flex w-full mx-auto">
                <div class="relative inline-flex items-center m-auto align-middle">
                    <div class="relative max-w-6xl p-10 overflow-hidden bg-white rounded-3xl lg:p-20">
                        <div class="relative max-w-lg">
                            <div>
                                <p class="text-2xl font-medium tracking-tight text-black sm:text-4xl">
                                    Rate the ClubQuiz
                                </p>
                                <p class="max-w-xl mt-4 text-base tracking-tight text-gray-600">
                                    After playing the ClubQuiz, we would appreciate your feedback. Please rate your
                                    experience and share your thoughts. Your feedback helps us improve!
                                </p>
                            </div>
                            <!-- rating.blade.php -->
                            <div>
                                <form wire:submit.prevent="saveRating" class="">
                                    <div class="grid sm:grid-cols-4 w-full gap-4 mt-2">
                                        <div class="col-span-1">
                                            

                                            <select wire:model="rating" id="rating"
                                                class="mt-1.5 w-full rounded-lg border-gray-300 text-gray-700 sm:text-sm">
                                                <option value="1">&#9733;</option> <!-- Unicode star character -->
                                                <option value="2">&#9733;&#9733;</option>
                                                <!-- Two Unicode star characters -->
                                                <option value="3">&#9733;&#9733;&#9733;</option>
                                                <!-- Three Unicode star characters -->
                                                <option value="4">&#9733;&#9733;&#9733;&#9733;</option>
                                                <!-- Four Unicode star characters -->
                                                <option value="5">&#9733;&#9733;&#9733;&#9733;&#9733;</option>
                                                <!-- Five Unicode star characters -->
                                            </select>
                                            @error('rating')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-span-3">
                                            <textarea wire:model="comment" type="text" placeholder="Leave your comment here."
                                                class="flex w-full h-auto min-h-[80px] px-3 py-2 text-sm bg-white border rounded-md border-gray-200 placeholder:text-neutral-400 focus:border-neutral-300 focus:outline-none  disabled:cursor-not-allowed disabled:opacity-50"></textarea>
                                            @error('comment')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div>
                                        <button type="submit" class="mt-4 inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium text-white transition-colors border border-transparent rounded-md focus:outline-none focus:ring-2 focus:ring-neutral-900 focus:ring-offset-2 bg-neutral-950 hover:bg-neutral-900">Submit</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>



</div>
