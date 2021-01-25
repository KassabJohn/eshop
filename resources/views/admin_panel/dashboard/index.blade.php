@extends('admin_panel.adminLayout') @section('content')
                        <h4>Orders</h4>
                            <table>
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
@endsection
