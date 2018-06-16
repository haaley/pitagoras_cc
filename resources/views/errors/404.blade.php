@extends('layouts.plain')
@section('content')
    <div class="error">
        <div class="title">404</div>
        <p class="links">
            <a href="{{ route('post.index') }}" aria-label="Clique para ver a lista de mensagens de blog">Blog</a><font aria-hidden="true">/</font>
            <a href="{{ route('projects') }}" aria-label="Clique para ver uma lista de itens">Projeto</a><font aria-hidden="true">/</font>
            <a href="{{ route('page.show','about') }}" aria-label="Ver informações pessoais">Sobre</a>
        </p>
    </div>
@endsection
