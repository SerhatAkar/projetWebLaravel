@include('includes.head')
<body>
@include('includes.header')

<?php if(Session::has('cart')) { ?>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <ul class="list-group">
                <?php foreach ($products as $product) { ?>
                    <li class="list-group-item">
                        <span class="badge"><?php echo $product->totalQuantity;?></span>
                        <strong><?php echo $product->title; ?></strong>
                        <span class="label label-success"><?php echo $product->price; ?></span>
                        <div class="btn-button">
                            <button class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Reduce by 1</a></li>
                                <li><a href="#">Reduce All</a></li>
                            </ul>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <strong>Total: <?php $totalPrice ?></strong>
        </div>
        <hr>
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <button type="button" class="btn btn-success">Checkout</button>
        </div>
    </div>
<?php } else { ?>
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <h2>No items in cart ! </h2>
        </div>
<?php } ?>

@include('includes.footer')