<x-app-layout>
        <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
            <x-btn-link class="ml-4 float-right" href="{{ route('tenants.create') }}">Add Tenant</x-btn-link>
        </h2>
    </x-slot>
    
    <div class="py-12">
         

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
             @if ($message = Session::get('destroyed'))
                <x-alert-delete>
                    {{ $message }}
                </x-alert-delete>
            @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    <p>Total Tenants: {{ $tenantCount }}</p>
                    <p>Recently Added Tenants:</p>
                    <ul>
                        @foreach($recentTenants as $tenant)
                            <li>{{ $tenant->name }}</li>
                        @endforeach
                    </ul>
                   
                </div>
            </div>
 <x-btn-link href="{{route('tenants.index')}}" class="my-6">View all</x-btn-link>
            {{-- <-- List --> --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                
                    <div class="flex flex-col">
                        @foreach($recentTenants as $tenant)
                            <div class="flex rounded-md mb-6 items-center justify-between">
                                <div class="flex items-center gap-4">
                                    <div class="p-2 bg-slate-200 rounded-xl">
                                        <img src="https://static-00.iconduck.com/assets.00/www-icon-2021x2048-4m2enyr9.png" alt="www" class="w-8 h-8">

                                    </div>
                                    <div class="flex flex-col p-0">

                                        <p class="text text-xl">{{ $tenant->name }}</p>
                                        <a href="http://{{ $tenant->domain_name }}:8000/" target="_blank" class="hover:underline font-bold text-green-600">{{ $tenant->domain_name }}:8000</a>
                                    </div>
                                </div>
                                
                        
                                    <p>Date added: {{$tenant->date}}</p>
                           

                                <form class="inline-block" action="{{ route('tenants.destroy', $tenant->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="text-red-600 hover:text-red-900 cursor-pointer mb-2 mr-2" value="Delete">
                                                </form>
                                
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>