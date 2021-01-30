@extends('admin_panel.adminLayout') @section('content')
    <br><br>
    <h4 class="card-title">User Table<br><br>
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
                <th>
                    Action
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
                    <td>
                        <button><a href="{{route('admin.user.edit', ['id' => $u->id])}}">Edit</a></button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
        </div>
@endsection

