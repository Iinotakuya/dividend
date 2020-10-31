<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
         {{-- 後の章で説明します --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}
        <title>@yield('title')</title>

        <!-- Scripts -->
         {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
        <script src="{{ secure_asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        {{-- この章の後半で作成するCSSを読み込みます --}}
        <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            {{-- 画面上部に表示するナビゲーションバーです。 --}}
            <div class="white">
                <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                    <div class="container">
                        {{-- <a class="navbar-brand" href="{{ url('/') }}"> --}}
                        {{--    {{ config('app.name', 'Laravel') }} --}}
                        {{--</a> --}}
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
    
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">
    
                            </ul>
    
                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                {{-- ログインしていなかったらログイン画面へのリンクを表示 --}}
                            @guest
                                <a style="display:inline-block;margin-right:20px" href="{{ route('register') }}">ユーザー登録(無料)</a>
                                <a style="display:inline-block;margin-right:20px" href="{{ route('login') }}">{{ __('ログイン') }}</a>
                                <a href="{{ route('create') }}">投稿画面</a>
                            {{-- ログインしていたらユーザー名とログアウトボタンを表示 --}}
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('mypage', auth()->user()->id) }}">
                                            {{ __('マイページ') }}
                                        </a>
                                        
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('ログアウト') }}
                                        </a>
                                        
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                        
                                        <a class="dropdown-item" href="{{ route('create') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('create-form').submit();">
                                            {{ __('新規投稿') }}
                                        </a>
    
                                        <form id="create-form" action="{{ route('create') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            
                            @endguest
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            {{-- ここまでナビゲーションバー --}}
            <div class="container">
                <div class="row">
                    <div class= "col-md-12 text-right">
                        <a href="{{ route('create') }}">投稿画面</a>
                    </div>
                    <div class="col-md-12 text-center">
                        <a style="font-size:2rem" href="{{ route('TOP') }}">配当金・優待情報サイト</a>
                    </div>
                </div>
        
            <main class="py-4">
                {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
                @yield('content')
            </main>
        </div>
    </body>
</html>