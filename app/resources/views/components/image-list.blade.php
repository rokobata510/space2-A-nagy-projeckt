<?php
use Illuminate\Support\Facades\DB;

$users = DB::table('users')->get();
?>
<table class="border table-auto">
    @foreach($users as $user)
        <tr>
            <td class="px-5 border">{{$user->name}}</td>
            <td class="px-5 border">{{$user->email}}</td>
            <td class="px-5 border">{{$user->password}}</td>
        </tr>
    @endforeach
</table>