@extends('admin.layouts.app')
@section('title','Imagem')
@section('content')

    <div class="widget widget-default">
        <div class="widget-header">
            <h6><i class="fa fa-file-image-o fa-fw"></i>Imagens({{ $image_count }})</h6>
        </div>
        <div class="widget-body">
            <form role="form" class="form-horizontal" action="{{ route('upload.image') }}"
                  datatype="image"
                  required="required"
                  enctype="multipart/form-data" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="image" class="col-xs-2 col-xs-offset-1 control-label">
                        <i class="fa fa-file-image-o fa-lg fa-fw"></i>
                    </label>
                    <div class="col-xs-6">
                        <input id="image" class="form-control" accept="image/*" type="file" name="image">
                    </div>
                    <div class="col-xs-2">
                        <button type="submit" class="btn btn-primary">
                            Carregar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <div class="row">
        @forelse($images as $image)
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="widget widget-default" style="overflow: hidden;">
                    <label style="padding: 5px 10px;width: 100%;margin: 0">
                        {{ $image->name }}
                    </label>
                    <div class="js-imgLiquid" style="width: 100% ;height: 250px;">
                        <img src="{{ $image->key}}">
                    </div>
                    <div class="widget-footer">
                        <div class="widget-meta">
                            <button id="clipboard-btn" class="btn btn-default"
                                    type="button"
                                    data-clipboard-text="{{ $image->key }}"
                                    data-toggle="tooltip"
                                    data-placement="left"
                                    title="Copiado">
                                <i class="fa fa-copy fa-fw"></i>
                            </button>
                            <a class="btn btn-primary"
                               href="{{ $image->key }}"
                               target="_blank">
                                <i class="fa fa-eye fa-fw"></i>
                            </a>
                            <button class="btn btn-danger swal-dialog-target"
                                    data-dialog-msg="realmente deseja excluir{{ $image->name }}？"
                                    data-url="{{ route('delete.file').'?key='.$image->key.'&type=image' }}"
                                    data-key="{{ $image->key }}">
                                <i class="fa fa-trash-o fa-fw"></i>
                            </button>
                            {{ formatBytes($image->size) }}
                            <i class="fa fa-clock-o fa-fw"></i>
                            {{ $image->created_at->format('Y-m-d') }}
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <h3 class="center-block meta-item">Sem imagem</h3>
        @endforelse
    </div>
    @if($images->lastPage() > 1)
        <div class="row">
            <div class="col-md-12">
                {{ $images->links() }}
            </div>
        </div>
    @endif
@endsection
@section('script')
    <script src="//cdn.bootcss.com/clipboard.js/1.5.12/clipboard.min.js"></script>
    <script>
        new Clipboard('.btn');
        $('.btn').tooltip({
            trigger: 'click',
        });
    </script>
@endsection