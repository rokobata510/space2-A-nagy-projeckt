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
                        <?php //sql connection adatok
                        $servername = 'localhost';
                        $username = 'root';
                        $password = '';
                        $database = 'laravel';

                        $conn = new mysqli($servername, $username, $password, $database);

                        if ($conn->connect_error) {
                            die('Connection failed: ' . $conn->connect_error);
                        }
                        $arr = [];
                        $sql = 'SELECT id, url FROM images';
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

                        //$resultimg egy tárolt url string
                        //kivesszük az értékét
                        //képet csinálunk a stringből
                        //$im = str_replace('data:image/png;base64,', '', (file_get_contents($resultimg)));

                        echo '<img class="flex flex-col items-center min-w-auto max-h-52 max-w-52" src="' . $resultimg['url'] . '" alt='.$resultimg['id'].'>';
                        ?>
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
