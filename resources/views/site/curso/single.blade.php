@extends('layouts.site')
@section('title','Cursos')
@section('sub-header-title','Cursos')
@section('breadcrumb-current', 'Cursos')
@section('background-subheader')
    <div class="nicdark_section nicdark_background_size_cover nicdark_background_position_center_bottom"
         style="background-image:url('../site/img/parallax/img3.jpg'); background-position: center center;">
        @endsection
        @section('content')
            <div class="nicdark_container nicdark_clearfix">
                <div class="nicdark_width_100_percentage">

                    <div class="nicdark_section nicdark_height_30"></div>

                    <!--START corse-->
                    <div class="nicdark_width_66_percentage nicdark_width_100_percentage_ipad_port nicdark_width_100_percentage_all_iphone nicdark_float_left">

                        <div class="nicdark_section nicdark_padding_15 nicdark_box_sizing_border_box">

                            <h1>Contemporary History of our Country</h1>
                            <div class="nicdark_section nicdark_height_20"></div>


                            <div class="nicdark_width_25_percentage nicdark_width_50_percentage_all_iphone nicdark_float_left">
                                <div class="nicdark_display_table nicdark_float_left">

                                    <div class="nicdark_display_table_cell nicdark_vertical_align_middle">
                                        <img alt="" class="nicdark_margin_right_10 nicdark_border_radius_100_percentage"
                                             width="40" src="{{asset('site/img/avatar/avatar-chef-2.jpg')}}">
                                    </div>

                                    <div class="nicdark_display_table_cell nicdark_vertical_align_middle">
                                        <p class="nicdark_font_size_13">Corrdenador</p>
                                        <div class="nicdark_section nicdark_height_5"></div>
                                        <h5 class="">Everton Doe</h5>
                                    </div>

                                </div>
                            </div>
                            <div class="nicdark_width_25_percentage nicdark_width_50_percentage_all_iphone nicdark_float_left">

                                <div class="nicdark_section nicdark_height_5"></div>
                                <div class="nicdark_display_table nicdark_float_left">

                                    <div class="nicdark_display_table_cell nicdark_vertical_align_middle">
                                        <img alt="" class="nicdark_margin_right_10" width="30"
                                             src="{{asset('site/img/icons/icon-category-grey.svg')}}">
                                    </div>

                                    <div class="nicdark_display_table_cell nicdark_vertical_align_middle">
                                        <p class="nicdark_font_size_13">Categoria</p>
                                        <div class="nicdark_section nicdark_height_5"></div>
                                        <h5 class="">Exatas</h5>
                                    </div>

                                </div>
                            </div>

                            <div class="nicdark_width_50_percentage nicdark_display_none_all_iphone nicdark_float_right">

                                <div class="nicdark_section nicdark_height_5"></div>
                                <div class="nicdark_section nicdark_height_5"></div>

                                <div class="nicdark_display_table nicdark_float_right">
                                    <a href="#"><img alt="" class="" width="30"
                                                     src="{{asset('site/img/icons/icon-print-grey.svg')}}"></a>
                                </div>
                            </div>


                            <div class="nicdark_section nicdark_height_20"></div>


                            <div class="nicdark_section nicdark_position_relative">

                                <img alt="" class="nicdark_section" src="{{asset('site/img/courses/img3.jpg')}}">

                            </div>


                            <div class="nicdark_section nicdark_height_40"></div>


                            <div class="nicdark_section">


                                <!--START tab-->
                                <div class="nicdark_tabs ui-tabs ui-widget ui-widget-content ui-corner-all">
                                    <ul class="nicdark_list_style_none nicdark_margin_0 nicdark_padding_0 nicdark_section nicdark_border_bottom_2_solid_grey ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all"
                                        role="tablist">
                                        <li class="nicdark_display_inline_block ui-state-default ui-corner-top"
                                            role="tab" tabindex="-1" aria-controls="tabs-1" aria-labelledby="ui-id-1"
                                            aria-selected="false" aria-expanded="false"><h4><a
                                                        class="nicdark_outline_0 nicdark_padding_20 nicdark_display_inline_block nicdark_first_font nicdark_color_greydark ui-tabs-anchor"
                                                        href="#tabs-1" role="presentation" tabindex="-1" id="ui-id-1">Descrição</a>
                                            </h4></li>
                                        <li class="nicdark_display_inline_block ui-state-default ui-corner-top"
                                            role="tab" tabindex="-1" aria-controls="tabs-3" aria-labelledby="ui-id-3"
                                            aria-selected="false" aria-expanded="false"><h4><a
                                                        class="nicdark_outline_0 nicdark_padding_20 nicdark_display_inline_block nicdark_first_font nicdark_color_greydark ui-tabs-anchor"
                                                        href="#tabs-2" role="presentation" tabindex="-1" id="ui-id-2">Professores</a>
                                            </h4></li>
                                        <li class="nicdark_display_inline_block ui-state-default ui-corner-top"
                                            role="tab" tabindex="-1" aria-controls="tabs-4" aria-labelledby="ui-id-4"
                                            aria-selected="false" aria-expanded="false"><h4><a
                                                        class="nicdark_outline_0 nicdark_padding_20 nicdark_display_inline_block nicdark_first_font nicdark_color_greydark ui-tabs-anchor"
                                                        href="#tabs-3" role="presentation" tabindex="-1" id="ui-id-3">Comentários</a>
                                            </h4></li>
                                        <li class="nicdark_display_inline_block ui-state-default ui-corner-top"
                                            role="tab" tabindex="-1" aria-controls="tabs-5" aria-labelledby="ui-id-5"
                                            aria-selected="false" aria-expanded="false"><h4><a
                                                        class="nicdark_outline_0 nicdark_padding_20 nicdark_display_inline_block nicdark_first_font nicdark_color_greydark ui-tabs-anchor"
                                                        href="#tabs-4" role="presentation" tabindex="-1" id="ui-id-4">Avaliações</a>
                                            </h4></li>

                                    </ul>

                                    <div class="nicdark_section nicdark_height_40"></div>

                                    <div class="nicdark_section ui-tabs-panel ui-widget-content ui-corner-bottom"
                                         id="tabs-1" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="true"
                                         style="display: none;">

                                        <h3><strong>Descrição do Curso</strong></h3>
                                        <div class="nicdark_section nicdark_height_20"></div>
                                        <p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat
                                            dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem
                                            sit amet urna feugiat rutrum. Nam nulla ipsum, venenatis malesuada felis
                                            quis, ultricies convallis neque. Pellentesque tristique fringilla tempus.
                                            Vivamus bibendum nibh in dolor pharetra, a euismod nulla dignissim. Aenean
                                            viverra tincidunt nibh, in imperdiet nunc. Suspendisse eu ante pretium,
                                            consectetur leo at, congue quam. Nullam hendrerit porta ante vitae
                                            tristique. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                                            posuere cubilia Curae; Vestibulum ligula libero, feugiat faucibus mattis
                                            eget, pulvinar et ligula.</p>
                                        <div class="nicdark_section nicdark_height_40"></div>
                                        <h3><strong>Requirements</strong></h3>
                                        <div class="nicdark_section nicdark_height_20"></div>
                                        <p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat
                                            dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem
                                            sit amet urna feugiat rutrum. Nam nulla ipsum, venenatis malesuada felis
                                            quis, ultricies convallis neque. Pellentesque tristique fringilla tempus.
                                            Vivamus bibendum nibh in dolor pharetra, a euismod nulla dignissim. Aenean
                                            viverra tincidunt nibh, in imperdiet nunc. Suspendisse eu ante pretium,
                                            consectetur leo at, congue quam. Nullam hendrerit porta ante vitae
                                            tristique. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                                            posuere cubilia Curae; Vestibulum ligula libero, feugiat faucibus mattis
                                            eget, pulvinar et ligula.</p>
                                        <div class="nicdark_section nicdark_height_50"></div>

                                        <!--start social-->
                                        <div class="nicdark_section">
                                            <a href="#"><img alt="" width="40" class="nicdark_margin_right_10"
                                                             src="{{asset('site/img/icons/icon-facebook-color.svg')}}"></a>
                                            <a href="#"><img alt="" width="40" class="nicdark_margin_right_10"
                                                             src="{{asset('site/img/icons/icon-twitter-color.svg')}}"></a>
                                            <a href="#"><img alt="" width="40" class="nicdark_margin_right_10"
                                                             src="{{asset('site/img/icons/icon-pinterest-color.svg')}}"></a>
                                            <a href="#"><img alt="" width="40" class="nicdark_margin_right_10"
                                                             src="{{asset('site/img/icons/icon-linkedin-color.svg')}}"></a>
                                            <a href="#"><img alt="" width="40" class="nicdark_margin_right_10"
                                                             src="{{asset('site/img/icons/icon-google-color.svg')}}"></a>
                                            <a href="#"><img alt="" width="40" class="nicdark_margin_right_10"
                                                             src="{{asset('site/img/icons/icon-mail-color.svg')}}"></a>
                                        </div>
                                        <!--end-->

                                    </div>

                                    <div class="nicdark_section ui-tabs-panel ui-widget-content ui-corner-bottom"
                                         id="tabs-2" aria-labelledby="ui-id-2" role="tabpanel" aria-hidden="true"
                                         style="display: none;">


                                        <h3><strong>Our Main Teachers</strong></h3>
                                        <div class="nicdark_section nicdark_height_30"></div>

                                        <div class="nicdark_section">


                                            <!--START teacher-->
                                            <div class="nicdark_section nicdark_border_top_1_solid_grey nicdark_padding_40_20 nicdark_box_sizing_border_box">


                                                <div class="nicdark_display_table nicdark_float_left">

                                                    <div class="nicdark_display_table_cell nicdark_vertical_align_middle">
                                                        <img alt=""
                                                             class="nicdark_width_50_all_iphone nicdark_margin_right_20 nicdark_border_radius_100_percentage "
                                                             width="100" src="img/avatar/avatar-chef-2.jpg">
                                                    </div>

                                                    <div class="nicdark_display_table_cell nicdark_vertical_align_middle">
                                                        <h3 class=""><strong>John Doe</strong></h3>
                                                        <div class="nicdark_section nicdark_height_5"></div>
                                                        <h5 class="nicdark_color_grey">Teacher</h5>
                                                        <div class="nicdark_section nicdark_height_20"></div>

                                                        <div class="nicdark_section">
                                                            <img alt="" width="25" class="nicdark_margin_right_10"
                                                                 src="img/icons/icon-facebook-color.svg">
                                                            <img alt="" width="25" class="nicdark_margin_right_10"
                                                                 src="img/icons/icon-twitter-color.svg">
                                                            <img alt="" width="25" class="nicdark_margin_right_10"
                                                                 src="img/icons/icon-pinterest-color.svg">
                                                            <img alt="" width="25" class="nicdark_margin_right_10"
                                                                 src="img/icons/icon-linkedin-color.svg">
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="nicdark_section nicdark_height_20"></div>

                                                <p class="nicdark_section">Vivamus volutpat eros pulvinar velit laoreet,
                                                    sit amet egestas erat dignissim. Sed quis rutrum tellus, sit amet
                                                    viverra felis. Cras sagittis sem sit amet urna feugiat rutrum. Nam
                                                    nulla ipsum. </p>


                                            </div>
                                            <!--END teacher-->


                                            <!--START teacher-->
                                            <div class="nicdark_section nicdark_border_top_1_solid_grey nicdark_padding_40_20 nicdark_box_sizing_border_box">


                                                <div class="nicdark_display_table nicdark_float_left">

                                                    <div class="nicdark_display_table_cell nicdark_vertical_align_middle">
                                                        <img alt=""
                                                             class="nicdark_width_50_all_iphone nicdark_margin_right_20 nicdark_border_radius_100_percentage "
                                                             width="100" src="img/avatar/avatar-chef-3.jpg">
                                                    </div>

                                                    <div class="nicdark_display_table_cell nicdark_vertical_align_middle">
                                                        <h3 class=""><strong>Jane Rightness</strong></h3>
                                                        <div class="nicdark_section nicdark_height_5"></div>
                                                        <h5 class="nicdark_color_grey">Teacher</h5>
                                                        <div class="nicdark_section nicdark_height_20"></div>

                                                        <div class="nicdark_section">
                                                            <img alt="" width="25" class="nicdark_margin_right_10"
                                                                 src="img/icons/icon-facebook-color.svg">
                                                            <img alt="" width="25" class="nicdark_margin_right_10"
                                                                 src="img/icons/icon-twitter-color.svg">
                                                            <img alt="" width="25" class="nicdark_margin_right_10"
                                                                 src="img/icons/icon-pinterest-color.svg">
                                                            <img alt="" width="25" class="nicdark_margin_right_10"
                                                                 src="img/icons/icon-linkedin-color.svg">
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="nicdark_section nicdark_height_20"></div>

                                                <p class="nicdark_section">Vivamus volutpat eros pulvinar velit laoreet,
                                                    sit amet egestas erat dignissim. Sed quis rutrum tellus, sit amet
                                                    viverra felis. Cras sagittis sem sit amet urna feugiat rutrum. Nam
                                                    nulla ipsum. </p>


                                            </div>
                                            <!--END teacher-->


                                            <!--START teacher-->
                                            <div class="nicdark_section nicdark_border_top_1_solid_grey nicdark_padding_40_20 nicdark_box_sizing_border_box">


                                                <div class="nicdark_display_table nicdark_float_left">

                                                    <div class="nicdark_display_table_cell nicdark_vertical_align_middle">
                                                        <img alt=""
                                                             class="nicdark_width_50_all_iphone nicdark_margin_right_20 nicdark_border_radius_100_percentage "
                                                             width="100" src="img/avatar/avatar-chef-4.jpg">
                                                    </div>

                                                    <div class="nicdark_display_table_cell nicdark_vertical_align_middle">
                                                        <h3 class=""><strong>Nick Hopiness</strong></h3>
                                                        <div class="nicdark_section nicdark_height_5"></div>
                                                        <h5 class="nicdark_color_grey">Teacher</h5>
                                                        <div class="nicdark_section nicdark_height_20"></div>

                                                        <div class="nicdark_section">
                                                            <img alt="" width="25" class="nicdark_margin_right_10"
                                                                 src="img/icons/icon-facebook-color.svg">
                                                            <img alt="" width="25" class="nicdark_margin_right_10"
                                                                 src="img/icons/icon-twitter-color.svg">
                                                            <img alt="" width="25" class="nicdark_margin_right_10"
                                                                 src="img/icons/icon-pinterest-color.svg">
                                                            <img alt="" width="25" class="nicdark_margin_right_10"
                                                                 src="img/icons/icon-linkedin-color.svg">
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="nicdark_section nicdark_height_20"></div>

                                                <p class="nicdark_section">Vivamus volutpat eros pulvinar velit laoreet,
                                                    sit amet egestas erat dignissim. Sed quis rutrum tellus, sit amet
                                                    viverra felis. Cras sagittis sem sit amet urna feugiat rutrum. Nam
                                                    nulla ipsum. </p>


                                            </div>
                                            <!--END teacher-->


                                        </div>


                                    </div>
                                    <div class="nicdark_section ui-tabs-panel ui-widget-content ui-corner-bottom"
                                         id="tabs-3" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true"
                                         style="display: none;">


                                        <div class="nicdark_section">


                                            <h3><strong>2 Comments</strong></h3>
                                            <div class="nicdark_section nicdark_height_30"></div>


                                            <!--START comment preview-->
                                            <div class="nicdark_section nicdark_border_top_1_solid_grey nicdark_padding_40_20 nicdark_box_sizing_border_box">
                                                <div class="nicdark_display_table nicdark_float_left">
                                                    <img alt=""
                                                         class="nicdark_display_none_all_iphone nicdark_margin_right_10 nicdark_display_table_cell nicdark_vertical_align_middle nicdark_border_radius_100_percentage"
                                                         width="40" src="img/avatar/avatar-chef-1.jpg">
                                                    <p class="  nicdark_display_table_cell nicdark_vertical_align_middle ">
                                                        <span class="nicdark_color_greydark nicdark_first_font nicdark_margin_right_20"><strong>John Doe</strong></span>September
                                                        4, 2015 at 1:24 pm</p>
                                                </div>

                                                <div class="nicdark_section nicdark_height_20"></div>
                                                <div class="nicdark_section">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et
                                                        ipsum sit amet ex pulvinar mattis. Pellentesque vitae purus
                                                        viverra, aliquet lacus in, fringilla massa. Suspendisse ac est a
                                                        nisi aliquet sollicitudin. Interdum et malesuada fames.</p>
                                                </div>
                                                <div class="nicdark_section nicdark_height_20"></div>

                                                <div class="nicdark_section">
                                                    <a class="nicdark_display_inline_block nicdark_color_white nicdark_first_font nicdark_bg_blue nicdark_padding_8 nicdark_border_radius_3 nicdark_font_size_13"
                                                       href="#">REPLY</a>
                                                </div>

                                            </div>
                                            <!--END comment preview-->

                                            <!--START comment preview-->
                                            <div class="nicdark_section nicdark_border_top_1_solid_grey nicdark_padding_40_20 nicdark_box_sizing_border_box">
                                                <div class="nicdark_display_table nicdark_float_left">
                                                    <img alt=""
                                                         class="nicdark_display_none_all_iphone nicdark_margin_right_10 nicdark_display_table_cell nicdark_vertical_align_middle nicdark_border_radius_100_percentage"
                                                         width="40" src="img/avatar/avatar-chef-2.jpg">
                                                    <p class="  nicdark_display_table_cell nicdark_vertical_align_middle ">
                                                        <span class="nicdark_color_greydark nicdark_first_font nicdark_margin_right_20"><strong>John Doe</strong></span>September
                                                        4, 2015 at 1:24 pm</p>
                                                </div>

                                                <div class="nicdark_section nicdark_height_20"></div>
                                                <div class="nicdark_section">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et
                                                        ipsum sit amet ex pulvinar mattis. Pellentesque vitae purus
                                                        viverra, aliquet lacus in, fringilla massa. Suspendisse ac est a
                                                        nisi aliquet sollicitudin. Interdum et malesuada fames.</p>
                                                </div>
                                                <div class="nicdark_section nicdark_height_20"></div>

                                                <div class="nicdark_section">
                                                    <a class="nicdark_display_inline_block nicdark_color_white nicdark_first_font nicdark_bg_blue nicdark_padding_8 nicdark_border_radius_3 nicdark_font_size_13"
                                                       href="#">REPLY</a>
                                                </div>

                                            </div>
                                            <!--END comment preview-->


                                            <div class="nicdark_section nicdark_border_top_1_solid_grey nicdark_padding_40_20 nicdark_box_sizing_border_box">

                                                <h3><strong>Leave a Comment</strong></h3>
                                                <div class="nicdark_section nicdark_height_30"></div>


                                                <div class="nicdark_section nicdark_box_sizing_border_box">

                                                    <!--form-->
                                                    <div class="nicdark_section">
                                                        <div class="nicdark_width_50_percentage nicdark_padding_10 nicdark_padding_left_0 nicdark_box_sizing_border_box nicdark_float_left">
                                                            <input class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_bottom_width_2 nicdark_border_right_width_0 nicdark_border_left_width_0"
                                                                   type="text" placeholder="Name">
                                                        </div>
                                                        <div class="nicdark_width_50_percentage nicdark_padding_10 nicdark_padding_right_0 nicdark_box_sizing_border_box nicdark_float_left">
                                                            <input class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_bottom_width_2 nicdark_border_right_width_0 nicdark_border_left_width_0"
                                                                   type="text" placeholder="Surname">
                                                        </div>
                                                    </div>
                                                    <div class="nicdark_section">
                                                        <div class="nicdark_width_50_percentage nicdark_padding_10 nicdark_padding_left_0 nicdark_box_sizing_border_box nicdark_float_left">
                                                            <input class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_bottom_width_2 nicdark_border_right_width_0 nicdark_border_left_width_0"
                                                                   type="text" placeholder="Email">
                                                        </div>
                                                        <div class="nicdark_width_50_percentage nicdark_padding_10 nicdark_padding_right_0 nicdark_box_sizing_border_box nicdark_float_left">
                                                            <input class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_bottom_width_2 nicdark_border_right_width_0 nicdark_border_left_width_0"
                                                                   type="text" placeholder="Subject">
                                                        </div>
                                                    </div>
                                                    <div class="nicdark_section">
                                                        <div class="nicdark_width_100_percentage nicdark_padding_10 nicdark_padding_right_0 nicdark_padding_left_0 nicdark_box_sizing_border_box nicdark_float_left">
                                                            <textarea rows="7"
                                                                      class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_bottom_width_2 nicdark_border_right_width_0 nicdark_border_left_width_0"
                                                                      placeholder="Message"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="nicdark_section">
                                                        <div class="nicdark_width_100_percentage nicdark_padding_10 nicdark_padding_right_0 nicdark_padding_left_0 nicdark_box_sizing_border_box nicdark_float_left">
                                                            <a class="nicdark_display_inline_block nicdark_text_align_center nicdark_box_sizing_border_box  nicdark_color_white nicdark_bg_violet nicdark_first_font nicdark_padding_10_20 nicdark_border_radius_3 "
                                                               href="#">SEND NOW</a>
                                                        </div>
                                                    </div>
                                                    <!--form-->

                                                </div>


                                            </div>


                                        </div>


                                    </div>
                                    <div class="nicdark_section ui-tabs-panel ui-widget-content ui-corner-bottom"
                                         id="tabs-4" aria-labelledby="ui-id-4" role="tabpanel" aria-hidden="true"
                                         style="display: none;">


                                        <div class="nicdark_section">


                                            <h3><strong>Course Reviews</strong></h3>
                                            <div class="nicdark_section nicdark_height_30"></div>


                                            <div class="nicdark_section">

                                                <div class="nicdark_width_30_percentage nicdark_width_100_percentage_all_iphone nicdark_border_radius_3 nicdark_float_left nicdark_text_align_center nicdark_bg_greydark nicdark_padding_30 nicdark_box_sizing_border_box">

                                                    <h1 class="nicdark_font_size_70 nicdark_color_white">
                                                        <strong>5</strong></h1>

                                                    <div class="nicdark_section nicdark_height_20"></div>

                                                    <div class="nicdark_section ">
                                                        <img alt="" class="" width="15"
                                                             src="img/icons/icon-star-full-yellow.svg">
                                                        <img alt="" class="" width="15"
                                                             src="img/icons/icon-star-full-yellow.svg">
                                                        <img alt="" class="" width="15"
                                                             src="img/icons/icon-star-full-yellow.svg">
                                                        <img alt="" class="" width="15"
                                                             src="img/icons/icon-star-full-yellow.svg">
                                                        <img alt="" class="nicdark_margin_right_10" width="15"
                                                             src="img/icons/icon-star-full-yellow.svg">
                                                    </div>

                                                    <p>3 Ratings</p>

                                                </div>


                                                <div class="nicdark_width_70_percentage nicdark_width_100_percentage_all_iphone nicdark_padding_left_40 nicdark_padding_left_0_all_iphone nicdark_float_left nicdark_box_sizing_border_box">

                                                    <div class=" nicdark_border_radius_3 nicdark_section nicdark_border_1_solid_grey nicdark_padding_20 nicdark_box_sizing_border_box">
                                                        <table class="nicdark_section">
                                                            <tbody>
                                                            <tr>
                                                                <td class="nicdark_width_20_percentage "><h5><strong>5
                                                                            Stars</strong></h5></td>
                                                                <td class="nicdark_width_70_percentage ">
                                                                    <div class="nicdark_section nicdark_bg_yellow nicdark_height_10 nicdark_border_radius_3"></div>
                                                                </td>
                                                                <td class="nicdark_width_10_percentage nicdark_text_align_right">
                                                                    <p class="nicdark_font_size_14 nicdark_line_height_30">
                                                                        3</p></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="nicdark_width_20_percentage "><h5><strong>4
                                                                            Stars</strong></h5></td>
                                                                <td class="nicdark_width_70_percentage ">
                                                                    <div class="nicdark_section nicdark_bg_grey_3 nicdark_height_10 nicdark_border_radius_3"></div>
                                                                </td>
                                                                <td class="nicdark_width_10_percentage nicdark_text_align_right">
                                                                    <p class="nicdark_font_size_14 nicdark_line_height_30">
                                                                        0</p></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="nicdark_width_20_percentage "><h5><strong>3
                                                                            Stars</strong></h5></td>
                                                                <td class="nicdark_width_70_percentage ">
                                                                    <div class="nicdark_section nicdark_bg_grey_3 nicdark_height_10 nicdark_border_radius_3"></div>
                                                                </td>
                                                                <td class="nicdark_width_10_percentage nicdark_text_align_right">
                                                                    <p class="nicdark_font_size_14 nicdark_line_height_30">
                                                                        0</p></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="nicdark_width_20_percentage "><h5><strong>2
                                                                            Stars</strong></h5></td>
                                                                <td class="nicdark_width_70_percentage ">
                                                                    <div class="nicdark_section nicdark_bg_grey_3 nicdark_height_10 nicdark_border_radius_3"></div>
                                                                </td>
                                                                <td class="nicdark_width_10_percentage nicdark_text_align_right">
                                                                    <p class="nicdark_font_size_14 nicdark_line_height_30">
                                                                        0</p></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="nicdark_width_20_percentage "><h5><strong>1
                                                                            Stars</strong></h5></td>
                                                                <td class="nicdark_width_70_percentage ">
                                                                    <div class="nicdark_section nicdark_bg_grey_3 nicdark_height_10 nicdark_border_radius_3"></div>
                                                                </td>
                                                                <td class="nicdark_width_10_percentage nicdark_text_align_right">
                                                                    <p class="nicdark_font_size_14 nicdark_line_height_30">
                                                                        0</p></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                </div>


                                            </div>


                                            <div class="nicdark_section nicdark_height_30"></div>


                                            <!--START comment preview-->
                                            <div class="nicdark_section nicdark_border_top_1_solid_grey nicdark_padding_40_20 nicdark_box_sizing_border_box">
                                                <div class="nicdark_display_table nicdark_float_left">
                                                    <img alt=""
                                                         class="nicdark_display_none_all_iphone nicdark_margin_right_10 nicdark_display_table_cell nicdark_vertical_align_middle nicdark_border_radius_100_percentage"
                                                         width="40" src="img/avatar/avatar-chef-1.jpg">
                                                    <p class="  nicdark_display_table_cell nicdark_vertical_align_middle ">
                                                        <span class="nicdark_color_greydark nicdark_first_font nicdark_margin_right_20"><strong>John Doe</strong></span>
                                                    </p>

                                                    <div class="nicdark_display_table_cell nicdark_vertical_align_middle ">
                                                        <img alt="" class="" width="15"
                                                             src="img/icons/icon-star-full-yellow.svg">
                                                        <img alt="" class="" width="15"
                                                             src="img/icons/icon-star-full-yellow.svg">
                                                        <img alt="" class="" width="15"
                                                             src="img/icons/icon-star-full-yellow.svg">
                                                        <img alt="" class="" width="15"
                                                             src="img/icons/icon-star-full-yellow.svg">
                                                        <img alt="" class="nicdark_margin_right_10" width="15"
                                                             src="img/icons/icon-star-full-yellow.svg">
                                                    </div>

                                                </div>

                                                <div class="nicdark_section nicdark_height_20"></div>
                                                <div class="nicdark_section">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et
                                                        ipsum sit amet ex pulvinar mattis. Pellentesque vitae purus
                                                        viverra, aliquet lacus in, fringilla massa. Suspendisse ac est a
                                                        nisi aliquet sollicitudin. Interdum et malesuada fames.</p>
                                                </div>

                                            </div>
                                            <!--END comment preview-->

                                            <!--START comment preview-->
                                            <div class="nicdark_section nicdark_border_top_1_solid_grey nicdark_padding_40_20 nicdark_box_sizing_border_box">
                                                <div class="nicdark_display_table nicdark_float_left">
                                                    <img alt=""
                                                         class="nicdark_display_none_all_iphone nicdark_margin_right_10 nicdark_display_table_cell nicdark_vertical_align_middle nicdark_border_radius_100_percentage"
                                                         width="40" src="img/avatar/avatar-chef-2.jpg">
                                                    <p class="  nicdark_display_table_cell nicdark_vertical_align_middle ">
                                                        <span class="nicdark_color_greydark nicdark_first_font nicdark_margin_right_20"><strong>Nick Hope</strong></span>
                                                    </p>

                                                    <div class="nicdark_display_table_cell nicdark_vertical_align_middle ">
                                                        <img alt="" class="" width="15"
                                                             src="img/icons/icon-star-full-yellow.svg">
                                                        <img alt="" class="" width="15"
                                                             src="img/icons/icon-star-full-yellow.svg">
                                                        <img alt="" class="" width="15"
                                                             src="img/icons/icon-star-full-yellow.svg">
                                                        <img alt="" class="" width="15"
                                                             src="img/icons/icon-star-full-yellow.svg">
                                                        <img alt="" class="nicdark_margin_right_10" width="15"
                                                             src="img/icons/icon-star-full-yellow.svg">
                                                    </div>

                                                </div>

                                                <div class="nicdark_section nicdark_height_20"></div>
                                                <div class="nicdark_section">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et
                                                        ipsum sit amet ex pulvinar mattis. Pellentesque vitae purus
                                                        viverra, aliquet lacus in, fringilla massa. Suspendisse ac est a
                                                        nisi aliquet sollicitudin. Interdum et malesuada fames.</p>
                                                </div>

                                            </div>
                                            <!--END comment preview-->

                                            <!--START comment preview-->
                                            <div class="nicdark_section nicdark_border_top_1_solid_grey nicdark_padding_40_20 nicdark_box_sizing_border_box">
                                                <div class="nicdark_display_table nicdark_float_left">
                                                    <img alt=""
                                                         class="nicdark_display_none_all_iphone nicdark_margin_right_10 nicdark_display_table_cell nicdark_vertical_align_middle nicdark_border_radius_100_percentage"
                                                         width="40" src="img/avatar/avatar-chef-3.jpg">
                                                    <p class="  nicdark_display_table_cell nicdark_vertical_align_middle ">
                                                        <span class="nicdark_color_greydark nicdark_first_font nicdark_margin_right_20"><strong>Jane Dark</strong></span>
                                                    </p>

                                                    <div class="nicdark_display_table_cell nicdark_vertical_align_middle ">
                                                        <img alt="" class="" width="15"
                                                             src="img/icons/icon-star-full-yellow.svg">
                                                        <img alt="" class="" width="15"
                                                             src="img/icons/icon-star-full-yellow.svg">
                                                        <img alt="" class="" width="15"
                                                             src="img/icons/icon-star-full-yellow.svg">
                                                        <img alt="" class="" width="15"
                                                             src="img/icons/icon-star-full-yellow.svg">
                                                        <img alt="" class="nicdark_margin_right_10" width="15"
                                                             src="img/icons/icon-star-full-yellow.svg">
                                                    </div>

                                                </div>

                                                <div class="nicdark_section nicdark_height_20"></div>
                                                <div class="nicdark_section">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et
                                                        ipsum sit amet ex pulvinar mattis. Pellentesque vitae purus
                                                        viverra, aliquet lacus in, fringilla massa. Suspendisse ac est a
                                                        nisi aliquet sollicitudin. Interdum et malesuada fames.</p>
                                                </div>

                                            </div>
                                            <!--END comment preview-->


                                        </div>


                                    </div>

                                </div>
                                <!--END tab-->


                            </div>
                        </div>


                        <div class="nicdark_section nicdark_height_50"></div>


                    </div>

                    <div class="nicdark_width_33_percentage nicdark_width_100_percentage_ipad_port nicdark_width_100_percentage_all_iphone nicdark_float_left">

                        <div class="nicdark_section nicdark_height_90" style="padding-top: 5px"></div>

                        <div class="nicdark_section nicdark_padding_15 nicdark_box_sizing_border_box">


                            <div class="nicdark_section nicdark_height_20"></div>

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

                                                <div class="nicdark_width_80_percentage nicdark_width_80_percentage_all_iphone nicdark_float_left">
                                                    <div class="nicdark_display_table nicdark_float_left">

                                                        <a class="nicdark_display_inline_block nicdark_color_white pull-left bg-primary nicdark_margin_top_20_all_iphone nicdark_first_font nicdark_padding_8 nicdark_border_radius_3 nicdark_font_size_13"
                                                           href="#">Matutino</a>
                                                        <a class="nicdark_display_inline_block nicdark_color_white bg-secondary nicdark_margin_top_20_all_iphone nicdark_first_font nicdark_padding_8 nicdark_border_radius_3 nicdark_font_size_13"
                                                           href="#">Vespertino</a>
                                                        <a class="nicdark_display_inline_block pull-right nicdark_color_white nicdark_bg_violet nicdark_margin_top_20_all_iphone nicdark_first_font nicdark_padding_8 nicdark_border_radius_3 nicdark_font_size_13"
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
