@extends('admin_panel.adminLayout') @section('content')
<center>
    <div class="row justify-content-md-center">
        <div class="col-sm-4">
            <a class="font-monospace" href="{{route('admin.categories')}}">Back to List</a><br><br>
    <form method="post">
        @csrf
        <label for="categoryname">Category Name</label><br><br>
        <input type="text" id="name" class="form-control" name="Name" value="{{$category->name}}" disabled>
        <div>
            <label for="categorytype">Category Type</label><br><br>
            <textarea type="textarea" class="form-control" name="Type" disabled>{{$category->type}}</textarea>
        </div><br>
        <button class="btn btn-sm btn-danger"  type="submit" name="updateButton" id="updateButton" value="DELETE" >Delete</button>
    </form>
        </div>
        </div>
</center>

@endsection
