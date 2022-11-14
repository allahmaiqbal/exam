<x-guest-layout>

    <div class="card">
        <div class="card-header">
            Login
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label" for="email">Email address</label>
                    <input class="form-control" id="email" name="email" type="email" value="{{ old('email') }}"
                        aria-describedby="emailHelp" placeholder="Enter your Email">
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="exampleInputPassword1">Password</label>
                    <input class="form-control" id="exampleInputPassword1" name="password" type="password"
                        placeholder="Enter your password">
                    <x-input-error class="mt-2" :messages="$errors->get('password')" />
                </div>
                <div class="mb-3 form-check">
                    <input class="form-check-input" id="exampleCheck1" type="checkbox">
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>

            @if (Route::has('register'))
                <div class="text-center">
                    <p> Not Yet Registered? <a href="{{ route('register') }}">Register</a></p>
                </div>
            @endif
        </div>

        <div class="card-footer text-muted">
            <p class="text-center">&copy {{ config('app.name') }} - {{ Date('Y') }}</p>
        </div>
    </div>

    </div>

    {{-- <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

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
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card> --}}
</x-guest-layout>
