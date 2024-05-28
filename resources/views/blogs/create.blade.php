<x-tenant-app-layout>
    @section('title')
        Create Blog
    @endsection

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create blog post') }}
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="mx-5 md:col-span-2">
            <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="shadow overflow-hidden rounded-xl sm:rounded-xl">
                    <div class="p-5 bg-white">

                        <div class="px-2 py-3 sm:px-5 sm:py-3">
                            <x-label for="image" value="{{ __('Blog Cover') }}" />
                            <x-input id="image" class="mt-1 block w-full text-lg" type="file" name="image"/>
                            <x-form-error for="image" class="mt-1" />
                        </div>
                       
                        <div class="px-2 py-3 sm:px-5 sm:py-3">
                            <x-label for="title" value="{{ __('Tittle') }}" />
                            <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" autofocus/>
                            <x-form-error for="title" class="mt-1" />
                        </div>

                        <div class="px-2 py-3 sm:px-5 sm:py-3">
                            <x-label for="content" value="{{ __('Content') }}" />
                            <x-textarea name="content" id="content" class="mt-1 block w-full" rows="5">{{ old('content') }}</x-textarea>
                            <x-form-error for="content" class="mt-1" />
                        </div>                        
                        
                    </div> 

                    <div class="flex items-center sm:justify-end justify-center px-10 py-5 bg-gray-50 text-right ">
                        <a href="{{ route('blogs.index') }}" class="text-sm">
                            <x-span data-e2e="bottom-sign-up" class="ml-2 text-sm">
                                Cancel
                            </x-span>
                        </a>
        
                        <x-button class="ml-5">
                            {{ __('Upload') }}
                        </x-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-tenant-app-layout>