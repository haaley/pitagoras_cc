@extends('layouts.site')
@section('title','Docentes')
@section('sub-header-title', $professor->name)
@section('docente-sub-title','Bacharel em Ciências da Computação')
@section('docente-img', asset($professor->avatar))
@section('subhead-btn1', 'Artigos Publicados')
@section('subhead-btn2', 'Projetos')


@section('subhead-left-side')
    <div class="nicdark_section nicdark_height_80 nicdark_display_none_all_responsive"></div>

    <div class="nicdark_display_inline_block nicdark_text_align_center  nicdark_margin_right_40">
        <h1 class="nicdark_color_white nicdark_font_size_40 nicdark_font_size_20_all_iphone nicdark_line_height_20_all_iphone">
            <strong>12</strong></h1>
        <div class="nicdark_section nicdark_height_5"></div>
        <p class="nicdark_color_white nicdark_font_size_10_all_iphone">ARTIGOS</p>
    </div>

    <div class="nicdark_display_inline_block nicdark_text_align_center nicdark_margin_right_40">
        <h1 class="nicdark_color_white nicdark_font_size_40 nicdark_font_size_20_all_iphone nicdark_line_height_20_all_iphone">
            <strong>2</strong></h1>
        <div class="nicdark_section nicdark_height_5"></div>
        <p class="nicdark_color_white nicdark_font_size_10_all_iphone">PROJETOS</p>
    </div>

    <div class="nicdark_display_inline_block nicdark_text_align_center">
        <h1 class="nicdark_color_white nicdark_font_size_40 nicdark_font_size_20_all_iphone nicdark_line_height_20_all_iphone">
            <strong>200</strong></h1>
        <div class="nicdark_section nicdark_height_5"></div>
        <p class="nicdark_color_white nicdark_font_size_10_all_iphone">CITAÇÕES</p>
    </div>
