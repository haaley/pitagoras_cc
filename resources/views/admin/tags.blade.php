@extends('admin.layouts.app')
@section('title','Etiqueta')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="widget widget-default">
                <div class="widget-header">
                    <h6><i class="fa fa-tags fa-fw"></i>Etiqueta</h6>
                </div>
                <div class="widget-body">
                    <a class="btn pull-right" role="button" data-toggle="modal" data-target="#add-tag-modal">
                        <i class="fa fa-tag"></i>
                    </a>
                    <table class="table table-striped table-hover table-bordered table-responsive" style="overflow: auto">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Artigo</th>
                            <th>Operação</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tags as $tag)
                            <tr>
                                <td>{{ $tag->name }}</td>
                                <td>{{ $tag->posts_count }}</td>
                                <td>
                                    <button type="submit"
                                            class="btn btn-danger swal-dialog-target"
                                            data-dialog-msg="Realmente Excluir{{ $tag->name }}？"
                                            data-url="{{ route('tag.destroy',$tag->id) }}"
                                            title="Apagar">
                                        <i class="fa fa-trash-o fa-fw"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('admin.modals.add-tag-modal')
@endsection
