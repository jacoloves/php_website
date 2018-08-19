@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')

    <p>{{$msg}}</p>
    <table>
        <form action="/hello" method="post">
            {{ csrf_field() }}
            <tr><th>name: </th><td><input type="text" name="name"></td></tr>
            <tr><th>mail: </th><td><input type="text" name="mail"></td></tr>
            <tr><th>age: </th><td><input type="text" name="age "></td></tr>
            <tr><th></th><td><input type="submit" value="send"></td></tr>
        </form>
    </table>

    {{--
    <p>ここが本文のコンテンツです。</p>

    <p>これは、<middleware>google.com</middleware>へのリンクです。</p>
    <p>これは、<middleware>yahoo.co.jp</middleware>へのリンクです。</p>
    --}}

    {{--
    <table>
        @foreach($data as $item)
            <tr><th>{{$item['name']}}</th><td>{{$item['mail']}}</td></tr>
        @endforeach
    </table>
    --}}

    {{--
    <p>Controller value<br>'message' = {{$message}}</p>
    <p>ViewComposer value<br>'view_message' = {{$view_message}}</p>
    --}}

    {{--
    <p>必要なだけ記述できます。</p>

    @each('components.item', $data, 'item')
    --}}

    {{--
    @include('components.message', ['msg_title'=>'OK','msg_content'=>'サブビューです。'])
    --}}

    {{-- 
    @component('components.message')
        @slot('msg_title')
            CAUTION!
        @endslot

        @slot('msg_content')
            これはメッセージの表示です
        @endslot
    @endcomponent
    --}}

@endsection

@section('footer')
    copyright 2017 tuyano.
@endsection
