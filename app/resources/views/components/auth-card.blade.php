<div class="flex flex-col items-center min-h-screen pt-6 sm:justify-center sm:pt-0 bg-gradient-to-r from-black to-pink-600">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full px-6 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md py-14 sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
