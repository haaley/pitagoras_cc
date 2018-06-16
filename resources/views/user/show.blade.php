@extends('layouts.app')
@section('title','Usuário')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12">
                <div class="widget widget-user" style="overflow: hidden">
                    <?php
                    if (isset($profile))
                        $style = "background: url('$profile->key') center center no-repeat; background-position: cover;";
                    else
                        $style = "background-color: #eb6e2f;";
                    ?>
                    <div class="widget-user-header" style="{{ $style }}">
                        <h3 class="widget-user-username" style="color: #505050; font-weight: 600; text-shadow: none;">{{ $user->name }}</h3>
                        <h5 class="widget-user-desc" style="color: #505050; font-weight: 600; text-shadow: none;">{{ $user->description or 'Sem descrição'}}</h5>
                    </div>
                    <div class="widget-user-image" id="upload-avatar">
                        <img style="background-color: #607D8B" class="img-circle" src="{{isset($avatar->key) ? $avatar->key : '/site/img/avatar/auth/avatar-1.svg'}}" alt="User Avatar">
                    </div>
                    <div class="widget-user-body mt-30">
                        @can('manager',$user)
                            @include('user.show_owner',$user)
                        @else
                            @include('user.show_visiter',$user)
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
