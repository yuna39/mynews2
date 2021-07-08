@extends('latouts.admin')
@section('title', 'ニュースの編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>ニュース編集</h2>
                <form action="{{ action('Admin\NewsController@update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $E)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                </form>
            </div>
        </div>
    </div>