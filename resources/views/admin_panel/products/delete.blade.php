@extends('admin_panel.adminLayout') @section('content')
                            <a href="{{route('admin.products')}}">
                                < Back to List</a>
                                    <br>
                                    <br>
                                    <h4 class="card-title">Edit product</h4>
                                    <br>
                                    <img id="imageHolder" src="../../../uploads/products/{{$product->id}}/{{$product->image_name}}" alt="add image" height="300" width="300"
                                    />
                                    <form method="post" enctype="multipart/form-data">
                                        @csrf
                                            <br><br>
                                            <label >Product Name</label>
                                            <label for="desc">Product Description</label>
                                            <textarea type="textarea" name="Description" disabled>{{$product->description}}</textarea>
                                            <select id="exampleFormControlSelect1" name="Category" disabled>
                                                <option>{{$product->category->name}}</option>
                                            </select>
                                            <label >Product Price</label>
                                            <input type="text" name="Price" value="{{$product->price}}" disabled>
                                            <label >Product Discounted Price</label>
                                            <input type="text" name="Discounted_Price" value="{{$product->discount}}" disabled>
                                            <br>
                                          <input type="submit" name="saveButton" id="updateButton" value="Delete" />
                                    </form>
@endsection
