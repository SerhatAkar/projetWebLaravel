<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top" id="test">
         <div class="container">
            <a class="navbar-brand" href="#"></a>
            <img src={{ asset('images/logoBdeSansBord.png') }} alt="" id="logoNavbar">
            @if (auth::check()) 

<a class="nav-link" id = "Bonjour"> Bonjour {{ Auth::user()->username }}  </a>
@endif
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href={{ URL::to('home') }}>Accueil
                     <span class="sr-only">(current)</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href={{ URL::to('evenements') }}>Evenements</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href={{ URL::to('boutique') }}>Boutique</a>
                  </li>
                  @if (auth::check()) 
                  @if( Auth::check() and Auth::user()->permissions == 3)
                  <a class="nav-link" href={{ URL::to('download') }}>Telecharger photos</a>
                  @endif
                  <li class="nav-item">
                     <a href="#" ></a>
                     <span class="badge"><?php Session::has('cart') ? Session::get('cart')->totalQuantity : ''?></span> 
                     <a class="nav-link" href={{ URL::to('shopping-cart') }}>Panier</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href={{ URL::to('logout') }}>Deconnexion</a>
                  </li>
              
                  @else
                  
               
                  <li class="nav-item">
                     <a class="nav-link" href={{ URL::to('login') }}>Connexion</a>
                  </li>
                  
                
                  <li class="nav-item">
                     <a class="nav-link" href={{ URL::to('register') }}>Inscription</a>
                  </li>
                  
                  @endif
                
               </ul>
            </div>
         </div>
      </nav>


      

   
      
            

                  
              
                 


                   
                