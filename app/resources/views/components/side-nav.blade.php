<nav aria-label="alternative nav">
    <div class="fixed bottom-0 z-10 content-center w-full h-20 shadow-xl bg-neutral-900 md:relative md:h-screen md:w-48">

        <div class="content-center justify-between text-left md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 md:content-start">
            <ul class="flex flex-row px-1 pt-3 text-center list-reset md:flex-col md:py-3 md:px-2 md:text-left">
                
                <li class="flex-1 mr-3">
                    <a href="{{ url('/admin/users') }}" class="block py-1 pl-1 text-pink-600 align-middle border-b-2 border-pink-600 o-underline md:py-3 hover:text-black">
                        <span class="block pb-1 text-xs text-pink-600 md:pb-0 md:text-base md:inline-block">Felhasználók</span>
                    </a>
                </li>
                <li class="flex-1 mr-3">
                    <a href="{{ url('/admin/images') }}" class="block py-1 pl-1 text-pink-600 align-middle border-b-2 border-pink-600 o-underline md:py-3 hover:text-black">
                        <span class="block pb-1 text-xs text-pink-600 md:pb-0 md:text-base md:inline-block">Képek</span>
                    </a>
                </li>
                
            </ul>
        </div>


    </div>
</nav>