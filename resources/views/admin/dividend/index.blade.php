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
        <form class="form-inline" action="{{ action('Admin\DividendController@indexlist') }}" method="post" enctype="multipart/form-data">
            <div class="form-group mx-sm-3 mb-2">
                <input type="text" class="form-control" name="dividend_title"  size="120"  placeholder="会社名・銘柄コード">
            </div>
                {{ csrf_field() }}
                <button type="submit" class="btn btn-primary mb-2">検索</button>
        </form>
        <div class="row">
            <div class="col-md-2 mx-auto">
                <h2>業種検索</h2>
            </div>
        </div>
        <div class="row">
            <a href="{{ action('Admin\DividendController@category', ['dividend_category' => "水産・農林業"]) }}" class="btn btn-outline-dark col-md-3 mx-auto">水産・農林業</a>
            <a href="{{ action('Admin\DividendController@category', ['dividend_category' => "鉱業"]) }}" class="btn btn-outline-dark col-md-3 mx-auto">鉱業</a>
            <a href="{{ action('Admin\DividendController@category', ['dividend_category' => "建設業"]) }}" class="btn btn-outline-dark col-md-3 mx-auto">建設業</a>
            <a href="{{ action('Admin\DividendController@category', ['dividend_category' => "食料品"]) }}" class="btn btn-outline-dark col-md-3 mx-auto">食料品</a>
        </div>
        <div class="row">
            <a href="{{ action('Admin\DividendController@category', ['dividend_category' => "繊維製品"]) }}" class="btn btn-outline-dark col-md-3 mx-auto">繊維製品</a>
            <a href="{{ action('Admin\DividendController@category', ['dividend_category' => "パルプ・紙"]) }}" class="btn btn-outline-dark col-md-3 mx-auto">パルプ・紙</a>
            <a href="{{ action('Admin\DividendController@category', ['dividend_category' => "化学"]) }}" class="btn btn-outline-dark col-md-3 mx-auto">化学</a>
            <a href="{{ action('Admin\DividendController@category', ['dividend_category' => "医薬品"]) }}" class="btn btn-outline-dark col-md-3 mx-auto">医薬品</a>
        </div>
        <div class="row">
            <a href="{{ action('Admin\DividendController@category', ['dividend_category' => "石油・石炭製品"]) }}" class="btn btn-outline-dark col-md-3 mx-auto">石油・石炭製品</a>
            <a href="{{ action('Admin\DividendController@category', ['dividend_category' => "ゴム製品"]) }}" class="btn btn-outline-dark col-md-3 mx-auto">ゴム製品</a>
            <a href="{{ action('Admin\DividendController@category', ['dividend_category' => "ガラス・土石製品"]) }}" class="btn btn-outline-dark col-md-3 mx-auto">ガラス・土石製品</a>
            <a href="{{ action('Admin\DividendController@category', ['dividend_category' => "鉄鋼"]) }}" class="btn btn-outline-dark col-md-3 mx-auto">鉄鋼</a>
        </div>
        <div class="row">
            <a href="{{ action('Admin\DividendController@category', ['dividend_category' => "非鉄金属"]) }}" class="btn btn-outline-dark col-md-3 mx-auto">非鉄金属</a>
            <a href="{{ action('Admin\DividendController@category', ['dividend_category' => "金属製品"]) }}" class="btn btn-outline-dark col-md-3 mx-auto">金属製品</a>
            <a href="{{ action('Admin\DividendController@category', ['dividend_category' => "機械"]) }}" class="btn btn-outline-dark col-md-3 mx-auto">機械</a>
            <a href="{{ action('Admin\DividendController@category', ['dividend_category' => "電気機器"]) }}" class="btn btn-outline-dark col-md-3 mx-auto">電気機器</a>
        </div>
        <div class="row">
            <a href="{{ action('Admin\DividendController@category', ['dividend_category' => "輸送用機器"]) }}" class="btn btn-outline-dark col-md-3 mx-auto">輸送用機器</a>
            <a href="{{ action('Admin\DividendController@category', ['dividend_category' => "精密機器"]) }}" class="btn btn-outline-dark col-md-3 mx-auto">精密機器</a>
            <a href="{{ action('Admin\DividendController@category', ['dividend_category' => "その他製品"]) }}" class="btn btn-outline-dark col-md-3 mx-auto">その他製品</a>
            <a href="{{ action('Admin\DividendController@category', ['dividend_category' => "電気・ガス業"]) }}" class="btn btn-outline-dark col-md-3 mx-auto">電気・ガス業</a>
        </div>
        <div class="row">
            <a href="{{ action('Admin\DividendController@category', ['dividend_category' => "陸運業"]) }}" class="btn btn-outline-dark col-md-3 mx-auto">陸運業</a>
            <a href="{{ action('Admin\DividendController@category', ['dividend_category' => "海運業"]) }}" class="btn btn-outline-dark col-md-3 mx-auto">海運業</a>
            <a href="{{ action('Admin\DividendController@category', ['dividend_category' => "空運業"]) }}" class="btn btn-outline-dark col-md-3 mx-auto">空運業</a>
            <a href="{{ action('Admin\DividendController@category', ['dividend_category' => "倉庫・運輸関連業"]) }}" class="btn btn-outline-dark col-md-3 mx-auto">倉庫・運輸関連業</a>
        </div>
        <div class="row">
            <a href="{{ action('Admin\DividendController@category', ['dividend_category' => "情報・通信業"]) }}" class="btn btn-outline-dark col-md-3 mx-auto">情報・通信業</a>
            <a href="{{ action('Admin\DividendController@category', ['dividend_category' => "卸売業"]) }}" class="btn btn-outline-dark col-md-3 mx-auto">卸売業</a>
            <a href="{{ action('Admin\DividendController@category', ['dividend_category' => "小売業"]) }}" class="btn btn-outline-dark col-md-3 mx-auto">小売業</a>
            <a href="{{ action('Admin\DividendController@category', ['dividend_category' => "銀行業"]) }}" class="btn btn-outline-dark col-md-3 mx-auto">銀行業</a>
        </div>
        <div class="row">
            <a href="{{ action('Admin\DividendController@category', ['dividend_category' => "証券・商品先物取引業"]) }}" class="btn btn-outline-dark col-md-3 mx-auto">証券・商品先物取引業</a>
            <a href="{{ action('Admin\DividendController@category', ['dividend_category' => "保険業"]) }}" class="btn btn-outline-dark col-md-3 mx-auto">保険業</a>
            <a href="{{ action('Admin\DividendController@category', ['dividend_category' => "その他金融業"]) }}" class="btn btn-outline-dark col-md-3 mx-auto">その他金融業</a>
            <a href="{{ action('Admin\DividendController@category', ['dividend_category' => "不動産業"]) }}" class="btn btn-outline-dark col-md-3 mx-auto">不動産業</a>
        </div>
        <div class="row">
            <a href="{{ action('Admin\DividendController@category', ['dividend_category' => "サービス業"]) }}"　class="btn btn-outline-dark col-md-4 mx-auto">サービス業</a>
            <a href="{{ action('Admin\DividendController@category', ['dividend_category' => "REIT"]) }}"　class="btn btn-outline-dark col-md-4 mx-auto">REIT</a>
            <a href="{{ action('Admin\DividendController@category', ['dividend_category' => "その他"]) }}"　class="btn btn-outline-dark col-md-4 mx-auto">その他</a>
        </div>
        <div class="row">
            <div class="col-md-2 mx-auto">
                <h2>新着投稿</h2>
            </div>
        </div>
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
                            @foreach($posts as $dividend)
                                <tr>
                                    <th><a href="{{ action('Admin\DividendController@show', ['id' => $dividend->id]) }}">{{ $dividend->company }}</a></th>
                                    <td>{{ \Str::limit($dividend->Industry, 100) }}</td>
                                    <td>{{ \Str::limit($dividend->detail, 250) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <table class = "table">
                        <thead>
                            <tr>
                                <td>@sortablelink('company', '会社名')
                                <td>@sortablelink('Industry', '業種')
                                <td>@sortablelink('detail', '詳細')
                            </tr>
                        </thead>
                            @foreach($posts as $dividend)
                        <tbody>
                            <tr>
                                <td>{{ $dividend->company }}
                                <td>{{ $dividend->Industry }}
                                <td>{{ $dividend->detail }}
                            </tr>
                        </tbody>
                            @endforeach
                    </table>
                    {{ $posts->appends(request()->query())->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection