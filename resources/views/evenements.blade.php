
@include('includes.head')
<body>

@include('includes.header')
<div class="container-fluid">
<video autoplay muted loop id="myVideo">
  <source src={{ asset('images/BlueSky.mp4') }} type="video/mp4">
</video>
<main>



<div class="row" id="proposer">
<p> Les evenements sont ici ! </p>

@if( Auth::check() and Auth::user()->permissions == 1)

<button type="button"> <a href="{{ URL::to('modererProposition') }}"> Moderer les propositions </button>



@endif
</div>
<div class="container-fluid" id="carousel1">
    <div id="carousel">

       <div class="hideLeft">
        <img src={{ asset('images/afterworkAffiche.jpg') }} class="img-fluid" >
      </div>

      <div class="prevLeftSecond">
        <img src={{ asset('images/carrouselSweat.png') }} class="img-fluid">
      </div>

      <div class="prev">
        <img src={{ asset('images/afterworkAffiche.jpg') }} class="img-fluid">
      </div>

      <div class="selected">
        <img src={{ asset('images/afterworkAffiche.jpg') }} class="img-fluid">
      </div>

      <div class="next">
        <img src={{ asset('images/afterworkAffiche.jpg') }} class="img-fluid">
      </div>

      <div class="nextRightSecond">
        <img src={{ asset('images/afterworkAffiche.jpg') }} class="img-fluid">
      </div>

      <div class="hideRight">
        <img src={{ asset('images/afterworkAffiche.jpg') }} class="img-fluid">
      </div>

    </div>

    
</div>


<div class="row" id = "proposer">

<a href={{ URL::to('proposerEvenement') }}> Proposer un evenement </a>

</div>



<div class="row-fluid">
<h1 style="text-align:center;"> Voici les evenements proposés ! </h1>
@if (session('message'))
     <div class="alert alert-sucess">
     <h1 style="color: blue;"> {{ session('message')}} </h1>
     </div>
     @endif
    </div>
</div>


@foreach ($propositions->sortByDesc('created_at')  as $propositions)


@if ( $propositions -> statut  == 1  and Auth::check())
<div row id="propositionsRow">
<p> {{$propositions -> name }} </p>
<p> {{$propositions -> place }}  </p>
<p> {{$propositions -> desc }} </p>
<p> {{$propositions-> vote }} </p>

<form action= "{{ route('voteUP') }}" method = "POST">
@csrf
<input type="hidden" name="id" value= "{{$propositions-> id }}"> 
<button type="submit"> <i class="fas fa-plus"></i> </button>
</form>
<form action= "{{ route('voteDown') }}" method = "POST">
@csrf
<input type="hidden" name="id" value= "{{$propositions-> id }}"> 
<button type="submit" style="background-color:red;"> <i class="fas fa-minus"></i> </button>
</form>


@if( Auth::check() and Auth::user()->permissions == 1)
<form action= "{{ route('deleteProposition') }}" method = "POST" style="background-color:red;">
@csrf
<input type="hidden" name="id" value= "{{$propositions-> id }}"> 
<button  style="background-color:red;" type="submit"> Supprimer  </button>
</form>

<input type="hidden" name="id" value= "{{$propositions-> id }}"> 

<form action ="{{ route('creerEvenement') }}"  method="POST">
@csrf
<input type="hidden" name="id" value= "{{$propositions-> id }}"> 
<button  style="background-color:red;" type="submit"> Creer l'evenement  </button>
</form>
@endif
</div>


@endif



@endforeach



</main>
@include('includes.footer')

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src= "{{ asset('js/carousel.js' ) }}" ></script>
