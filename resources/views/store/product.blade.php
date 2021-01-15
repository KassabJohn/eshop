@extends('store.storeLayout')
@section('content')


<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-5 ">
                <div id="product-main-img">
                    <div class="product-preview">
                        <img src="../uploads/products/{{$product->id}}/{{$product->image_name}}" alt="">
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="product-details">
                    <h2 class="product-name">{{$product->name}}</h2>
                    <div>
                        <h3 class="product-price">{{$product->discount}} €</h3><h6><del class="product-old-price"><br>{{$product->price}} €</del></h6>
                    </div>
                    <p>{{$product->description}}</p>
                    <form method="post" id="order_form">
                    @csrf
                    <div class="product-options" >
                        <input type="hidden" id="discount_price_holder" name="discount_price_holder" value={{$product->discount}}>
                        <input type="number" id="quantity" name="quantity" value="1" min="1" max="100" />
                    </div>
                        @foreach($colors as $c)
                            <input type="radio" name="color"  value="{{$c}}">
                            <div style="height:25px;width:25px;margin:5px;display:inline-block;background-color: {{$c}}"></div>
                        @endforeach
                    <div class="add-to-cart">
                        <br>
                        <button type="submit" name="myButton" id="myButton" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                    </div>
                    </form>
                    <ul class="product-links">
                        <ul>Category:</ul>
                        <li><a href="{{route('user.search')}}?c={{$product->category->id}}">{{$product->category->name}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="height:200px"></div>

@endsection
