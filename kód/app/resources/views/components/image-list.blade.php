<?php
    use Illuminate\Support\Facades\DB;

    $users = DB::table('images')->get();
?>

<div class="flex flex-col m-4">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block w-full py-2 sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="">
                    <thead class="border border-pink-800 bg-gradient-to-r from-black to-pink-500">
                        <tr>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-pink-500 border border-pink-800">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-pink-500 border border-pink-800">
                                url
                            </th>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-pink-500 border border-pink-800">
                                Megoldás
                            </th>

                        </tr>
                    </thead>
                    <tbody class="bg-neutral-700">
                        <tr class="border-b border-pink-800">
                        @foreach($users as $user)
                            <tr>
                                <td class="px-6 py-4 text-sm font-medium text-left text-pink-500 border border-pink-800">{{$user->id}}</td>
                                <td class="px-6 py-4 text-sm font-medium text-left text-pink-700 border border-pink-800">{{$user->url}}</td>
                                <td class="px-6 py-4 text-sm font-medium text-left text-pink-500 border border-pink-800">{{$user->solution}}</td>
                            </tr>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
    </div>
</div>
