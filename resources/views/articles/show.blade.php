@extends('app')

@section('title', 'テンプレ詳細')

@section('content')
    @include('nav')
    <div class="container">
        @include('articles.card')
    </div>
@endsection
