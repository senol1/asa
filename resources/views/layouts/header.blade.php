<header>
    <div class="top-strip">
        <div class="container">
            <div class="site-info">
                <ul>
                    <li><a href="mailto:contact@aza.afrique"><i class="fa fa-envelope-o"></i>contact@aza.afrique</a></li>
                    <li><a id="search-box" href="#"><i class="fa fa-search"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--Search Overlay Box Starts -->
    <div id="kode_search_box" class="kode_search_box">
        <form class="kode_search_box-form">
            <input class="kode_search_box-input" type="search" placeholder="Rechercher..."/>
            <button class="kode_search_box-submit" type="submit">Rechercher</button>
        </form>
        <span class="kode_search_box-close"></span>
    </div><!-- /kode_search_box -->			
    <div class="overlay"></div>
    <div class="logo-container">
        <div class="container">
            <!--LOGO START-->
            <div class="logo">
                <a href="{{ route('home')}}"><img src="images/logo-transp.png" alt=""></a>
            </div>
            <!--LOGO END-->
            <div class="kode-navigation">
                <ul>
                    <li><a href="{{ route('home')}}">Accueil</a></li>
                    <li><a href="{{ route('about') }}">A propos de AZA</a></li>
                    <li><a href="#">Notre Blog</a></li>
                    <li class="last"><a href="#">Notre équipe</a></li>
                    <li><a href="#">Forum</a></li>
                    <li class="last"><a href="#">Contact</a></li>
                </ul>
            </div>
            <div id="kode-responsive-navigation" class="dl-menuwrapper">
                <button class="dl-trigger">Open Menu</button>
                <ul class="dl-menu">
                    <li><a href="{{ route('home')}}">Accueil</a></li>
                    <li><a href="{{ route('about') }}">A propos de AZA</a></li>
                    <li><a href="#">Notre Blog</a></li>
                    <li class="last"><a href="#">Notre équipe</a></li>
                    <li><a href="#">Forum</a></li>
                    <li class="last"><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>