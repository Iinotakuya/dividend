{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')

{{-- admin.blade.phpの@yield('title')に'新規投稿を行う'を埋め込む --}}
@section('title', '配当金情報サイト')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <h2 style="text-align:center">投稿内容一覧</h2>
        
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
                    {{-- ページネーション --}}
                    {{ $posts->appends(request()->query())->links() }}
                </div>
            </div>
        </div>
    </div>
    
    
    
@endsection