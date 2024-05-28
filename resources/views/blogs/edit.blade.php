<x-app-layout>
    @section('title')
    Edit Blog
    @endsection

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Blog Post') }}
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="mx-5 md:col-span-2">
            <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="shadow overflow-hidden rounded-xl sm:rounded-xl">
                    <div class="p-5  bg-white dark:bg-gray-800 dark:bg-opacity-50">

                        <div class="px-2 py-3 sm:px-5 sm:py-3">
                            <x-label for="image" value="{{ __('Cover') }}" />
                            <x-input type="file" name="image" id="image" class="mt-1 block w-full text-lg"
                                    value="{{ old('image',  $blog->image) }}" />
                            <x-input-error for="image" class="mt-1" />
                        </div>
  
                        <div class="px-2 py-3 sm:px-5 sm:py-3">
                            <x-label for="title" value="{{ __('Tittle') }}" />
                            <x-input type="text" name="title" id="title" class="mt-1 block w-full"
                                   value="{{ old('title',  $blog->title) }}" />
                            <x-input-error for="title" class="mt-1" />
                        </div>

                        <div class="px-2 py-3 sm:px-5 sm:py-3">                    
                            <x-label for="content" value="{{ __('Content') }}" />
                            <x-textarea name="content" id="content" class="mt-1 block w-full" rows="5">
                                {{ old('content', $blog->content) }}</x-textarea>
                            <x-input-error for="content" class="mt-1" />
                        </div>
                    </div> 

                    <div class="flex items-center sm:justify-end justify-center px-10 py-5 bg-gray-50 dark:bg-gray-800 text-right ">
                        <a href="{{ route('blogs.index') }}" class="text-sm">
                            <span data-e2e="bottom-sign-up" class="ml-2 text-sm text-sky-500 dark:text-sky-400">
                                Cancel
                            </span>
                        </a>
        
                        <x-button class="ml-5">
                            {{ __('Save') }}
                        </x-button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</x-app-layout>