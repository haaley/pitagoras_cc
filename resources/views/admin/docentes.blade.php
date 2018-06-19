@extends('admin.layouts.app')
@section('title','Docentes')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="widget widget-default">
                <div class="widget-header">
                    <h6><i class="fa fa-folder fa-fw"></i>Docentes</h6>
                </div>
                <div class="widget-body">
                    <a class="btn pull-right" role="button" data-toggle="modal" data-target="#add-docente-modal">
                        <i class="fa fa-folder-o"></i>
                    </a>
                    <table class="table table-hover table-striped table-bordered table-responsive" style="overflow: auto">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Data</th>
                            <th>Artigo</th>
                            <th>Operação</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($docentes as $docente)
                            <tr>
                                <td>{{ $docente->name }}</td>
                                <td>{{ $docente->created_at->format('Y-m-d') }}</td>
                                <td>{{ $docente->posts_count }}</td>
                                <td>
                                    <div>
                                        <a href="{{ route('category.edit',$docente->id) }}" class="btn btn-info"
                                           data-toggle="tooltip" data-placement="top" title="editar">
                                            <i class="fa fa-pencil fa-fw"></i>
                                        </a>
                                        <button class="btn btn-danger swal-dialog-target"
                                                data-toggle="tooltip" data-placement="top" title="excluir"
                                                data-url="{{ route('category.destroy',$docente->id) }}"
                                                data-dialog-msg="excluir{{ $docente->name }}?">
                                            <i class="fa fa-trash-o fa-fw"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @include('admin.modals.add-docente-modal')
@endsection