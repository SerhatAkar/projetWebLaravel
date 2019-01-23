<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"/>
<!doctype html>
<html lang="fr">
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> BDE CESI NICE </title>
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top" id="test">
         <div class="container">
            <a class="navbar-brand" href="#">
            <img src={{ asset('images/logoBdeSansBord.png') }} alt="" id="logoNavbar">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="#">Accueil
                     <span class="sr-only">(current)</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Evenements</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Boutique</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href={{ URL::to('connexion') }}>Connexion</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Inscription</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>




    
     

<div class="row" id="contentCenterHome">
    <p> Message à diffuser ! </p>
</div>



<div class="row">
<img src={{ asset('images/nice.jpg') }} alt="nice" class="img-fluid" id="imagePrincipale" >
</div>

     
      <!-- Footer -->
      <footer class="page-footer font-small special-color-dark pt-4">
         <!-- Footer Elements -->
         <div class="container">
            <!-- Social buttons -->
            <ul class="list-unstyled list-inline text-center">
               <li class="list-inline-item">
                  <a class="btn-floating btn-fb mx-1">
                  <i class="fab fa-facebook-f"> </i>
                  </a>
               </li>
               <li class="list-inline-item">
                  <a class="btn-floating btn-tw mx-1">
                  <i class="fab fa-twitter"> </i>
                  </a>
               </li>
               <li class="list-inline-item">
                  <a class="btn-floating btn-gplus mx-1">
                  <i class="fab fa-google-plus-g"> </i>
                  </a>
               </li>
               <li class="list-inline-item">
                  <a class="btn-floating btn-li mx-1">
                  <i class="fab fa-linkedin-in"> </i>
                  </a>
               </li>
               <li class="list-inline-item">
                  <a class="btn-floating btn-dribbble mx-1">
                  <i class="fab fa-dribbble"> </i>
                  </a>
               </li>
            </ul>
            <!-- Social buttons -->
         </div>
         <!-- Footer Elements -->
         <!-- Copyright -->
         <div class="footer-copyright text-center py-3">© 2019 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/"> B D E CESI NICE</a>
         </div>
         <!-- Copyright -->
      </footer>
      <!-- Footer -->

   </body>

