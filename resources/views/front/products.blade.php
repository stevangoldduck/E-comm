<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Product
                </a>
            </div>
        </div>
    </nav>
    <div class="container">
    <div class="row">
        @foreach($products as $product)
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <!--<img src="..." alt="...">--->
                <div class="caption">
                    <h3>{{$product->name}}</h3>
                    <p>Rp. {{$product->price}}</p>
                    <p>{{$product->description}}</p>
                    <p>
                        <a href="{{url('product/'.$slug."/".$sku = $product->sku)}}" class="btn btn-primary" role="button">Beli Sekarang </a>
                        <a href="#" class="btn btn-default" role="button">{{$product->stock}} Available</a>
                        <form method="POST" action="{{url('order_unit')}}">
                            {{ csrf_field() }}
                            <input type="hidden" name="prod_sku" value="{{$product->sku}}">
                            <input type="hidden" name="link" value="{{$slug}}">
                            <input type="hidden" name="qty" value="1">
                            @if( Auth::check() == true)
                            <input type="hidden" name="user_id" value="{{Auth::id()}}">
                                @else
                            <input type="hidden" name="user_id" value="NULL">
                             @endif
                            <input type="hidden" name="subtotal" value="{{$product->price}}">
                            <input type="hidden" name="user_ip" value="null">
                            <input type="hidden" name="status" value="cart">
                            <input type="submit" class="btn btn-danger" value="ADD TO CART">
                        </form>
                    </p>
                </div>
            </div>
        </div>
            @endforeach
    </div>
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
