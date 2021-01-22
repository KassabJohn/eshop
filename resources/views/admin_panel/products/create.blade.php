@extends('admin_panel.adminLayout') @section('content')

    <a style="color:green;" href="{{route('admin.products')}}">
        Back to List</a>
    <br>
    <br>
    <h4 >Create product</h4>
    <br>
    <img  id="imageHolder" src="" alt="add image" height="300" width="300"/>
    <br>
    <input  type="file" name="inp_files" id="inp_files" multiple="multiple" >
    <br>
    <div id="empty_image"> </div>
    <form method="post"  id="product_form">
        @csrf
        <input id="inp_img" name="img" type="hidden" value="">
        <br><br>
        <div>
            <label  >Product Name*</label>
            <input type="text" id="Name" name="Name"  value="">
        </div>
        <div>
            <label  for="Description">Product Description*</label>
            <textarea type="textarea" id="Description" name="Description"></textarea>
        </div>
        <div>
            <label for="Category">Category</label>
            <select id="Category" name="Category">
                @php foreach($catlist->all() as $cat) {
                echo "<option value=".$cat->id." >".$cat->name." </option>"; $select_attribute=''; } @endphp
            </select>
        </div>
        <div>
            <label  >Product Price*</label>
            <input type="text" name="Price" id="Price" value="">
        </div>
        <div>
            <label  >Product Discounted Price*</label>
            <input type="text" id="Discounted_Price"  name="Discounted_Price" value="">
        </div>
        </div>
        <input type="submit" name="saveButton" class="btn btn-success mr-2" id="saveButton" value="Create"  />
    </form>
@endsection
