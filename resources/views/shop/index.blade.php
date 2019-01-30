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

                    @foreach ($products as $produit)
                    <div class="row align-items-center">
                         @foreach ($produit as $product)
                            <div class="col-sm-12 col-lg-4">
                                <div class="thumbnail">
                                    <img src="<?php echo $product->imagePath; ?>" alt="..." style="max-height:150px" class="img-responsive">
                                    <div class="caption">
                                        <h3> <?php echo $product->title; ?></h3>
                                        <p class="description"><?php echo $product->description; ?></p>
                                        <div class="clearfix">
                                            <div class="pull-left price" style="font-weight:bold"><?php echo $product->price;?> €</div>
                                            <a href="{{ route('cart', ['id' => $product->id]) }}" class="btn btn-success" role="button">Add to cart</a>
                                            <label style="padding-bottom: 20px"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @endforeach
                </div> <!-- end container --> 
</div>
</div> <!-- end boutique-section -->

@include('includes.footer')