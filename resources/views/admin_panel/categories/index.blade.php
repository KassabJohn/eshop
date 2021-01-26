@extends('admin_panel.adminLayout') @section('content')
    <center>
        <h4>Add Categories</h4>
        <div class="col-md-8">
            <div class="row">
                <form method="post" id="cat_form">
                    @csrf
                    <label for="name">Name</label>
                    <input class="form-control form-control-sm" type="text" name="Name" id="Name" placeholder="Enter Category Name">
                    <br>
                    <label for="categorytype">Category Type</label>
                    <input class="form-control form-control-sm" type="text" name="Type" id="Type" placeholder="Enter Category Type">
                    <br>
                    <button class="btn btn-success btn-sm" type="submit">Submit</button>
                </form>
            </div>
        </div>

        <h4>Categories Table</h4>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Type
                </th>
                <th>
                    Created At
                </th>
                <th>
                    Updated At
                </th>
                <th>
                    Edit
                </th>
                <th>
                    Update
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($catlist as $cat)
                <tr>
                    <td>
                        {{$cat->name}}
                    </td>
                    <td>
                        {{$cat->type}}
                    </td>
                    <td>
                        {{$cat->created_at}}
                    </td>
                    <td>
                        {{$cat->updated_at}}
                    </td>
                    <td>
                        <a href="{{route('admin.categories.edit', ['id' => $cat->id])}}" class="btn btn-sm btn-warning">Edit</a>
                    </td>
                    <td>
                        <a href="{{route('admin.categories.delete', ['id' => $cat->id])}}" class="btn btn-sm btn-danger" onclick="delete()">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
        @endsection
    </center>
