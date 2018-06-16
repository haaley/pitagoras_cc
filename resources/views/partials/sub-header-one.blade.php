@yield('background-subheader')
<div class="nicdark_section nicdark_bg_greydark_alpha_gradient_2 {{empty($post->figure) ? 'hidden' : ''}}">
    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">


        <div class="nicdark_section nicdark_height_400"></div>

        <div class="nicdark_width_80_percentage nicdark_width_100_percentage_all_iphone nicdark_float_left">
            <strong class="nicdark_color_white nicdark_font_size_40 nicdark_first_font">{{$post->title}}</strong>

            <div class="nicdark_section nicdark_height_20"></div>
        </div>

        <div class="nicdark_width_20_percentage nicdark_width_100_percentage_all_iphone nicdark_display_none_all_iphone nicdark_float_left nicdark_text_align_right">

            <div class="nicdark_section nicdark_height_20"></div>
            <div class="nicdark_display_table nicdark_float_right">
                <div class="nicdark_display_table_cell nicdark_vertical_align_bottom">
                    @if(isset($post->published_at) && $post->published_at)
                    <h3 class=" nicdark_color_white nicdark_display_table_cell nicdark_vertical_align_middle" style="float:right; padding-top: 6px;"> &nbsp; {{$post->published_at->format('d.m.Y')}}</h3>
                    @else
                        <h3 class=" nicdark_color_white nicdark_display_table_cell nicdark_vertical_align_middle" style="float:right; padding-top: 6px;"> &nbsp; {{$post->published_at}}</h3>
                    @endif
                    <img alt="" class="nicdark_margin_right_10 nicdark_display_table_cell nicdark_vertical_align_middle " width="30" src="{{asset('site/img/icons/icon-calendar.svg')}}">
                </div>
            </div>

        </div>

        <div class="grid grid_6">

            <div class="nicdark_display_table nicdark_float_left nicdark_display_none_all_iphone">

                <div class="nicdark_display_table_cell nicdark_vertical_align_middle">
                    <img alt="" class="nicdark_margin_right_20 nicdark_border_radius_100_percentage "
                         width="150" src="{{asset('site/img/') . "/"}}@yield('sub-header-avatar') ">
                </div>

                <div class="nicdark_display_table_cell nicdark_vertical_align_middle">
                    <strong class="nicdark_color_white nicdark_font_size_40 nicdark_first_font">@yield('sub-header-author')</strong>


                    <div class="nicdark_section nicdark_height_5"></div>
                    <h3 class="nicdark_color_white">@yield('sub-header-author-detail')</h3>
                    <div class="nicdark_section nicdark_height_30"></div>
                    @yield('subhead-btn-action')
                </div>

            </div>


            <!--START responsive-->
            <div class="nicdark_section nicdark_display_none nicdark_display_block_all_iphone nicdark_text_align_center">

                <img alt="" class=" nicdark_border_radius_100_percentage " width="100"
                     src="img/avatar/avatar-chef-1.jpg">
                <div class="nicdark_section nicdark_height_10"></div>

                <div class="nicdark_section nicdark_text_align_center">
                    <img alt="" width="15" class="nicdark_margin_right_10"
                         src="img/icons/icon-twitter-white.svg">
                    <img alt="" width="15" class="nicdark_margin_right_10"
                         src="img/icons/icon-pinterest-white.svg">
                    <img alt="" width="15" class="nicdark_margin_right_10"
                         src="img/icons/icon-linkedin-white.svg">
                    <img alt="" width="15" class="nicdark_margin_right_10"
                         src="img/icons/icon-google-white.svg">
                    <img alt="" width="15" class="" src="img/icons/icon-instagram-white.svg">
                </div>

                <div class="nicdark_section nicdark_height_10"></div>
                <h2><strong class="nicdark_color_white nicdark_first_font">John Doe</strong></h2>
                <div class="nicdark_section nicdark_height_5"></div>
                <h5 class="nicdark_color_white">Food Teacher</h5>

                <div class="nicdark_section nicdark_height_20"></div>

                <a class="nicdark_display_inline_block nicdark_color_white nicdark_border_1_solid_white nicdark_first_font nicdark_padding_8 nicdark_border_radius_3 nicdark_margin_right_20 nicdark_font_size_13 nicdark_transition_all_08_ease nicdark_border_1_solid_green_hover nicdark_bg_green_hover"
                   href="#">FOLLOW ME</a>
                <a class="nicdark_display_inline_block nicdark_color_white nicdark_border_1_solid_white nicdark_first_font nicdark_padding_8 nicdark_border_radius_3 nicdark_font_size_13 nicdark_transition_all_08_ease nicdark_border_1_solid_green_hover nicdark_bg_green_hover"
                   href="#">MESSAGE ME</a>

            </div>
            <!--END responsive-->

            <div class="nicdark_section nicdark_height_20"></div>

        </div>

        <div class="grid grid_6 nicdark_text_align_right nicdark_text_align_left_responsive nicdark_text_align_center_all_iphone">

            @yield('subhead-left-side')

        </div>

    </div>
    <!--end container-->

</div>
<div class="nicdark_section nicdark_bg_grey nicdark_border_bottom_1_solid_grey">

    <!--start nicdark_breadcrumbs-->
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