<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-pink-200 ">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="">
        <div class="mx-auto ssm:px-6 ">
            <div class="overflow-hidden shadow-sm">
                <div class="p-6 text-gray-900 ">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
