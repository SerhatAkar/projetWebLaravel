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

                    @isset($deleted)
                        <h4 style="color:red">{{ $deleted }}</h4>
                    @endisset

                    {!! link_to_route('boutique.create', 'Ajouter un produit', null, ['class' => 'btn btn-info pull-right']) !!}<br>

                    @foreach($products as $product)
                        <div style="border: solid 2px black; width:100%; margin-bottom:10px; padding: 2px;">
                            <h4>
                                {{ $product->title }}
                            </h4>
                            <p>
                                <img src="{{ $product->imagePath }}" alt="No image" style="max-height:150px" class="img-responsive"> 
                            </p>
                            <p>
                                {{ $product->description }}
                            </p>
                            <p>
                                {{ $product->price }}€
                            </p>
                            
                            <div>
                                <a href="{{ route('cart', ['id' => $product->id]) }}" class="btn btn-success" role="button">Add to cart</a>
                                <label style="padding-bottom: 20px"></label>
                            </div>
                            {!! link_to_route('boutique.show', 'Voir', [$product->id], ['class' => 'btn btn-info pull-right']) !!}<br>
                            {!! link_to_route('boutique.edit', 'Modifier', [$product->id], ['class' => 'btn btn-info pull-right']) !!}<br>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['boutique.destroy', $product->id]]) !!}
                                    {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer ce produit ?\')']) !!}
                            {!! Form::close() !!}               
                        </div>
                    @endforeach
                </div> <!-- end container --> 
</div>
</div> <!-- end boutique-section -->

@include('includes.footer')