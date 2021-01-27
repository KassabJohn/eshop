@extends('admin_panel.adminLayout') @section('content')
    <center>
        <div class="row justify-content-md-center">
            <div class="col-sm-4">
                <a href="{{route('admin.products')}}">
                    <br>
                   <p class="font-monospace">Back to list</p></a>
                <br>
                <h4 class="card-title font-monospace" >Delete product</h4>
                <br>
                <img id="imageHolder" src="../../../uploads/products/{{$product->id}}/{{$product->image_name}}" alt="{{$product->image_name}}" height="300" width="200"
                />
                <form method="post" enctype="multipart/form-data">
                    @csrf
                    <br>
                    <label class="font-monospace">Product Name</label><br>
                    <textarea class="form-control" type="textarea" name="Description" disabled>{{$product->description}}</textarea><br>
                    <label class="font-monospace">Product Price</label><br>
                    <input type="text" class="form-control" name="Price" value="{{$product->price}}" disabled><br>
                    <label class="font-monospace">Product Discounted Price</label><br>
                    <input type="text" class="form-control" name="Discounted_Price" value="{{$product->discount}}" disabled>
                    <br>
                    <button class="btn btn-sm btn-danger" type="submit" name="saveButton" id="updateButton" value="Delete">Delete</button>
                </form>
            </div>
        </div>
    </center>
@endsection
