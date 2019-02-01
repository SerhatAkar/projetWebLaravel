@include('includes.head')
<body>
@include('includes.header')

<div class="boutique-section">

        <div class="boutique_container">
            <h1 class="text-center">Boutique du BDE</h1>

            <h3 class="text-center">Ici tu trouveras tous nos produits ! </h3>
            <label style="padding-bottom: 20px"></label>
            
                <!-- affichage des articles -->
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-12 col-lg-12">
                            <nav class="navbar navbar-light bg-light mb-3">
                                <label>Rechercher :</label>
                                <input onchange="actionForm(this.value)" class="form-control mr-sm-2" id="search" type="search" placeholder="" aria-label="Search">
                            </nav>
                        </div>
                    </div>

                    @if(Session::has('success'))
                    <div class="row">
                        <div class="col-sm-6 col-lg-4 col-lg-offset-4 col-sm-offset-3">
                            <div id="charge-message" class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        </div>
                    </div>
                    @endif

                    <div class="col-sm-offset-4 col-sm-4">
                        <br>
                        <div class="panel panel-primary">   
                            <div class="panel-heading">Fiche du produit</div>
                            <div class="panel-body"> 
                                <p>TITRE : {{ $produit->title }}</p>
                                <p>DESCRIPTION : {{ $produit->description }}</p>
                                <p>PRIX : {{ $produit->price }}€</p>
                            </div>
                        </div>              
                        <a href="javascript:history.back()" class="btn btn-primary">
                            <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
                        </a>
                    </div>
                </div> <!-- end container --> 
</div>
</div> <!-- end boutique-section -->

@include('includes.footer')