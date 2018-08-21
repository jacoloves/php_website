@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')

    <p>{{$msg}}</p>
    @if (count($errors) > 0)
    <p>入力に問題があります。再入力して下さい。</p>
    {{--
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    --}}
    @endif
    <table>
        <form action="/hello" method="post">
            {{ csrf_field() }}
            {{--
            <tr><th>name: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
            <tr><th>mail: </th><td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>
            <tr><th>age: </th><td><input type="text" name="age" value="{{old('age')}}"></td></tr>
            <tr><th></th><td><input type="submit" value="send"></td></tr>
            --}}
            @if($errors->has('name'))
            <tr><th>ERROR</th><td>{{$errors->first('name')}}</td></tr>
            @endif
            <tr><th>name: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
            @if($errors->has('mail'))
            <tr><th>ERROR</th><td>{{$errors->first('mail')}}</td></tr>
            @endif
            <tr><th>mail: </th><td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>
            @if($errors->has('age'))
            <tr><th>ERROR</th><td>{{$errors->first('age')}}</td></tr>
            @endif
            <tr><th>age: </th><td><input type="text" name="age" value="{{old('age')}}"></td></tr>
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
