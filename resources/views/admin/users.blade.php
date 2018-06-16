@extends('admin.layouts.app')
@section('title','Usuário')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="widget widget-default">
                <div class="widget-header">
                    <h6><i class="fa fa-user fa-fw"></i>Usuário</h6>
                </div>
                <div class="widget-body">
                    <table class="table table-striped table-hover table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>data de registro</th>
                            <th>caixa de correio
                            </th>
                            <th>fonte</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                @if(isAdminById($user->id))
                                    <td>{{ $user->id }}<span class="role-label">Admin</span></td>
                                @else
                                    <td>{{ $user->id }}</td>
                                @endif
                                <td>
                                    <a href="{{ route('user.show',$user->name) }}">{{ $user->name }}</a>
                                    @if($user->github_id)
                                        <a href="https://github.com/{{ $user->github_name }}"> [GitHub]</a>
                                    @endif
                                </td>
                                <td>{{ $user->created_at }}</td>
                                <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                                <td>{{ $user->register_from }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @if($users->lastPage() > 1)
                        {{ $users->links() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
