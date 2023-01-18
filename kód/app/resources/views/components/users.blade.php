
<?php
use App\Models\User;

    use Illuminate\Support\Facades\DB;

    $users = DB::table('users')->get();

?>

<div class="flex flex-col w-full">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block py-2 sm:px-6 lg:px-8">
            <div class="max-w-full">
                <table style="margin-left: auto;margin-right: auto;style=width:100%;">
                    <br><br>
                    <thead class=" bg-gradient-to-r from-gray-500 via-white to-gray-500 ...">
                        <tr>
                            <th scope="col" class="text-xl px-6 py-4 font-medium text-left text-black border border-black">
                                <b>ID
                            </th>
                            <th scope="col" class="text-xl px-6 py-4 font-medium text-left text-black border border-black">
                                <b>Felhasználó név
                            </th>
                            <th scope="col" class="px-6 py-4 text-xl font-medium text-left text-black border border-black">
                                <b>Email
                            </th>
                            <th scope="col" class="px-6 py-4 text-xl font-medium text-left text-black border border-black">
                                <b>Admin?
                            </th>

                            <th scope="col" class="px-6 py-4 text-xl font-medium text-left text-black border border-black">
                                <b>Törlés
                            </th>
                            <th scope="col" class="px-6 py-4 text-xl font-medium text-left text-black border border-black">
                                <b>Adminná tétel
                            </th>
                            <th scope="col" class="px-6 py-4 text-xl font-medium text-left text-black border border-black">
                                <b>Admin visszavonás
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-neutral-700">
                        <tr class="border-b border-black w-full">
                        @foreach($users as $user)
                            <tr>
                                <td class="px-6 py-4 text-base font-medium text-left text-pink-100 border border-black">{{$user->id}}</td>
                                <td class="px-6 py-4 text-base font-medium text-left text-pink-100 border border-black">{{$user->name}}</td>
                                <td class="px-6 py-4 text-base font-medium text-left text-pink-100 border border-black">{{$user->email}}</td>
                                <td class="px-6 py-4 text-base font-medium text-left text-pink-100 border border-black">{{$user->isAdmin ? "Igen":"Nem"}}</td>


                                <td style="text-align: center;" class="px-6 py-4 text-base font-medium text-left text-yellow-300 border border-black"><button type="button" onclick="window.location='{{url("admin/users/delete/$user->id")}}'">Törlés</button></td>
                                <td style="text-align: center;" class="px-6 py-4 text-base font-medium text-left text-green-500 border border-black"><button type="button" onclick="window.location='{{url("admin/users/admin/$user->id")}}'">Admin</button></td>
                                <td style="text-align: center;" class="px-6 py-4 text-base font-medium text-left text-red-500 border border-black"><button type="button" onclick="window.location='{{url("admin/users/unadmin/$user->id")}}'">Admin</button></td>
                            </tr>
                            @endforeach
                            <table style="margin-left: auto;margin-right: auto;style=width:100%;">
                                <br><br>
                                <thead class=" bg-gradient-to-r from-gray-500 via-white to-gray-500 ...">
                                    <tr>
                                        <th scope="col" class="text-xl px-6 py-4 font-medium text-left text-black border border-black">
                                            <b>ID
                                        </th>
                                        <th scope="col" class="text-xl px-6 py-4 font-medium text-left text-black border border-black">
                                            <b>Felhasználó név
                                        </th>

                            <th scope="col" class="px-6 py-4 text-xl font-medium text-left text-black border border-black max-w-xs">
                                <b>Jelszó
                            </th>
                        </thead>
                            @foreach($users as $user)

                            <tbody class="bg-neutral-700">
                                <tr class="border-b border-black w-full">
                                    <td class="px-6 py-4 text-base font-medium text-left text-pink-100 border border-black">{{$user->id}}</td>
                                <td class="px-6 py-4 text-base font-medium text-left text-pink-100 border border-black">{{$user->name}}</td>
                                    <td class="w-10 px-6 py-4 text-base font-medium text-left text-pink-100 border border-black">{{$user->password}}</td>
                                </tr>
                            </tbody>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
    </div>
</div>

