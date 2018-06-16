@extends('admin.layouts.app')
@section('title','Página')
@section('content')
    <!--Paginas Padrão-->
    <div class="row">
        <div class="col-md-12">
            <div class="widget widget-default">
                <div class="widget-header">
                    <h6><i class="fa fa-file fa-fw"></i> Página Padrão</h6>
                </div>
                <div class="widget-body">
                    </a>
                    @if($pageStandard->isEmpty())
                        <div class="center-block">Sem páginas padrão</div>
                    @else
                        <table class="table table-striped table-hover table-bordered table-responsive">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>url</th>
                                <th>Operação</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pageStandard as $pageStd)
                                <tr>
                                    <td>{{ $pageStd->display_name }}</td>
                                    <td>/{{ $pageStd->name }}</td>
                                    <td>
                                        <div>

                                            <a href="{{ route('page.edit',$pageStd->id) }}"
                                               data-toggle="tooltip" data-placement="top" title="Editar"
                                               class="btn btn-info">
                                                <i class="fa fa-pencil fa-fw"></i>
                                            </a>
                                            <a href="/{{ $pageStd->name }}"
                                               data-toggle="tooltip" data-placement="top" title="Visualizar"
                                               class="btn btn-success">
                                                <i class="fa fa-eye fa-fw"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!--\Paginas Padrão-->

    <!--Paginas Dinamicas-->
    <div class="row">
        <div class="col-md-12">
            <div class="widget widget-default">
                <div class="widget-header">
                    <h6><i class="fa fa-file fa-fw"></i> Novas Página</h6>
                </div>
                <div class="widget-body">
                    <a class="btn pull-right" href="{{ route('page.create') }}">
                        Nova página&nbsp; <i class="fa fa-file"></i>
                    </a>
                    @if($pages->isEmpty())
                        <div class="center-block">Sem páginas novas.</div>
                    @else
                        <table class="table table-striped table-hover table-bordered table-responsive">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>url</th>
                                <th>Operação</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pages as $page)
                                <tr>
                                    <td>{{ $page->display_name }}</td>
                                    <td>/{{ $page->name }}</td>
                                    <td>
                                        <div>

                                            <a href="{{ route('page.edit',$page->id) }}"
                                               data-toggle="tooltip" data-placement="top" title="Editar"
                                               class="btn btn-info">
                                                <i class="fa fa-pencil fa-fw"></i>
                                            </a>
                                            <a href="/{{ $page->name }}"
                                               data-toggle="tooltip" data-placement="top" title="Visualizar"
                                               class="btn btn-success">
                                                <i class="fa fa-eye fa-fw"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!--\Paginas Dinamicas-->
@endsection
