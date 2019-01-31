@include('includes.head')
<body>

@include('includes.header')
<div class="container-fluid">
<video autoplay muted loop id="myVideo">
  <source src={{ asset('images/BlueSky.mp4') }} type="video/mp4">
</video>
<main>

<div class="row col-md-12">
<div class="col-md-6">
<form  action="finaliserEvenement" method="POST" enctype="multipart/form-data">
     {{ csrf_field() }}

     
   
      <h1>Creation de l'evenement final</h1>
      
      <fieldset>
       
        <label for="name">Nom de l'evenement :</label>
        <input type="text" id="name" name="name">
        
        <label for="place">Lieu:</label>
        <input type="text" id="place" name="place">

        <label for="desc">Description:</label>
        <input type="text" cols="40" rows="5" id="desc" name="desc">
        
        <label for="imagePath">Image:</label>
        <input type="file"  id="imagePath" name="imagePath">
 
      </fieldset>
      
      <button type="submit">Valider</button>

    </form>
    </div>

    <div class="col-md-6" style="padding-top: 55px;">
    
    <h1>Evenement proposé</h1>
      
      <fieldset>
       
        <label for="name">Nom de l'evenement proposé :</label>
        <input  type="text" id="name" name="name" placeholder=" {{ $table -> name }}"readonly >
        
        <label for="place">Lieu proposé :</label>
        <input  type="text" id="name" name="name" placeholder="{{ $table -> place }}"readonly >
        <label for="desc">Description proposé :</label>
        <input  type="text" id="name" name="name" placeholder="{{ $table -> desc }}"readonly >
        
      </fieldset>
    
    
</div>
<div class="row-fluid">

</div>
</div>
</main>
@include('includes.footer')
