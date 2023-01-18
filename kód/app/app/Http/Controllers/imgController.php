<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\images;

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
        return redirect("retek.hu");
        dd($request->all());  //to check all the datas dumped from the form
        //if your want to get single element,someName in this case
        $someName = $request->someName;

       /*
            DB::insert('INSERT INTO images (link,solution) VALUES(?,?)', [$link, $solution]);*/

    }
}
