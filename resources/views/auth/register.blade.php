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
                        <a href="{{ route('login.{provider}', ['provider' => 'google']) }}" class="btn btn-block btn-danger mt-5">
                            <i class="fab fa-google mr-1"></i>Googleアカウントで登録
                        </a>
                        <div class="card-text">
                            <div class="mt-5 mb-3">
                                アカウントを既にお持ちの方は&nbsp;<a href="{{ route('login') }}">こちら</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
