
@include('includes.head')
<body>

@include('includes.header')
<div class="container-fluid">
<video autoplay muted loop id="myVideo">
  <source src={{ asset('images/BlueSky.mp4') }} type="video/mp4">
</video>
<main>

<div class="row" id="proposer">


@if( Auth::check() and Auth::user()->permissions == 1)


<div class="row-fluid">
<h1 style="text-align:center;"> Voici les evenements proposés ! </h1>
@if (session('message'))
     <div class="alert alert-sucess">
     <h1 style="color: blue;"> {{ session('message')}} </h1>
     </div>
     @endif
</div>


@foreach ($propositions->sortByDesc('created_at')  as $proposition)

@if ( $proposition -> statut  == 0 )
<div row id="propositionsRow">
<p> {{$proposition -> name }} </p>
<p> {{$proposition -> place }}  </p>
<p> {{$proposition -> desc }} </p>
$i= {{$proposition-> id }} ;
<form action= "{{ route('acceptProposition') }}" method = "POST">

@csrf
<input type="hidden" name="id" value= "{{$proposition -> id }}"> 
<button type="submit"> <i class="fas fa-vote-yea"></i></button>
</form>
<form action="{{ route('declineProposition' )}}" method = "POST">
@csrf
<input type="hidden" name="id" value= "{{$proposition -> id }}"> 
<button type="submit" style="background-color: red;"> <i class="far fa-times-circle"></i> </button>
</form>
</div>

@endif

@endforeach
</div>
@endif
</div>

</main>
@include('includes.footer')

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src= "{{ asset('js/carousel.js' ) }}" ></script>
