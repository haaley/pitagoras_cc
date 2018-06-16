@extends('admin.layouts.app')
@section('title','Pitagoras ·')
@section('content')
    <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-6">
            <a href="{{ route('admin.users') }}">
                <div class="info-box">
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="info-icon">
                                <i class="fa fa-user fa-fw"></i>
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <span>Usuário</span>
                            <div class="info-title">{{ $info['user_count'] }}</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3 col-sm-4 col-xs-6">
            <a href="{{ route('admin.pages') }}">
                <div class="info-box">
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="info-icon">
                                <i class="fa fa-file fa-fw"></i>
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <span>Página</span>
                            <div class="info-title">{{ $info['page_count'] }}</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3 col-sm-4 col-xs-6">
            <a href="{{ route('admin.posts') }}">
                <div class="info-box">
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="info-icon">
                                <i class="fa fa-sticky-note fa-fw"></i>
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <span>Artigo</span>
                            <div class="info-title">{{ $info['post_count'] }}</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3 col-sm-4 col-xs-6">
            <a href="{{ route('admin.notice.index') }}">
                <div class="info-box">
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="info-icon">
                                <i class="fa fa-file-text fa-fw"></i>
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <span>Notícia</span>
                            <div class="info-title">{{ $info['notice_count'] }}</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3 col-sm-4 col-xs-6">
            <a href="{{ route('admin.comments') }}">
                <div class="info-box">
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="info-icon">
                                <i class="fa fa-comments fa-fw"></i>
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <span>Revisão</span>
                            <div class="info-title">{{ $info['comment_count'] }}</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>


        <div class="col-md-3 col-sm-4 col-xs-6">
            <a href="{{ route('admin.tags') }}">
                <div class="info-box">
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="info-icon">
                                <i class="fa fa-tags fa-fw"></i>
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <span>Etiqueta</span>
                            <div class="info-title">{{ $info['tag_count'] }}</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3 col-sm-4 col-xs-6">
            <a href="{{ route('admin.categories') }}">
                <div class="info-box">
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="info-icon">
                                <i class="fa fa-folder fa-fw"></i>
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <span>Categorias</span>
                            <div class="info-title">{{ $info['category_count'] }}</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3 col-sm-4 col-xs-6">
            <a href="{{ route('admin.images') }}">
                <div class="info-box">
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="info-icon">
                                <i class="fa fa-image fa-fw"></i>
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <span>Imagem</span>
                            <div class="info-title">{{ $info['image_count'] }}</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3 col-sm-4 col-xs-6">
            <a href="{{ route('admin.ips') }}">
                <div class="info-box">
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="info-icon">
                                <i class="fa fa-internet-explorer fa-fw"></i>
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <span>IP</span>
                            <div class="info-title">{{ $info['ip_count'] }}</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
