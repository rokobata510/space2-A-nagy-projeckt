
<?php
    use Illuminate\Support\Facades\DB;

    $users = DB::table('users')->get();
?>
<table class="border table-auto">
<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-full">
                    <thead class="border-b">
                        <tr>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                Felhasználó név
                            </th>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                Jelszó 
                            </th>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                Létrehozva
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                        @foreach($users as $user)
                            <tr>
                                <td class="px-6 py-4 text-sm font-medium text-left text-gray-900">{{$user->id}}</td>
                                <td class="px-6 py-4 text-sm font-medium text-left text-gray-900">{{$user->name}}</td>
                                <td class="px-6 py-4 text-sm font-medium text-left text-gray-900">{{$user->email}}</td>
                                <td class="px-6 py-4 text-sm font-medium text-left text-gray-900">{{$user->created_at}}</td>
                                <td class="px-6 py-4 text-sm font-medium text-left text-gray-900">{{$user->password}}</td>
                            </tr>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
    </div>
</div>
</table>
