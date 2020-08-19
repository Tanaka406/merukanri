<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
         {{-- 後の章で説明します --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}
        <title>@yield('title')</title>

        <!-- Scripts -->
         {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
        <script src="{{ secure_asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        {{-- この章の後半で作成するCSSを読み込みます --}}
        <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            {{-- 画面上部に表示するナビゲーションバーです。 --}}
            <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
                <div class="container">
                    <div class="row">
                    </div>
                        <div class="btn-group">
                            <a class="btn btn-link" href="#">ログイン</a>
                            <a class="btn btn-link" href="#">会員登録</a>
                        </div>   
                </div>
            </nav>
            <div style="text-align: center; font-size:2rem;">
                <a href="{{ url('/') }}">
                    メルカンリ
                </a>  
            </div>
            <div style="text-align: center;">
                <div class="btn-group">
                    <a class="btn btn-success btn-lg" href="purchaseinput">仕入入力</a>
                    <a class="btn  btn-primary btn-lg" href="salesinput">売上入力</a>
                    <a class="btn  btn-success btn-lg" href="#">商品情報一覧</a>
                    <a class="btn btn-primary btn-lg" href="#">年間収支一覧</a>
                </div>
            </div>            
            {{-- ここまでナビゲーションバー --}}

            <main class="py-4">
                {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
                @yield('content')
            </main>
        </div>
    </body>
    <div class="mx-auto" style="width: 200px;">
     <footer>(c)2020メルカンリ</footer>
    </div>
</html>