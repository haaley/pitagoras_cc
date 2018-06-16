@extends('layouts.site-post')
@section('description',$post->description)
@section('keywords',$post->category->name)
@section('title',$post->title)
@section('sub-header-title','Blog · Artigos')
@section('breadcrumb-current', 'Blog')

@section('background-subheader')
    <div class="nicdark_section nicdark_background_size_cover nicdark_background_position_center_bottom"
         style="background-image:url('{{$post->figure}}'); background-position: center center;">
        @endsection
@section('css')

    @endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 phone-no-padding">
                <div class="post-detail">
                    <div class="center-block">
                        <div class="post-detail-title">{{ $post->title }}</div>
                        <div class="post-meta">
                            <span class="post-category">
                           <i class="fa fa-folder-o fa-fw"></i>
                           <a href="{{ route('category.show',$post->category->name) }}">
                           {{ $post->category->name }}
                           </a>
                           </span>
                            <span class="post-comments-count">
                           &nbsp;|&nbsp;
                           <i class="fa fa-comments-o fa-fw" aria-hidden="true"></i>
                           <span>{{ $post->comments_count }}</span>
                           </span>
                            <span>
                           &nbsp;|&nbsp;
                           <i class="fa fa-eye"></i>
                           <span>{{ $post->view_count }}</span>
                           </span>
                            @can('update',$post)
                                <span>
                                    &nbsp;|&nbsp;
                                    <a href="{{ route('post.edit',$post->id) }}">
                                        <i class="fa fa-pencil fa-fw"></i>
                                    </a>
                                </span>
                                <span>
                                    &nbsp;|&nbsp;
                                    <a class="swal-dialog-target"
                                       data-url="{{ route('post.destroy',$post->id) }}"
                                       data-dialog-msg="Delete {{ $post->title }} ?">
                                    <i class="fa fa-trash-o fa-fw"></i>
                                    </a>
                                </span>
                            @endcan
                        </div>
                    </div>
                    <div class="post-detail-content">
                        {!! $post->html_content !!}
                        <p>-- END</p>
                        @include('widget.pay')
                    </div>
                    <div class="post-info-panel">
                        <p class="info">
                            <label class="info-title">Direitos Autorais:</label><i
                                    class="fa fa-fw fa-creative-commons"></i>CC By 3.0（<a
                                    href="https://creativecommons.org/licenses/by-nc-nd/3.0/deed.zh">Licença Creative Sharing 3.0</a>）
                        </p>
                        <p class="info">
                            <label class="info-title">Data de criação:</label>{{ $post->created_at->format('Y.m.d') }}
                        </p>
                        @if(isset($post->published_at) && $post->published_at)
                            <p class="info">
                                <label class="info-title">Data de modificaçao:</label>{{ $post->published_at->format('Y.m.d') }}
                            </p>
                        @endif
                        <p class="info">
                            <label class="info-title">Etiquetas:</label>
                            @foreach($post->tags as $tag)
                                <a class="tag" href="{{ route('tag.show',$tag->name) }}">{{ $tag->name }}</a>
                            @endforeach
                        </p>
                    </div>
                </div>
                @if(isset($recommendedPosts))
                    @include('widget.recommended_posts',['recommendedPosts'=>$recommendedPosts])
                @endif
                @if(!(isset($preview) && $preview) && $post->isShownComment())
                    @include('widget.comment',[
                            'comment_key'=>$post->slug,
                            'comment_title'=>$post->title,
                            'comment_url'=>route('post.show',$post->slug),
                            'commentable'=>$post,
                            'comments'=>isset($comments) ? $comments:[],
                            'redirect'=>request()->fullUrl(),
                             'commentable_type'=>'App\Post'])
                @endif
            </div>
            <div class="grid grid_4" style="background: #fff">

                <!--START search-->
                <div class="nicdark_section nicdark_height_10"></div>
                <!--START search-->
                <div class="nicdark_section nicdark_height_10"></div>

                <h3><strong>Encontre o que procura</strong></h3>
                <div class="nicdark_section nicdark_height_10"></div>


                <div class="nicdark_section">
                    <div class="nicdark_width_60_percentage nicdark_padding_10  nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
                        <img alt="" class="nicdark_position_absolute nicdark_top_0 nicdark_left_0 nicdark_margin_top_20 nicdark_margin_left_10" width="15" src="http://localhost:8000/site/img/icons/icon-pen.svg">
                        <input class="nicdark_padding_left_25 nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0" type="text" placeholder="Palavra chave">
                    </div>
                    <div class="nicdark_width_40_percentage nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
                        <a class="nicdark_display_inline_block nicdark_text_align_center nicdark_box_sizing_border_box nicdark_width_100_percentage nicdark_color_white nicdark_bg_violet nicdark_first_font nicdark_padding_10_20 nicdark_border_radius_3 " href="#">Buscar</a>
                    </div>

                </div>
                <!--END search-->

                <div class="nicdark_section nicdark_height_40"></div>
                <!--START tag-->
                <h3><strong>Tags</strong></h3>
                <div class="nicdark_section nicdark_height_30"></div>
                <div class="nicdark_section">   <div class="nicdark_section nicdark_height_20"></div>
                    <a class="nicdark_display_inline_block nicdark_font_size_13 nicdark_border_1_solid_grey nicdark_padding_8 nicdark_border_radius_3 nicdark_margin_right_20 nicdark_margin_bottom_10" href="#">8cMDgkA</a>
                    <a class="nicdark_display_inline_block nicdark_font_size_13 nicdark_border_1_solid_grey nicdark_padding_8 nicdark_border_radius_3 nicdark_margin_right_20 nicdark_margin_bottom_10" href="#">MjRa88c</a>
                    <a class="nicdark_display_inline_block nicdark_font_size_13 nicdark_border_1_solid_grey nicdark_padding_8 nicdark_border_radius_3 nicdark_margin_right_20 nicdark_margin_bottom_10" href="#">SanRbuG</a>
                    <a class="nicdark_display_inline_block nicdark_font_size_13 nicdark_border_1_solid_grey nicdark_padding_8 nicdark_border_radius_3 nicdark_margin_right_20 nicdark_margin_bottom_10" href="#">x9bSUa5</a>
                    <a class="nicdark_display_inline_block nicdark_font_size_13 nicdark_border_1_solid_grey nicdark_padding_8 nicdark_border_radius_3 nicdark_margin_right_20 nicdark_margin_bottom_10" href="#">5LTdBNL</a>
                    <a class="nicdark_display_inline_block nicdark_font_size_13 nicdark_border_1_solid_grey nicdark_padding_8 nicdark_border_radius_3 nicdark_margin_right_20 nicdark_margin_bottom_10" href="#">LqhhDc7</a>
                    <a class="nicdark_display_inline_block nicdark_font_size_13 nicdark_border_1_solid_grey nicdark_padding_8 nicdark_border_radius_3 nicdark_margin_right_20 nicdark_margin_bottom_10" href="#">DfBhBMR</a>
                    <a class="nicdark_display_inline_block nicdark_font_size_13 nicdark_border_1_solid_grey nicdark_padding_8 nicdark_border_radius_3 nicdark_margin_right_20 nicdark_margin_bottom_10" href="#">dm9C5x4</a>
                    <a class="nicdark_display_inline_block nicdark_font_size_13 nicdark_border_1_solid_grey nicdark_padding_8 nicdark_border_radius_3 nicdark_margin_right_20 nicdark_margin_bottom_10" href="#">BTgMBz9</a>
                    <a class="nicdark_display_inline_block nicdark_font_size_13 nicdark_border_1_solid_grey nicdark_padding_8 nicdark_border_radius_3 nicdark_margin_right_20 nicdark_margin_bottom_10" href="#">b9ZT49R</a>
                </div>
                <!--END tag-->

                <div class="nicdark_section nicdark_height_50"></div>

                <!--START category-->
                <h3><strong>Categorias</strong></h3>
                <div class="nicdark_section nicdark_height_10"></div>

                <table class="nicdark_section">
                    <tbody>
                    <tr class="nicdark_border_bottom_2_solid_grey">
                        <td class="nicdark_padding_10 ">
                            <img alt="" class="nicdark_margin_right_5" width="10" src="http://localhost:8000/site/img/icons/icon-next-grey.svg">
                            <p class="nicdark_display_inline_block">#noticia</p>
                        </td>
                    </tr>
                    <tr class="nicdark_border_bottom_2_solid_grey">
                        <td class="nicdark_padding_10 ">
                            <img alt="" class="nicdark_margin_right_5" width="10" src="http://localhost:8000/site/img/icons/icon-next-grey.svg">
                            <p class="nicdark_display_inline_block">#evento</p>
                        </td>
                    </tr>
                    <tr class="nicdark_border_bottom_2_solid_grey">
                        <td class="nicdark_padding_10 ">
                            <img alt="" class="nicdark_margin_right_5" width="10" src="http://localhost:8000/site/img/icons/icon-next-grey.svg">
                            <p class="nicdark_display_inline_block">#fiquesabendo</p>
                        </td>
                    </tr>
                    <tr class="nicdark_border_bottom_2_solid_grey">
                        <td class="nicdark_padding_10 ">
                            <img alt="" class="nicdark_margin_right_5" width="10" src="http://localhost:8000/site/img/icons/icon-next-grey.svg">
                            <p class="nicdark_display_inline_block">#coordenacao</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <!--END category-->
            </div>
        </div>
    </div>
@endsection