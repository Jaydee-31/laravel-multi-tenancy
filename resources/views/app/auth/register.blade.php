<x-tenant-guest-layout>
     @section('title')
    | Register
    @endsection

        <div class="grid md:grid-cols-2">
    <x-authentication-card>
        <x-slot name="logo">
            <x-tenant-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            
            <div class="flex items-center justify-end mt-5">
                <label for="dhaa" class="flex items-center">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Already registered?') }}</span>
                </label>   
            
                <a href="{{ route('login') }}" class="text-sm">
                     <x-span data-e2e="bottom-sign-up" class="ml-2 text-sm">
                        Login
                    </x-span>
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>

    <div class="hidden md:block">
            <div class="flex flex-col items-center justify-center h-screen">
                <h1 class="max-w-2xl mb-4 text-center text-5xl font-extrabold leading-none md:text-5xl xl:text-6xl">Uniting Voices, Empowering Ideas</h1>
                <img class=" h-3/4" src="\assets\image\hero.png" alt="mockup">
            </div>
        </div>
        </div>
</x-tenant-guest-layout>
