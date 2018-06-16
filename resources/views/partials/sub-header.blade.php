@if(url()->current() == route('docente.single', 'slug'))
<div class="nicdark_section nicdark_background_size_cover nicdark_background_position_center" style="background-image:url(@yield('background-subheader-url'));">

    <div class="nicdark_section nicdark_bg_greydark_alpha_gradient_2">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">


            <div class="nicdark_section nicdark_height_200"></div>


            <div class="grid grid_7">


                <div class="nicdark_display_table nicdark_float_left nicdark_display_none_all_iphone">

                    <div class="nicdark_display_table_cell nicdark_vertical_align_middle">
                        <img alt="" class="nicdark_margin_right_20 nicdark_border_radius_100_percentage " width="150" src="@yield('docente-img')">
                    </div>

                    <div class="nicdark_display_table_cell nicdark_vertical_align_middle">
                        <strong class="nicdark_color_white nicdark_font_size_40 nicdark_first_font">@yield('sub-header-title')</strong>


                        <div class="nicdark_display_inline_block nicdark_margin_left_20">
                            <img alt="" width="20" class="nicdark_margin_right_10" src="{{asset('site/img/icons/icon-twitter-white.svg')}}">
                            <img alt="" width="20" class="nicdark_margin_right_10" src="{{asset('site/img/icons/icon-pinterest-white.svg')}}">
                            <img alt="" width="20" class="nicdark_margin_right_10" src="{{asset('site/img/icons/icon-linkedin-white.svg')}}">
                            <img alt="" width="20" class="nicdark_margin_right_10" src="{{asset('site/img/icons/icon-google-white.svg')}}">
                            <img alt="" width="20" class="nicdark_margin_right_10" src="{{asset('site/img/icons/icon-instagram-white.svg')}}">
                        </div>


                        <div class="nicdark_section nicdark_height_5"></div>
                        <h3 class="nicdark_color_white">@yield('docente-sub-title')</h3>
                        <div class="nicdark_section nicdark_height_30"></div>
                        <a class="nicdark_display_inline_block nicdark_color_white nicdark_border_1_solid_white nicdark_first_font nicdark_padding_10_20 nicdark_border_radius_3 nicdark_margin_right_20 nicdark_transition_all_08_ease  " href="#">@yield('subhead-btn1')</a>
                        <a class="nicdark_display_inline_block nicdark_color_white nicdark_border_1_solid_white nicdark_first_font nicdark_padding_10_20 nicdark_border_radius_3 nicdark_transition_all_08_ease  " href="#">@yield('subhead-btn2')</a>
                    </div>

                </div>


                <!--START responsive-->
                <div class="nicdark_section nicdark_display_none nicdark_display_block_all_iphone nicdark_text_align_center">

                    <img alt="" class=" nicdark_border_radius_100_percentage " width="100" src="{{asset('site/img/avatar/avatar-chef-2.jpg')}}">
                    <div class="nicdark_section nicdark_height_10"></div>

                    <div class="nicdark_section nicdark_text_align_center">
                        <img alt="" width="15" class="nicdark_margin_right_10" src="{{asset('site/img/icons/icon-twitter-white.svg')}}">
                        <img alt="" width="15" class="nicdark_margin_right_10" src="{{asset('site/img/icons/icon-pinterest-white.svg')}}">
                        <img alt="" width="15" class="nicdark_margin_right_10" src="{{asset('site/img/icons/icon-linkedin-white.svg')}}">
                        <img alt="" width="15" class="nicdark_margin_right_10" src="{{asset('site/img/icons/icon-google-white.svg')}}">
                        <img alt="" width="15" class="" src="{{asset('site/img/icons/icon-instagram-white.svg')}}">
                    </div>

                    <div class="nicdark_section nicdark_height_10"></div>
                    <h2><strong class="nicdark_color_white nicdark_first_font">@yield('sub-header-title')</strong></h2>
                    <div class="nicdark_section nicdark_height_5"></div>
                    <h5 class="nicdark_color_white">@yield('docente-sub-title')</h5>

                    <div class="nicdark_section nicdark_height_20"></div>

                    <a class="nicdark_display_inline_block nicdark_color_white nicdark_border_1_solid_white nicdark_first_font nicdark_padding_8 nicdark_border_radius_3 nicdark_margin_right_20 nicdark_font_size_13 nicdark_transition_all_08_ease nicdark_border_1_solid_green_hover nicdark_bg_green_hover" href="#">@yield('subhead-btn1')</a>
                    <a class="nicdark_display_inline_block nicdark_color_white nicdark_border_1_solid_white nicdark_first_font nicdark_padding_8 nicdark_border_radius_3 nicdark_font_size_13 nicdark_transition_all_08_ease nicdark_border_1_solid_green_hover nicdark_bg_green_hover" href="#">@yield('subhead-btn2')</a>

                </div>
                <!--END responsive-->



                <div class="nicdark_section nicdark_height_20"></div>


            </div>




            <div class="grid grid_5 nicdark_text_align_right nicdark_text_align_left_responsive nicdark_text_align_center_all_iphone">

                @yield('subhead-left-side')

            </div>




        </div>
        <!--end container-->

    </div>

