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
        /*
        $data = [
            ['name'=>'山田たろう','mail'=>'taro@yamada'],
            ['name'=>'田中はなこ','mail'=>'hanako@flower'],
            ['name'=>'鈴木ちさこ','mail'=>'sachico@happy']
        ];
        */

        //return view('hello.index', ['msg'=>'フォームを入力：']);

        /*
        $data = ['one', 'two', 'three', 'four', 'five'];
        return view('hello.index', ['data'=>$data]);
        */

        $validator = Validator::make($request->query(),[
            'id' => 'required',
            'pass' => 'required',
        ]);

        if($validator->fails()){
            $msg = 'クエリーに問題があります。';
        }else{
            $msg = 'ID/PASSを受け付けました。フォームを入力して下さい。';
        }

        return view('hello.index', ['msg'=>$msg, ]);
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

        /*
        $validate_rule = [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,150',
        ];
        */

        $rules = [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,150',
        ];

        $messages = [
            'name.required' => '名前は必ず記入して下さい。',
            'mail.email' => 'メールアドレスが必要です。',
            'age.numeric' => '年齢を整数で入力して下さい。',
            'age.between' => '年齢は0~150の間で入力して下さい。',
        ];


        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect('/hello')
                    ->withErrors($validator)
                    ->withInput();
        }
        return view('hello.index', ['msg'=>'正しく入力されました！']);
    }   
}
