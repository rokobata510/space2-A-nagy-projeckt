<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta  name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" type="text/css" href="css/login.css">
  <link rel="stylesheet" type="text/css" href="./app/resources/css/login.css">
</head>
<body>
    <x-guest-layout>
        <x-auth-card>
           <x-slot name="logo">
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </x-slot>
            <!-- Session Status -->
          <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <h1 style="font-size: 40px" class="text-pink-600
                            text-center font-bold md:font-Inter ..." >Welcome again</h1>
                        <p class="text-white"> n </p>
                        <p class="text-white"> o </p>


                <!-- Email Address -->
                <div>
                    <x-input-label style="font-size: 18px" class="md:font-Inter ..." for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full border-none ..." type="email" name="email" :value="old('email')" required autofocus />
                    <hr class="my-0  h-px bg-gray-200 rounded border-0 dark:bg-indigo-900">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label style="font-size: 18px" class="md:font-Inter ..." for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full border-none dark:bg-white ..."
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />

                     <hr class="my-0  h-px bg-gray-200 rounded border-0 dark:bg-indigo-900">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-primary-button class="ml-3">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </x-auth-card>
    </x-guest-layout>

</body>
</html>
