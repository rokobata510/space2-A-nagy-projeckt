<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Elfelejtett jelszó</title>
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
            <img class="min-h-full flex flex-col items-center" src="{{url('/logo.png')}}" alt="logo">
<hr>
<br>
<h1 style="font-size: 40px " class="text-pink-600
                            text-center font-bold md:font-Inter  ..." >Elfelejtett jelszó</h1>
                        <p style="font: 1px" class="text-white">  ♥♥ PLS 2 ★°*ﾟ </p>


            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label style="font-size: 17px" class="md:font-Inter text-blue-900 ..." for="email" :value="__('Email')" />
                    <x-text-input id="email" class=" text-blue-900 block mt-1 w-full border-none dark:bg-white ..." type="email" name="email" :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        <hr class="my-0  h-px text-blue-900 rounded border-0 dark:bg-indigo-900">
                        <br>
                </div>
                <div class="grid place-content-start md:place-content-center">
                    <hr>
                    <x-primary-button style="font-size: 14px " class="py-4 px-9 bg-pink-600 text-white font-semibold rounded-lg shadow-md hover:bg-black
                    focus:outline-none focus:ring-2 focus:ring-pink-400 focus:ring-opacity-75
                    ml-3  drop-shadow-lg border-indigo-900-50%...">

                        {{ __('Jelszó Küldése Újra') }}
                    </x-primary-button>
                </div>
            </form>
        </x-auth-card>
    </x-guest-layout>

</body>
</html>
