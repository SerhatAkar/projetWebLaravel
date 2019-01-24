@include('includes.head')

 <body>
   <video autoplay muted loop id="myVideo">
   <source src={{ asset('images/BlueSky.mp4') }} type="video/mp4">
</video>

     @include('includes.header')

     <form action="/auth/register" method="post">
      
      <h1>Creez votre compte !</h1>
      
      <fieldset>
        <legend><span class="number">1</span>Informations basiques</legend>
        <label for="name">Nom:</label>
        <input type="text" id="name" name="user_name">
        
        <label for="mail">Email:</label>
        <input type="email" id="mail" name="user_email">
        
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="user_password">
        
        <label>Statut:</label>
        <input type="radio" id="under_13" value="under_13" name="user_age"><label for="Etudiant" class="light">Etudiant</label><br>
        <input type="radio" id="over_13" value="over_13" name="user_age"><label for="Salarié" class="light">Salarié</label>
      </fieldset>
      
      <fieldset>
        <legend><span class="number">2</span>Votre profil</legend>
        <label for="bio">Biography:</label>
        <textarea id="bio" name="user_bio"></textarea>
      </fieldset>
      <fieldset>
      <label for="job">Job Role:</label>
     
      
        <label>Vos interets:</label>
        <input type="checkbox" id="development" value="interest_development" name="user_interest"><label class="light" for="development">Sorties</label><br>
          <input type="checkbox" id="design" value="interest_design" name="user_interest"><label class="light" for="design">Meetup</label><br>
        <input type="checkbox" id="business" value="interest_business" name="user_interest"><label class="light" for="business">Gros evenements</label>
      
      </fieldset>
      <button type="submit">Inscription</button>
    </form>
    
  </body>




     @include('includes.footer')