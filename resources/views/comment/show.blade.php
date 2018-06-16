@forelse($comments as $comment)
    <div class="comment">
        <div class="pull-left">
            <?php
            if ($comment->user_id) {
                $href = route('user.show', $comment->username);
            } else {
                $href = $comment->site ? httpUrl($comment->site) : 'javascript:void(0);';
            }
            $imgSrc = $comment->user ? $comment->user->avatar : config('app.avatar');
            $imgSrc = processImageViewUrl($imgSrc, 40, 40);
            ?>
            <a name="comment{{ $loop->index + 1 }}" href="{{ $href }}">
                <img width="40px" height="40px" class="img-circle"
                     src="{{ $imgSrc }}">
            </a>
        </div>
        <div class="comment-info">
            <div class="comment-head">
                <span class="name">
                    <a href="{{ $href }}">{{ $comment->username }}</a>
                    @if(isAdminById($comment->user_id))
                        <label class="role-label">Administrador</label>
                    @endif
                </span>
                <span class="comment-operation pull-right">
                    <a href="#comment{{ $loop->index + 1 }}"
                       style="color: #ccc;font-size: 12px">#{{ $loop->index	+ 1 }}</a>
            </span>
            </div>
            <div class="comment-time">
                <span>{{ $comment->created_at->format('Y-m-d H:i') }}</span>
            </div>
            <div class="comment-content">
                {!! $comment->html_content !!}
            </div>
            <div class="comment-operation">
                @can('manager',$comment)
                    <a class="comment-operation-item swal-dialog-target"
                       title="Excluir"
                       href="javascript:void (0)"
                       data-dialog-msg="Excluir este comentário？"
                       data-url="{{ route('comment.destroy',$comment->id) }}">
                        Excluir
                    </a>
                    <a class="comment-operation-item"
                       title="Editar"
                       href="{{ route('comment.edit',[$comment->id,'redirect'=>(isset($redirect) && $redirect.'#'.$loop->index ? $redirect : '')]) }}">
                        Editar
                    </a>
                @endcan
                <a class="comment-operation-item"
                   title="Responder"
                   href="javascript:void (0);"
                   onclick="replySomeone('{{ $comment->username }}')">
                    Responder
                </a>
            </div>
        </div>
    </div>
@empty
    <p class="meta-item center-block" style="padding:10px">Sem comentários</p>
@endforelse
