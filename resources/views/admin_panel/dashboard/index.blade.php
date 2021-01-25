@extends('admin_panel.adminLayout') @section('content')
    <div class="row justify-content-md-center">
        <div class="col-sm-8">
                        <h4>Orders</h4>

                        <table class="table">
                                <thead>
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
@endsection
