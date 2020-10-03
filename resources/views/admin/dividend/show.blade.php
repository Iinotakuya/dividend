@extends('layouts.admin')

{{-- admin.blade.phpの@yield('title')に'新規投稿を行う'を埋め込む --}}
@section('title', '配当金情報サイト')

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{ action('Admin\DividendController@show') }}" method="post" enctype="multipart/form-data">
            @if (count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            @endif
            <div class="form-group row">
                <label class="col-md-2" for="company">会社名・銘柄コード</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="company" value="{{ $dividends_form->company }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2" for="Industry">業種</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="Industry" value="{{ $dividends_form->Industry }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2" for="detail">詳細内容</label>
                <div class="col-md-10">
                    <textarea class="form-control" name="detail" rows="20">{{ $dividends_form->detail }}</textarea>
                </div>
            </div>
        </div>
    </div>
@endsection