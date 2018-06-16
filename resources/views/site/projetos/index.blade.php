@extends('layouts.site')
@section('title','Projetos')
@section('sub-header-title','Projetos')
@section('breadcrumb-current', 'Projetos')
@section('background-subheader')
<div class="nicdark_section nicdark_background_size_cover nicdark_background_position_center_bottom"
    style="background-image:url('../site/img/parallax/img3.jpg'); background-position: center center;">
@endsection
@section('content')
<div class="nicdark_section ">                        

    <div class="nicdark_container nicdark_clearfix">

        <div class="grid grid_4 ">
        
            <!--START service-->
            <div class="nicdark_section nicdark_position_relative">
                <img alt="" class="nicdark_position_absolute" width="50" src="{{asset('site/img/icons/icon-employee.svg')}}">
                <div class="nicdark_section nicdark_padding_left_70 nicdark_box_sizing_border_box">
                    <h2><strong>Escritorio Escola</strong></h2>
                    <div class="nicdark_section nicdark_height_20"></div>
                    <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean egestas magna at porttitor vehicula nullam augue.</p>
                    <div class="nicdark_section nicdark_height_20"></div>
                    <a class="nicdark_display_inline_block nicdark_color_white nicdark_first_font nicdark_bg_blue nicdark_padding_8 nicdark_border_radius_3 nicdark_font_size_13" href="#">READ MORE</a>

                </div>
            </div>
            <!--END services-->

        </div>


    </div>

</div>
<div class="nicdark_section nicdark_height_50"></div>
@endsection
