@extends('store.storeLayout')
@section('content')

    <style>
        .card-horizontal {
            display: flex;
            flex: 1 1 auto;
        }
        img {
            width: 100%;
            height: auto;
        }
    </style>

    <br>
    <br>
    <br>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-5 ">
                    <form method="post" id="order_form">
                        @csrf
                        <div class="card">
                            <div class="card-horizontal">
                                <div class="img-square-wrapper">
                                    <img class="" src="../uploads/products/{{$product->id}}/{{$product->image_name}}" alt="">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">{{$product->name}}</h4>
                                    <p class="card-text"><h3>{{$product->discount}} €</h3><h6><del class="product-old-price"><br>{{$product->price}} €</del></h6>
                                </div>

                            </div>
                            <div class="card-footer">

                                @foreach($colors as $c)
                                    <input type="radio" name="color"  value="{{$c}}">
                                    <div style="height:25px;width:25px;margin:5px;display:inline-block;background-color: {{$c}}"></div>
                                    @endforeach
                                    </small>
                                    <br>
                                    <button type="submit" name="myButton" id="myButton" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                    <small class="text-muted">
                                        <input type="number" id="quantity" name="quantity" value="1" min="1" max="100" />
                            </div>
                        </div>
                    </form>
@endsection
