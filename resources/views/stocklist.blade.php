{{-- layouts/main.blade.phpを読み込む --}}
@extends('layouts.main')


{{-- main.blade.phpの@yield('title')に'stocklist'を埋め込む --}}
@section('title','stocklist')

{{-- main.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>在庫一覧</h2>
                <table class="table">
<form action="{{ action('StocklistinputController@create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
    <thead>
        <tr>
            <th>ヘッダ行・1列目の列名</th>
            <th>ヘッダ行・2列目の列名</th>
            <th>ヘッダ行・2列目の列名</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1行目・1列目のデータ</td>
            <td>1行目・2列目のデータ</td>
            <td>1行目・3列目のデータ</td>
        </tr>
        <tr>
            <td>2行目・1列目のデータ</td>
            <td>2行目・2列目のデータ</td>
            <td>2行目・3列目のデータ</td>
        </tr>
    </tbody>
</table>