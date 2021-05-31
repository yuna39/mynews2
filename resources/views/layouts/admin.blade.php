<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{csrf_token() }}">
        
        <!-- 各ページごとにタイトルを入れるために＠yieldで開けておく-->
        <title>@yield('title')</title>
        
        <!-- 用意されているJavascriptを読み込む-->
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        
        <!--Fonts-->
        <link rel="dns-prefetch" href="https//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css? family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        
        
        <!--用意されているCSSを読み込みます-->
        <!--Styles-->
        <link href="{{ secure_asset('css/app.css' }}" rel="stylesheet">
        
        <!--この章の後半で作成するCSSを読み込みます-->
        <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
    </head>
    
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <buttton class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbaarSpportedContent" aria-controls="navbarAupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            
                        </ul>
                        
                        <ul class="navbar-nav ml-auto">
                            
                        </ul>
                    </div>
                </div>
            </nav>
            <!--ここまでナビゲーションバー-->
            
            
            <main class="py-4">
                <!--コンテンツを入れるために@yieldで開けておく-->
                @yield('content')
                
            </main>        
        </div>
    </body>
</html>