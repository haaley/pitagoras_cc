@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="widget widget-default">
                <div class="widget-header">
                    <h3>Modificar a classificação</h3>
                </div>
                <div class="widget-body">
                    <form role="form" class="form-horizontal" action="{{ route('docente.update',$docente->id) }}"
                          method="post">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nome do Docente </label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name"
                                       value="{{ $docente->name }}"
                                       autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="description" class="col-md-4 control-label">Descrição do Docente </label>
                            <div class="col-md-6">
                              <textarea id="description" rows="5" class="form-control" name="description"> {{$docente->description }} </textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="avatar" class="col-md-4 control-label">Avatar do Docente </label>
                            <div class="col-md-6">
                                <input id="avatar" type="file" class="form-control" name="avatar"
                                       value="{{ $docente->avatar }}"
                                       autofocus>

                                @if ($errors->has('avatar'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('avatar') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="email" class="col-md-4 control-label">Email do Docente </label>
                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email"
                                       value="{{ $docente->email }}"
                                       autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>                            
                            <label for="skype" class="col-md-4 control-label">Skype do Docente </label>
                            <div class="col-md-6">
                                <input id="skype" type="text" class="form-control" name="skype"
                                       value="{{ $docente->skype }}"
                                       autofocus>

                                @if ($errors->has('skype'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('skype') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="phone" class="col-md-4 control-label">Phone do Docente </label>
                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone"
                                       value="{{ $docente->phone }}"
                                       autofocus>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="location" class="col-md-4 control-label">Localização do Docente </label>
                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control" name="location"
                                       value="{{ $docente->location }}"
                                       autofocus>

                                @if ($errors->has('location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                            </div>                            
                            <label for="web" class="col-md-4 control-label">Página Web do Docente </label>
                            <div class="col-md-6">
                                <input id="web" type="text" class="form-control" name="web"
                                       value="{{ $docente->web }}"
                                       autofocus>

                                @if ($errors->has('web'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('web') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="put">
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection