<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Admin Felület</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js" integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>

    </head>

<body class="font-sans leading-normal tracking-normal text-pink-200 bg-neutral-800">
    <hr>
    <h1 style="font-size: 52px " class="text-pink-600
                                text-center font-bold md:font-Inter  ..." >Sikeres Tipp!!!</h1>
                                <a href="{{ url('/dashboard') }}" class="block py-1 pl-1 text-pink-500 align-middle border-b-2 border-pink-800 o-underline md:py-3 hover:text-black">
                                    <span class="block pb-1 text-xs text-pink-500 md:pb-0 md:text-base md:inline-block">Vissza</span>
                                </a>
    </body>

</html>
