

@include('includes.head')


<body>

@include('includes.header')

@if (Auth::guest()) 

  VOUS DEVEZ ETRE CONNECTE !


@else

<form  action="/proposerEvenement" method="POST">
     {{ csrf_field() }}
     @if (session('status'))
     <div class="alert alert-sucess">
     <h1 style="color: blue;"> {{ session('status')}} </h1>
     </div>
     @endif
      <h1>Proposez un evenement !</h1>
      
      <fieldset>
       
        <label for="name">Nom de l'evenement :</label>
        <input type="text" id="name" name="name">
        
        <label for="place">Lieu:</label>
        <input type="text" id="place" name="place">

        <label for="desc">Description:</label>
        <input type="text" cols="40" rows="5" id="desc" name="desc">
        
      </fieldset>
      
      <button type="submit">Valider</button>

    </form>
    
  
@endif
</body>
@include('includes.footer')






