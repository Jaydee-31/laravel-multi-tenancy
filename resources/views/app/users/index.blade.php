<x-tenant-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
            <x-btn-link class="ml-4 float-right" href="{{ route('users.create') }}">Add User</x-btn-link>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if ($message = Session::get('success'))
                <x-alert-success>
                    {{ $message }}
                </x-alert-success>
            @endif

            @if ($message = Session::get('destroyed'))
                <x-alert-delete>
                    {{ $message }}
                </x-alert-delete>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Role
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr class="bg-white border-b">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap
                                        Apple MacBook Pro 17">{{$user->name}}
                                            </th>
                                        <td class="px-6 py-4">
                                            {{$user->email}}
                                        </td>
                                        <td class="px-6 py-4">
                                            @foreach ($user->roles as $role)
                                                {{$role->name}}{{$loop->last ? "" : ","}}
                                            @endforeach
                                        </td>
                                        <td class="px-6 py-4">
                                            <x-btn-link href="{{route('users.edit', $user->id)}}">Edit</x-btn-link>
                                             <form class="inline-block" action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class=" bg-red-600 p-2 px-4  border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:text-red-100 cursor-pointer mb-2 mr-2" value="Delete">
                                                </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>
</x-tenant-app-layout>
