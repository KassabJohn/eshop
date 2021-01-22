@extends('admin_panel.adminLayout') @section('content')

    <a href="{{route('admin.categories')}}"> < Back to List</a>
    <form method="post">
        @csrf
        <label for="categoryname">Category Name</label>
        <input type="text" id="name" name="Name" value="{{$category->name}}" disabled>
        <div>
            <label for="categorytype">Category Type</label>
            <textarea type="textarea" name="Type" disabled>{{$category->type}}</textarea>
        </div>
        <input  type="submit" name="updateButton" id="updateButton" value="DELETE" />
    </form>
@endsection
