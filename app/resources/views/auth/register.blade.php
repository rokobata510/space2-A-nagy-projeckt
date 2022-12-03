<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <x-guest-layout>
        <x-auth-card>
           <x-slot name="logo">
                <a href="/logo.png">
                    <x-application-logo class="w-0 h-0
                     fill-current " />
                </a>
            </x-slot>
            <img class="min-w-full flex flex-col items-center" src="{{url('/logo.png')}}" alt="logo">
<hr>
<h1 style="font-size: 52px " class="text-pink-600
                            text-center font-bold md:font-Inter  ..." >Get Started</h1>
                        <p style="font: 2px" class="text-white">  ♥♥ PLS 2 ★°*ﾟ </p>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label style="font-size: 17px" class="md:font-Inter text-blue-900 ..." for="name" :value="__('Name')" />
                    <x-text-input id="name" class="text-blue-900 block mt-1 w-full border-none ..." type="text" name="name" :value="old('name')" required autofocus />
                    <hr class="my-0  h-px bg-gray-200 rounded border-0 dark:bg-indigo-900">
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label style="font-size: 17px" class="md:font-Inter text-blue-900 ..." for="email" :value="__('Email')" />
                    <x-text-input id="email" class="text-blue-900 block mt-1 w-full border-none ..." type="email" name="email" :value="old('email')" required />
                    <hr class="my-0  h-px bg-gray-200 rounded border-0 dark:bg-indigo-900">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label style="font-size: 17px" class="md:font-Inter text-blue-900 ..." for="password" :value="__('Password')" />

                    <x-text-input id="password" class="text-blue-900 block mt-1 w-full border-none ..."
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />
                    <hr class="my-0  h-px bg-gray-200 rounded border-0 dark:bg-indigo-900">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label style="font-size: 17px" class="md:font-Inter text-blue-900 ..." for="password_confirmation" :value="__('Confirm Password')" />

                    <x-text-input id="password_confirmation" class="text-blue-900 block mt-1 w-full border-none ..."
                                    type="password"
                                    name="password_confirmation" required />
                    <hr class="my-0  h-px bg-gray-200 rounded border-0 dark:bg-indigo-900">
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
                <br>
                <div class="flex items-center justify-end mt-4">
                    <a class="line-height: 150% underline text-sm text-blue-900 hover:text-gray-900 rounded-md focus:outline-none
                    focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Already registered?   ') }}
                    </a>

                    <x-primary-button style="font-size: 17px " class="py-4 px-9 bg-pink-600 text-white font-semibold rounded-lg shadow-md hover:bg-black
                    focus:outline-none focus:ring-2 focus:ring-pink-400 focus:ring-opacity-75
                    ml-3  drop-shadow-lg border-indigo-900-50%...">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </x-auth-card>
    </x-guest-layout>

</body>
</html>
