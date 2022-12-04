<?php
    use Illuminate\Support\Facades\DB;


?>
<div class="w-full max-w-xl mx-auto my-5 overflow-hidden border border-pink-800 shadow-xl px-14 py-14 sm:rounded-lg bg-gradient-to-r from-black to-pink-500">
    <div class="flex pb-5 mx-auto text-3xl text-pink-500">Új Admin létrehozása</div>
    <form method="POST" action="http://localhost:8000/admin/new/submit/{{request()->input('name')}}/{{ Hash::make(request()->input('password'))}}">
        <input type="hidden" name="_token" value="fCdMi6bc7hthIHn50TcpAmem8nN2kkcAPpNji8qc">
        <!-- Name -->
        <div>
            <label class="block text-sm font-medium text-pink-500" for="name">
                Név
            </label>
            <input class="block w-full mt-1 rounded-md shadow-sm border-neutral-300 focus:border-pink-800 focus:ring-pink-700" id="name" type="text" name="name" required="required" autofocus="autofocus">
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <label class="block text-sm font-medium text-pink-500" for="email">
                Email
            </label>
            <input class="block w-full mt-1 rounded-md shadow-sm border-neutral-300 focus:border-pink-800 focus:ring-pink-700" id="email" type="email" name="email" required="required">
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label class="block text-sm font-medium text-pink-500" for="password">
                Jelszó
            </label>

            <input class="block w-full mt-1 rounded-md shadow-sm border-neutral-300 focus:border-pink-800 focus:ring-pink-700" id="password" type="password" name="password" required="required" autocomplete="new-password">

        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <label class="block text-sm font-medium text-pink-500" for="password_confirmation">
                Jelszó ismét
            </label>

            <input class="block w-full mt-1 rounded-md shadow-sm border-neutral-300 focus:border-pink-800 focus:ring-pink-700" id="password_confirmation" type="password" name="password_confirmation" required="required">

        </div>

        <div class="flex items-center justify-end mt-4">
            <button name="submitter" type="submit" class="inline-flex items-center px-4 py-2 ml-4 text-xs font-semibold tracking-widest text-pink-400 uppercase transition duration-150 ease-in-out border border-transparent rounded-md bg-neutral-900 hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2focus:ring-offset-2">
                Register
            </button>
        </div>
    </form>
    </div>
