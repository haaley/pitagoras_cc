@extends('admin.layouts.app')
@section('css')
    <link href="//cdn.bootcss.com/select2/4.0.3/css/select2.min.css" rel="stylesheet">
    <link href="//cdn.bootcss.com/simplemde/1.11.2/simplemde.min.css" rel="stylesheet">
@endsection
@section('content')
    <div id="upload-img-url" data-upload-img-url="{{ route('upload.image') }}" style="display: none"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="widget widget-default">
                <div class="widget-header">
                    <h6><i class="fa fa-pencil  fa-fw"></i>Criar Notícia</h6>
                </div>
                <div class="widget-body edit-form">
                    <form role="form" action="{{ route('admin.notice.store') }}" method="post" enctype="multipart/form-data">
                        @include('admin.notice.form-content')
                        <button type="submit" class="btn btn-primary">
                            Enviar
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="//cdn.bootcss.com/select2/4.0.3/js/select2.min.js"></script>
    <script src="//cdn.bootcss.com/simplemde/1.11.2/simplemde.min.js"></script>
    <script>
        $("#post-tags").select2({
            tags: true
        });
        $(document).ready(function () {
            var simplemde = new SimpleMDE({
                autoDownloadFontAwesome: true,
                element: document.getElementById("post-content-textarea"),
                autosave: {
                    enabled: true,
                    uniqueId: "post.create",
                    delay: 1000,
                },
                renderingConfig: {
                    codeSyntaxHighlighting: true,
                },
                spellChecker: false,
                toolbar: ["bold", "italic", "heading", "|", "quote", 'code', 'ordered-list', 'unordered-list', 'link', 'image', 'table', '|', 'preview', 'side-by-side', 'fullscreen'],
            });
            inlineAttachment.editors.codemirror4.attach(simplemde.codemirror, {
                uploadUrl: $("#upload-img-url").data('upload-img-url'),
                uploadFieldName: 'image',
                extraParams: {
                    '_token': XblogConfig.csrfToken,
                    'type': 'xrt'
                },
            });
        });


        $('#image').change(function(){
            console.log("Aguardando para iniciar upload da imagem");
            var url = "{{route('upload.image')}}";
            var type = "post";
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': XblogConfig.csrfToken
                },
                url: url,
                type: type,
                data: new FormData($("#image")),
                success: function (res) {
                    if (res.code == 200) {
                        swal({
                            title: 'Succeed',
                            text: res.msg,
                            type: "success",
                            timer: 1000,
                            confirmButtonText: "OK"
                        });
                    } else {
                        swal({
                            title: 'Failed',
                            text: "A operação falhou",
                            type: "error",
                            timer: 1000,
                            confirmButtonText: "OK"
                        });
                    }
                },
                error: function (res) {
                    swal({
                        title: 'Failed',
                        text: "A operação falhou",
                        type: "error",
                        timer: 1000,
                        confirmButtonText: "OK"
                    });
                }
            })
        });

    </script>
@endsection