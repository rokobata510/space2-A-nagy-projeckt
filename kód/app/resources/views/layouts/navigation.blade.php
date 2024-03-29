<nav x-data="{ open: false }" class="">
    <!-- Primary Navigation Menu -->
    <div class="border-b-2 border-pink-800 sm:px-6 lg:px-8 bg-neutral-900">

        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <img class="flex flex-col items-center scale-50" src="{{url('/minilogo.png')}}" alt="logo">
                    </a>
                </div>
                <!-- Navigation Links -->



                <a style="font-size: 19px" class="inline-flex items-center py-5 text-sm font-medium leading-4 text-white transition duration-150 ease-in-out border border-transparent rounded-md px-14 bg-neutral-900 hover:text-black hover:bg-pink-600 focus:outline-none" href="/dashboard">
                    {!! "Főoldal" !!}
                </a>

                <a style="font-size: 19px" class="inline-flex items-center py-5 text-sm font-medium leading-4 text-white transition duration-150 ease-in-out border border-transparent rounded-md px-14 bg-neutral-900 hover:text-black hover:bg-pink-600 focus:outline-none" href="/profile">
                    {!! "Profil" !!}
                </a>
                <!-- Címsáv ADMIN -->
                @if(Auth::check() && Auth::user()->isAdmin == "1")

                <a style="font-size: 19px" class="inline-flex items-center py-5 text-sm font-medium leading-4 text-white transition duration-150 ease-in-out border border-transparent rounded-md px-14 bg-neutral-900 hover:text-black hover:bg-pink-600 focus:outline-none" href="/admin">
                        {!! "Admin felület" !!}
                    </a>
                    @endif
                <!-- vége -->
                <form method="POST" action="{{ route('logout') }}" class="inline-flex items-center py-5 text-sm font-medium leading-4 text-white transition duration-150 ease-in-out border border-transparent rounded-md px-14 bg-neutral-900 hover:text-black hover:bg-pink-600 focus:outline-none">
                    @csrf
                    <a :href="route('logout')" onclick="event.preventDefault();
                                            this.closest('form').submit();" style="font-size: 19px" class="">
                        {{ __('Kijelentkezés') }}
                    </a>
                </form>


                <!-- Hamburger -->
                <div class="flex items-center -mr-2 sm:hidden">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                        <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>
            </div>

            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="px-4">
                    <div class="text-base font-medium text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        </div>
</nav>
