@extends('layouts.site')
@section('title','Contato')
@section('sub-header-title','Contato')
@section('breadcrumb-current', 'Contato')
@section('background-subheader')
    <div class="nicdark_section nicdark_background_size_cover nicdark_background_position_center_bottom"
         style="background-image:url('../site/img/parallax/img1.jpg'); background-position: center center;">
        @endsection
        @section('content')

            <div class="nicdark_section nicdark_height_50"></div>

            <div class="nicdark_section">

                <!--start nicdark_container-->
                <div class="nicdark_container nicdark_clearfix">


                    <div class="grid grid_6">

                        <h3><strong>Entre em contato</strong></h3>
                        <div class="nicdark_section nicdark_height_20"></div>
                        <p>Estamos em um processo continuo de melhorias, claro que podemos melhorar ainda mais! Então
                            feedbacks sempre serão bem vindos! Sintam-se livres para estar nós escrevendo ou nos
                            visitando em nosso espaço dentro da Faculdade Pitágoras São Luís </p>
                        <div class="nicdark_section nicdark_height_40"></div>

                        <!--START form-->
                        <div class="nicdark_width_100_percentage nicdark_padding_10 nicdark_padding_left_0 nicdark_padding_right_0 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
                            <img alt=""
                                 class="nicdark_position_absolute nicdark_top_0 nicdark_left_0 nicdark_margin_top_20"
                                 width="15" src="{{asset('site/img/icons/icon-user-grey.svg')}}">
                            <input class="nicdark_padding_left_25 nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0"
                                   type="text" placeholder="Nome completo">
                        </div>
                        <div class="nicdark_width_100_percentage nicdark_padding_10 nicdark_padding_left_0 nicdark_padding_right_0 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
                            <img alt=""
                                 class="nicdark_position_absolute nicdark_top_0 nicdark_left_0 nicdark_margin_top_20"
                                 width="15" src="{{asset('site/img/icons/icon-email-grey.svg')}}">
                            <input class="nicdark_padding_left_25 nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0"
                                   type="text" placeholder="E-mail">
                        </div>
                        <div class="nicdark_width_100_percentage nicdark_padding_10 nicdark_padding_left_0 nicdark_padding_right_0 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
                            <img alt=""
                                 class="nicdark_position_absolute nicdark_top_0 nicdark_left_0 nicdark_margin_top_20"
                                 width="15" src="{{asset('site/img/icons/icon-pen.svg')}}">
                            <input class="nicdark_padding_left_25 nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0"
                                   type="text" placeholder="Assunto">
                        </div>
                        <div class="nicdark_section">
                            <div class="nicdark_width_100_percentage nicdark_padding_10 nicdark_padding_left_0 nicdark_padding_right_0 nicdark_box_sizing_border_box nicdark_float_left">
                                <textarea rows="6"
                                          class="nicdark_padding_left_0 nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0"
                                          placeholder="Mensagem"></textarea>
                            </div>
                        </div>
                        <div class="nicdark_section">
                            <div class="nicdark_width_100_percentage nicdark_padding_10 nicdark_padding_left_0 nicdark_padding_right_0 nicdark_box_sizing_border_box nicdark_float_left">
                                <a class="nicdark_display_inline_block nicdark_color_white nicdark_bg_blue nicdark_first_font nicdark_padding_10_20 nicdark_border_radius_3 "
                                   href="index.php">Enviar</a>
                            </div>
                        </div>
                        <!--END form-->

                        <div class="nicdark_section nicdark_height_50"></div>


                    </div>


                    <div class="grid grid_6">


                        <!--START google maps-->
                        <script type="text/javascript"
                                src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
                        <script type="text/javascript">
                            // When the window has finished loading create our google map below
                            google.maps.event.addDomListener(window, 'load', init);

                            function init() {
                                // Basic options for a simple Google Map
                                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                                var mapOptions = {
                                    // How zoomed in you want the map to start at (always required)
                                    zoom: 15,

                                    // The latitude and longitude to center the map (always required)
                                    center: new google.maps.LatLng(-2.5307668,-44.2286676), // New York

                                    // How you would like to style the map.
                                    // This is where you would paste any style found on Snazzy Maps.
                                    styles: [{
                                        "featureType": "landscape",
                                        "stylers": [{"saturation": -100}, {"lightness": 60}]
                                    }, {
                                        "featureType": "road.local",
                                        "stylers": [{"saturation": -100}, {"lightness": 40}, {"visibility": "on"}]
                                    }, {
                                        "featureType": "transit",
                                        "stylers": [{"saturation": -100}, {"visibility": "simplified"}]
                                    }, {
                                        "featureType": "administrative.province",
                                        "stylers": [{"visibility": "off"}]
                                    }, {
                                        "featureType": "water",
                                        "stylers": [{"visibility": "on"}, {"lightness": 30}]
                                    }, {
                                        "featureType": "road.highway",
                                        "elementType": "geometry.fill",
                                        "stylers": [{"color": "#ef8c25"}, {"lightness": 40}]
                                    }, {
                                        "featureType": "road.highway",
                                        "elementType": "geometry.stroke",
                                        "stylers": [{"visibility": "off"}]
                                    }, {
                                        "featureType": "poi.park",
                                        "elementType": "geometry.fill",
                                        "stylers": [{"color": "#b6c54c"}, {"lightness": 40}, {"saturation": -40}]
                                    }, {}]
                                };

                                // Get the HTML DOM element that will contain your map
                                // We are using a div with id="map" seen below in the <body>
                                var mapElement = document.getElementById('nicdark_custom_google_maps');

                                // Create the Google Map using our element and options defined above
                                var map = new google.maps.Map(mapElement, mapOptions);

                            }
                        </script>
                        <div class="nicdark_section nicdark_height_250" id="nicdark_custom_google_maps"></div>
                        <!--END google maps-->


                        <div class="nicdark_section nicdark_height_50"></div>


                        <div class="nicdark_float_left nicdark_width_100_percentage nicdark_width_100_percentage_all_iphone nicdark_padding_right_10 nicdark_padding_right_0_all_iphone nicdark_box_sizing_border_box">


                            <table class="nicdark_section ">
                                <tbody>
                                <tr class="nicdark_border_bottom_2_solid_grey">
                                    <td class="nicdark_padding_10 nicdark_text_align_left ">
                                        <h6 class="nicdark_text_transform_uppercase"><strong>Endereço :</strong></h6>
                                    </td>
                                    <td class="nicdark_padding_10 "><p class="nicdark_text_align_right">Av São Luís Rei de França</p></td>
                                </tr>
                                <tr class="nicdark_border_bottom_2_solid_grey">
                                    <td class="nicdark_padding_10 nicdark_text_align_left">
                                        <h6 class="nicdark_text_transform_uppercase"><strong>Cidade :</strong></h6>
                                    </td>
                                    <td class="nicdark_padding_10"><p class=" nicdark_text_align_right">São Luís Maranhão</p></td>
                                </tr>
                                </tbody>
                            </table>


                        </div>


                        <div class="nicdark_float_left nicdark_width_100_percentage nicdark_width_100_percentage_all_iphone nicdark_padding_left_0_all_iphone nicdark_box_sizing_border_box">

                            <table class="nicdark_section">
                                <tbody>
                                <tr class="nicdark_border_bottom_2_solid_grey">
                                    <td class="nicdark_padding_10 nicdark_text_align_left">
                                        <h6 class="nicdark_text_transform_uppercase"><strong>Phone :</strong></h6>
                                    </td>
                                    <td class="nicdark_padding_10 "><p class=" nicdark_text_align_right">00
                                            837920234</p></td>
                                </tr>
                                <tr class="">
                                    <td class="nicdark_padding_10 nicdark_text_align_left">
                                        <h6 class="nicdark_text_transform_uppercase"><strong>Email :</strong></h6>
                                    </td>
                                    <td class="nicdark_padding_10"><p class=" nicdark_text_align_right">
                                            info@foodlab.com</p></td>
                                </tr>
                                </tbody>
                            </table>


                        </div>

                        <div class="nicdark_section nicdark_height_30"></div>
                        <h3 class="nicdark_color_grey nicdark_text_align_center "><strong>Entre em contato</strong></h3>
                        <div class="nicdark_section nicdark_height_5"></div>
                        <h1 class="nicdark_font_size_60 nicdark_font_size_40_responsive nicdark_text_align_center">+ 222 555 1111</h1>


                        <div class="nicdark_section nicdark_height_50"></div>


                    </div>


                </div>
                <!--end container-->

            </div>
@endsection
