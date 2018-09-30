<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Validator;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        return view('hello.index', ['msg'=>'フォームを入力：']);
    }

    public function post(Request $requst)
    {
        $validator = Validator::make($request->query(), [
            'id' => 'required',
            'pass' => 'required',
        ]);
        if($validator->fails()){
            $msg = 'クエリーに問題があります。';
        }else{
            $msg = 'ID/PASSを受け付けました。フォームを入力下さい。';
        }

        return view('hello.index', ['msg'=>$msg, ]);
    }
}