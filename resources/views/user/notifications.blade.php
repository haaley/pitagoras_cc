@extends('layouts.app')
@section('title','Usuário · Notificações')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="widget widget-default">
                    <div class="widget-header">
                        <h6><i class="fa fa-comments fa-fw"></i>
                            Notificações
                            @if($notifications->isNotEmpty())
                                <a class="btn btn-info" role="button" style="display: inline;margin-left: 20px"
                                   href="{{ route('user.readNotification',"all") }}">
                                    Marcar todas como lidas
                                </a>
                            @endif
                        </h6>
                    </div>
                    <div class="widget-body">
                        @if($notifications->isEmpty())
                            <h3 class="center-block meta-item">Sem novas notificações</h3>
                        @else
                            <table class="table table-striped table-hover table-bordered table-responsive">
                                <thead>
                                <tr>
                                    <th>Usuário</th>
                                    <th>Email</th>
                                    <th>Tipo</th>
                                    <th>Conteúdo</th>
                                    <th>IP</th>
                                    <th>Operação</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($notifications as $notification)
                                    @if($notification->data)
                                        <?php $notificationData = $notification->data?>
                                        <tr class="">
                                            <td>
                                                @if($notificationData['user_id'])
                                                    <a href="{{ route('user.show',$notificationData['username']) }}">{{ $notificationData['username'] }}</a>
                                                @else
                                                    {{ $notificationData['username'] }}
                                                @endif
                                            </td>
                                            <td>
                                                <a href="mailto:{{ $notificationData['email'] }}">{{ $notificationData['email'] }}</a>
                                            </td>
                                            <td>
                                                @if("App\\Notifications\\ReceivedComment" == $notification->type)
                                                    Revisão
                                                @elseif("App\\Notifications\\MentionedInComment" == $notification->type)
                                                    Mencionados por você
                                                @elseif("App\\Notifications\\BaseNotification" == $notification->type)
                                                    Notificação base
                                                @endif
                                            </td>
                                            <td data-toggle="tooltip" data-placement="top"
                                                title="{{ $notificationData['content'] }}">{!! $notificationData['content'] !!}</td>
                                            <td>{{ $notificationData['ip_id']?$notificationData['ip_id']:'NONE' }}</td>
                                            <td>
                                                <a class="btn btn-info"
                                                   href="{{ route('user.readNotification',$notification->id) }}">
                                                    Marcar como lida
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
