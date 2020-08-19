{{-- layouts/main.blade.phpを読み込む --}}
@extends('layouts.main')


{{-- main.blade.phpの@yield('title')に'purchaseinput'を埋め込む --}}
@section('title','purchaseinput')

{{-- main.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>仕入入力</h2>
<form action="{{ action('PurchaseinputController@create') }}" method="post" enctype="multipart/form-data">
    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-5">商品名</label>
                        <div class="col-md-8">
                            <input type="productnumber" class="form-control" name="syohin_name" id="exampleFormControlInput1" placeholder="商品名">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-5">状態</label>
                        <div class="col-md-8">
                            <input type="productnumber" class="form-control" name="jyotai" id="exampleFormControlInput1" placeholder="状態">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-5">仕入場所</label>
                        <div class="col-md-8">
                            <input type="productnumber" class="form-control" name="siire_place" id="exampleFormControlInput1" placeholder="仕入れ場所">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-5">仕入日</label>
                        <div class="col-md-8">
                            <input type="productnumber" class="form-control" name="siire_date" id="exampleFormControlInput1" placeholder="仕入れ日">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-5">仕入額</label>
                        <div class="col-md-8">
                            <input type="productnumber" class="form-control" name="siire_value" id="exampleFormControlInput1" placeholder="仕入額">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-5">備考欄</label>
                        <div class="col-md-8">
                            <input type="productnumber" class="form-control" name="biko" id="exampleFormControlInput1" placeholder="備考欄">
                        </div>
                    </div>
                </form>    
            </div>
        </div>
    </div>
    <div class="section1 text-center">    
        <a class="btn  btn-primary btn-lg" href="#">登録</a>
    </div>
@endsection