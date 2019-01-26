@include('includes.head')


  
   <body>
   <video autoplay muted loop id="myVideo">
  <source src={{ asset('images/BlueSky.mp4') }} type="video/mp4">
</video>

     @include('includes.header')
     <form form method="POST" action="{{ route('login') }}">
      <div class="container h-100">
     
        <div class="d-flex justify-content-center h-100">
           
            <div class="user_card ">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src={{ asset('images/logoBdeSansBord.png') }} class="brand_logo" alt="Logo">
                    </div>
                </div>
                <div class="d-flex justify-content-center form_container">
                    <form>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="" class="form-control input_user" value="" placeholder="Identifiant">
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="" class="form-control input_pass" value="" placeholder="Mot de passe">
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customControlInline">
                                <label class="custom-control-label" for="customControlInline">On se rapelle de vous ? </label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="d-flex justify-content-center mt-3 login_container">
                    <button type="submit" name="button" class="btn login_btn">Login</button>

                </div>
                </form>
                <div class="mt-4">
                    <div class="d-flex justify-content-center links">
                    Pas encore inscrit <a href="#" class="ml-2">Inscription</a>
                    </div>
                    <div class="d-flex justify-content-center links">
                        <a href="#">Vous avez encore oublié votre mot de passe ?</a>
                    </div>
                </div>
            </div>
            
        </div>

    </div>


  

@include('includes.footer')