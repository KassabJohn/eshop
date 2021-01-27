@extends('admin_panel.adminLayout') @section('content')


    <center>
        <div class="row justify-content-md-center">
            <div class="col-sm-4">
            <a href="{{route('admin.products')}}">
                <br>
                <p class="font-monospace">Back to list</p></a>
            <br>
            <img id="imageHolder" src="../../../uploads/products/{{$product->id}}/{{$product->image_name}}" alt="{{$product->image_name}}" height="300" width="200"/>
            <br>
            <input  type="file" name="inp_files" id="inp_files" multiple="multiple" ><br>
            <br>
            <form class="forms-sample" method="post" enctype="multipart/form-data">
                @csrf

                <input id="inp_img" name="img" type="hidden" value="">
                <div>
                    <label >Product Name</label>
                    <input type="text" class="form-control" id="name" name="Name" value="{{$product->name}}">
                </div><br>
                <label for="desc">Product Description</label>
                <textarea class="form-control" type="textarea" maxlength="60" name="Description">{{$product->description}}</textarea>
                <select id="categ" name="Category">
                    @php foreach($catlist->all() as $cat) { if($product->category->id==$cat->id) { $select_attribute='selected'; } echo "
                                                <option value=".$cat->id." " .$select_attribute.">".$cat->name." </option>"; $select_attribute=''; } @endphp
                </select><br><br>
                <label>Product Price</label>
                <input class="form-control" type="text" name="Price" value="{{$product->price}}"><br>
                <label >Product Discounted Price</label>
                <input class="form-control" type="text" name="Discounted_Price" value="{{$product->discount}}">

                <input type="submit" name="saveButton" id="updateButton" value="UPDATE" />
            </form>
        </div>
        </div>
    </center>
@endsection
