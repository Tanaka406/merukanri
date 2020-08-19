{{-- layouts/main.blade.phpを読み込む --}}
@extends('layouts.main')


{{-- main.blade.phpの@yield('title')に'salesinput'を埋め込む --}}
@section('title','salesinput')

{{-- main.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>売上入力</h2>
<form action="{{ action('SalesinputController@create') }}" method="post" enctype="multipart/form-data">
    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-5">在庫入力</label>
                        <div class="col-md-8">
                            <input type="productnumber" class="form-control" name="" id="exampleFormControlInput1" placeholder="商品名">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-5">売上日</label>
                        <div class="col-md-8">
                            <input type="productnumber" class="form-control" id="exampleFormControlInput1" placeholder="状態">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-5">売上額</label>
                        <div class="col-md-8">
                            <input type="productnumber" class="form-control" id="exampleFormControlInput1" placeholder="仕入れ場所">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-5">送料</label>
                        <div class="col-md-8">
                            <input type="productnumber" class="form-control" id="exampleFormControlInput1" placeholder="仕入れ日">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-5">手数料</label>
                        <div class="col-md-8">
                            <input type="productnumber" class="form-control" id="exampleFormControlInput1" placeholder="仕入額">
                        </div>
                    </div>
                </form>    
            </div>
        </div>
    </div>
    <div class="aaa text-center" style="padding-top: 20px;">
        <a class="btn  btn-primary btn-lg" href="#">登録</a>
    </div>
@endsection