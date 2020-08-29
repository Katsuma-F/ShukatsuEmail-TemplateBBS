<ul class="nav nav-tabs nav-justified mt-3">
    <li class="nav-item">
        <a class="nav-link text-muted active" href="{{ route('users.show', ['name' => $user->name]) }}">
            メールテンプレ
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-muted" href="{{ route('users.favorites', ['name' => $user->name]) }}">
            お気に入りメールテンプレ
        </a>
    </li>
</ul>