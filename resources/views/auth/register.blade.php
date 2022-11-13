<x-guest-layout>
    <div class="card">
        <div class="card-header">
            Login
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="exampleInputEmail1">Name</label>
                    <input class="form-control" id="exampleInputEmail1" name="name" type="text"
                        value="{{ old('name') }}" aria-describedby="emailHelp" placeholder="Entaer your name">
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="exampleInputEmail1">Email address</label>
                    <input class="form-control" id="exampleInputEmail1" name="email" type="email"
                        value="{{ old('email') }}" aria-describedby="emailHelp" placeholder="Entaer your Email">
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="exampleInputEmail1">Mobile</label>
                    <input class="form-control" id="exampleInputEmail1" name="phone" type="text"
                        value="{{ old('phone') }}" aria-describedby="emailHelp"
                        placeholder="Entaer your mobile number">
                    <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="exampleInputPassword1">Password</label>
                    <input class="form-control" id="exampleInputPassword1" name="password" type="password"
                        placeholder="Enter your password">
                    <x-input-error class="mt-2" :messages="$errors->get('password')" />
                </div>


                <div class="mb-3">
                    <label class="form-label" for="password_confirmation">Confirm Password</label>
                    <input class="form-control" id="password_confirmation" name="password_confirmation" type="password"
                        placeholder="Enter your password">
                    <x-input-error class="mt-2" :messages="$errors->get('password_confirmation')" />
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>

            @if (Route::has('login'))
                <div class="text-center">
                    <p> Already registered ? <a href="{{ route('login') }}">Login</a></p>
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

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />

                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card> --}}
</x-guest-layout>
