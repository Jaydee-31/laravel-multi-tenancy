<x-tenant-app-layout>
    @section('title')
    {{ $blog->title }}
    @endsection
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">     
            <div class="flex flex-col max-w-3xl mx-auto overflow-hidden rounded-xl sm:rounded-xl">
                <img src="\storage\blog-photos\{{$blog->image}}" alt="" class="w-full object-cover h-60 sm:h-96 shadow dark:bg-gray-500">
                <div class="p-6 pb-12 m-4 mx-auto -mt-16 space-y-6 lg:max-w-2xl sm:px-10 sm:mx-12 rounded-xl sm:rounded-xl shadow-lg bg-gray-50 dark:bg-gray-800 ">
                    <div class="space-y-2">
                        <a rel="noopener noreferrer" href="#" class="inline-block text-2xl font-semibold sm:text-3xl  dark:text-gray-100"">
                            {{ $blog->title }}
                        </a>
                        <p class="text-xs dark:text-gray-400">By
                            {{ $blog->author->name }} | {{date('M d, Y', strtotime($blog->created_at->toDateString()))}}
                        </p>
                    </div>
                    <div class="dark:text-gray-100">
                        <p class="mb-3 font-light text-gray-500 dark:text-gray-400 first-line:uppercase first-line:tracking-widest first-letter:text-7xl first-letter:font-bold first-letter:text-gray-900 dark:first-letter:text-gray-100 first-letter:mr-3 first-letter:float-left text-justify">
                        {{ $blog->content }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-tenant-app-layout>