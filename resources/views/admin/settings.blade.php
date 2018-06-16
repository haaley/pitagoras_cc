@extends('admin.layouts.app')
@section('title','Configurações')
@section('content')
    <div class="row">
        <form role="form" id="setting-form" class="form-horizontal" action="{{ route('admin.save-settings') }}"
              method="post">
            <div class="widget widget-default">
                <div class="widget-header">
                    <h6>
                        <i class="fa fa-cog fa-fw"></i>Configurações
                    </h6>
                </div>
                <div class="widget-body">
                    <div class="form-group">
                        <div class="radio">
                            <h4 class="col-sm-offset-2">Google Analytics ID</h4>
                            <label class="col-sm-offset-2">
                                <input type="radio"
                                       {{ isset($google_analytics) && $google_analytics == 'true' ? ' checked ':'' }}
                                       name="google_analytics"
                                       value="true">Habilitado
                            </label>
                        </div>
                        <div class="radio">
                            <label class="col-sm-offset-2">
                                <input type="radio"
                                       {{ isset($google_analytics) && $google_analytics == 'true' ? '':' checked ' }}
                                       name="google_analytics"
                                       value="false">Desabilitado
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="radio">
                            <h4 class="col-sm-offset-2">Notificação por email</h4>
                            <label class="col-sm-offset-2">
                                <input type="radio"
                                       {{ isset($enable_mail_notification) && $enable_mail_notification == 'true' ? ' checked ':'' }}
                                       name="enable_mail_notification"
                                       value="true">Habilitada
                            </label>
                        </div>
                        <div class="radio">
                            <label class="col-sm-offset-2">
                                <input type="radio"
                                       {{ isset($enable_mail_notification) && $enable_mail_notification == 'true' ? '':' checked ' }}
                                       name="enable_mail_notification"
                                       value="false">Desabilitada
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="radio">
                            <h4 class="col-sm-offset-2">Comentários</h4>
                            <label class="col-sm-offset-2">
                                <input type="radio"
                                       {{ (isset($comment_type) && $comment_type == 'none') ? ' checked ':'' }}
                                       name="comment_type"
                                       value="none">Não mostrar comeontários
                            </label>
                        </div>
                        <div class="radio">
                            <label class="col-sm-offset-2">
                                <input type="radio"
                                       {{ (!isset($comment_type) || $comment_type == 'raw') ? ' checked ':'' }}
                                       name="comment_type"
                                       value="raw">Ferramenta nativa
                            </label>
                        </div>
                        <div class="radio">
                            <label class="col-sm-offset-2">
                                <input type="radio"
                                       {{ isset($comment_type) && $comment_type == 'disqus' ? ' checked':'' }}
                                       name="comment_type"
                                       value="disqus">Disqus
                            </label>
                        </div>
                        <div class="radio">
                            <label class="col-sm-offset-2">
                                <input type="radio"
                                       {{ isset($comment_type) && $comment_type == 'duoshuo' ? ' checked':'' }}
                                       name="comment_type"
                                       value="duoshuo">Duoshuo
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                            <h4 class="col-sm-offset-2">
                                Permissões
                            </h4>

                        <div class="radio">
                            <label class="col-sm-offset-2">
                                <input type="radio"
                                       {{ (!isset($allow_comment) || $allow_comment == 'true') ? ' checked ':'' }}
                                       name="allow_comment"
                                       value="true">Permitir comentários
                            </label>
                        </div>
                        <div class="radio">
                            <label class="col-sm-offset-2">
                                <input type="radio"
                                       {{ (isset($allow_comment) && $allow_comment == 'false') ? ' checked ':'' }}
                                       name="allow_comment"
                                       value="false">Proibir Comentários <small style="font-size:80%" class="text-danger">(comentários já postados permaneceram)</small>

                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="radio">
                            <h4 class="col-sm-offset-2">
                                Artigos
                            </h4>
                            <label class="col-sm-offset-2">
                                <input type="radio"
                                       {{ isset($enable_hot_posts) && $enable_hot_posts == 'true' ? ' checked ':'' }}
                                       name="enable_hot_posts"
                                       value="true">Ativar Artigos populares
                            </label>
                        </div>
                        <div class="radio">
                            <label class="col-sm-offset-2">
                                <input type="radio"
                                       {{ isset($enable_hot_posts) && $enable_hot_posts == 'true' ? '':' checked ' }}
                                       name="enable_hot_posts"
                                       value="false">Desativar Artigos populares
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="radio">
                            <label class="col-sm-offset-2">
                                <input type="radio"
                                       {{ isset($open_pay) && $open_pay == 'true' ? ' checked ':'' }}
                                       name="open_pay"
                                       value="true">Abrir apreciação
                            </label>
                        </div>
                        <div class="radio">
                            <label class="col-sm-offset-2">
                                <input type="radio"
                                       {{ isset($open_pay) && $open_pay == 'true' ? '':' checked ' }}
                                       name="open_pay"
                                       value="false">Fechar apreciação
                            </label>
                        </div>
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="google_trace_id" class="col-sm-2 control-label">Google ID de rastreamento</label>
                        <div class="col-sm-8">
                            <input type="text" name="google_trace_id" class="form-control" id="google_trace_id"
                                   placeholder="Google ID de rastreamento"
                                   value="{{ $google_trace_id or ''}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="author" class="col-sm-2 control-label">Autor</label>
                        <div class="col-sm-8">
                            <input type="text" name="author" class="form-control" id="author"
                                   value="{{ $author or ''}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description" class="col-sm-2 control-label">Descrição</label>
                        <div class="col-sm-8">
                            <input type="text" name="description" class="form-control" id="description"
                                   value="{{ $description or ''}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="avatar" class="col-sm-2 control-label">Avatar</label>
                        <div class="col-sm-8">
                            <input type="text" name="avatar" class="form-control" id="avatar"
                                   value="{{ $avatar or ''}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="avatar" class="col-sm-2 control-label">Disqus ID</label>
                        <div class="col-sm-8">
                            <input type="text" name="disqus_shortname" class="form-control" id="avatar"
                                   value="{{ $disqus_shortname or ''}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="avatar" class="col-sm-2 control-label">Duoshuo ID</label>
                        <div class="col-sm-8">
                            <input type="text" name="duoshuo_shortname" class="form-control" id="avatar"
                                   value="{{ $duoshuo_shortname or ''}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="avatar" class="col-sm-2 control-label">Perfil Github</label>
                        <div class="col-sm-8">
                            <input type="text" name="github_username" class="form-control" id="avatar"
                                   value="{{ $github_username or ''}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Js</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="site_js"
                                   value="{{ $site_js or ''}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Css</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="site_css"
                                   value="{{ $site_css or ''}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Manhete</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="site_title"
                                   value="{{ $site_title or ''}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Palavra chaves (Keywords)</label>
                        <div class="col-sm-8">
                            <input placeholder="Digite palavras chaves" class="form-control" type="text" name="site_keywords"
                                   value="{{ $site_keywords or ''}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Descrição do site</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="site_description"
                                   value="{{ $site_description or '' }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Número da página</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="number" name="page_size"
                                   value="{{ $page_size or 7 }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Top número de arquivos</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="number" name="hot_posts_count"
                                   value="{{ $hot_posts_count or 5 }}">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-2 control-label">Imagem de perfil</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="profile_image"
                                   value="{{ $profile_image or ''}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Imagem de fundo</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="background_image"
                                   value="{{ $background_image or ''}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Descrição apreciação</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="pay_description"
                                   value="{{ $pay_description or 'Bem escrito, cotas de patrocínio no estabelecimento de acolhimento'}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">URL da imagem de pagamento zhifubao</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="zhifubao_pay_image_url"
                                   value="{{ $zhifubao_pay_image_url or ''}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">URL da imagem de pagamento wechat
                        </label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="wechat_pay_image_url"
                                   value="{{ $wechat_pay_image_url or ''}}">
                        </div>
                    </div>

                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-2">
                            <button type="submit" class="btn bg-primary">
                                Enviar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

