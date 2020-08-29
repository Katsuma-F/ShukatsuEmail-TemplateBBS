@extends('app')

@section('title', 'メール詳細')

@section('content')
    @include('nav')
    <div class="container">
        @include('articles.card')
    </div>
@endsection
