@extends('layouts.app')
@section('title','Blog · Categorias')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('post.index') }}">Blog</a></li>
                    <li class="active">Categorias</li>
                </ol>
                @include('widget.categories')
            </div>
        </div>
    </div>
@endsection