</div>
@else
@yield('background-subheader')
<div class="nicdark_section nicdark_bg_greydark_alpha_gradient_2 {{empty($post->figure) ? 'hidden' : ''}}">
    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">
        <div class="nicdark_section nicdark_height_300"></div>
        <div class="grid grid_12">
            <strong class="nicdark_color_white nicdark_font_size_60 nicdark_font_size_40_responsive nicdark_first_font">@yield('sub-header-title')</strong>
            <div class="nicdark_section nicdark_height_20"></div>
        </div>
    </div>
    <!--end container-->
</div>
@endif
@if(empty($post->figure) && url()->current() == route('post.index'))
    <div class="nicdark_section nicdark_bg_grey nicdark_border_bottom_1_solid_grey">
        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="grid grid_12">


                <a href="#">Home</a>
                <img alt="" class="nicdark_margin_left_10 nicdark_margin_right_10" width="10"
                     src="{{asset('site/img/icons/icon-next-grey.svg')}}">
                <a href="#">@yield('breadcrumb-current')</a>


            </div>


        </div>
        <!--end container-->

    </div>
@elseif(!empty($post->figure))
    <div class="nicdark_section nicdark_bg_grey nicdark_border_bottom_1_solid_grey">
        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="grid grid_12">

                <a href="{{route('index')}}">Home</a>
                <img alt="" class="nicdark_margin_left_10 nicdark_margin_right_10" width="10"
                     src="{{asset('site/img/icons/icon-next-grey.svg')}}">
                <a href="#">@yield('breadcrumb-current')</a>

            </div>


        </div>
        <!--end container-->
    </div>
@elseif(url()->current() == route('docente.single',  $slug ?? '' ))
    <div class="nicdark_section nicdark_bg_grey nicdark_border_bottom_1_solid_grey">
        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="grid grid_12">


                <a href="{{route('index')}}">Home</a>
                <img alt="" class="nicdark_margin_left_10 nicdark_margin_right_10" width="10"
                     src="{{asset('site/img/icons/icon-next-grey.svg')}}">
                <a href="{{route('docente.index')}}">Docentes</a>
                <img alt="" class="nicdark_margin_left_10 nicdark_margin_right_10" width="10"
                     src="{{asset('site/img/icons/icon-next-grey.svg')}}">
                <a href="#">@yield('breadcrumb-current')</a>


            </div>


        </div>
        <!--end container-->
    </div>

@else
        <div class="nicdark_section nicdark_bg_grey nicdark_border_bottom_1_solid_grey">
            <!--start nicdark_container-->
            <div class="nicdark_container nicdark_clearfix">

                <div class="grid grid_12">


                    <a href="{{route('index')}}">Home</a>
                    <img alt="" class="nicdark_margin_left_10 nicdark_margin_right_10" width="10"
                         src="{{asset('site/img/icons/icon-next-grey.svg')}}">
                    <a href="#">@yield('breadcrumb-current')</a>


                </div>


            </div>
            <!--end container-->

        </div>
<div class="nicdark_section nicdark_height_50 nicdark_bg_white"></div>
@endif