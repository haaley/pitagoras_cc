@extends('admin.layouts.app')
@section('title','Artigos')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="widget widget-default">
                <div class="widget-header">
                    <h6><i class="fa fa-calendar fa-fw"></i> Notícia</h6>
                    <a href="{{route('admin.notice.create')}}" class="pull-right" style="margin-top: -26px;"><i
                                class="fa fa-plus fa-fw"></i> Criar nova Notícia</a>
                </div>
                <div class="widget-body">
                    <table class="table table-hover table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Ordem</th>
                            <th>Título</th>
                            <th>Estado</th>
                            <th>Previsão</th>
                            <th>Ação</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($notice as $n)
                            <?php $meta = unserialize(json_decode($n->getMeta('notice-meta'), 'JSON_PRETTY_PRINT')) ?>
                            <tr class="">
                                <td>{{  $n->id }}</td>
                                <td>{{ $meta['ordem'] }}</td>
                                <td title="{{$n->title}}"> {{$n->title}}</td>
                                <td> {{$n->status == 0 ? 'Esboço' : 'Aprovado' }}</td>

                                <td>{{ $meta['data'] }}</td>
                                <td>
                                    <div>
                                        <a href="{{route('admin.notice.edit', [$id = $n->id])}}"
                                           data-toggle="tooltip" data-placement="top" title="Editar"
                                           class="btn btn-info">
                                            <i class="fa fa-pencil fa-fw"></i>
                                        </a>


                                        <a href="{{route('admin.notice.show', $n->slug)}}"
                                           data-toggle="tooltip" data-placement="top" title="Visalizar"
                                           class="btn btn-success">
                                            <i class="fa fa-eye fa-fw"></i>
                                        </a>

                                        <button class="btn btn-danger swal-dialog-target"
                                                data-title="{{ $n->title }}"
                                                data-dialog-msg="Deseja realmente excluir? <label> </br> {{ $n->title }}</label>"
                                                title="Excluir"
                                                data-dialog-enable-html="1"
                                                data-url="{{ route('admin.notice.destroy',$n->id) }}"
                                                data-dialog-confirm-text="{{ $n->trashed()? ' Será permanenttemente excluído' : 'Excluir?' }}">
                                            <i class="fa fa-trash-o  fa-fw"></i>
                                        </button>

                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                    @if($notice->lastPage() > 1)
                        <div class="nicdark_section nicdark_height_60"></div>

                        {{ $notice->links() }}
                        <div class="nicdark_section nicdark_height_60"></div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

