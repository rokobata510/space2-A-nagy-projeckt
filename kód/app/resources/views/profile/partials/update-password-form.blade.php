<section>
    <header>
        <h2 style="font-size: 28px" class="text-lg font-medium text-pink-600">
            {{ __('Jelszó frissítés') }}
        </h2>

        <p style="font-size: 15px" class="mt-1 text-sm text-pink-800">
            {{ __('A felhasználói fiókod védelme érdekében kérem használjon biztonságos jelszót.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label style="font-size: 17px" class="md:font-Inter text-pink-900 ..." for="current_password" :value="__('Jelenlegi Jelszó')" />
            <x-text-input id="current_password" name="current_password" type="password" class="text-black block mt-1 w-full border-none ..." autocomplete="current-password" />
            <hr class="my-0  h-px bg-gray-200 rounded border-0 dark:bg-indigo-900">
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label style="font-size: 17px" class="md:font-Inter text-pink-900 ..." for="password" :value="__('Új Jelszó')" />
            <x-text-input id="password" name="password" type="password" class="text-black block mt-1 w-full border-none ..." autocomplete="new-password" />
            <hr class="my-0  h-px bg-gray-200 rounded border-0 dark:bg-indigo-900">
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label style="font-size: 17px" class="md:font-Inter text-pink-900 ..." for="password_confirmation" :value="__('Új Jelszó Újra')" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="text-black block mt-1 w-full border-none ..." autocomplete="new-password" />
            <hr class="my-0  h-px bg-gray-200 rounded border-0 dark:bg-indigo-900">
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button style="font-size: 15px " class="py-2 px-4 bg-pink-600 text-white font-semibold rounded-lg shadow-md hover:bg-black
            focus:outline-none focus:ring-2 focus:ring-pink-400 focus:ring-opacity-75
            ml-3  drop-shadow-lg border-indigo-900-50%...">{{ __('Mentés') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Mentve') }}</p>
            @endif
        </div>
    </form>
</section>
