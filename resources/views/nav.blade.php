<nav class="navbar navbar-expand navbar-dark indigo">
    <a class="navbar-brand" href="/">
        <div class="app-name" style="font-size: 10%;">就活メール・<br>テンプレ掲示板</div>
    </a>
    <ul class="navbar-nav ml-auto">
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">ログイン</a>
            </li>
        @endguest
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">新規ユーザー登録</a>
            </li>
        @endguest
        @auth
            <li class="nav-item">
                <a class="nav-link" href="{{ route('articles.create') }}"><i class="far fa-edit mr-1"></i>メールテンプレを投稿</a>
            </li>
        @endauth
        @auth
            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <button class="dropdown-item" type="button" onclick="location.href='{{ route("users.show", ["name" => Auth::user()->name]) }}'">
                        マイページ
                    </button>
                    <div class="dropdown-divider"></div>
                    <button form="logout-button" class="dropdown-item" type="submit">
                        ログアウト
                    </button>
                </div>
            </li>
            <form id="logout-button" method="POST" action="{{ route('logout') }}">
                @csrf
            </form>
            <!-- Dropdown -->
        @endauth
    </ul>
</nav>