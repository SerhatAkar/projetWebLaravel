@include('includes.head')
<body>
@include('includes.header')

@if(Session::has('cart'))
    <div class="row align-items-center">
        <div class="col-sm-6 col-lg-6 col-lg-offset-3 col-sm-offset-3">
            <ul class="list-group">
                @foreach ($products as $product)
                    <li class="list-group-item">
                        <span class="badge pull-right">{{ $product['qty'] }} </span>
                        <strong>{{ $product['item']['title'] }}</strong>
                        <span class="label label-success">{{ $product['price'] }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="row align-items-center">
        <div class="col-sm-6 col-lg-6 col-lg-offset-3 col-sm-offset-3">
            <strong>Total: {{ $totalPrice }} €</strong>
        </div>
        <hr>
        <div class="col-sm-6 col-lg-3 col-lg-offset-3 col-sm-offset-3">
            <a href="{{ route('checkout') }}" type="button" class="btn btn-success">Checkout</a>
        </div>
    </div>
@else 
        <div class="col-sm-6 col-lg-6 col-lg-offset-3 col-sm-offset-3">
            <h2>No item in cart ! </h2>
        </div>
@endif

@include('includes.footer')