<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login', app()->getLocale()) }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" style="border-color: #3ae635;" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" style="border-color: #3ae635;"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-green-600 shadow-sm focus:ring-green-500" name="remember" style="border-color: #3ae635;">
                <span class="ml-2 text-sm text-gray-600">{{ __('Recuerdame') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">

            <a class="underline text-sm text-green-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register', app()->getLocale()) }}">
                {{ __('¿No tienes cuenta? Create una') }}
            </a>

            @if (Route::has('password.request'))
                <a class="underline text-sm text-green-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request', app()->getLocale()) }}">
                    {{ __('Has olvidado tu contraseña?') }}
                </a>
            @endif

            <x-primary-button class="ml-3" style="background-color: #3ae635; color:black;">
                {{ __('Entrar') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
