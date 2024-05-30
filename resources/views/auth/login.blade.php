<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
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

            <div class="flex items-center justify-end">
                <label for="dhaa" class="flex items-center">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Don’t have an account? ') }}</span>
                </label>   
            
                <a href="{{ route('register') }}" class="text-sm">
                    <x-span data-e2e="bottom-sign-up" class="ml-2 text-sm">
                        Sign up
                    </x-span>
                </a>

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
            </div>
        </div>
    </form>
</x-guest-layout>
