{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'新規投稿を行う'を埋め込む --}}
@section('title', '新規投稿を行う')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <h3>新規投稿</h3>
                <form action="{{ action('Admin\DividendController@create') }}" method="post" enctype="multipart/form-data">
                    
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mx-auto">
             <label for="company">会社名・銘柄コード</label>
             <input type="text" name="company" size="60" placeholder="日本取引所グループ(2602)">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <label for="industry">業種</label>
                <select required>
                    <option value="hidden"></option>
                    <option value="1">水産・農林業</option>
                    <option value="2">鉱業</option>
                    <option value="3">建設業</option>
                    <option value="4">食料品</option>
                    <option value="5">繊維製品</option>
                    <option value="6">パルプ・紙</option>
                    <option value="7">化学</option>
                    <option value="8">医薬品</option>
                    <option value="9">石油・石炭製品</option>
                    <option value="10">ゴム製品</option>
                    <option value="11">ガラス・土石製品</option>
                    <option value="12">鉄鋼</option>
                    <option value="13">非鉄金属</option>
                    <option value="14">金属製品</option>
                    <option value="15">機械</option>
                    <option value="16">電気機器</option>
                    <option value="17">輸送用機器</option>
                    <option value="18">精密機器</option>
                    <option value="19">その他製品</option>
                    <option value="20">電気・ガス業</option>
                    <option value="21">陸運業</option>
                    <option value="22">海運業</option>
                    <option value="23">空運業</option>
                    <option value="24">倉庫・運輸関連業</option>
                    <option value="25">情報・通信業</option>
                    <option value="26">卸売業</option>
                    <option value="27">小売業</option>
                    <option value="28">銀行業</option>
                    <option value="29">証券、商品先物取引業</option>
                    <option value="30">保険業</option>
                    <option value="31">その他金融業</option>
                    <option value="32">不動産業</option>
                    <option value="33">サービス業</option>
                    <option value="34">REIT</option>
                    <option value="35">その他</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <label for="detail">詳細内容</label>
                <textarea id="detail" name="detail" cols="70" rows="10"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <label for="image">画像</label>
                <input type="file" class="form-control-file" name="image">
            </div>
        </div>
        <div class="button_create">
            <button type="button" onclick="location.href='https://ea3a1b2f21e346fcaa528e68fb471371.vfs.cloud9.us-east-2.amazonaws.com/admin/dividend/complete'">投稿</button>
            
        </div>
    </div>
@endsection