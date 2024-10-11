<style>
   *{
       
    }
    .navbar-brand{
        display: flex;

    }
    .navbar-brand span{
        letter-spacing: 5px;
        font-size: 40px;
        font-weight: 900;
        color: black;
margin-top: 10px;
    }
    form input{
        color: #2b124c;
    }
</style>


<html>
<body>
    


<x-guest-layout  class="blue">
    <x-authentication-card>
        <x-slot name="logo">
        <a class="navbar-brand" href="{{url('/')}}" style="text-decoration: none; color:#FF3B3B; padding-top:0px"><img width="70" src="images/logosab.jpeg" alt="#" style="border-radius: 50%; "/> <span style=""  > s<sub>A</sub>b<sub style="color: #2b124c;">store</sub></span> </a>

        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" >
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4" style="background-color: #2b124c;">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
</body>