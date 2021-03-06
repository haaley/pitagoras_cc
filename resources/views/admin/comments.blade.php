@extends('admin.layouts.app')
@section('title','Comentários')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="widget widget-default">
                <div class="widget-header">
                    <h6><i class="fa fa-comments fa-fw"></i>Comentários</h6>
                </div>
                <div class="widget-body">
                    @if($comments->isEmpty())
                        <h3 class="center-block meta-item">Sem comentários</h3>
                    @else
                        <table class="table table-striped table-hover table-bordered table-responsive">
                            <thead>
                            <tr>
                                <th>Usuário</th>
                                <th>Email</th>
                                <th>Endereço</th>
                                <th>conteúdo</th>
                                <th>IP</th>
                                <th>Operação</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($comments as $comment)

                                <?php $commentableData = $comment->getCommentableData();?>

                                <tr class="{{ $comment->trashed() ? 'danger':'' }}">
                                    <td>
                                        @if($comment->user_id)
                                            <a href="{{ route('user.show',$comment->username) }}">{{ $comment->username }}</a>
                                        @else
                                            {{ $comment->username }}
                                        @endif
                                    </td>
                                    <td><a href="mailto:{{ $comment->email }}">{{ $comment->email }}</a></td>
                                    <td>
                                        @if($commentableData['deleted'])
                                            {{ $commentableData['type'] }} Deleted
                                        @else
                                            @if($comment->trashed())
                                                {{ $commentableData['title'] }}
                                            @else
                                                <a target="_blank"
                                                   href="{{ $commentableData['url'] }}">{{$commentableData['title'] }}
                                                </a>
                                            @endif
                                        @endif
                                    </td>
                                    <td data-toggle="tooltip" data-placement="top"
                                        title="{{ $comment->content }}">{!! $comment->html_content !!}</td>
                                    <td>{{ $comment->ip_id?$comment->ip_id:'NONE' }}</td>
                                    <td>
                                        @if($comment->trashed())
                                            <button type="submit"
                                                    class="btn btn-danger swal-dialog-target"
                                                    data-dialog-msg="Eliminar definitivamente este comentário？"
                                                    data-url="{{ route('comment.destroy',[$comment->id,'force'=>'true']) }}"
                                                    data-method="delete"
                                                    data-placement="top"
                                                    title="Excluir permanentemente">
                                                <i class="fa fa-trash-o fa-fw"></i>
                                            </button>
                                            <form style="display: inline-block" method="post"
                                                  action="{{ route('comment.restore',$comment->id) }}">
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-primary"
                                                        data-toggle="tooltip" data-placement="top" title="Enviar">
                                                    <i class="fa fa-repeat fa-fw"></i>
                                                </button>
                                            </form>

                                        @else
                                            <button type="submit"
                                                    class="btn btn-danger swal-dialog-target"
                                                    data-dialog-msg="Excluir este comentário？"
                                                    data-url="{{ route('comment.destroy',$comment->id) }}"
                                                    title="Apagar">
                                                <i class="fa fa-trash-o fa-fw"></i>
                                            </button>
                                            <a class="btn btn-info"
                                               href="{{ route('comment.edit',[$comment->id,'redirect'=>request()->fullUrl()]) }}">
                                                <i class="fa fa-pencil fa-fw"></i>
                                            </a>
                                        @endif
                                        <?php $ip = $comment->ip ?>
                                        @if($ip == null)
                                            <button disabled
                                                    class="btn btn-default"
                                                    title="NO IP">
                                                <i class="fa fa-close fa-fw"></i>
                                            </button>
                                        @else
                                            @include('admin.partials.ip_button',['ip'=>$ip])
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @if($comments->lastPage() > 1)
                            {{ $comments->links() }}
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
