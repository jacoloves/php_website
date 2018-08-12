<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;



class HelloController extends Controller
{
    public function index(){

        $data = ['msg'=>'これはコントローラから渡されたメッセージです。'];
        return view('hello.index', $data);

        /*return <<<EOF

        <html>
            <head>
                <title>Hello</title>
                <style>
                    body {
                            font-size:16pt, 
                            color:#999; 
                         }
                    h1 { 
                            font-size:120pt;
                            text-align:right;
                            color:#fafafa;
                            margin:-50px 0px -120px 0px;
                        }
                </style>
            </head>
            <body>
                    <h1>Hello</h1>
                    <h3>Request</h1>
                    <pre>{$request}</pre>

            </body>
        </html>
EOF;
        $responce->setContent($html);
        return $responce;*/
    }
}
