@extends('app')

@section('title', '記事一覧')

@section('content')
    @include('nav')
    <div class="container">
        @foreach ($articles as $article)
            <div class="card mt-3">
                <div class="card-body pt-0 pb-2">
                    <h4 class="h5 email-title mt-4">
                        メールの件名：
                        {{ $article->title }}
                    </h4>
                    <div style="padding: 10px; margin-bottom: 10px; border: 1px dashed #333333; border-radius: 5px;">
                        {!! nl2br(e($article->body)) !!}
                    </div>
                </div>
                <div class="card-body d-flex flex-row">
                    <i class="fas fa-user-circle fa-3x mr-1"></i>
                    <div>
                        <div class="font-weight-bold">
                            {{ $article->user->name }}
                        </div>
                        <div class="font-weight-lighter">
                            {{ $article->created_at->format('Y/m/d H:i') }}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection