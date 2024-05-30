<x-tenant-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

   @section('title')
    | Login
    @endsection

    <x-authentication-card>
        <x-slot name="logo">
            <x-tenant-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="flex mt-4">
                <div class="flex-1 justify-start">
                    <label for="remember_me"">
                        <x-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
                <div class="flex-2">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-gray-600 hover:underline hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif 
                </div>              
            </div>

            <div class="flex items-center justify-end mt-4">
                <label for="dhaa" class="flex items-center">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Don’t have an account? ') }}</span>
                </label>   
            
                <a href="{{ route('register') }}" class="text-sm">
                    <x-span data-e2e="bottom-sign-up" class="ml-2 text-sm">
                        Sign up
                    </x-span>
                </a>

                <x-button class="ml-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-tenant-guest-layout>
