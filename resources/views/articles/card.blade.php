<div class="card mt-3">
    <div class="card-body pt-0 pb-2">
        <h4 class="h5 email-title mt-4">
            <a class="text-dark" href="{{ route('articles.show', ['article' => $article]) }}">
                メールの件名：
                {{ $article->title }}
            </a>
        </h4>
        <div style="padding: 10px; margin-bottom: 10px; border: 1px dashed #333333; border-radius: 5px;">
            {!! nl2br(e($article->body)) !!}
        </div>
    </div>

    <div class="card-body d-flex justify-content-end pt-0 pb-0 pr-4">
        <div class="card-text">
            <article-like
                :initial-is-favorited-by='@json($article->isFavoritedBy(Auth::user()))'
                :authorized='@json(Auth::check())'
                endpoint="{{ route('articles.favorite', ['article' => $article]) }}"
            >
            </article-like>
        </div>
    </div>

    <div class="card-body d-flex flex-row">
        <a href="{{ route('users.show', ['name' => $article->user->name]) }}" class="text-dark">
            <i class="fas fa-user-circle fa-3x mr-1"></i>
        </a>
        <div>
            <div class="font-weight-bold">
                <a href="{{ route('users.show', ['name' => $article->user->name]) }}" class="text-dark">
                    {{ $article->user->name }}
                </a>
            </div>
            <div class="font-weight-lighter">
                {{ $article->created_at->format('Y/m/d H:i') }}
            </div>
        </div>

        @if( Auth::id() === $article->user_id )
            <!-- dropdown -->
            <div class="ml-auto card-text">
                <div class="dropdown">
                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <button type="button" class="btn btn-link text-muted m-0 p-2">
                        <i class="fas fa-ellipsis-v"></i>
                    </button>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{ route("articles.edit", ['article' => $article]) }}">
                        <i class="fas fa-pen mr-1"></i>メールテンプレを更新する
                    </a>
                    <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-{{ $article->id }}">
                            <i class="fas fa-trash-alt mr-1"></i>メールテンプレを削除する
                        </a>
                    </div>
                </div>
            </div>
            <!-- dropdown -->

            <!-- modal -->
            <div id="modal-delete-{{ $article->id }}" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="POST" action="{{ route('articles.destroy', ['article' => $article]) }}">
                            @csrf
                            @method('DELETE')
                            <div class="modal-body">
                                {{ $article->title }}を削除します。よろしいですか？
                            </div>
                            <div class="modal-footer justify-content-between">
                                <a class="btn btn-outline-grey" data-dismiss="modal">キャンセル</a>
                                <button type="submit" class="btn btn-danger">削除する</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- modal -->
        @endif

    </div>
</div>