@extends('layouts.site')
@section('title','Docentes')
@section('sub-header-title','Docentes')
@section('breadcrumb-current', 'Docentes')
@section('background-subheader')
    <div class="nicdark_section nicdark_background_size_cover nicdark_background_position_center_bottom"
         style="background-image:url('../site/img/parallax/img2.jpg'); background-position: center center;">
        @endsection
        @section('content')
            <div class="nicdark_container nicdark_clearfix">
                <div class="nicdark_width_100_percentage">

                    @foreach ($docentes as $docente)
                    <!--START preview-->
                    <div class="grid grid_3">

                        <div class="nicdark_section">

                            <!--start preview-->
                            <div class="nicdark_section ">

                                <!--image-->
                                <div class="nicdark_section nicdark_position_relative">

                                    <img alt="" class="nicdark_section" src="{{asset($docente->img)}}">

                                    <div class="nicdark_bg_greydark_alpha_gradient nicdark_position_absolute nicdark_left_0 nicdark_height_100_percentage nicdark_width_100_percentage nicdark_padding_20 nicdark_box_sizing_border_box">

                                        <div class="nicdark_position_absolute nicdark_bottom_20">
                                            <div class="nicdark_display_inline_block">
                                                <img alt="" width="15" class="nicdark_margin_right_10" src="{{asset('site/img/icons/icon-twitter-white.svg')}}">
                                                <img alt="" width="15" class="nicdark_margin_right_10" src="{{asset('site/img/icons/icon-pinterest-white.svg')}}">
                                                <img alt="" width="15" class="nicdark_margin_right_10" src="{{asset('site/img/icons/icon-linkedin-white.svg')}}">
                                                <img alt="" width="15" class="nicdark_margin_right_10" src="{{asset('site/img/icons/icon-google-white.svg')}}">
                                                <img alt="" width="15" class="nicdark_margin_right_10" src="{{asset('site/img/icons/icon-instagram-white.svg')}}">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--image-->


                                <div class="nicdark_section nicdark_padding_20 nicdark_box_sizing_border_box">

                                    <h2><strong>{{ $docente->nome }}</strong></h2>
                                    <div class="nicdark_section nicdark_height_10"></div>
                                    <h6 class="nicdark_text_transform_uppercase nicdark_color_grey">Professor</h6>
                                    <div class="nicdark_section nicdark_height_20"></div>
                                    <p>{{ $docente->descricao }}</p>
                                    <div class="nicdark_section nicdark_height_20"></div>
                                    <a class="nicdark_display_inline_block nicdark_color_white nicdark_bg_blue nicdark_first_font nicdark_padding_8 nicdark_border_radius_3 nicdark_font_size_13" href="{{route('docente.single', ['slug' => $docente->url])}}">Ver Perfil</a>

                                </div>

                            </div>
                            <!--start preview-->

                        </div>

                    </div>
                    <!--END preview-->
                    @endforeach


                    <div class="nicdark_section nicdark_height_30"></div>


                    <div class="nicdark_section nicdark_text_align_center">
                        <a class="nicdark_display_inline_block nicdark_color_greydark nicdark_first_font nicdark_padding_10 nicdark_font_size_20" href="#"><strong>1</strong></a>
                        <a class="nicdark_display_inline_block nicdark_first_font nicdark_padding_10 nicdark_font_size_20" href="#"><strong>2</strong></a>
                        <a class="nicdark_display_inline_block nicdark_first_font nicdark_padding_10 nicdark_font_size_20" href="#"><strong>3</strong></a>
                        <a class="nicdark_display_inline_block nicdark_first_font nicdark_padding_10 nicdark_font_size_20" href="#"><strong>4</strong></a>
                        <a class="nicdark_display_inline_block nicdark_first_font nicdark_padding_10 nicdark_font_size_20" href="#"><strong>5</strong></a>
                    </div>

                    <div class="nicdark_section nicdark_height_30"></div>


                </div>
            </div>
@endsection
