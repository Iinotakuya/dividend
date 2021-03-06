{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'新規投稿を行う'を埋め込む --}}
@section('title', '新規投稿')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h3>新規投稿</h3>
                <form action="{{ action('Admin\DividendController@create') }}" method="post" enctype="multipart/form-data">
                    
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
                        <input type="text" name="company" size="50" placeholder="日本取引所グループ(2602)">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="Industry" class="col-md-3 col-form-label text-md-right">業種</label>
                        <div class="col-md-9 mx-auto">
                        <select required  name="Industry">
                            <option value="hidden"></option>
                            <option value="水産・農林業">水産・農林業</option>
                            <option value="鉱業">鉱業</option>
                            <option value="建設業">建設業</option>
                            <option value="食料品">食料品</option>
                            <option value="繊維製品">繊維製品</option>
                            <option value="パルプ・紙">パルプ・紙</option>
                            <option value="化学">化学</option>
                            <option value="医薬品">医薬品</option>
                            <option value="石油・石炭製品">石油・石炭製品</option>
                            <option value="ゴム製品">ゴム製品</option>
                            <option value="ガラス・土石製品">ガラス・土石製品</option>
                            <option value="鉄鋼">鉄鋼</option>
                            <option value="非鉄金属">非鉄金属</option>
                            <option value="金属製品">金属製品</option>
                            <option value="機械">機械</option>
                            <option value="電気機器">電気機器</option>
                            <option value="輸送用機器">輸送用機器</option>
                            <option value="精密機器">精密機器</option>
                            <option value="その他製品">その他製品</option>
                            <option value="電気・ガス業">電気・ガス業</option>
                            <option value="陸運業">陸運業</option>
                            <option value="海運業">海運業</option>
                            <option value="空運業">空運業</option>
                            <option value="倉庫・運輸関連業">倉庫・運輸関連業</option>
                            <option value="情報・通信業">情報・通信業</option>
                            <option value="卸売業">卸売業</option>
                            <option value="小売業">小売業</option>
                            <option value="銀行業">銀行業</option>
                            <option value="証券、商品先物取引業">証券、商品先物取引業</option>
                            <option value="保険業">保険業</option>
                            <option value="その他金融業">その他金融業</option>
                            <option value="不動産業">不動産業</option>
                            <option value="サービス業">サービス業</option>
                            <option value="REIT">REIT</option>
                            <option value="その他">その他</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="detail" class="col-md-3 col-form-label text-md-right">詳細内容</label>
                    <div class="col-md-9 mx-auto">
                        <textarea name="detail" cols="50" rows="10"></textarea>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="image" class="col-md-3 col-form-label text-md-right">画像</label>
                    <div class="col-md-9 mx-auto">
                        <input type="file" class="form-control-file" name="image">
                    </div>
                </div>
                
                <div class="text-center">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-primary mb-2">投稿完了</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection