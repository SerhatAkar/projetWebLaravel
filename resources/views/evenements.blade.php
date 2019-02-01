
@include('includes.head')
<body id="ev">

@include('includes.header')
<div class="container-fluid" >

<main>



@if( Auth::check() and Auth::user()->permissions == 1)

<button type="button"> <a href="{{ URL::to('modererProposition') }}"> Moderer les propositions </button>


@endif

<div class="evenement_container">
            <h1 class="text-center">Evenements en cours</h1>

            <h3 class="text-center">Ici tu trouveras tous nos evenements qui arrivent ! </h3>
            <label style="padding-bottom: 20px"></label>
            
                <!-- affichage des articles -->
                <div class="container">
          
                    @if(Session::has('success'))
                    <div class="row">
                        <div class="col-sm-6 col-lg-4 col-lg-offset-4 col-sm-offset-3">
                            <div id="charge-message" class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        </div>
                    </div>
                    @endif



                    
                
           @foreach ($evenement as $evenements)
        

                <div class="row">
    <div class="col s12 m7">
      <div class="card">
        <div class="card-image">
        <?php echo '<img src= "'.$evenements->imagePath.'"  style="max-height:150px" class="img-responsive">'; ?>
          <span class="card-title">{{ $evenements->name }}</span>
        </div>
        <div class="card-content">
          <p>{{ $evenements -> desc}}</p>
        </div>
        <div class="card-action">
          <a href="/sendbasicemail">Je participe</a>
        </div>
      </div>
    </div>
  
            

@endforeach



<div class="row" id = "proposer">

<a href={{ URL::to('proposerEvenement') }}> Proposer un evenement </a>

</div>

<div class="row-fluid">

@if (session('message'))
     <div class="alert alert-sucess">
     <h1 style="color: blue;"> {{ session('message')}} </h1>
     </div>
     @endif
    </div>
</div>
<div class="row-fluid">
<h1 style="justify-content:center;">Voici les evenements proposés !</h1>
</div>

@foreach ($propositions->sortByDesc('created_at')  as $propositions)

@if ( $propositions -> statut  == 1  and Auth::check())



<div class="row">
    <div class="col s12 m7">
      <div class="card">
        <div class="card-image">
        </div>
        <div class="card-content">
<p> {{$propositions -> place }}  </p>
<p> {{$propositions -> desc }} </p>
<p> {{$propositions-> vote }} </p>
        </div>
        <div class="card-action">
<div class="row" style="text-align:center; justify-content:center;">
<form action= "{{ route('voteUP') }}" style="width:200px; height:50px;" method = "POST">
@csrf
<input type="hidden" name="id" value= "{{$propositions-> id }}"> 
<button type="submit"> <i class="fas fa-plus"></i> </button>
</form>
<form action= "{{ route('voteDown') }}" method = "POST" style="width:200px; height:50px;">
@csrf
<input type="hidden" name="id" value= "{{$propositions-> id }}"> 
<button type="submit" style="background-color:red;"> <i class="fas fa-minus"></i> </button>
</form>
@if( Auth::check() and Auth::user()->permissions == 1)
<form action= "{{ route('deleteProposition') }}"style="width:200px; height:50px;"  method = "POST" style="background-color:red;">
@csrf
<input type="hidden" name="id" value= "{{$propositions-> id }}"> 
<button  style="background-color:red;" type="submit"> Supprimer  </button>
</form>

<input type="hidden" name="id" value= "{{$propositions-> id }}"> 

<form action ="{{ route('creerEvenement') }}" style="width:200px; height:50px;" method="POST">
@csrf
<input type="hidden" name="id" value= "{{$propositions-> id }}"> 
<button  style="backsground-color:red;" type="submit"> Creer l'evenement  </button>
</form>
@endif
</div>

@endif
@endforeach
</div>
</div>

</main>

@include('includes.footer')

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src= "{{ asset('js/carousel.js' ) }}" ></script>
