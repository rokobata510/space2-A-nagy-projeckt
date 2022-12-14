<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta  name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
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
            <!-- Session Status -->
          <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <h1 style="font-size: 46px " class="text-pink-600
                            text-center font-bold md:font-Inter  ..." >Üdvözlet újra</h1>
                        <p style="font: 3px" class="text-white">  ♥♥ PLS 2 ★°*ﾟ </p>


                <!-- Email Address -->
                <div>
                    <x-input-label style="font-size: 17px" class="md:font-Inter text-blue-900 ..." for="email" :value="__('Email')" />
                    <x-text-input id="email" class="text-blue-900 block mt-1 w-full border-none ..." type="email" name="email" :value="old('email')" required autofocus />
                    <hr class="my-0  h-px bg-gray-200 rounded border-0 dark:bg-indigo-900">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label style="font-size: 17px" class="md:font-Inter text-blue-900 ..." for="password" :value="__('Jelszó')" />
                    <p class="stroke-1 ..."></p>
                    <x-text-input id="password" class=" text-blue-900 block mt-1 w-full border-none dark:bg-white ..."
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />

                     <hr class="my-0  h-px text-blue-900 rounded border-0 dark:bg-indigo-900">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center ">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span  class="ml-2 text-sm text-blue-900 line-height: 150%">{{ __('Emlékezz rám') }}</span>
                    </label>
                </div>
                <br>
                <div class=" min-w-full flex flex-col items-center">
                    <x-primary-button style="font-size: 17px " class="py-4 px-9 bg-pink-600 text-white font-semibold rounded-lg shadow-md hover:bg-black
                    focus:outline-none focus:ring-2 focus:ring-pink-400 focus:ring-opacity-75
                    ml-3  drop-shadow-lg border-indigo-900-50%...">
                        {{ __('Bejelentkezés') }}
                    </x-primary-button>

                    <hr class="my-0  h-px bg-gray-200 rounded border-0 dark:bg-indigo-900-50%">
                    @if (Route::has('password.request'))
                        <a class="line-height: 150% underline text-sm text-blue-900 hover:text-gray-900 rounded-md focus:outline-none
                                    focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {!! ' <br> Elfelejtetted a jelszót?' !!}
                        </a>
                    @endif
                        <p style="font-size: 2px" class="text-white">:D</p>
                <a class="line-height: 150% underline text-sm text-blue-900 hover:text-gray-900 rounded-md focus:outline-none
                                    focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="/register">
                            {!! "  Nincs még felhasználód? Regisztrálj!" !!}
                        </a>
                </div>
            </form>
        </x-auth-card>
    </x-guest-layout>

</body>
</html>
