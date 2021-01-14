@extends('store.storeLayout')
@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">


                        @foreach($products as $product)
                            <div class="col-3">
                                <br>
                                <br>
                            <div class="card" style="width: 18rem;">
                                <img src="uploads/products/{{$product->id}}/{{$product->image_name}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title"><a href="{{route('user.view',['id'=>$product->id])}}">{{$product->name}}</a></h6>
                                    <h5 class="card-title">{{$product->category->name}}</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">{{$product->discount}} €</li>
                                    <del><li class="list-group-item">{{$product->price}} €</li></del>
                                </ul>
                                <div class="card-body">
                                    <a href="{{route('user.view',['id'=>$product->id])}}" class="card-link">Game link</a>
                                </div>
                            </div>
                            </div>
                        @endforeach


                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

