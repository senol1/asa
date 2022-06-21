<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AZA | @yield('title')</title>
    @section('stylesheets')
        <!-- CUSTOM STYLE -->
        <link href="{{ asset('style.css') }}" rel="stylesheet">
        <!-- THEME TYPO -->
        <link href="{{ asset("css/themetypo.css") }}" rel="stylesheet">
        <!-- BOOTSTRAP -->
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <!-- COLOR FILE -->
        <link href="{{ asset('css/color.css') }}" rel="stylesheet">
        <!-- FONT AWESOME -->
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <!-- BX SLIDER -->
        <link href="{{ asset('css/jquery.bxslider.css') }}" rel="stylesheet">

        <link href="{{ asset('css/bootstrap-slider.css') }}" rel="stylesheet">

        <link href="{{ asset('css/widget.css') }}" rel="stylesheet">
        <!-- responsive -->
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
        <!-- Component -->
        <link href="{{ asset('js/dl-menu/component.css') }}" rel="stylesheet">
    @show
</head>
<body>

    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>

    <div class="wrapper kode-home-page">
        <!--HEADER START-->
        @include('layouts.header')
        <!--HEADER END-->

        <!--BANNER START-->
        @section('banner')
            @include('layouts.banner')
        @show
        <!--BANNER END-->

        <!--BUT NOW START-->
        <section class="buy-template">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Plateforme d'écriture en ASA</h2>
                        <p>En mode test pour vous famaliariser avec cet Alphabet</p>
                    </div>
                    <div class="col-md-6">
                        <div class="kode-btns">
                            <a href="#">En savoir plus</a>
                            <a href="{{ route('asa') }}">Testez maintenant</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--BUT NOW END-->

        <div class="kode-content">
            @yield('content')
        </div>
        <div class="kode-newsletters">
            <div class="container">
                <!--SECTION CONTENT START-->
                <div class="section-content white">
                    <h2>Abonnez-vous à notre bulletin d'information pour connaître les dernières nouvelles.</h2>
                    <p>Mettez vous à jour dès maintenant ! En remplissant le formulaire ci-dessous, les dernières informations sur un millier de livres seront envoyées directement à votre courrier électronique chaque semaine.</p>
                </div>
                <!--SECTION CONTENT END-->
                <div class="input-container">
                    <input type="text" placeholder="Abonnez-vous">
                    <button>S'abonner</button>
                </div>
            </div>
        </div>

        @include('layouts.footer')

        <div class="copyrights">
            <div class="container">
                <p>Copyrights © {{ date("Y") }} AZA. All rights reserved</p>
            </div>
        </div>

    </div>
    


    @section('javascripts')
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.bxslider.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap-slider.js') }}"></script>
        <script src="{{ asset('js/waypoints.min.js') }}"></script> 
        <script src="{{ asset('js/jquery.counterup.min.js') }}"></script> 
        <script src="{{ asset('js/dl-menu/modernizr.custom.js') }}"></script>
        <script src="{{ asset('js/dl-menu/jquery.dlmenu.js') }}"></script>
        <script src="{{ asset('js/classie.js') }}"></script> 
        <script src="{{ asset('js/functions.js') }}"></script>
    @show
</body>
</html>