@endsection
@section('breadcrumb-current', $professor->name)
@section('background-subheader-url', asset('site/img/parallax/img3.jpg'))
        @section('content')
            <div class="nicdark_container nicdark_clearfix">
                <div class="nicdark_width_100_percentage">

                    <div class="nicdark_section nicdark_height_30"></div>

                    <!--START corse-->
                    <div class="nicdark_width_66_percentage nicdark_width_100_percentage_ipad_port nicdark_width_100_percentage_all_iphone nicdark_float_left">

                        <div class="nicdark_section nicdark_padding_15 nicdark_box_sizing_border_box">


                            <h2><strong>Biografia</strong></h2>
                            <div class="nicdark_section nicdark_height_20"></div>

                            <div class="nicdark_width_50_percentage nicdark_width_100_percentage_all_iphone nicdark_float_left ">
                                <p class="nicdark_padding_10 nicdark_padding_0_all_iphone nicdark_padding_left_0"><span class="nicdark_font_size_70 nicdark_float_left nicdark_padding_28 nicdark_line_height_30 nicdark_first_font"></span>{{html_entity_decode($professor->description)}}</p>
                            </div>

                            <div class="nicdark_width_50_percentage nicdark_width_100_percentage_all_iphone nicdark_float_left">
                                <p class="nicdark_padding_10 nicdark_padding_0_all_iphone nicdark_padding_right_0">
                                    <img alt="" class="nicdark_section" src="{{asset($professor->avatar)}}"></p>
                            </div>
                            <img alt="" class="nicdark_section" src="$docente->avatar">

                            <div class="nicdark_section nicdark_height_40"></div>


                            <div class="nicdark_section">



                                <!--START tab-->
                                <div class="nicdark_tabs ui-tabs ui-widget ui-widget-content ui-corner-all">
                                    <ul class="nicdark_list_style_none nicdark_margin_0 nicdark_padding_0 nicdark_section nicdark_border_bottom_2_solid_grey ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
                                        <li class="nicdark_display_inline_block ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="tabs-1" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true">
                                            <h4>
                                                <a class="nicdark_outline_0 nicdark_padding_20 nicdark_padding_right_10 nicdark_display_inline_block nicdark_first_font nicdark_color_greydark ui-tabs-anchor" href="#tabs-1" tabindex="-1" id="ui-id-1" role="presentation">Últimos Artigos</a>
                                                <a class="nicdark_display_inline_block nicdark_bg_grey nicdark_margin_right_20 nicdark_border_1_solid_grey nicdark_first_font nicdark_padding_8 nicdark_border_radius_3 nicdark_font_size_13" href="#">5</a>
                                            </h4>
                                        </li>
                                        <li class="nicdark_display_inline_block ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-2" aria-labelledby="ui-id-2" aria-selected="false" aria-expanded="false">
                                            <h4>
                                                <a class="nicdark_outline_0 nicdark_padding_20 nicdark_padding_right_10 nicdark_display_inline_block nicdark_first_font nicdark_color_greydark ui-tabs-anchor" href="#tabs-2" tabindex="-1" id="ui-id-2" role="presentation">Projetos</a>
                                                <a class="nicdark_display_inline_block nicdark_bg_grey nicdark_margin_right_20 nicdark_border_1_solid_grey nicdark_first_font nicdark_padding_8 nicdark_border_radius_3 nicdark_font_size_13" href="#">9</a>
                                            </h4>
                                        </li>
                                    </ul>

                                    <div class="nicdark_section nicdark_height_20"></div>

                                    <div class="nicdark_section ui-tabs-panel ui-widget-content ui-corner-bottom" id="tabs-1" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false" style="display: block;">


                                        <div class="nicdark_section nicdark_box_sizing_border_box nicdark_overflow_hidden nicdark_overflow_x_auto nicdark_cursor_move_responsive">
                                            <table class="nicdark_section">
                                                <thead>
                                                <tr class="nicdark_border_bottom_1_solid_grey">
                                                    <td class="nicdark_padding_20 nicdark_width_20_percentage">
                                                        <h6 class="nicdark_text_transform_uppercase">Artigo</h6>
                                                    </td>
                                                    <td class="nicdark_padding_20 nicdark_width_30_percentage nicdark_display_none_all_iphone">

                                                    </td>
                                                    <td class="nicdark_padding_20 nicdark_width_20_percentage nicdark_display_none_all_iphone">
                                                        <h6 class="nicdark_text_transform_uppercase">AVALIAÇÃO</h6>
                                                    </td>
                                                    <td class="nicdark_padding_20 nicdark_width_10_percentage">

                                                    </td>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @for ($i = 0; $i < 3; $i++)
                                                <tr class="nicdark_border_bottom_1_solid_grey">
                                                    <td class="nicdark_padding_20">
                                                        <img alt="" class="nicdark_section" src="{{asset('site/img/courses/img33.jpg')}}">
                                                    </td>
                                                    <td class="nicdark_padding_20">
                                                        <h4><strong>History of Philosophy</strong></h4>
                                                    </td>
                                                    <td class="nicdark_padding_20 nicdark_display_none_all_iphone">

                                                        <img alt="" class="" width="15" src="{{asset('site/img/icons/icon-star-full.svg')}}">
                                                        <img alt="" class="" width="15" src="{{asset('site/img/icons/icon-star-full.svg')}}">
                                                        <img alt="" class="" width="15" src="{{asset('site/img/icons/icon-star-full.svg')}}">
                                                        <img alt="" class="" width="15" src="{{asset('site/img/icons/icon-star-half.svg')}}">
                                                        <img alt="" class="nicdark_margin_right_10" width="15" src="{{asset('site/img/icons/icon-star.svg')}}">

                                                    </td>
                                                    <td class="nicdark_padding_20">
                                                        <a class="nicdark_display_inline_block nicdark_color_white nicdark_bg_blue nicdark_first_font nicdark_padding_8 nicdark_border_radius_3 nicdark_font_size_13" href="#">LER</a>
                                                    </td>
                                                </tr>
                                                @endfor
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>

                                    <div class="nicdark_section ui-tabs-panel ui-widget-content ui-corner-bottom" id="tabs-2" aria-labelledby="ui-id-2" role="tabpanel" aria-hidden="true" style="display: block;">


                                        <div class="nicdark_section">


                                            <!--START attendes-->
                                            <div class="nicdark_section">

                                                @for ($i = 0; $i < 4; $i++)
                                                <!--START preview-->
                                                <div class="nicdark_width_25_percentage nicdark_width_50_percentage_all_iphone nicdark_padding_10 nicdark_float_left nicdark_box_sizing_border_box">
                                                    <div class="nicdark_section nicdark_box_sizing_border_box">


                                                        <div class="nicdark_section nicdark_position_relative">

                                                            <img alt="" class="nicdark_section" src="{{asset('site/img/courses/single/img1.jpg')}}">

                                                            <div class="nicdark_bg_greydark_alpha_gradient_3 nicdark_position_absolute nicdark_left_0 nicdark_height_100_percentage nicdark_width_100_percentage nicdark_box_sizing_border_box">

                                                                <div class="nicdark_position_absolute nicdark_bottom_20 nicdark_width_100_percentage nicdark_padding_botttom_0 nicdark_padding_20 nicdark_box_sizing_border_box nicdark_text_align_center">
                                                                    <h5 class="nicdark_color_white"><strong>Sustentabilidade Social</strong></h5>
                                                                </div>

                                                            </div>

                                                        </div>



                                                    </div>
                                                </div>
                                                <!--END preview-->
                                                @endfor

                                            </div>
                                            <!--END attendes-->




                                        </div>






                                    </div>



                                </div>
                                <!--END tab-->
                            </div>
                        </div>


                        <div class="nicdark_section nicdark_height_50"></div>


                    </div>

                    <div class="nicdark_width_33_percentage nicdark_width_100_percentage_ipad_port nicdark_width_100_percentage_all_iphone nicdark_float_left">

                        <div class="nicdark_section nicdark_padding_15 nicdark_box_sizing_border_box">

                        <table class="nicdark_section">
                                        <tbody>
                                            <tr class="nicdark_border_bottom_2_solid_grey">
                                                <td class="nicdark_padding_20 "><img alt="" class="" width="40" src="{{asset('site/img/icons/icon-email-grey.svg')}}"></td>
                                                <td class="nicdark_padding_20 "><h4 class=" nicdark_text_align_right">Email: {{($professor->email)}}</h4></td>
                                            </tr>
                                            <tr class="nicdark_border_bottom_2_solid_grey">
                                                <td class="nicdark_padding_20"><img alt="" class="" width="40" src="{{asset('site/img/icons/icon-mobile-grey.svg')}}"></td>
                                                <td class="nicdark_padding_20"><h4 class=" nicdark_text_align_right">Phone: {{($professor->phone)}}</h4></td>
                                            </tr>
                                            <tr class="nicdark_border_bottom_2_solid_grey">
                                                <td class="nicdark_padding_20 "><img alt="" class="" width="40" src="{{asset('site/img/icons/icon-skype-grey.svg')}}"></td>
                                                <td class="nicdark_padding_20 "><h4 class=" nicdark_text_align_right">Skype: {{($professor->skype)}}</h4></td>
                                            </tr>
                                            <tr class="nicdark_border_bottom_2_solid_grey">
                                                <td class="nicdark_padding_20 "><img alt="" class="" width="40" src="{{asset('site/img/icons/icon-link-grey.svg')}}"></td>
                                                <td class="nicdark_padding_20 "><h4 class=" nicdark_text_align_right">Web: {{($professor->web)}}</h4></td>
                                            </tr>
                                            <tr>
                                                <td class="nicdark_padding_20 "><img alt="" class="" width="40" src="{{asset('site/img/icons/icon-pin-grey.svg')}}"></td>
                                                <td class="nicdark_padding_20 "><h4 class=" nicdark_text_align_right">Local: {{($professor->location)}}</h4></td>
                                            </tr>
                                        </tbody>
                                    </table>

                            <div class="nicdark_section nicdark_height_40"></div>

                            <div class="nicdark_section nicdark_bg_white nicdark_border_1_solid_grey">

                                <div class="nicdark_section nicdark_padding_20 nicdark_box_sizing_border_box nicdark_bg_grey nicdark_border_bottom_1_solid_grey nicdark_text_align_center">


                                    <h3 class=""><strong>Questionamentos</strong></h3>
                                </div>
                                <div class="nicdark_section nicdark_padding_10 nicdark_box_sizing_border_box">

                                    <div class="nicdark_section">
                                        <div class="nicdark_width_100_percentage nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left">
                                            <input class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0"
                                                   type="text" placeholder="Nome completo">
                                        </div>

                                    </div>
                                    <div class="nicdark_section">
                                        <div class="nicdark_width_100_percentage nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left">
                                            <input class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0"
                                                   type="text" placeholder="Email">
                                        </div>

                                    </div>
                                    <div class="nicdark_section">
                                        <div class="nicdark_width_100_percentage nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left">
                                            <textarea rows="4"
                                                      class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0"
                                                      placeholder="Mensagem"></textarea>
                                        </div>
                                    </div>
                                    <div class="nicdark_section">
                                        <div class="nicdark_width_100_percentage nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left">
                                            <a class="nicdark_display_inline_block nicdark_text_align_center nicdark_box_sizing_border_box nicdark_width_100_percentage nicdark_color_white nicdark_bg_violet nicdark_first_font nicdark_padding_10_20 nicdark_border_radius_3 "
                                               href="contact-1.php">ENVIAR</a>
                                        </div>
                                    </div>

                                </div>

                            </div>


                        </div>


                    </div>

                </div>

                <div class="nicdark_section nicdark_border_top_1_solid_grey">

                    <!--start nicdark_container-->
                    <div class="nicdark_container nicdark_clearfix">

                        <div class="nicdark_section nicdark_height_50"></div>

                        <div class="grid grid_12">
                            <h2><strong>Cursos Correlacionados</strong></h2>
                        </div>


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

                                                <div class="nicdark_width_100_percentage nicdark_width_100_percentage_all_iphone nicdark_float_left">
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


                    </div>
                    <!--end container-->

                </div>
            </div>
@endsection
