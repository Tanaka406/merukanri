{{-- layouts/main.blade.phpを読み込む --}}
@extends('layouts.main')



{{-- main.blade.phpの@yield('title')に'home'を埋め込む --}}
@section('title', 'home')

{{-- main.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card" style="max-width: 800px;">
                    <img class="card-img" src="https://i.gyazo.com/884772075f6a9ecda83cf80a9c774404.jpg" alt="灯台">
                    <div class="card-img-overlay">
                        <p class="text-white">このアプリケーションは初心者でも使いやすいように作ったメルカリ専門商品管理アプリです</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
