@extends('admin_panel.adminLayout') @section('content')
    <br><br>
    <h4 class="card-title">Products Table<br><br> <a class="btn btn-lg btn-success" href="{{route('admin.products.create')}}">+ Add Product</a></h4>
    <br><br>
    <div class="row">
        <div class="col-10">
    <table class="table table-striped">
            <thead>
            <tr>
                <th>
                    Images
                </th>
                <th>
                    Name
                </th>
                <th>
                    Delete
                </th>
                <th>
                    Price
                </th>
                <th>
                    Description
                </th>
                <th>
                    Category
                </th>

                <th>
                    Update
                </th>

            </tr>
            </thead>
            <tbody>
            @foreach($prdlist as $prd)
                <tr>
                    <td>
                        <img src="../uploads/products/{{$prd->id}}/{{$prd->image_name}}" style="width:100px;height:100px;border-radius:10%;" alt="">
                    </td>
                    <td>
                        <a href="{{route('admin.products.edit', ['id' => $prd->id])}}">{{$prd->name}}</a>
                    </td>
                    <td><a href="{{route('admin.products.delete', ['id' => $prd->id])}}">Delete</a></td>
                    <td>
                        {{$prd->price}}
                    </td>
                    <td>
                        {{$prd->description}}
                    </td>
                    <td>
                        {{$prd->category->name}}
                    </td>

                    <td><a href="{{route('admin.products.edit', ['id' => $prd->id])}}">Edit</a> </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
        </div>

@endsection

