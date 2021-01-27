@extends('store.storeLayout')
@section('content')

    @if($all != null)
        <div class="row">
            <div class="row justify-content-md-center">
                <div class="col-sm-10">
                    <table class="table table-striped">
                        <thead>
                        <th scope="col"><strong>PRODUCT NAME</strong></th>
                        <th scope="col"><strong>IMAGE</strong></th>
                        <th scope="col"><strong>QUANTITY</strong></th>
                        </thead>
                        @foreach($all as $c)
                            @foreach($prod as $p)
                                @if($c[0]==$p->id)
                                    <tbody>
                                    <tr>
                                        <td>{{$p->name}}</td>
                                        <td><img src="uploads/products/{{$p->id}}/{{$p->image_name}}" height="50px" width="50px"></td>
                                        <td><input type="text"  id="quantity" style="width:15%" name={{$p->id}} value={{$c[1]}} readonly/></td>
                                    @break
                                    @endif
                                    @endforeach
                                    @endforeach
                                    </tbody>
                    </table>

                    <div class="card text-center">
                        <div class="card-header" style="color:red;">
                            <b>
                                Cart Summary
                            </b>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Total :</h5>
                            <p class="card-text"><div><strong id="totalCost">{{Session::get('price')}} €</strong></div>
                            @if(session('user'))
                                @if($all != null)
                                    <center> <form method="post" name="cart">
                                            @csrf
                                            <button class="btn btn-sm btn-warning" type="submit" id="confirm_order"  name="order" value="Confirm order">Confirm Order</button>
                                        </form></center>
                                @endif
                            @endif
                        </div>
                    </div>
                    @else
                        <div class="jumbotron jumbotron-fluid">
                            <div class="container">
                                <h1 class="display-4">Your Cart is Empty</h1>
                                <p class="lead">You need to add something to your cart</p>
                            </div>
                        </div>
    @endif
@endsection
