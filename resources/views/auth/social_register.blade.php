@extends('app')

@section('title', '新規ユーザー登録')

@section('content')
    <div class="container">
        <div class="row">
            <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
                <div class="card mt-3">
                    <div class="card-body text-center">
                        <a href="/">
                            <img src="{{ asset('image/sozai_cman_jp_20200823205504.png') }}" class="mt-4" alt="メインロゴ" style="width: 10%; height: 10%;">
                            <h4 class="text-dark text-center mt-5">就活メール・テンプレ掲示板に登録する</h4>
                        </a>
                        @include('error_card_list')
                        <div class="card-text">
                            <form method="POST" action="{{ route('register.{provider}', ['provider' => $provider]) }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="md-form">
                                    <label for="name">ユーザー名</label>
                                    <input class="form-control" type="text" id="name" name="name" required>
                                    <small>英数字3〜16文字&nbsp;※登録後の変更はできません</small>
                                </div>
                                <div class="md-form">
                                    <label for="email">メールアドレス</label>
                                    <input class="form-control" type="text" id="email" name="email" value="{{ $email }}" disabled>
                                </div>
                                <button class="btn btn-block purple-gradient mt-2 mb-2" type="submit">ユーザー情報を登録する</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
