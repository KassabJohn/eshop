@extends('admin_panel.adminLayout') @section('content')

                                        <center>
       <b><h4>Orders</h4></b>
        <div class="col-7">
        <table class="table table-striped">
            <thead class="thead-dark">
            <tr>
                <th>
                    Time
                </th>
                <th>
                    Status
                </th>
                <th>
                    Amount
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($sales as $s)
                <tr>
                    <td class="font-weight-medium">
                        {{$s->created_at}}
                    </td>
                    <td class="font-weight-medium">
                        {{$s->order_status}}
                    </td>
                    <td class="font-weight-medium">
                        {{$s->price}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>
                                        </center>
@endsection
