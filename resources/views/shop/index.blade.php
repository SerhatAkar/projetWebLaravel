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
                    <div class="row">
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <nav class="navbar navbar-light bg-light mb-3">
                                <label>Rechercher :</label>
                                <input onchange="actionForm(this.value)" class="form-control mr-sm-2" id="search" type="search" placeholder="" aria-label="Search">
                            </nav>
                        </div>
                    </div>
                        <?php foreach ($products as $produit) { ?>
                        <script> console.log("test"); </script>
                        <div class="row">
                            <?php foreach ($produit as $product) { ?>
                            <div class="col-sm-12 col-md-3 col-lg-3">
                                <div class="thumbnail">
                                    <img src="<?php echo $product->imagePath; ?>" alt="..." style="max-height:150px" class="img-responsive">
                                    <div class="caption">
                                        <h3> <?php echo $product->title; ?></h3>
                                        <p class="description"><?php echo $product->description; ?></p>
                                        <div class="clearfix">
                                            <div class="pull-left price" style="font-weight:bold"><?php echo $product->price;?> €</div>
                                            <a href="<?php echo route('cart', ['id' => $product->id]); ?>" class="btn btn-success pull-right" role="button">Add to cart</a>
                                            <label style="padding-bottom: 20px"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <?php } ?>
                </div> <!-- end container -->    
</div> <!-- end boutique-section -->

@include('includes.footer')
