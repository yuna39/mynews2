@extends('layouts.profile')
@section('titlle', '登録済みプロフィールの一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>プロフィール一覧</h2>
        </div>
        
        <!--上部の新規作成の欄-->
        <div class="row">
            <!--新規作成のボタン-->
            <div class="col-md-4">
                <a href="{{ action('Admin\Profilecontroller@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\Profilecontroller@index') }}" method="get">
                    <div class="form-group row">
                        
                        <!--タイトルの文字-->
                        <label class="col-md-3">タイトル</label>
                        
                        <!--検索欄-->
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        
                        <!--検索ボタン-->
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="row">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th width="10%">ID</th>
                        <th width="40%">名前</th>
                        <!--<th width="20%">性別</th>-->
                        <!--<th width="20%">趣味</th>-->
                        <!--<th width="20%">自己紹介</th>-->
                    </tr>
                </thead>
                
                <tbody>
                    @foreach($posts as $profile)
                        <tr>
                            <th>{{ $profile->id }}</th>
                            <td>{{ \Str::limit($profile->name, 100) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection