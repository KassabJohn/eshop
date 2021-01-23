@extends('admin_panel.adminLayout') @section('content')
    <a href="{{route('admin.products')}}">
        Back to List</a>
    <br>
    <br>
    <h4>Edit product</h4>
    <br>
    <img id="imageHolder" src="../../../uploads/products/{{$product->id}}/{{$product->image_name}}" alt="add image" height="300" width="300"/>
    <br>
    <input  type="file" name="inp_files" id="inp_files" multiple="multiple" >
    <br>
    <form class="forms-sample" method="post" enctype="multipart/form-data">
        @csrf

        <input id="inp_img" name="img" type="hidden" value="">
        <div>
            <label >Product Name</label>
            <input type="text" id="name" name="Name" value="{{$product->name}}">
        </div>
        <label for="desc">Product Description</label>
        <textarea type="textarea" maxlength="60" name="Description">{{$product->description}}</textarea>
        <select id="categ" name="Category">
            @php foreach($catlist->all() as $cat) { if($product->category->id==$cat->id) { $select_attribute='selected'; } echo "
                                                <option value=".$cat->id." " .$select_attribute.">".$cat->name." </option>"; $select_attribute=''; } @endphp
        </select>
        <label >Product Price</label>
        <input type="text" name="Price" value="{{$product->price}}">
        <label >Product Discounted Price</label>
        <input type="text" name="Discounted_Price" value="{{$product->discount}}">

        <input type="submit" name="saveButton" id="updateButton" value="UPDATE" />
    </form>
@endsection
