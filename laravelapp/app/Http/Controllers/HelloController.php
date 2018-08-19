<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;



class HelloController extends Controller
{
    public function index(Request $request)
    {
        /*
        $data = [
            ['name'=>'山田たろう','mail'=>'taro@yamada'],
            ['name'=>'田中はなこ','mail'=>'hanako@flower'],
            ['name'=>'鈴木ちさこ','mail'=>'sachico@happy']
        ];
        */

        return view('hello.index', ['msg'=>'フォームを入力：']);

        /*
        $data = ['one', 'two', 'three', 'four', 'five'];
        return view('hello.index', ['data'=>$data]);
        */
    }

    public function post(Request $request)
    {
        /*
        $data = ['one', 'two', 'three', 'four', 'five'];
        return view('hello.index', ['data'=>$data]);  
        */

        /*
        $data = [
            ['name'=>'山田たろう','mail'=>'taro@yamada'],
            ['name'=>'田中はなこ','mail'=>'hanako@flower'],
            ['name'=>'鈴木ちさこ','mail'=>'sachico@happy']
        ];
        */

        $validate＿rule = [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,150',
        ];

        $this->validate($request, $validate_rule);
        return view('hello.index', ['msg'=>'正しく入力されました！']);
    }   
}
