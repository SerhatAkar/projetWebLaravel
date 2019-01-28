



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

  


@include('includes.footer')

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src= "{{ asset('js/carousel.js' ) }}" ></script>
