@extends('app')

@section('title', 'メール更新')

@include('nav')

@section('content')
    <div class="container">
        <div class="row">
            <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
                <div class="card mt-3">
                    <div class="card-body pt-0">
                        @include('error_card_list')
                        <div class="card-text">
                            <form method="POST" action="{{ route('articles.update', ['article' => $article]) }}">
                                @method('PATCH')
                                @include('articles.form')
                                <button type="submit" class="btn btn-block purple-gradient">更新する</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
