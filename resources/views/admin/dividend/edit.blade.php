{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')

{{-- admin.blade.phpの@yield('title')に'新規投稿を行う'を埋め込む --}}
@section('title', '投稿編集')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <h3>投稿編集</h3>
                <form action="{{ action('Admin\DividendController@update') }}" method="post" enctype="multipart/form-data">
                    
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif

                <div class="form-group row">
                    <label for="company" class="col-md-3 col-form-label text-md-right">会社名・銘柄コード</label>
                    <div class="col-md-9 mx-auto">
                        <input type="text" name="company" size="50" value="{{ $dividend_form->company }}">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="Industry" class="col-md-3 col-form-label text-md-right">業種</label>
                        <div class="col-md-9 mx-auto">
                        <select required  name="Industry">
                            <option value="hidden"></option>
                            <option value="水産・農林業" {{ $dividend_form-> Industry == '水産・農林業' ? 'selected' : '' }} >水産・農林業</option>
                            <option value="鉱業" {{ $dividend_form-> Industry == '鉱業' ? 'selected' : '' }} >鉱業</option>
                            <option value="建設業" {{ $dividend_form-> Industry == '建設業' ? 'selected' : '' }} >建設業</option>
                            <option value="食料品" {{ $dividend_form-> Industry == '食料品' ? 'selected' : '' }} >食料品</option>
                            <option value="繊維製品" {{ $dividend_form-> Industry == '繊維製品' ? 'selected' : '' }} >繊維製品</option>
                            <option value="パルプ・紙" {{ $dividend_form-> Industry == 'パルプ・紙' ? 'selected' : '' }} >パルプ・紙</option>
                            <option value="化学" {{ $dividend_form-> Industry == '化学' ? 'selected' : '' }} >化学</option>
                            <option value="医薬品" {{ $dividend_form-> Industry == '医薬品' ? 'selected' : '' }} >医薬品</option>
                            <option value="石油・石炭製品" {{ $dividend_form-> Industry == '石油・石炭製品' ? 'selected' : '' }} >石油・石炭製品</option>
                            <option value="ゴム製品" {{ $dividend_form-> Industry == 'ゴム製品' ? 'selected' : '' }} >ゴム製品</option>
                            <option value="ガラス・土石製品" {{ $dividend_form-> Industry == 'ガラス・土石製品' ? 'selected' : '' }} >ガラス・土石製品</option>
                            <option value="鉄鋼" {{ $dividend_form-> Industry == '鉄鋼' ? 'selected' : '' }} >鉄鋼</option>
                            <option value="非鉄金属" {{ $dividend_form-> Industry == '非鉄金属' ? 'selected' : '' }} >非鉄金属</option>
                            <option value="金属製品" {{ $dividend_form-> Industry == '金属製品' ? 'selected' : '' }} >金属製品</option>
                            <option value="機械" {{ $dividend_form-> Industry == '機械' ? 'selected' : '' }} >機械</option>
                            <option value="電気機器" {{ $dividend_form-> Industry == '電気機器' ? 'selected' : '' }} >電気機器</option>
                            <option value="輸送用機器" {{ $dividend_form-> Industry == '輸送用機器' ? 'selected' : '' }} >輸送用機器</option>
                            <option value="精密機器" {{ $dividend_form-> Industry == '精密機器' ? 'selected' : '' }} >精密機器</option>
                            <option value="その他製品" {{ $dividend_form-> Industry == 'その他製品' ? 'selected' : '' }} >その他製品</option>
                            <option value="電気・ガス業" {{ $dividend_form-> Industry == '電気・ガス業' ? 'selected' : '' }} >電気・ガス業</option>
                            <option value="陸運業" {{ $dividend_form-> Industry == '陸運業' ? 'selected' : '' }} >陸運業</option>
                            <option value="海運業" {{ $dividend_form-> Industry == '海運業' ? 'selected' : '' }} >海運業</option>
                            <option value="空運業" {{ $dividend_form-> Industry == '空運業' ? 'selected' : '' }} >空運業</option>
                            <option value="倉庫・運輸関連業" {{ $dividend_form-> Industry == '倉庫・運輸関連業' ? 'selected' : '' }} >倉庫・運輸関連業</option>
                            <option value="情報・通信業" {{ $dividend_form-> Industry == '情報・通信業' ? 'selected' : '' }} >情報・通信業</option>
                            <option value="卸売業" {{ $dividend_form-> Industry == '卸売業' ? 'selected' : '' }} >卸売業</option>
                            <option value="小売業" {{ $dividend_form-> Industry == '小売業' ? 'selected' : '' }} >小売業</option>
                            <option value="銀行業" {{ $dividend_form-> Industry == '銀行業' ? 'selected' : '' }} >銀行業</option>
                            <option value="証券、商品先物取引業" {{ $dividend_form-> Industry == '証券、商品先物取引業' ? 'selected' : '' }} >証券、商品先物取引業</option>
                            <option value="保険業" {{ $dividend_form-> Industry == '保険業' ? 'selected' : '' }} >保険業</option>
                            <option value="その他金融業" {{ $dividend_form-> Industry == 'その他金融業' ? 'selected' : '' }} >その他金融業</option>
                            <option value="サービス業" {{ $dividend_form-> Industry == 'サービス業' ? 'selected' : '' }} >サービス業</option>
                            <option value="REIT" {{ $dividend_form-> Industry == 'REIT' ? 'selected' : '' }} >REIT</option>
                            <option value="その他" {{ $dividend_form-> Industry == 'その他' ? 'selected' : '' }} >その他</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="detail" class="col-md-3 col-form-label text-md-right">詳細内容</label>
                    <div class="col-md-9 mx-auto">
                        <textarea name="detail" cols="50" rows="10">{{ $dividend_form->detail }}</textarea>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="image" class="col-md-3 col-form-label text-md-right">画像</label>
                    <div class="col-md-9 mx-auto">
                        <input type="file" class="form-control-file" name="image">
                        <div class="form-text text-info">
                            @if ($dividend_form->image_path)
                            <img src="{{ asset('storage/image/' . $dividend_form->image_path) }}">
                            @endif
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="remove" value="true">画像削除
                            </label>
                        </div>
                    </div>
                </div>
                
                <div class="text-center">
                    <input type="hidden" name="id" value="{{ $dividend_form->id }}">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-primary mb-2">編集完了</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection