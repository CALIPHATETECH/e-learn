<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <h1>Sing In</h1>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group row">
                <div class="col-md-4">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                </div>
                <div class="col-md-8">
                    <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                </div>
                <div class="col-md-8">
                    <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                </div>
            </div>

            <div class="form-group">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="btn btn-primary">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
