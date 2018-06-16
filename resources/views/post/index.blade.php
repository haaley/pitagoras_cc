@extends('layouts.site')
@section('title','Blog · Artigos')
@section('sub-header-title','Blog · Artigos')
@section('breadcrumb-current', 'Blog')
@section('background-subheader')
    <div class="nicdark_section nicdark_background_size_cover nicdark_background_position_center_bottom"
         style="background-image:url('site/img/parallax/img4.jpg'); background-position: bottom center;">
        @endsection
        @section('content')

            <div class="nicdark_container nicdark_clearfix">
                <div class="grid grid_8">
                    @if($posts->count()==0)
                        <h3 class="meta-item center-block">Sem Artigos.</h3>
                    @else
                        @foreach($posts as $post)
                            <div class="nicdark_section nicdark_border_1_solid_grey">

                                <div class="nicdark_section nicdark_position_relative"
                                     style="display:{{empty($post->figure)? 'none' : 'block'}}">

                                    <img alt="" class="nicdark_section" src="{{asset($post->figure)}}">

                                    <div class="nicdark_bg_greydark_alpha_gradient_2 nicdark_position_absolute nicdark_left_0 nicdark_height_100_percentage nicdark_width_100_percentage nicdark_padding_30 nicdark_box_sizing_border_box">
                                        <div class="nicdark_display_none_all_iphone nicdark_position_absolute nicdark_bottom_30">
                                            <div class="nicdark_display_table nicdark_float_left">
                                                <img alt=""
                                                     class="nicdark_margin_right_10 nicdark_margin_left_20 nicdark_display_table_cell nicdark_vertical_align_middle"
                                                     width="27" src="{{asset('site/img/icons/icon-user-white.svg')}}">
                                                <p class="nicdark_color_white nicdark_display_table_cell nicdark_vertical_align_middle ">
                                                <p class=" nicdark_color_white nicdark_display_table_cell nicdark_vertical_align_middle ">
                                                    {{$post->user->name}}
                                                </p>
                                                @if(isset($post->created_at) && $post->created_at)
                                                    <img alt=""
                                                         class="nicdark_margin_right_10 nicdark_margin_left_20 nicdark_display_table_cell nicdark_vertical_align_middle"
                                                         width="30" src="{{asset('site/img/icons/icon-calendar.svg')}}">
                                                    <p class=" nicdark_color_white nicdark_display_table_cell nicdark_vertical_align_middle ">{{$post->created_at->format('d.m.Y')}}</p>
                                                @else
                                                    <img alt=""
                                                         class="nicdark_margin_right_10 nicdark_margin_left_20 nicdark_display_table_cell nicdark_vertical_align_middle"
                                                         width="30" src="{{asset('site/img/icons/icon-calendar.svg')}}">
                                                    <p class=" nicdark_color_white nicdark_display_table_cell nicdark_vertical_align_middle ">{{$post->created_at}}</p>
                                                @endif
                                                <img alt=""
                                                     class="nicdark_margin_right_10 nicdark_margin_left_20 nicdark_display_table_cell nicdark_vertical_align_middle"
                                                     width="30" src="{{asset('site/img/icons/icon-comment.svg')}}">
                                                <p class="nicdark_color_white nicdark_display_table_cell nicdark_vertical_align_middle ">
                                                    {{count($post->comments)}}
                                                </p>
                                            </div>
                                        </div>

                                    </div>

                                    <a class="nicdark_position_absolute nicdark_right_20 nicdark_top_20 nicdark_display_inline_block nicdark_color_white nicdark_border_1_solid_white nicdark_first_font nicdark_padding_8 nicdark_border_radius_3 nicdark_font_size_13"
                                       href="single.php">
                                        {{$post->category->name}}
                                    </a>

                                </div>

                                <div class="nicdark_section nicdark_padding_30 nicdark_box_sizing_border_box">
                                    @if(empty($post->figure))
                                        <h5 class="nicdark_second_font nicdark_color_grey">
                                            {{$post->user->name}} &nbsp; | &nbsp;
                                            {{$post->created_at}} &nbsp; | &nbsp;
                                            {{count($post->comments)}}

                                        </h5>

                                    @endif
                                    <div class="nicdark_section nicdark_height_10"></div>
                                    <h2>
                                        {{$post->title}}
                                    </h2>
                                    <div class="nicdark_section nicdark_height_20">

                                    </div>
                                    <p>
                                        {!! $post->description !!}
                                    </p>
                                    <div class="nicdark_section nicdark_height_20"></div>
                                    <a class="nicdark_display_inline_block nicdark_text_align_center nicdark_box_sizing_border_box  nicdark_color_white nicdark_bg_blue nicdark_first_font nicdark_padding_10_20 nicdark_border_radius_3 "
                                       href="{{route('post.show', ['slug' => $post->slug])}}">
                                        Continue lendo
                                    </a>

                                </div>
                            </div>
                            <div class="nicdark_section nicdark_height_30"></div>
                        @endforeach

                        @if($posts->lastPage() > 1)
                            <div class="nicdark_section nicdark_height_60"></div>

                            {{ $posts->links() }}
                            <div class="nicdark_section nicdark_height_60"></div>
                        @endif
                    @endif
                </div>
                <div class="col-md-4">
                    <div class="slide">
                        <div class="grid grid_4">

                            <!--START search-->
                            <div class="nicdark_section nicdark_height_10"></div>
                            <!--START search-->
                            <div class="nicdark_section nicdark_height_10"></div>

                            <h3><strong>Encontre o que procura</strong></h3>
                            <div class="nicdark_section nicdark_height_10"></div>


                            <div class="nicdark_section">
                                <div class="nicdark_width_60_percentage nicdark_padding_10  nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
                                    <img alt=""
                                         class="nicdark_position_absolute nicdark_top_0 nicdark_left_0 nicdark_margin_top_20 nicdark_margin_left_10"
                                         width="15" src="{{asset('site/img/icons/icon-pen.svg')}}">
                                    <input class="nicdark_padding_left_25 nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0"
                                           type="text" placeholder="Palavra chave">
                                </div>
                                <div class="nicdark_width_40_percentage nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
                                    <a class="nicdark_display_inline_block nicdark_text_align_center nicdark_box_sizing_border_box nicdark_width_100_percentage nicdark_color_white nicdark_bg_violet nicdark_first_font nicdark_padding_10_20 nicdark_border_radius_3 "
                                       href="#">Buscar</a>
                                </div>

                            </div>
                            <!--END search-->

                            <div class="nicdark_section nicdark_height_40"></div>
                            <!--START tag-->
                            <h3><strong>Tags</strong></h3>
                            <div class="nicdark_section nicdark_height_30"></div>
                            <div class="nicdark_section">
                                <div class="nicdark_section nicdark_height_20"></div>
                                @foreach($tag as $t)
                                    <a class="nicdark_display_inline_block nicdark_font_size_13 nicdark_border_1_solid_grey nicdark_padding_8 nicdark_border_radius_3 nicdark_margin_right_20 nicdark_margin_bottom_10"
                                       href="#">{{$t->name}}</a>
                                @endforeach
                            </div>
                            <!--END tag-->

                            <div class="nicdark_section nicdark_height_50"></div>

                            <!--START category-->
                            <h3><strong>Categorias</strong></h3>
                            <div class="nicdark_section nicdark_height_10"></div>

                            <table class="nicdark_section">
                                <tbody>
                                @foreach($category as $c)
                                    <tr class="nicdark_border_bottom_2_solid_grey">
                                        <td class="nicdark_padding_10 ">
                                            <img alt="" class="nicdark_margin_right_5" width="10"
                                                 src="{{asset('site/img/icons/icon-next-grey.svg')}}">
                                            <p class="nicdark_display_inline_block">{{$c->name}}</p>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <!--END category-->
                        </div>
                    </div>
                </div>
            </div>

@endsection
