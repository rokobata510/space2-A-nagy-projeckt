<?php
use App\Models\tipp;
    use Illuminate\Support\Facades\DB;
    $tipps = DB::table('tipps')->get();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js" integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>

</head>

<body>

    <x-app-layout>
        <br>
        <br>
        <table class="flex flex-col items-center min-w-full table-auto">
            <tbody>
                <tr>
                    <td class="flex flex-col items-center min-w-full table-auto">
                        <?php //sql connection adatok
                        $servername = 'localhost';
                        $tippname = 'root';
                        $password = '';
                        $database = 'laravel';
                        $conn = new mysqli($servername, $tippname, $password, $database);
                        if ($conn->connect_error) {
                            die('Connection failed: ' . $conn->connect_error);
                        }
                        $arr = [];
                        $sql = 'SELECT id, link, solution FROM images';
                        $result = $conn->query($sql);
                        //ha ad vissza valamit a $sql lekérdezés, akkor $resultimg lesz az
                        //tesztelés idejére csak egy visszaadott képet kezel
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                array_push($arr, $row);
                            }
                        } else {
                            echo '0 results';
                        }
                        $conn->close();
                        //random choice url_arr-bol
                        $i = rand(0, sizeof($arr) - 1);
                        $resultimg = $arr[$i];
                        echo '<img class="flex flex-col items-center min-w-auto max-h-52 max-w-52" src="' . $resultimg['link'] . '" alt='.$resultimg['id'].'>';
                       ?>
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 50px " class="table-auto min-w-full flex flex-col items-center text-pink-600 text-center font-bold md:font-Inter  ...">
                        Mi van a képen? </td>
                </tr>
                <tr>
                    <td>
                        <form method="POST" action="/dashboard">
                            @csrf
                            <x-input-label class="block">
                                <div class="bg-[#1E1E1E]">

                                    <x-text-input id="text" class="text-pink-900 block mt-1 w-full border-none ..."
                                        type="text" id="text" name="text" required autofocus />
                                    <hr class="my-0  h-px bg-[#1E1E1E] rounded border-0 ">
                                </div>
                            </x-input-label>
                            <input type="hidden" name="sol" value="{{$resultimg["solution"]}}">
                            <x-primary-button type="submit" style="font-size: 20px "
                                class="focus:outline-none focus:ring-5 bg-gradient-to-r
                         from-pink-700 to-fuchsia-800 hover:from-violet-800 hover:to-indigo-500 ...">
                                Küldés
                            </x-primary-button>
                        </form>
                        <?php
                        /* Tipp arány
                        if($resultimg["solution"] === 'text') {
                            if ($resultimg["solution"] === 'text')
                                        {
                                            DB::table('post')
                                            ->where('userid', 1)
                                            ->update(['correct' => correct + 1]);
                                        }
                            else        {
                                            DB::table('post')
                                            ->where('userid', 1)
                                            ->update(['allOf' => allOf + 1]);
                                        }
                                    }
                        */?>


                       <!-- <div class="flex flex-col m-4">
                            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block w-full py-2 sm:px-6 lg:px-8">
                                    <div class="overflow-hidden">
                                        <table class="">
                                            <tbody class="bg-neutral-700">
                                                <tr class="border-b border-pink-800">
                                                @foreach($tipps as $tipp)
                                                    <tr>
                                                        <td class="px-6 py-4 text-sm font-medium text-left text-pink-500 border border-pink-800">{{$tipp->correct}}</td>
                                                        <td class="px-6 py-4 text-sm font-medium text-left text-pink-500 border border-pink-800">{{$tipp->allOf}}</td>

                                                    </tr>
                                                @endforeach
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>
                            </div>
                        </div>-->
                    </td>
                </tr>
            </tbody>
        </table>

    </x-app-layout>

</body>

</html>
