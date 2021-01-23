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
                                    <img src="../uploads/products/{{$product->id}}/{{$product->image_name}}"  style="width:200px;height:300px" class="card-img-top" alt="{{$product->name}}">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">{{$product->name}}</h4>
                                    <p class="card-text"><h3>{{$product->discount}} €</h3><h6><del class="product-old-price"><br>{{$product->price}} €</del></h6>
                                    <p class="card-text">{{$product->description}}</p>
                                </div>

                            </div>
                            <div class="card-footer">
                                    <br>
                                <button class="btn btn-sm btn-warning" type="submit" name="myButton" id="myButton"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                <small class="text-muted">
                                        <input type="number" id="quantity" name="quantity" value="1" min="1" max="100" />
                                </small>
                            </div>
                        </div>
                    </form>
@endsection
