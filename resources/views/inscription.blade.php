@include('includes.head')

 <body>
   <video autoplay muted loop id="myVideo">
   <source src={{ asset('images/BlueSky.mp4') }} type="video/mp4">
  </video>

     @include('includes.header')

     <form  action="/inscription" method="POST">
     {{ csrf_field() }}
      <h1>Creez votre compte !</h1>
      
      <fieldset>
        <legend>Completez le formulaire :</legend>
          <div>
            <label for="lname">Nom:</label>
            <input type="text" id="lname" name="lname">
          </div>
          <div>
            <label for="fname">Prenom:</label>
            <input type="text" id="fname" name="fname">
          </div>
          <div>
            <label for="username">Pseudo:</label>
            <input type="text" id="username" name="username">
          </div>
          <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
          </div>
          <div>
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password">
          </div>
          <div>
            <input type="checkbox" id="yes" name="accept" checked>
            <label for="yes">J'accepte les CGU</label>
          </div>
      </fieldset>
      
      <button type="submit">Inscription</button>
    </form>
  </body>




     @include('includes.footer')