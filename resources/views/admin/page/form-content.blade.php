<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name" class="control-label">Locais*</label>

    <input id="name" type="text" class="form-control" name="name"
           value="{{ isset($page) ? $page->name : old('name') }}"
           autofocus>

    @if ($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
</div>


<div class="form-group{{ $errors->has('display_name') ? ' has-error' : '' }}">
    <label for="display_name" class="control-label">Nome*</label>

    <input id="display_name" type="text" class="form-control" name="display_name"
           value="{{ isset($page) ? $page->display_name : old('display_name') }}">

    @if ($errors->has('display_name'))
        <span class="help-block">
            <strong>{{ $errors->first('display_name') }}</strong>
        </span>
    @endif
</div>
{{ csrf_field() }}

<div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
    <label for="content" class="control-label">Conteúdo*</label>

    <textarea spellcheck="false" id="content" type="text" class="form-control" name="content"
              rows="25"
              style="line-height: 1.85em; resize: vertical">{{ isset($page) ? $page->content : old('content') }}</textarea>
    @if ($errors->has('content'))
        <span class="help-block">
            <strong>{{ $errors->first('content') }}</strong>
        </span>
    @endif
</div>
<div class="form-group">
    <label for="comment_info" class="control-label">Comentários <small style="font-size: 70%; font-weight: 500;" class="text-danger">(Habilita/Desabilita postar comentários)</small></label>
    <select style="margin-top: 5px" id="comment_info" name="comment_info" class="form-control">
        <?php $comment_info = isset($page) && $page->configuration ? $page->configuration->config['comment_info'] : ''?>
        <option value="default" {{ $comment_info=='default'?' selected' : '' }}>default</option>
        <option value="force_disable" {{ $comment_info=='force_disable'?' selected' : '' }}>Desabilitar comentários</option>
        <option value="force_enable" {{ $comment_info=='force_enable'?' selected' : '' }}>Habilitar comentários</option>
    </select>
</div>
<div class="form-group">
    <label for="comment_type" class="control-label">Ferramenta para Comentários </label>
    <select id="comment_type" name="comment_type" class="form-control">
        <?php $comment_type = isset($page) && $page->configuration ? $page->configuration->config['comment_type'] : ''?>
        <option value="default" {{ $comment_type=='default'?' selected' : '' }}>Default</option>
        <option value="raw" {{ $comment_type=='raw'?' selected' : '' }}>Nativa</option>
        <option value="disqus" {{ $comment_type=='disqus'?' selected' : '' }}>Disqus</option>
        <option value="duoshuo" {{ $comment_type=='duoshuo'?' selected' : '' }}>Duoshu</option>
    </select>
</div>
<div class="form-group">
    <label for="allow_resource_comment" class="control-label">Exibição <small style="font-size: 70%; font-weight: 500;" class="text-danger">(Habilita/Desabilita visualização de comentários)</small></label>
    <select id="allow_resource_comment" name="allow_resource_comment" class="form-control">
        <?php $allow_resource_comment = isset($page) ? $page->getConfig('allow_resource_comment', 'default') : 'default'?>
        <option value="default" {{ $allow_resource_comment=='default'?' selected' : '' }}>Default</option>
        <option value="false" {{ $allow_resource_comment=='false'?' selected' : '' }}>Não permitir</option>
        <option value="true" {{ $allow_resource_comment=='true'?' selected' : '' }}>Permitir</option>
    </select>
</div>
<div class="form-group">
    <?php $display = isset($page) && $page->configuration ? $page->configuration->config['display'] : 'false'?>
    <div class="radio radio-inline" style="padding-left: 3px;">
        <label>
            <input type="radio"
                   {{ (isset($page)) && $display == 'true' ? ' checked ':'' }}
                   name="display"
                   value="true">Exibido na página inicial · <small class="text-success">Visível a todos</small>
        </label>
    </div>
    <div class="radio radio-inline">
        <label>
            <input type="radio"
                   {{ (!isset($page)) || $display == 'false' ? ' checked ':'' }}
                   name="display"
                   value="false">Não mostrar na página inicial · <small class="text-danger">Ainda não visível a todos</small>
        </label>
    </div>
</div>

<div class="form-group">
    <?php $sort_order = isset($page) && $page->configuration ? $page->configuration->config['sort_order'] : '1'?>
    <label for="sort_order" class="control-label">Orden</label>
    <input id="standard" type="number" class="form-control" name="standard"
           value="{{ $sort_order }}">
</div>

<div class="form-group">
    <label for="sort_order" class="control-label">Página Padrão <small style="font-size: 70%; font-weight: 500;" class="text-danger">(Habilita/Desabilita como uma página padrão. 0 = deshabilita / 1 = habilita)</small></label>
    <input id="sort_order" type="number" class="form-control" name="sort_order"
           value="0">
</div>

