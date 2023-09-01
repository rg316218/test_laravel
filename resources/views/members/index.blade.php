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

    </head>
 
    <div class="position-static">
        <div class="nav justify-content-end"><a href="/registration"> >>登録</a></div>
        <h4>会員一覧</h4>
        <table class="table">
            <!-- テーブルヘッダ -->
            <thead class="table-light">
                    <th>氏名</th>
                    <th>電話番号</th>
                    <th>メールアドレス</th>
                    <th>編集</th>
            </thead>
            <!-- テーブル本体 -->
        @foreach ($members as $value)
            <tbody>                
                <tr>
                    <td class="table-text">{{ $value->name }}</td>
                    <td>{{ $value->tel }}</td>
                    <td>{{ $value->email }}</td>
                    <td><a href="/edit/{{$value->id}}"> >>編集</a></td>
                </tr>                
            </tbody>
        @endforeach
        </table>
    </div>
</html>
@endsection
