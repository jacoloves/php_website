<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index()
    {
        $data = [
            ['name'=>'山田太郎', 'mail'=>'taro@yamada'],
            ['name'=>'田中はなこ', 'mail'=>'hanako@tanaka'],
            ['name'=>'鈴木早智子', 'mail'=>'sachico@suzuki']
        ];

        return view('hello.index', ['data'=>$data]);
    }

    public function post()
    {
        $data = [
            ['name'=>'山田太郎', 'mail'=>'taro@yamada'],
            ['name'=>'田中はなこ', 'mail'=>'hanako@tanaka'],
            ['name'=>'鈴木早智子', 'mail'=>'sachico@suzuki']
        ];

        return view('hello.index', ['data'=>$data]);
    }
}