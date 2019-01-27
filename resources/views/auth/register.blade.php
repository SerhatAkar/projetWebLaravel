@dump($errors)


                

               
                    
                    @include('includes.head')

<body>
  <video autoplay muted loop id="myVideo">
  <source src={{ asset('images/BlueSky.mp4') }} type="video/mp4">
</video>

    @include('includes.header')

    <form  action="{{ route('register') }}" method="POST">
    {{ csrf_field() }}
     <h1>Creez votre compte !</h1>
     
     <fieldset>
       <legend><span class="number">1</span>Informations basiques</legend>
       <label for="lname">Nom:</label>
       <input type="text" id="lname" name="lname">
       
       <label for="fname">Prenom:</label>
       <input type="text" id="fname" name="fname">

       <label for="username">Pseudo:</label>
       <input type="text" id="username" name="username">

       <label for="email">Email:</label>
       <input type="email" id="email" name="email">
       
       <label for="password">Mot de passe:</label>
       <input type="password" id="password" name="password">
       
      
     </fieldset>
     

     <button type="submit">Inscription</button>
   </form>
   
 </body>




    @include('includes.footer')