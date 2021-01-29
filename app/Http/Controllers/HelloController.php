<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $request){
        return view('hello', ['data'=>$request->data]);
    }
    public function post(Request $request) {
        $data = [
            'msg' => $request->msg
        ];
        return view('hello', $data);
    }
}