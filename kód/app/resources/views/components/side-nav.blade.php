<nav aria-label="alternative nav">
    <div class="fixed bottom-0 z-10 content-center w-full h-20 shadow-xl bg-neutral-900 md:relative md:h-screen md:w-48">

        <div class="content-center justify-between text-left md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 md:content-start">
            <ul  class="flex flex-row px-1 pt-3 text-center list-reset md:flex-col md:py-3 md:px-2 md:text-left">
                <br>
                <li class="flex-1 mr-3">
                    <a href="{{ url('/admin/users') }}" class="block py-1 pl-1 text-pink-500 align-middle border-b-2 border-pink-800 o-underline md:py-3 hover:text-black">
                        <span style="font-size: 19px" class="block pb-1 text-xs text-white md:pb-0 md:text-base md:inline-block not-italic font-mono">Felhasználók</span>
                    </a>
                </li>
                <br>
                <li class="flex-1 mr-3">
                    <a href="{{ url('/admin/images') }}" class="block py-1 pl-1 text-pink-500 align-middle border-b-2 border-pink-800 o-underline md:py-3 hover:text-black">
                        <span style="font-size: 19px" class="block pb-1 text-xs text-white md:pb-0 md:text-base md:inline-block not-italic font-mono">Képek</span>
                    </a>
                </li>
                <?php

                /*<li class="flex-1 mr-3">
                    <a href="{{ url('/admin/new') }}" class="block py-1 pl-1 text-pink-500 align-middle border-b-2 border-pink-800 o-underline md:py-3 hover:text-black">
                        <span class="block pb-1 text-xs text-pink-500 md:pb-0 md:text-base md:inline-block">Új Admin</span>
                    </a>
                </li>-->*/
                ?>
            </ul>
        </div>


    </div>
</nav>
