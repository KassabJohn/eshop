@extends('admin_panel.adminLayout') @section('content')
    <a href="{{route('admin.categories')}}"> < Back to List</a>
    <h4>Edit Category</h4>
    <br>
    <form method="post"  id="cat_form">
        <div class="form-group">
        @csrf
        <label for="categoryname">Category Name</label>
        <input type="text" id="Name" name="Name" value="{{$category->name}}">
        <div>
            <label for="categorytype">Category Type</label>
            <textarea type="textarea" id="Type" name="Type" >{{$category->type}}</textarea>
        </div>
        <input  type="submit" name="updateButton" id="updateButton" value="UPDATE" />
        </div>
    </form>
@endsection
