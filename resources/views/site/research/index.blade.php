@extends('layouts.site')
@section('title','Pesquisa')
@section('sub-header-title','Pesquisa')
@section('breadcrumb-current', 'Pesquisa')
@section('background-subheader')
    <div class="nicdark_section nicdark_background_size_cover nicdark_background_position_center_bottom"
         style="background-image:url('../site/img/parallax/img1.jpg'); background-position: center center;">
        @endsection
        @section('content')
            <div class="nicdark_container nicdark_clearfix">
                <div class="nicdark_width_100_percentage">
                    <!--START results-->
                    <div class="nicdark_section nicdark_padding_15 nicdark_box_sizing_border_box">
                        <div class="nicdark_section nicdark_box_sizing_border_box ">

                            <div class="nicdark_section nicdark_height_10"></div>

                            {{-- <div class="nicdark_width_70_percentage nicdark_float_left nicdark_width_100_percentage_all_iphone">

                                <div class="nicdark_section nicdark_height_20"></div>

                                <div class="nicdark_width_80_percentage nicdark_float_left">
                                    <div class="nicdark_section nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative nicdark_padding_right_20">
                                        <img alt=""
                                             class="nicdark_position_absolute nicdark_top_5 nicdark_left_0 nicdark_margin_top_5"
                                             width="15" src="{{asset('site/img/icons/icon-pen.svg')}}">
                                        <input class="nicdark_padding_left_25 nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0"
                                               type="text" placeholder="Buscar">
                                    </div>
                                </div>
                                <div class="nicdark_width_20_percentage nicdark_float_left">
                                    <div class="nicdark_float_left nicdark_width_100_percentage_all_iphone">
                                        <a class="nicdark_bg_white_hover nicdark_color_violet_hover nicdark_border_2_solid_violet nicdark_transition_all_08_ease nicdark_display_inline_block nicdark_text_align_center nicdark_box_sizing_border_box nicdark_width_100_percentage nicdark_color_white nicdark_bg_violet nicdark_first_font nicdark_padding_10_20 nicdark_border_radius_3 "
                                           href="#">Buscar</a>
                                    </div>
                                </div>
                            </div>
                            --}}
                            @if(isAdmin(auth()->user()))
                                <div class="nicdark_width_30_percentage nicdark_float_right nicdark_text_align_right nicdark_width_100_percentage_all_iphone">

                                    <div class="nicdark_section nicdark_height_20"></div>

                                    <div class="nicdark_display_inline_block nicdark_bg_blue nicdark_border_1_solid_blue nicdark_padding_8 nicdark_margin_right_10 nicdark_border_radius_3">
                                        <a class="nicdark_tooltip_jquery" title="Advanced Settings" href="#">
                                            <img alt=""
                                                 class="nicdark_float_left"
                                                 width="23"
                                                 src="{{asset('site/img/icons/icon-settings-white.svg')}}">
                                        </a>
                                    </div>

                                    <div class="nicdark_display_inline_block nicdark_bg_violet nicdark_border_1_solid_violet nicdark_padding_8 nicdark_margin_right_10 nicdark_border_radius_3">
                                        <a class="nicdark_tooltip_jquery" title="Visualização em Lista" href="#">
                                            <img alt="" class="nicdark_float_left" width="23"
                                                 src="{{asset('site/img/icons/icon-list-white.svg')}}"></a>
                                    </div>

                                    <div class="nicdark_display_inline_block nicdark_border_1_solid_grey_2 nicdark_padding_8 nicdark_border_radius_3">
                                        <a class="nicdark_tooltip_jquery" title="Visualização em Cards" href="#">
                                            <img alt=""
                                                 class="nicdark_float_left" width="23"
                                                 src="{{asset('site/img/icons/icon-grid-grey.svg')}}">
                                        </a>
                                    </div>

                                </div>
                            @endif

                        </div>
                    </div>
                    <!--END results-->
                    <div class="nicdark_width_100_percentage">

                    <?php
                    $cursos = [
                        'nome' => [
                            1 => 'Ciências da Computação',
                            2 => 'Redes de Computadores',
                            3 => 'Engenharia da Computação',
                        ],
                        'data' => [
                            1 => '21/10/2017',
                            2 => '22/10/2017',
                            3 => '23/10/2017',
                            4 => '20/02/2017',
                            5 => '23/02/2017'
                        ],
                        'semestres' => [
                            1 => '10 semestres',
                            2 => '8 semestres'
                        ],
                        'autor' => [
                            1 => 'Raelson',
                            2 => 'Cleyanne'
                        ],
                        'img' => [
                            1 => 'img1.jpg',
                            2 => 'img2.jpg',
                            3 => 'img3.jpg',
                            4 => 'img4.jpg',
                            5 => 'img5.jpg'
                        ]
                    ];

                    $qtdCurso = count($cursos['nome']);
                    ?>

                    @while($qtdCurso > 0)
                        <!--START preview-->
                            <div class="nicdark_width_33_percentage nicdark_width_100_percentage_responsive nicdark_float_left">

                                <div class="nicdark_section nicdark_padding_15 nicdark_box_sizing_border_box">

                                    <!--start preview-->
                                    <div class="nicdark_section nicdark_border_1_solid_grey">

                                        <!--image-->
                                        <div class="nicdark_section nicdark_position_relative">


                                            <img alt="" class="nicdark_section"
                                                 src="{{asset('site/img/courses/single') . '/' . $cursos['img'][rand(1,5)]}}">

                                            <div class="nicdark_bg_greydark_alpha_gradient_2 nicdark_position_absolute nicdark_left_0 nicdark_height_100_percentage nicdark_width_100_percentage nicdark_padding_20 nicdark_box_sizing_border_box">

                                                <a class="nicdark_tooltip_jquery nicdark_position_absolute nicdark_right_0"
                                                   title="Adicione aos Favoritos" href="#">
                                                    <img alt="" class="nicdark_margin_right_60" width="25"
                                                         src="{{asset('site/img/icons/icon-heart-white.svg')}}">
                                                </a>

                                                <a class="nicdark_tooltip_jquery nicdark_position_absolute nicdark_right_0"
                                                   title="Informe sobre o périodo de matricula" href="#">
                                                    <img alt="" class="nicdark_margin_right_20 nicdark_right_0"
                                                         width="25"
                                                         src="{{asset('site/img/icons/icon-compare-white.svg')}}">
                                                </a>

                                                <div class="nicdark_position_absolute nicdark_bottom_20">
                                                    <div class="nicdark_display_table nicdark_float_left">
                                                        <img alt=""
                                                             class="nicdark_margin_right_10 nicdark_display_table_cell nicdark_vertical_align_middle"
                                                             width="20"
                                                             src="{{asset('site/img/icons/icon-calendar.svg')}}">
                                                        <p class=" nicdark_color_white nicdark_display_table_cell nicdark_vertical_align_middle nicdark_font_size_13">
                                                            {{$cursos['data'][rand(1,3)]}}</p>
                                                        <img alt=""
                                                             class="nicdark_margin_right_10 nicdark_margin_left_20 nicdark_display_table_cell nicdark_vertical_align_middle"
                                                             width="20"
                                                             src="{{asset('site/img/icons/icon-clock.svg')}}">
                                                        <p class="nicdark_color_white nicdark_display_table_cell nicdark_vertical_align_middle nicdark_font_size_13">
                                                            {{$cursos['semestres'][rand(1,2)]}}</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!--image-->

                                        <div class="nicdark_section nicdark_padding_20 nicdark_box_sizing_border_box">

                                            <h3><a class="nicdark_color_greydark nicdark_first_font"
                                                   href="#">{{$cursos['nome'][$qtdCurso]}}</a></h3>
                                            <div class="nicdark_section nicdark_height_20"></div>
                                            <p><a class="" href="#">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing
                                                    elit. Aenean egestas magna at porttitor vehicula. Nullam augue
                                                    augue.</a></p>

                                        </div>

                                        <div class="nicdark_section nicdark_padding_20 nicdark_box_sizing_border_box nicdark_bg_grey nicdark_border_top_1_solid_grey">

                                            <div class="nicdark_width_100_percentage nicdark_width_80_percentage_all_iphone nicdark_float_left">
                                                <div class="nicdark_display_table nicdark_float_left">

                                                    <a class="nicdark_margin_right_20 nicdark_display_inline_block nicdark_color_white pull-left bg-primary nicdark_margin_top_20_all_iphone nicdark_first_font nicdark_padding_8 nicdark_border_radius_3 nicdark_font_size_13"
                                                       href="#">Matutino</a>
                                                    <a class="nicdark_margin_right_20 nicdark_display_inline_block nicdark_color_white bg-secondary nicdark_margin_top_20_all_iphone nicdark_first_font nicdark_padding_8 nicdark_border_radius_3 nicdark_font_size_13"
                                                       href="#">Vespertino</a>
                                                    <a class="nicdark_margin_right_20 nicdark_display_inline_block pull-right nicdark_color_white nicdark_bg_violet nicdark_margin_top_20_all_iphone nicdark_first_font nicdark_padding_8 nicdark_border_radius_3 nicdark_font_size_13"
                                                       href="#">Noturno</a>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                    <!--start preview-->
                                </div>
                            </div>
                            <!--END preview-->
                            <span style="display: none;">{{$qtdCurso--}}</span>
                        @endwhile

                    </div>

                    <div class="nicdark_section nicdark_height_50"></div>

                    <div class="nicdark_section nicdark_text_align_center">
                        <a class="nicdark_display_inline_block nicdark_color_greydark nicdark_first_font nicdark_padding_10 nicdark_font_size_20"
                           href="#"><strong>1</strong></a>
                        <a class="nicdark_display_inline_block nicdark_first_font nicdark_padding_10 nicdark_font_size_20"
                           href="#"><strong>2</strong></a>
                        <a class="nicdark_display_inline_block nicdark_first_font nicdark_padding_10 nicdark_font_size_20"
                           href="#"><strong>3</strong></a>
                        <a class="nicdark_display_inline_block nicdark_first_font nicdark_padding_10 nicdark_font_size_20"
                           href="#"><strong>4</strong></a>
                        <a class="nicdark_display_inline_block nicdark_first_font nicdark_padding_10 nicdark_font_size_20"
                           href="#"><strong>5</strong></a>
                    </div>

                    <div class="nicdark_section nicdark_height_50"></div>

                </div>
            </div>
@endsection
