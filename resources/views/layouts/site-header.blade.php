<!--START for demo-->
<!--END for demo-->

<!--START nicdark_site-->
<div class="nicdark_site">
    <!--START nicdark_site_fullwidth-->
    <div class="nicdark_site_fullwidth nicdark_site_fullwidth_boxed nicdark_clearfix">
        <!--START search container-->
        <div class="nicdark_display_table nicdark_transition_all_08_ease nicdark_navigation_3_search_content nicdark_bg_greydark_alpha_9 nicdark_position_fixed nicdark_width_100_percentage nicdark_height_100_percentage nicdark_z_index_1_negative nicdark_opacity_0">
            <!--close-->
            <div class="nicdark_cursor_zoom_out nicdark_navigation_3_close_search_content nicdark_width_100_percentage nicdark_height_100_percentage nicdark_position_absolute nicdark_z_index_1_negative"></div>
            <div class="nicdark_display_table_cell nicdark_vertical_align_middle nicdark_text_align_center">
                <div class="nicdark_width_700 nicdark_width_250_all_iphone nicdark_display_inline_block">
                    <div class="nicdark_width_80_percentage nicdark_padding_5 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
                        <input class="nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0 nicdark_first_font nicdark_color_white nicdark_placeholder_color_white nicdark_font_size_30 nicdark_line_height_30"
                               type="text" placeholder="Search">
                    </div>
                    <div class="nicdark_width_20_percentage nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
                        <a class="nicdark_width_55 nicdark_height_55 nicdark_display_inline_block nicdark_text_align_center nicdark_box_sizing_border_box nicdark_bg_violet nicdark_padding_15 nicdark_border_radius_3 "
                           href="#">

                            <img alt="" width="25" src="{{asset('site/img/icons/icon-search-white.svg')}}">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--END search container-->

        <!--START menu responsive-->
        <div class="nicdark_navigation_3_sidebar_content nicdark_padding_40 nicdark_box_sizing_border_box nicdark_overflow_hidden nicdark_overflow_y_auto nicdark_transition_all_08_ease nicdark_bg_green nicdark_height_100_percentage nicdark_position_fixed nicdark_width_300 nicdark_right_300_negative nicdark_z_index_9">

            <img alt="" width="25"
                 class="nicdark_close_navigation_3_sidebar_content nicdark_cursor_pointer nicdark_right_20 nicdark_top_20 nicdark_position_absolute"
                 src="{{asset('site/img/icons/icon-close-white.svg')}}">


            <div class="nicdark_navigation_3_sidebar">
                @include('partials.site-nav-header');
            </div>


        </div>
        <!--END menu responsive-->

        <div class="nicdark_section">

            <div class="nicdark_section bg-primary">

                <!--start nicdark_container-->
                <div class="nicdark_container nicdark_clearfix">

                    <div class="grid grid_6 nicdark_padding_botttom_10 nicdark_padding_top_10 nicdark_text_align_center_responsive">


                        <div class="nicdark_navigation_top_header_3">
                            <ul>
                                <li>
                                    <img alt="" class="nicdark_margin_right_10 " width="15"
                                         src="{{asset('site/img/icons/icon-world-white.svg')}}"
                                         style="transform: translateY(2px);">
                                    <a class=" nicdark_line_height_18 nicdark_color_white" href="#">PT</a>

                                    <ul class="nicdark_sub_menu">
                                        <li><a href="#">Inglês</a></li>
                                    </ul>

                                </li>
                                <li>

                                    <img alt="" class="nicdark_margin_right_10" width="15"
                                         src="{{asset('site/img/icons/icon-share-white.svg')}}"
                                         style="transform: translateY(2px);">
                                    <a class=" nicdark_line_height_18 nicdark_color_white" href="#">SOCIAL</a>

                                    <ul class="nicdark_sub_menu">
                                        <li>
                                            <a target="_blank"
                                               href="https://www.facebook.com/pitagorasfaculdade">Facebook</a></li>
                                        <li>
                                            <a target="_blank" href="https://twitter.com/pitagorasfacul">Twitter</a>
                                        </li>
                                        <li>
                                            <a target="_blank"
                                               href="https://www.instagram.com/pitagorasitz">Instagram</a>
                                        </li>
                                    </ul>

                                    <a target="_blank" href="https://www.facebook.com/pitagorasfaculdade">
                                        <img alt=""
                                             class="nicdark_margin_left_10 nicdark_display_none_all_responsive"
                                             width="12"
                                             src="{{asset('site/img/icons/icon-facebook-white.svg')}}">
                                    </a>
                                    <a target="_blank" href="https://twitter.com/pitagorasfacul">
                                        <img alt=""
                                             class="nicdark_margin_left_10 nicdark_display_none_all_responsive"
                                             width="12"
                                             src="{{asset('site/img/icons/icon-twitter-white.svg')}}">
                                    </a>
                                    <a target="_blank" href="https://www.instagram.com/pitagorasitz">
                                        <img alt=""
                                             class="nicdark_margin_left_10 nicdark_display_none_all_responsive"
                                             width="12"
                                             src="{{asset('site/img/icons/icon-instagram-white.svg')}}">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="grid grid_6 nicdark_text_align_right nicdark_border_top_1_solid_bluedark_responsive nicdark_text_align_center_responsive nicdark_padding_botttom_10 nicdark_padding_top_10">
                        <div class="nicdark_navigation_top_header_3">
                            <ul>
                                @if(auth()->user())
                                    <li>
                                        <img alt="" class="nicdark_margin_right_10 nicdark_float_left" width="15"
                                             src="{{asset('site/img/icons/icon-user-white.svg')}}">
                                        <a class="nicdark_color_white"
                                           href="#">{{auth()->user()->name}}</a>
                                        <ul class="nicdark_sub_menu"
                                            style="margin-left: -18px; width: 125px; text-align: left;">
                                            <li><a href="{{route('user.show', auth()->user()->name)}}">Perfil</a></li>
                                            @if(isAdmin(auth()->user()))
                                                <li><a href="{{route('admin.index')}}">Painel</a></li>
                                            @endif
                                            <li>
                                                <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                                    Sair
                                                </a>
                                            </li>
                                            <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                                  style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </ul>

                                    </li>
                                @else
                                    <li>
                                        <img alt="" class="nicdark_margin_right_10 nicdark_float_left" width="15"
                                             src="{{asset('site/img/icons/icon-user-white.svg')}}">
                                        <a class="nicdark_color_white" href="{{url('admin')}}">LOGIN</a>
                                    </li>
                                @endif
                                <li>
                                    <img alt="" class="nicdark_margin_right_10 nicdark_float_left" width="15"
                                         src="{{asset('site/img/icons/icon-login-white.svg')}}">
                                    <a class="nicdark_color_white" href="#">CADASTRAR</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--end container-->
            </div>
        </div>
        <div class="nicdark_section nicdark_position_relative ">

            <div class="nicdark_section nicdark_bg_white">


                <!--start nicdark_container-->
                <div class="nicdark_container nicdark_clearfix nicdark_position_relative nicdart_custom_header">

                    <div class="grid grid_12 nicdark_display_none_all_responsive">

                        <div class="nicdark_section nicdark_height_10"></div>

                        <!--LOGO-->
                        <a href="{{route('index')}}">
                            <img alt="" class="nicdark_position_absolute logo_custom nicdark_left_15"
                                 width="130" src="{{asset('site/img/logos/logo-pitagoras.jpg')}}">
                        </a>


                        <!--right icons menu-->
                        <div class="nicdark_float_right nicdark_width_100  nicdark_position_relative nicdark_height_25 nicdark_display_none_all_responsive">

                            <a class="nicdark_navigation_3_open_search_content" href="#">
                                <img alt=""
                                     class="nicdark_opacity_05_hover nicdark_transition_all_08_ease nicdark_position_absolute nicdark_top_3_negative nicdark_right_0"
                                     width="25" src="{{asset('site/img/icons/icon-search-grey.svg')}}">
                            </a>

                        </div>
                        <!--right icons menu-->


                        <div class="nicdark_navigation_3 nicdark_text_align_right nicdark_float_right nicdark_display_none_all_responsive">
                            @include('partials.site-nav-header')
                        </div>


                        <div class="nicdark_section nicdark_height_10"></div>

                    </div>


                    <!--RESPONSIVE-->
                    <div class="nicdark_width_50_percentage nicdark_text_align_center_all_iphone nicdark_width_100_percentage_all_iphone nicdark_float_left nicdark_display_none nicdark_display_block_responsive">
                        <div class="nicdark_section nicdark_height_20"></div>
                        <a href="#"><img alt="" width="170" class=""
                                         src="{{asset('site/img/logos/logo-pitagoras.jpg')}}"></a>
                    </div>
                    <div class="nicdark_width_50_percentage nicdark_width_100_percentage_all_iphone nicdark_float_left nicdark_display_none nicdark_display_block_responsive">
                        <div class="nicdark_section nicdark_height_20"></div>
                        <div class="nicdark_float_right nicdark_width_100_percentage nicdark_text_align_right nicdark_text_align_center_all_iphone">


                            <a class="nicdark_open_navigation_3_sidebar_content" href="#">
                                <img alt="" class="nicdark_margin_right_20" width="25"
                                     src="{{asset('site/img/icons/icon-menu-grey.svg')}}">
                            </a>

                            <div class="nicdark_position_relative nicdark_display_inline_block">
                                <a href="#"><img alt="" width="25" src="{{asset('site/img/icons/icon-cart-grey.svg')}}"></a>
                                <a class="nicdark_bg_violet nicdark_color_white nicdark_padding_5 nicdark_border_radius_100_percentage nicdark_font_size_8 nicdark_line_height_5 nicdark_position_absolute nicdark_left_0 nicdark_top_10_negative nicdark_margin_left_20"
                                   href="#">2</a>
                            </div>

                            <img alt="" class="nicdark_margin_left_20 nicdark_navigation_3_open_search_content"
                                 width="25" src="{{asset('site/img/icons/icon-search-grey.svg')}}">

                        </div>
                        <div class="nicdark_section nicdark_height_20"></div>
                    </div>
                    <!--RESPONSIVE-->


                </div>
                <!--end container-->

            </div>
        </div>
        <!--end header-area-->

    @if(url()->current() == route('index'))
        <!--Slider-home-area-->
            <div class="nicdark_section nicdark_background_size_cover nicdark_background_position_center"
                 style="background-image:url(site/img/section/bg-esc.jpg); background-position: bottom center;">

                <div class="nicdark_section bg-gradient">


                    <div class="nicdark_section nicdark_height_380"></div>

                    <!--start nicdark_container-->
                    <div class="nicdark_container nicdark_clearfix nicdark_display_none_all_iphone">


                        <div class="grid grid_12 tx-top60-lg">


                            <strong class="nicdark_color_white nicdark_font_size_30 nicdark_first_font">Desenvolvendo habilidades a partir de experiências em:</strong>

                            <!--START typed words-->
                            <div class="nicdark_section ">


                                <div class="nicdark_typed_strings">
                                    <p><strong class="nicdark_color_white nicdark_font_size_30 nicdark_first_font">pesquisa</strong></p>
                                    <p><strong class="nicdark_color_white nicdark_font_size_30 nicdark_first_font">desenvolvimento web</strong></p>
                                    <p><strong class="nicdark_color_white nicdark_font_size_30 nicdark_first_font">analise de requisitos</strong></p>
                                    <p><strong class="nicdark_color_white nicdark_font_size_30 nicdark_first_font">banco de dados</strong></p>
                                    <p><strong class="nicdark_color_white nicdark_font_size_30 nicdark_first_font">designer</strong></p>
                                    <p><strong class="nicdark_color_white nicdark_font_size_30 nicdark_first_font">arquitetar soluções</strong></p>
                                    <p><strong class="nicdark_color_white nicdark_font_size_30 nicdark_first_font">trabalhar com padrões</strong></p>
                                </div>
                                <span class="nicdark_typed nicdark_padding_botttom_5" style="white-space:pre;"></span>

                            </div>
                            <!--END typed words-->

                        </div>

                    </div>
                    <!--end container-->


                    <div class="nicdark_section nicdark_height_50"></div>

                </div>
            </div>
            <!--end Slider-home-area-->
        @elseif(
        url()->current() == route('curso.index') ||
        url()->current() == route('docente.index'))
            @include('partials.sub-header')
        @elseif(
        url()->current() == route('post.show', 'slug') ||
        url()->current() == route('admin.notice.show', 'slug')
        )
            @include('partials.sub-header-one')
        @else
            @include('partials.sub-header')
        @endif
    </div>
</div>
