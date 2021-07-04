@section('layouts.admin')
@section('title', '登録済みのニュース一覧')

@section('content')
<div class="container">
    <div class="row">
        <h2>ニュース一覧</h2>
    </div>
    <div class="row">
        <div class="col-md-4">
            <a href="{{ action('Admin\NewsController@add') }}" role="buttom" class></a>
        </div>
    </div>
</div>