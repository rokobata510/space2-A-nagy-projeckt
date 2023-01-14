<?php
    use Illuminate\Support\Facades\DB;

    $users = DB::table('images')->get();
?>

<div class="flex flex-col m-4">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block w-full py-2 sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table style="margin-left: auto;margin-right: auto;">
                    <thead class=" bg-gradient-to-r from-gray-500 via-white to-gray-500 ...">
                        <tr>
                            <th scope="col" class="text-xl px-6 py-4 font-medium text-left text-black border border-black">
                                <b>ID
                            </th>
                            <th scope="col" class="text-xl px-6 py-4 font-medium text-left text-black border border-black">
                                <b>url
                            </th>
                            <th scope="col" class="text-xl px-6 py-4 font-medium text-left text-black border border-black">
                                <b>Megoldás
                            </th>
                            <th scope="col" class="text-xl px-6 py-4 font-medium text-left text-black border border-black">
                                <b>Törlés
                            </th>

                        </tr>
                    </thead>
                    <tbody class="bg-neutral-700">
                        <tr class="border-b border-pink-800">
                        @foreach($users as $user)
                            <tr>
                                <td class="px-6 py-4 text-base font-medium text-left text-pink-100 border border-black">{{$user->id}}</td>
                                <td class="px-6 py-4 text-base font-medium text-left text-blue-600 border border-black"><a href="{{$user->url}}"> <u>Link a képhez</a></td>
                                <td class="px-6 py-4 text-base font-medium text-left text-pink-100 border border-black">{{$user->solution}}</td>
                                <td class="px-6 py-4 text-base font-medium text-left text-red-500 border border-black"><button type="button" onclick="window.location='{{url("admin/images/deleteimg/$user->id")}}'">Törlés</button></td>

                            </tr>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
    </div>
</div>
