<section class="space-y-6">
    <header>
        <h2 style="font-size: 28px" class="text-lg font-medium text-pink-600">
            {{ __('Felhasználó törlése') }}
        </h2>
        <p style="font-size: 15px" class="mt-1 text-sm text-pink-800">
            {{ __('Figyelem! Ha törli a felhasználót akkor az adatok örökre elvesznek! Kérem töltse le a menteni kívánt adatait előtte. ') }}
        </p>
    </header>

    <x-danger-button style="font-size: 15px " class="py-2 px-4 bg-pink-600 text-white font-semibold rounded-lg shadow-md hover:bg-red-500
    focus:outline-none focus:ring-2 focus:ring-pink-400 focus:ring-opacity-75
    ml-3  drop-shadow-lg border-indigo-900-50%..."
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Felhasználó törlése') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">Biztos vagy benne hogy törölni akarod a felhasználód?</h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Figyelem! Ha törli a felhasználót akkor az adatok örökre elvesznek! Kérem töltse le a menteni kívánt adatait előtte. ') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="Password" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="Password"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Vissza') }}
                </x-secondary-button>

                <x-danger-button class="ml-3">
                    {{ __('Felhasználó törlése') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
