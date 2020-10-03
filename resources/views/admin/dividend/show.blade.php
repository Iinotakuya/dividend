@extends('layouts.admin')

{{-- admin.blade.phpの@yield('title')に'新規投稿を行う'を埋め込む --}}
@section('title', '配当金情報サイト')

@section('content')
    <div class="container">
        <div class="row">
            <label class="col-md-2" for="company">会社名・銘柄コード</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="company" value="{{ $dividend_form->company }}" readonly>
            </div>
        </div>
        <div class="row">
            <label class="col-md-2" for="Industry">業種</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="Industry" value="{{ $dividend_form->Industry }}" readonly>
            </div>
        </div>
        <div class="row">
            <label class="col-md-2" for="detail">詳細内容</label>
            <div class="col-md-10">
                <textarea class="form-control" name="detail" readonly rows="20">{{ $dividend_form->detail }}</textarea>
            </div>
        </div>
    </div>
@endsection