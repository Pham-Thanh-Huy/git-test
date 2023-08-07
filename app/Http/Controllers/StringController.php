<?php

namespace App\Http\Controllers;

use App\Mail\Demo;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class StringController extends Controller
{
    function string(Request $request)
    {

        $request->session()->put('hello', 'xin chào');
        // return $request -> session() -> get('hello');
        // cách xóa
        $request->session()->forget('hello');
        return $request->session()->get('hello');
    }


    function showPhanTrang()
    {

        return view('product');
    }


    function sendmail()
    {
        $data = [
            'key1' => 'Dữ liệu truyền qua controller 1'
        ];
        Mail::to('huypham3062k3@gmail.com')->send(new Demo($data));
    }


    function addProduct(Request $request)
    {
        $add_product = $request->input('add');
    }
}
