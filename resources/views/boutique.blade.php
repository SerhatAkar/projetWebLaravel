

@include('includes.head')
<body>
@include('includes.header')

<div class="boutique-section">

                <div class="container">
                    <h1 class="text-center">Boutique du BDE</h1>

                    <h3 class="text-center">Lorem ipsum dolor sit amet ... </h3>

                    <div class="text-center button-container">
                        <a href="#" class="button">Articles en vedette</a>
                        <a href="#" class="button">Promotions</a>
                    </div>

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

                </div> <!-- end container -->

            </div> <!-- end boutique-section -->

@include('includes.footer')