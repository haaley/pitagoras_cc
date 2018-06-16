@extends('layouts.app')
@section('title','Busca')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @if($posts->count() == 0)
                    <div class="widget widget-default">
                        <div class="widget-header">
                            <h3>Pesquisa "{{ request('q') }}"</h3>
                        </div>
                        <div class="widget-body">
                            <h4>Nada de pesquisa...</h4>
                        </div>
                    </div>
                @else
                    <div class="widget widget-default">
                        <div class="widget-header">
                            <h3>Buscar por "{{ request('q') }}"</h3>
                        </div>
                    </div>
                    @each('post.item',$posts,'post')
                    @if($posts->lastPage() > 1)
                        {{ $posts->links() }}
                    @endif
                @endif
            </div>
            <div class="col-md-4">
                <div class="slide">
                    @include('layouts.widgets')
                </div>
            </div>
        </div>
    </div>
@endsection
