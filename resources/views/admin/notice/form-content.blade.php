<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    <label for="title" class="control-label">Título*</label>
    <input id="title" type="text" class="form-control" name="title"
           value="{{ isset($post) ? $post->title : old('title') }}"
           autofocus placeholder="Título da notícia">
    @if ($errors->has('title'))
        <span class="help-block">
            <strong>{{ $errors->first('title') }}</strong>
        </span>
    @endif
</div>
<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
    <label for="description" class="control-label">Descrição*</label>

    <textarea id="post-description-textarea" style="resize: vertical;" rows="3" spellcheck="false"
              id="description" class="form-control autosize-target" placeholder="Descrição da notícia"
              name="description">{{ isset($post) ? $post->description : old('description') }}</textarea>

    @if ($errors->has('description'))
        <span class="help-block">
            <strong>{{ $errors->first('description') }}</strong>
        </span>
    @endif
</div>
<div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
    <label for="slug" class="control-label">slug*</label>
    <input id="slug" type="text" class="form-control"
           placeholder="Ex: pode-ser-o-nome-do-titulo-no-lugar-do-espaco-coloca-ifem-tudo-sem-acento-melhor-ser-curto"
           name="slug"
           value="{{ isset($post) ? $post->slug : old('slug') }}">

    @if ($errors->has('slug'))
        <span class="help-block">
            <strong>{{ $errors->first('slug') }}</strong>
        </span>
    @endif
</div>
<div class="row">
    <div class="col-md-6 col-xs-12">
        <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
            <label for="data" class="control-label">Ordem*
                <small class="text-danger"> (Ordem de exibição)</small>
            </label>
            <input type="number" name="ordem" min="0" class="form-control"
                   value="{{!empty($meta['ordem']) ? $meta['ordem'] : old('ordem')}}">

            @if ($errors->has('ordem'))
                <span class="help-block">
            <strong>{{ $errors->first('ordem') }}</strong>
        </span>
            @endif

        </div>
    </div>
    <div class="col-md-6 col-xs-12">

        <div class="form-group">
            <label for="data" class="control-label">Data*
                <small class="text-danger"> (Data da notícia)</small>
            </label>
            <input type="data" name="data" class="form-control"
                   value="{{isset($meta['data']) ? $meta['data'] : Carbon\Carbon::now()}}">
        </div>

    </div>
</div>
<div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
    <label for="categories" class="control-label">Categoria*</label>
    <select name="category_id" class="form-control">
        @foreach($categories as $category)
            @if((isset($post) ? $post->category_id : old('category_id',-1)) == $category->id)
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
        @endforeach
    </select>

    @if ($errors->has('category_id'))
        <span class="help-block">
            <strong>{{ $errors->first('category_id') }}</strong>
        </span>
    @endif
</div>
@if(empty('hasUpload'))
    <div class="form-group{{ $errors->has('figure') ? ' has-error' : '' }}">
        <label for="categories" class="control-label">Imagem de fundo*</label>
        <input id="image" class="form-control" accept="image/*"
               data-url="{{route('upload.image')}}"
               data-method="POST"
               type="file" name="image">

        @if ($errors->has('figure'))
            <span class="help-block">
            <strong>{{ $errors->first('figure') }}</strong>
        </span>
        @endif
    </div>
@else
    <div class="form-group{{ $errors->has('figure') ? ' has-error' : '' }}">
        <label for="categories" class="control-label">Imagem de fundo*  </label>
        <small class="pull-right">Caso esteja em duvida, procure em <a
                    href="{{route('admin.images')}}" target="_blank">imagens</a></small>
        <input type="text" id="image" class="form-control" name="figure" value="{{isset($post) ? $post->figure : old('figure')}}">

        @if ($errors->has('figure'))
            <span class="help-block">
            <strong>{{ $errors->first('figure') }}</strong>
        </span>
        @endif
    </div>
@endif
<div class="form-group hidden{{ $errors->has('tags[]') ? ' has-error' : '' }}">
    <label for="tags[]" class="control-label">Etiqueta</label>
    <input type="text" disabled="disabled" name="categories" value="" id="categories" class="form-control">

    @if ($errors->has('tags[]'))
        <span class="help-block">
            <strong>{{ $errors->first('tags[]') }}</strong>
        </span>
    @endif
</div>
<div class="form-group{{ $errors->has('content') ? ' has-error ' : ' ' }}">
    <label for="post-content-textarea" class="control-label">Conteúdo*
        <small class="text-danger">(Breve descrição do que vai ter no capítulo)</small>
    </label>
    <textarea spellcheck="false" id="post-content-textarea" class="form-control" name="content"
              rows="36"
              placeholder="Breve descrição do que vai ter no capítulo"
              style="resize: vertical">{{ isset($post) ? $post->content : old('content') }}</textarea>
    @if($errors->has('content'))
        <span class="help-block">
            <strong>{{ $errors->first('content') }}</strong>
        </span>
    @endif
</div>

<div class="form-group hidden">
    <label for="comment_info" class="control-label">Comentários
        <small style="font-size: 70%; font-weight: 500;" class="text-danger">(Habilita/Desabilita postar
            comentários)
        </small>
    </label>
    <select style="margin-top: 5px" id="comment_info" name="comment_info" class="form-control">
        <option value="default">Default</option>
        <option value="force_disable" selected>Desabilitar comentários
        </option>
        <option value="force_enable">Habilitar comentários
        </option>
    </select>
</div>
<div class="form-group hidden">
    <label for="comment_type" class="control-label">Ferramenta para comentários</label>
    <select id="comment_type" name="comment_type" class="form-control">
        <option value="default" selected>Default</option>
        <option value="raw">Nativa</option>
        <option disabled value="disqus">Disqus</option>
        <option disabled value="duoshuo">Doushuo</option>
    </select>
</div>

<div class="form-group hidden">
    <label for="allow_resource_comment" class="control-label">Exibição
        <small style="font-size: 70%; font-weight: 500;" class="text-danger">(Habilita/Desabilita visualização de
            comentários)
        </small>
    </label>
    <select id="allow_resource_comment" name="allow_resource_comment" class="form-control">
        <option value="default">Defauft</option>
        <option value="false" selected>Não permitir</option>
        <option value="true">Permitir</option>
    </select>
</div>

<div class="form-group">
    <div class="radio radio-inline">
        <label>
            <input type="radio"
                   {{ (isset($post)) && $post->status == 1 ? ' checked ':'' }}
                   name="status"
                   value="1">Publicado ·
            <small class="text-success">Visível a todos</small>
        </label>
    </div>
    <div class="radio radio-inline">
        <label>
            <input type="radio"
                   {{ (!isset($post)) || $post->status == 0 ? ' checked ':'' }}
                   name="status"
                   value="0">Esboço ·
            <small class="text-danger">Ainda não visível a todos</small>
        </label>
    </div>
</div>

{{ csrf_field() }}