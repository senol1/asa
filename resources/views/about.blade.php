@extends('layouts.app')

@section('title') A propos de ASA @endsection

@section('banner')
    <div class="kode-inner-banner">
    	<div class="kode-page-heading">
        	<h2>A propos de ASA</h2>
            <ol class="breadcrumb">
              <li><a href="/">Accueil</a></li>
              <li class="active">A propos de ASA</li>
            </ol>
        </div>
        <div class="container">
        	<div class="banner-search">
            	<div class="row">
                	<div class="col-md-2">
                    	<h2>Rechercher<br> une publication</h2>
                    </div>
                    <div class="col-md-6">
                    	<input type="text" placeholder="Entrez le titre de la publication">
                    </div>
                    <div class="col-md-2">
                    	<select></select>
                    </div>
                    <div class="col-md-2">
                    	<button>Rechercher</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <!--BOOK GUIDE SECTION START-->
        <section>
        	<div class="container">
            	<!--SECTION CONTENT START-->
            	<div class="section-content margin-bottom-zero">
                	<h2>BIENVENUE SUR VOTRE PLATEFORME WEB ASA AFRIQUE</h2>
                </div>
                <!--SECTION CONTENT END-->
                <div class="book-guide">
                	<div class="row">
                    	<div class="col-md-5">
                        	<img src="images/about-img2.png" alt="">
                        </div>
                        <div class="col-md-7">
                        	<p class="cap">
                                <b>Alphabet de Synthèse pour l'Afrique</b>, <br>
                                Pour donner à cet alphabet toute la crédibilité requise, nous sommes passés par plusieurs phases dont : 
                            </p>
                            <p>
                                <ul>
                                    <li>
                                        Le souci depuis les années 60-70 de transcrire autrement et plus rapidement et fidèlement la langue maternelle.
                                    </li>
                                    <li>
                                        La revue des principales langues africaines et des difficultés qu'elles rencontraient dans leur écriture
                                        comme lecture, comme le passage d'une langue à une autre.
                                    </li>
                                    <li>
                                        Le dialogue avec la plupart des spécialistes et membres de la communauté scientifique, ce qui a permis 
                                        d'améliorer le corpus initial et de stabiliser un alphabet de cinquante-quatre (54) consones (18 à 24 par parlet)
                                         et sept (7) voyelles dans lequel on peut puiser  pour écrire la plupart des langues communautaires africaines ; 
                                         d'où sa seconde appellation d'Alphabet Grenier.
                                    </li>
                                    <li>
                                        Après validation de l'instrument par plusieurs linguistes sénégalais et africains, il a été déposé à la BSDA 
                                        pour bénéficier de toute la protection requise et des droits d'auteurs. Il a été également envoyé à l'OAPI.
                                    </li>
                                    <li>
                                        Désir de relever le défi lancé aux intellectuels africains lors des assises de Dakar 2003 pour l'adoption de trois
                                        à quatre grandes langues maternelles transfrontalières pour le continent.
                                    </li>
                                </ul>
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--BOOK GUIDE SECTION END-->

        <!--COUNT UP SECTION START-->
        <div class="count-up-section-2">
        	<div class="container">
            	<div class="row">
                	<div class="col-md-3 col-sm-6">
                    	<div class="count-up">
                            <span class="counter circle">57</span>
                            <p>Plublications</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    	<div class="count-up">
                            <span class="counter circle">589</span>
                            <p>Utilisateurs</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    	<div class="count-up">
                            <span class="counter circle">12</span>
                            <p>Auteurs</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    	<div class="count-up">
                            <span class="counter circle">5</span>
                            <p>Livres</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--COUNT UP SECTION END-->

        <!--VIDEO SECTION START-->
        <section class="kode-video-section-2">
        	<div class="container">
            	<div class="row">
                	<div class="col-md-6">
                    	<div class="kode-video">
                            <a href="#">
                        	   <img src="images/video-bg2.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                    	<div class="kode-text">
                        	<h2>Vidéo de présentations des auteurs et de leurs publications sur ASA</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor.</p>
                            <a href="#" class="more">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--VIDEO SECTION END-->


        
@endsection