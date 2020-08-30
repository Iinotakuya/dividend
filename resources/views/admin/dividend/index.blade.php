{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')

{{-- admin.blade.phpの@yield('title')に'新規投稿を行う'を埋め込む --}}
@section('title', '配当金情報サイト')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2 mx-auto">
                <h2>銘柄検索</h2>
            </div>
        </div>
        <form class="form-inline">
            <div class="form-group mx-sm-3 mb-2">
                <input type="text" class="form-control" name="company"  size="120"  placeholder="会社名・銘柄コード">
            </div>
                <button type="submit" class="btn btn-primary mb-2">検索</button>
        </form>
        <div class="row">
            <div class="col-md-2 mx-auto">
                <h2>業種検索</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mx-auto">
                <a href="#">水産・農林業</a>
                <a href="#">鉱業</a>
                <a href="#">建設業</a>
                <a href="#">食料品</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mx-auto">
                <a href="#">繊維製品</a>
                <a href="#">パルプ・紙</a>
                <a href="#">化学</a>
                <a href="#">医薬品</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mx-auto">
                <a href="#">石油・石炭製品</a>
                <a href="#">ゴム製品</a>
                <a href="#">ガラス・土石製品</a>
                <a href="#">鉄鋼</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mx-auto">
                <a href="#">非鉄金属</a>
                <a href="#">金属製品</a>
                <a href="#">機械</a>
                <a href="#">電気機器</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mx-auto">
                <a href="#">輸送用機器</a>
                <a href="#">精密機器</a>
                <a href="#">その他製品</a>
                <a href="#">電気・ガス業</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mx-auto">
                <a href="#">陸運業</a>
                <a href="#">海運業</a>
                <a href="#">空運業</a>
                <a href="#">倉庫・運輸関連業</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mx-auto">
                <a href="#">情報・通信業</a>
                <a href="#">卸売業</a>
                <a href="#">小売業</a>
                <a href="#">銀行業</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mx-auto">
                <a href="#">証券・商品先物取引業</a>
                <a href="#">保険業</a>
                <a href="#">その他金融業</a>
                <a href="#">不動産業</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mx-auto">
                <a href="#">サービス業</a>
                <a href="#">REIT</a>
                <a href="#">その他</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 mx-auto">
                <h2>新着投稿</h2>
            </div>
        </div>
        
    </div>
@endsection