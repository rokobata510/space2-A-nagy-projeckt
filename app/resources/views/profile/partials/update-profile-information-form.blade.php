<section>
    <header>
        <h2 style="font-size: 28px" class="text-lg font-medium text-pink-600">
            {{ __('Profil információk') }}
        </h2>

        <p style="font-size: 15px" class="mt-1 text-sm text-pink-800">
            {{ __("Frissítsd a felhasználó profilod információjit és adatait.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label style="font-size: 17px" class="md:font-Inter text-pink-900 ..." for="name" :value="__('Név')" />
            <x-text-input id="name" name="name" type="text" class="text-black block mt-1 w-full border-none ..."  :value="old('name', $user->name)" required autofocus autocomplete="name" />
                <hr class="my-0  h-px bg-gray-200 rounded border-0 dark:bg-indigo-900">
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label style="font-size: 17px" class="md:font-Inter text-pink-900 ..." for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="text-black block mt-1 w-full border-none ..." :value="old('email', $user->email)" required autocomplete="email" />
                <hr class="my-0  h-px bg-gray-200 rounded border-0 dark:bg-indigo-900">
                <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-pink-900">
                        {{ __('Hibás email címet adott meg.') }}

                        <button form="send-verification" class="underline text-sm text-pink-900 hover:text-pink-500 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:text-pink-300">
                            {{ __('Kattints ide az email újra küldéséhez.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-pink-900">
                            {{ __('Az emailt elküldtük.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button style="font-size: 15px " class="py-2 px-4 bg-pink-600 text-white font-semibold rounded-lg shadow-md hover:bg-black
            focus:outline-none focus:ring-2 focus:ring-pink-400 focus:ring-opacity-75
            ml-3  drop-shadow-lg border-indigo-900-50%...">{{ __('Mentés') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-pink-900"
                >{{ __('Mentve.') }}</p>
            @endif
        </div>
    </form>
</section>
