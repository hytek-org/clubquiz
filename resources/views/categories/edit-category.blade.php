<x-app-layout>
    <x-slot name="header">
        <div class="py-5 -ml-4 md:pl-4 md:max-w-lg">
            <h1 class="text-2xl font-bold sm:text-5xl">Edit your category</h1>

            <p class="mt-4 text-gray-500">
                Make it easier for people to find what they're looking for by organizing things into clear categories.  
            </p>
        </div>
    </x-slot>
    <x-slot name="sidebar"></x-slot>
    <section class="relative flex flex-wrap lg:h-screen lg:items-center">
        <div class="w-full px-4 pb-10 sm:px-6 sm:py-16 lg:w-1/2 lg:px-8 lg:py-24">
            <form method="POST" class="mx-auto mb-0 mt-8 max-w-md space-y-4 bg-gray-50 p-4 rounded-md shadow-xl shadow-[#EDDACF]" action="{{ route('categories.update', $category) }}"
            enctype="multipart/form-data" x-data="showImage()" @reset="resetImage">
            {{-- csrf prevention --}}
            @csrf
            @method('put')
            @if (Session::has('message'))
            <div class="bg-green-100 rounded-lg py-5 px-6 mb-3 text-base text-green-700 inline-flex items-center w-full" role="alert">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
                </svg>
                  {{ Session::get('message') }}
              </div>
            
            @endif
            <div>
                <label for="name" class="block text-sm font-medium  @error('name') text-red-500 @enderror"
                    text-gray-700">Category name</label>
                <textarea id="name" name="name"
                    class="mt-2 w-full rounded-lg border-gray-200 align-top shadow-sm sm:text-sm @error('name') border-red-500 @enderror"
                    rows="2" placeholder="Enter category title..." required>{{ $category->name }}</textarea>
                @error('name')
                    <p class="mt-1 text-red-500">{{ $message }}</p>
                @enderror
            </div>
        
            <div class="pb-4">
                <label for="content" class="block text-sm font-medium  @error('description') text-red-500 @enderror"
                    text-gray-700">Category description</label>
                <textarea id="content" name="description"
                    class="mt-2 w-full rounded-lg border-gray-200 align-top shadow-sm sm:text-sm @error('description') border-red-500 @enderror"
                    rows="4" placeholder="Enter category description..." required>{{ $category->cat_desc }}</textarea>
                @error('description')
                    <p class="mt-1 text-red-500">{{ $message }}</p>
                @enderror
            </div>
        
            <div class="flex w-32 rounded space-y-0 mt-4">
                <label id="image-border"
                    class="cursor-pointer border-2 bg-gray-200 w-36 pt-1 rounded-md shadow-xl shadow-black/50">
                    <div class="relative flex flex-col justify-center items-center">
                        <img x-show="imageSelected" id="preview" class="object w-14 h-14 inset-0 rounded">
                        <svg x-show="!imageSelected" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-14 h-14">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                        <p class="text-sm">Choose your file</p>
                        <p class="text-xs">Max size is 1Mb</p>
                    </div>
                    <input type="file" name="img_path" class="opacity-0" accept="image/*" @change="showPreview(event)" />
                </label>
            </div>
            <p x-show="imageError" id="errorimage" class="mt-1 text-red-500"></p>
        
            <div class="flex items-center justify-end space-x-4">
                <input type="reset" class="cursor-pointer bg-gray-100 hover:bg-gray-200 px-3 shadow-2xl hover:shadow-black py-2 rounded-full" value="Reset">
                <button type="submit"
                    class="inline-block rounded-full bg-[#0E194D] hover:bg-[#0E194D]/50 px-6 py-2  font-medium text-white">Submit
                </button>
            </div>
        
            <script>
                function showImage() {
                    return {
                        imageSelected: false,
                        imageError: false,
                        showPreview(event) {
                            const file = event.target.files[0];
                            const maxSize = 1024 * 1024; // 1MB
        
                            if (file.size > maxSize) {
                                let border = document.getElementById('image-border');
                                border.classList.add("border-red-500");
                                event.target.value = ''; // Clear the file input
                                document.getElementById('errorimage').innerHTML="The file is too large";
                                this.imageError = true;
                                return;
                            }
        
                            if (event.target.files.length > 0) {
                                let border = document.getElementById('image-border');
                                border.classList.remove("border-red-500");
                                border.classList.add("border-green-500");
                                let src = URL.createObjectURL(file);
                                let preview = document.getElementById("preview");
                                preview.src = src;
                                preview.style.display = "block";
                                this.imageSelected = true;
                                this.imageError = false;
                            }
                        },
                        resetImage() {
                            let border = document.getElementById('image-border');
                            border.classList.remove("border-green-500");
                            border.classList.remove("border-red-500");
                            let preview = document.getElementById("preview");
                            preview.src = ''; // Reset the image source
                            this.imageSelected = false;
                            this.imageError = false;
                        }
                    }
                }
            </script>
        </form>
        

        </div>

        <div class="relative h-64 w-full sm:h-96 lg:h-full lg:w-1/2">
            <img alt="category"
                src="{{asset('assets/logo.png')}}"
                class="absolute inset-0 h-full w-full object-cover bg-white/50 opacity-70 " />
        </div>
    </section>
</x-app-layout>
