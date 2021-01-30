@extends('admin_panel.adminLayout') @section('content')
    <br><br>
    <h4 class="card-title">User Table<br><br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a class="btn btn-sm btn-primary" href="{{route('admin.user.create')}}">+ Add User</a></h4>
    <br><br>
    <div class="row">
        <div class="col-10">
    <table class="table table-striped">
            <thead>
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Full name
                </th>
                <th>
                    Email
                </th>
                <th>
                    Password
                </th>
                <th>
                    Phone
                </th>
                <th>
                    Area
                </th>

                <th>
                    City
                </th>
                <th>
                    Comment
                </th>
                <th>
                    Zip
                </th>

            </tr>
            </thead>
            <tbody>
            @foreach($user as $u)
                <tr>
                    <td>
                        {{$u->id}}
                    </td>
                    <td>
                    {{$u->full_name}}
                    </td>
                    <td>
                        {{$u->email}}
                    </td>
                    <td>
                        {{$u->password}}
                    </td>
                    <td>
                        {{$u->phone}}
                    </td>
                    <td>
                        {{$u->area}}
                    </td>
                    <td>
                        {{$u->city}}
                    </td>
                    <td>
                        {{$u->comment}}
                    </td>
                    <td>
                        {{$u->zip}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
        </div>
@endsection

