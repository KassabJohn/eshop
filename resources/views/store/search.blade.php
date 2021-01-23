@extends('store.storeLayout')
@section('content')
<div class="section">
    <div class="container">
        <div class="row">
            <div id="store" class="col-md-12">
                <div class="col-md-12">
                    <div class="row">
                    @foreach($products as $product)
                            <div class="col-3">
                                <br>
                                <br>
                                <div class="card">
                                    <div class="text-center">
                                        <div class="img-thumbnail">
                                    <img src="uploads/products/{{$product->id}}/{{$product->image_name}}" style="width:200px;height:300px" class="card-img-top" alt="{{$product->name}}">
                                        </div>
                                        </div>
                                            <div class="card-body">
                                        <h6 class="card-title"><a href="{{route('user.view',['id'=>$product->id])}}">{{$product->name}}</a></h6>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">{{$product->discount}} €</li>
                                        <del><li class="list-group-item">{{$product->price}} €</li></del>
                                    </ul>
                                    <div class="card-body">
                                        <a href="{{route('user.view',['id'=>$product->id])}}" class="card-link">Buy The Game</a>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @endsection
