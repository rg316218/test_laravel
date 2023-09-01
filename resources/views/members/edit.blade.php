@extends('layouts.app')
 
@section('content')

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
  
    <div class="">
        <h4>会員登録 会員ID:{{$member->id}}</h4>
        <form action="{{url('memberEdit')}}" method="post">
            @csrf
            <input class="form-control" type="text" name="id" value="{{$member->id}}" hidden>
            <div class="form-group">
                <input class="form-control" type="text" name="name" value="{{$member->name}}">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="tel" value="{{$member->tel}}">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="email" value="{{$member->email}}">
            </div>
            <br>
            <!-- 編集ボタン -->
            <div class="form-group">
                <button class="btn btn-outline-secondary position-relative">編集</button>
            </div>
        </form>
        <form action="/memberDelete/{{$member->id}}" method="post">
            @csrf
            <!-- 削除ボタン -->
            <div class="form-group">
                <button class="btn btn-outline-secondary">削除</button></a>
            </div>
        </form>
    </div>


@endsection