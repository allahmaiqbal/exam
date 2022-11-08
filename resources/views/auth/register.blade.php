<x-guest-layout>
    <div class="card">
        <div class="card-header">
          Login
        </div>
        <div class="card-body">
             <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{old('name')}}" placeholder="Entaer your name"  aria-describedby="emailHelp">
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email"  value ="{{old('email')}}" id="exampleInputEmail1" placeholder="Entaer your Email"  aria-describedby="emailHelp">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mobile</label>
                    <input type="text" class="form-control" name="phone" value="{{old('mobile')}}" id="exampleInputEmail1" placeholder="Entaer your Email"  aria-describedby="emailHelp">
                    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password"  class="form-control" placeholder="Enter your password" id="exampleInputPassword1">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>


                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" placeholder="Enter your password" name="password_confirmation" id="password_confirmation">
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
                     <button type="submit" class="btn btn-primary">Submit</button>
              </form>

              @if(Route::has('login'))
              <div class="text-center">
                  <p> Already registered ? <a href="{{ route('login') }}">Login</a></p>
              </div>
              @endif
          </div>
          <div class="card-footer text-muted">
            <p class="text-center">&copy {{config('app.name')}} - {{Date('Y')}}</p>
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
