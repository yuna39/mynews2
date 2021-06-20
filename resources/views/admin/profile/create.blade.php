<!--layouts/profile.blade.phpを読み込む-->

@extends('layouts.profile')

<!--titleに以下のタグを埋め込む-->
@section('title', 'Myプロフィール作成画面')

<!--contentに以下のタグを埋め込む-->
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Myプロフィール作成画面</h2>
                <form action="{{ action('Admin\Profilecontroller@create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                    <!--氏名-->
                    <div class="form-group row">
                        <label class="col-md-3">氏名</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    
                    <!--性別-->
                     <div class="form-group row">
                        <label class="col-md-3">性別</label>
                        <div class="col-md-9">
                            <input type="radio" name="性別" value="男" /> 男　
                            <input type="radio" name="性別" value="女" /> 女　
                            <input type="radio" name="性別" value="選択なし" /> 選択なし　
                        </div>
                    </div>
                    
                    
                    
                    <!--趣味-->
                     <div class="form-group row">
                        <label class="col-md-3">趣味</label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="hobby" rows="10">{{ old('hobby') }}</textarea>
                        </div>
                    </div>
                    
                    <!--自己紹介-->
                     <div class="form-group row">
                        <label class="col-md-3">自己紹介</label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="introduction" rows="10">{{ old('introduction') }}</textarea>
                        </div>
                    </div>
                    
                    <!--csrf-->
                    {{ csrf_field() }}
                    
                    <!--更新ボタン-->
                    <input type="submit" class="byn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection