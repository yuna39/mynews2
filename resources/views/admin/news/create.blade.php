<!--layouts/admin.blade. phpを読み込む-->

@extends('layouts.admin')


<!--admin.blade.php（'title')にニュースの新規作成を埋め込む-->

@section('title', 'ニュースの新規作成')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>ニュース新規作成</h2>
                <form  action="{{ action('Admin\NewsController@create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                    <!--タイトル-->
                    <div class="form-group row">
                        <label class="col-md-3">タイトル</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    
                    <!--本文-->
                    <div class="form-group row">
                        <label class="col-md-3">本文</label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="body" rows="20">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    
                    <!--画像-->
                    <div class="form-group row">
                        <label class="col-md-3">画像</label>
                        <div class="col-md-9">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    
                    <!--認証済みユーザーと一致するか自動的にテェック-->
                    {{ csrf_field() }}
                    
                    <!--更新ボタン-->
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection
