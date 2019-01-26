

@include('includes.head')
<body>
@include('includes.header')

<div class="boutique-section">

                <div class="container">
                    <h1 class="text-center">Boutique du BDE</h1>

                    <h3 class="text-center">Lorem ipsum dolor sit amet ... </h3>

                    <div class="row">
                        <div class="offset-1 col-4-md" >
                            <label style="padding-top: 6px "  for="filterValue">Filtrer:</label>
                                <select class="form-control " id="filterValue" name="filterValue" onchange="filter(this.value)">
                                    <option value="0">Tout</option>
                                    <option value="1">Vêtements</option>
                                    <option value="2">Goodies</option>
                                    <option value="3">Divers</option>
                                </select>
                    </div>
                        <div class="offset-2 col-3-md">
                            <nav class="navbar navbar-light bg-light mb-3">
                                <label style="padding-top: 6px ">Rechercher :</label>
                                <input onchange="actionForm(this.value)" class="form-control mr-sm-2" id="search" type="search" placeholder="" aria-label="Search">
                            </nav>
                    {{--<input id="search" class="form-control" type="search">--}}
                    </div>
                    
                    <!-- affichage des articles -->

                    <div class="articles_btq">
                        <div class="card-header" style="background-color: #cccccc">
                            <h1>Article</h1>    <!-- utiliser requete de article -->
                        </div>
                        <div class="card-body" style="background-color: #d9d9d9">
                            <img style="max-width: 50%" class='card-img-body'>
                            <p>description</p>  <!-- utiliser requete de description -->
                            <p> prix : 10 €</p> <!-- utiliser requete du prix-->
                            <a href='#'><button type="button" class="btn btn-success"> <i class="fa fa-shopping-basket" aria-hidden="true"></i> Ajouter au panier</button></a>
                        </div>
                        <div class="card-footer" style="background-color: #d9d9d9"></div>
                    </div>

                </div> <!-- end container -->

            </div> <!-- end boutique-section -->

@include('includes.footer')