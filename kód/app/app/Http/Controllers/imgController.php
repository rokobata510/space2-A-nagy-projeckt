<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\images;
use Illuminate\Support\Facades\DB;
    $users = DB::table('images')->get();

class imgController extends Controller
{
    function data(Request $req)
    {
            $img = new images;
            $img->link = $req->link;
            $img->solution = $req->solution;
            $img->save();
            return redirect('add');

    }
    public static function addimg(Request $request)
    {
        //dd($request->input('link'));  //to check all the datas dumped from the form

        DB::table('images')->insert([
            'link' => $request->input('link'),
            'solution' =>  $request->input('solution')
        ]);
        return redirect()->route('admin', ['tab' => 'images']);


    }
}
