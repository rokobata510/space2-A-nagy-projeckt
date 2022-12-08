<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>

    <x-app-layout>
        <br>
        <br>
        <table class="flex flex-col items-center min-w-full table-auto">
            <tbody>
                <tr>
                    <td class="flex flex-col items-center min-w-full table-auto">
                        <img class="flex flex-col items-center min-w-auto max-h-52 max-w-52" src="{{url('/image')}}" alt="meme">
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 50px "
                        class="table-auto min-w-full flex flex-col items-center text-pink-600
                text-center font-bold md:font-Inter  ...">
                        Mi van a képen? </td>
                </tr>
                <tr>
                    <td>
                        <form>
                            <x-input-label class="block">
                                <div class="bg-[#1E1E1E]">
                                    <x-input-label style="font-size: 17px" class="md:font-Inter text-black ..."
                                        for="text" />
                                    <x-text-input id="text" class="text-pink-900 block mt-1 w-full border-none ..."
                                        type="text" name="text" required autofocus />
                                    <hr class="my-0  h-px bg-[#1E1E1E] rounded border-0 ">
                                </div>
                            </x-input-label>
                        </form>
                    </td>
                    <td>
                        <x-primary-button type="button" style="font-size: 20px "
                            class="focus:outline-none focus:ring-5 bg-gradient-to-r
                     from-pink-700 to-fuchsia-800 hover:from-violet-800 hover:to-indigo-500 ...">
                            Küldés
                        </x-primary-button>
                    </td>
                </tr>
            </tbody>
        </table>

    </x-app-layout>

</body>

</html>
