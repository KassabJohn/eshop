@extends('admin_panel.adminLayout') @section('content')
<center>
    <br>
    <div class="row justify-content-md-center">
        <div class="col-sm-4">
    <a class="font-monospace" href="{{route('admin.categories')}}">Back to List</a><br><br>
    <h4>Edit Category</h4>
    <br>
    <form method="post"  id="cat_form">
        <div class="form-group">
        @csrf
        <label for="categoryname">Category Name</label><br>
        <input type="text" class="form-control" id="Name" name="Name" value="{{$category->name}}">
            <br>
            <br>
        <div>
            <label for="categorytype">Category Type</label><br>
            <textarea type="textarea" class="form-control" id="Type" name="Type" >{{$category->type}}</textarea>
        </div>
            <br>

        <button class="btn btn-sm btn-success"  type="submit" name="updateButton" id="updateButton" value="UPDATE" >Update</button>
        </div>
    </form>
        </div>
        </div>
</center>
@endsection
