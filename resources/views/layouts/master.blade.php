<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"/>

<html>
    

    <head>
        <title>@yield('title')</title>
    </head>
    
    
    <body>
        
        <header>
        <div class="top">
            <img src={{ asset('images/logoBde.png') }} class="img-responsive" alt="logo_bde" id="i1" width="157" height="157">
            <h1> BDE CESI NICE  </h1>
            <img src={{ asset('images/logo.png') }} class="img-responsive alt="logo_cesi" id="i2" width="143" height="154">
        </div>

        <nav>
            <ul>
                <li><a href="Accueil.html">Accueil</a></li>
                <li><a href="Evenements.html">Evenements</a></li>
                <li><a href="Boutique.html">Boutique</a></li>
                <li><a href="Galerie.html">Galerie</a></li>
                <li><a href="Equipe.html">Equipe</a></li>
                <li><a href="Connexion.html">Connexion</a></li>
                <li><a href="Inscription.html">Inscription</a></li>
            </ul>
        </nav>
    </header>

       
        <footer>
        <div id="conteneur">
             <div class="element_1">
               
                <img src={{ asset('images/logoBdeSansBord.png') }} alt="logo_bde_sans_fond" width="120" height="120">
            </div> 
            <div class="element_2">
                <p> A propos </p>
                <p> Contact </p>
                <p> Termes et conditions </p>
            </div>
            <div class="element_3">
                <p> S'inscrire a notre newsletter </p>
                <form>
                    <p><input type="text" name="mail" placeholder="adresse e-mail" /></p>
                    <button type="button"> OK </button>
                </form>
            </div>
            <div class="element_4">
                <p> 1240, route des Dolines </p>
                <p> 06560 Sophia Antipolis </p>
                <p> </p>
                <p> bdenice@mailrandom.com </p>
            </div>
        </div>
    </footer>
    
    </body>
</html>
