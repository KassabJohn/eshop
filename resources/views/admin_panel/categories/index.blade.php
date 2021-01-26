@extends('admin_panel.adminLayout') @section('content')
    <h4>Add Categories</h4>
    <form method="post" id="cat_form">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="Name" id="Name" placeholder="Enter Category Name">
        <label for="categorytype">Category Type</label>
        <input type="text" name="Type" id="Type" placeholder="Enter Category Type">
        <button type="submit">Submit</button>
    </form>

    <h4>Categories Table</h4>
    <table>
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
