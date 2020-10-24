@extends('layouts.admin')

{{-- admin.blade.phpの@yield('title')に'新規投稿を行う'を埋め込む --}}
@section('title', '配当金情報サイト')

@section('content')
    <div class="container">
        <div class="form-group row">
            <label for="company" class="col-md-3 col-form-label text-md-right">会社名・銘柄コード</label>
            <div class="col-md-6 mx-left">
                <input type="text" name="company" size="50" class="form-control" value="{{ $dividend_form->company }}" readonly>
            </div>
        </div>
        
        <div class="form-group row">
            <label for="Industry" class="col-md-3 col-form-label text-md-right">業種</label>
            <div class="col-md-9 mx-auto">
                <input type="text" name="Industry"  class="form-control" value="{{ $dividend_form->Industry }}" readonly>
            </div>
        </div>
        
        <div class="form-group row">
            <label for="detail" class="col-md-3 col-form-label text-md-right">詳細内容</label>
            <div class="col-md-9 mx-auto">
                <textarea name="detail" class="form-control" readonly rows="10">{{ $dividend_form->detail }}</textarea>
            </div>
        </div>
    </div>
@endsection