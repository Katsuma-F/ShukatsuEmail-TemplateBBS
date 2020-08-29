@extends('app')

@section('title', $user->name)

@section('content')
    @include('nav')
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <a href="{{ route('users.show', ['name' => $user->name]) }}" class="text-dark">
                        <i class="fas fa-user-circle fa-3x"></i>
                    </a>
                </div>
                <h2 class="h5 card-title m-0">
                    <a href="{{ route('users.show', ['name' => $user->name]) }}" class="text-dark">
                        {{ $user->name }}
                    </a>
                </h2>
            </div>
        </div>
        <ul class="nav nav-tabs nav-justified mt-3">
            <li class="nav-item">
                <a class="nav-link text-muted active" href="{{ route('users.show', ['name' => $user->name]) }}">
                    テンプレ
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-muted" href="">
                    お気に入りテンプレ
                </a>
            </li>
        </ul>
        @foreach($articles as $article)
            @include('articles.card')
        @endforeach
    </div>
@endsection
