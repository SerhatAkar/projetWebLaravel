<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
           *{
    margin: 0;
    padding: 0;
    background-color: black
}
#header {
    position: absolute;
    box-sizing: border-box;
    /** border: 1px solid #A1A1A1; **/
    background: #E5E5E5;
    width: 1920px;
    height: 1080px;
    background-color: rgba(0,0,0,1);
    overflow: hidden;
    opacity: 1;
}

.carre{
    width: 1761px;
    height: 166px;
    background: #3D3D3D;
    margin: 0px auto;
}
    
.top img#i1{
       position: absolute;
    overflow: visible;
    width: 160px;
    height: 166px;
    left: 73px;
    top: 0px;
}

.top h1{
    width: 292px;
    height: 62px;
    background-color: #3D3D3D;
    color: #ffffff;
    margin: auto;
    text-align: center;
    font-family: Calibri;
    font-size: 50px;
    font-weight: 700;
    position: relative;
    top: 50px;
}

.top img#i2{
    position: absolute;
    overflow: visible;
    width: 160px;
    height: 166px;
    left: 1670px;
    top: 0px;
}

ul {
   list-style-type: none;
   margin: 0px;
   padding: 0px;
   overflow: hidden;
   width: 100%;
}

nav ul{
    padding: 25px;
    margin: 0px;
    text-align: center;
    list-style-type: none;
    background-color: black;
    
}

nav li{
    display: inline-block;
    width: 247px;
    height: 40px;
    margin: 0px;
    padding: 0px;
    border-right: 0px solid #CCCCCC;
    text-align: center;
    line-height: 40px;
}

nav li :hover{
    background-color: #6E6E6E;
}

nav li a{
    display: block;
    text-decoration: none;
    color: #FFFFFF;
}


#myFooter {
    background-color: #3a3f46;
    color: white;
}

#myFooter .row {
    margin-bottom: 60px;
}

#myFooter .info{
    text-align: justify; 
    color: #afb0b1;
}

#myFooter ul {
    list-style-type: none;
    padding-left: 0;
    line-height: 1.7;
}

#myFooter h5 {
    font-size: 18px;
    color: white;
    font-weight: bold;
    margin-top: 30px;
}

#myFooter .logo{    /** alignement du texte **/
    margin-top: 10px;
    vertical-align: text-top;
    text-align: center;
}

</style>
    </head>
    <body>
     <header>
         <div class="top">
             <img src="assets/images/logo%20bde.png" alt="logo_bde" id="i1" width="157" height="157">
             <h1> BDE CESI NICE </h1>
             <img src="assets/images/logo.png" alt="logo_cesi" id="i2" width="143" height="154">
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

     <main>
     </main>

     <footer>
        <div id="conteneur">
            <div class="element_1">
                <p> BDE CESI NICE </p>
                <img src="assets/images/logo%20bde%20sans%20bord.png" alt="logo_bde_sans_fond" width="120" height="120">
            </div>
            <div class="element_2">
                <p> A propos </p>
                <p> Contact </p>
                <p> Termes et conditions </p>
            </div>
            <div class="element_3">
                <p> S'inscrire a notre newsletter </p>
                <form>
                    <p><input type="text" name="mail" placeholder="adresse e-mail"/></p>
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