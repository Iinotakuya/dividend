{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')

{{-- admin.blade.phpの@yield('title')に'新規投稿を行う'を埋め込む --}}
@section('title', '配当金情報サイト')

@section('content')
    <div class="container">
         <div class="row">
            <div class="list-dividend col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-white">
                        <thead>
                            <tr>
                                <th width="30%">会社名・銘柄コード</th>
                                <th width="20%">業種</th>
                                <th width="50%">詳細内容</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dividends as $dividend)
                                <tr>
                                    <th>{{ $dividend->company }}</th>
                                    <td>{{ \Str::limit($dividend->Industry, 100) }}</td>
                                    <td>{{ \Str::limit($dividend->detail, 250) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
            <a href="#" class="btn btn-outline-dark col-md-3 mx-auto">水産・農林業</a>
            <a href="#" class="btn btn-outline-dark col-md-3 mx-auto">鉱業</a>
            <a href="#" class="btn btn-outline-dark col-md-3 mx-auto">建設業</a>
            <a href="#" class="btn btn-outline-dark col-md-3 mx-auto">食料品</a>
        </div>
        <div class="row">
            <a href="#" class="btn btn-outline-dark col-md-3 mx-auto">繊維製品</a>
            <a href="#" class="btn btn-outline-dark col-md-3 mx-auto">パルプ・紙</a>
            <a href="#" class="btn btn-outline-dark col-md-3 mx-auto">化学</a>
            <a href="#" class="btn btn-outline-dark col-md-3 mx-auto">医薬品</a>
        </div>
        <div class="row">
            <a href="#" class="btn btn-outline-dark col-md-3 mx-auto">石油・石炭製品</a>
            <a href="#" class="btn btn-outline-dark col-md-3 mx-auto">ゴム製品</a>
            <a href="#" class="btn btn-outline-dark col-md-3 mx-auto">ガラス・土石製品</a>
            <a href="#" class="btn btn-outline-dark col-md-3 mx-auto">鉄鋼</a>
        </div>
        <div class="row">
            <a href="#" class="btn btn-outline-dark col-md-3 mx-auto">非鉄金属</a>
            <a href="#" class="btn btn-outline-dark col-md-3 mx-auto">金属製品</a>
            <a href="#" class="btn btn-outline-dark col-md-3 mx-auto">機械</a>
            <a href="#" class="btn btn-outline-dark col-md-3 mx-auto">電気機器</a>
        </div>
        <div class="row">
            <a href="#" class="btn btn-outline-dark col-md-3 mx-auto">輸送用機器</a>
            <a href="#" class="btn btn-outline-dark col-md-3 mx-auto">精密機器</a>
            <a href="#" class="btn btn-outline-dark col-md-3 mx-auto">その他製品</a>
            <a href="#" class="btn btn-outline-dark col-md-3 mx-auto">電気・ガス業</a>
        </div>
        <div class="row">
            <a href="#" class="btn btn-outline-dark col-md-3 mx-auto">陸運業</a>
            <a href="#" class="btn btn-outline-dark col-md-3 mx-auto">海運業</a>
            <a href="#" class="btn btn-outline-dark col-md-3 mx-auto">空運業</a>
            <a href="#" class="btn btn-outline-dark col-md-3 mx-auto">倉庫・運輸関連業</a>
        </div>
        <div class="row">
            <a href="#" class="btn btn-outline-dark col-md-3 mx-auto">情報・通信業</a>
            <a href="#" class="btn btn-outline-dark col-md-3 mx-auto">卸売業</a>
            <a href="#" class="btn btn-outline-dark col-md-3 mx-auto">小売業</a>
            <a href="#" class="btn btn-outline-dark col-md-3 mx-auto">銀行業</a>
        </div>
        <div class="row">
            <a href="#" class="btn btn-outline-dark col-md-3 mx-auto">証券・商品先物取引業</a>
            <a href="#" class="btn btn-outline-dark col-md-3 mx-auto">保険業</a>
            <a href="#" class="btn btn-outline-dark col-md-3 mx-auto">その他金融業</a>
            <a href="#" class="btn btn-outline-dark col-md-3 mx-auto">不動産業</a>
        </div>
        <div class="row">
            <a href="#"　class="btn btn-outline-dark col-md-4 mx-auto">サービス業</a>
            <a href="#"　class="btn btn-outline-dark col-md-4 mx-auto">REIT</a>
            <a href="#"　class="btn btn-outline-dark col-md-4 mx-auto">その他</a>
        </div>
    </div>
@endsection