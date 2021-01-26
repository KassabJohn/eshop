@extends('admin_panel.adminLayout') @section('content')
    <br>
    <br>
    <br>
    <br>
    <center>
    <div class="col-9">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>
                    Id
                </th>
                <th>
                    Name
                </th>
                <th>
                    Adress
                </th>
                <th>
                    Product Name
                </th>
                <th>
                    Quantity
                </th>
                <th>
                    Placed at
                </th>
                <th>
                    Status
                </th>

                <th>
                    Update
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($sale as $s)

                @foreach($all as $c)
                    @if($c[0]==$s->id)
                        @foreach($products as $p)
                            @if($p)
                                @if( $c[1]==$p->id)
                                    <tr>
                                        <td>{{$s->id}}</td>

                                        @foreach($users as $u)
                                            @if($u->id == $s->user_id)
                                                <td>{{$u->full_name}}</td>
                                                <td>{{$u->city}}, {{$u->zip}}</td>
                                                @break
                                            @endif
                                        @endforeach
                                        <td>
                                            {{$p->name}}

                                        </td>
                                        <td>
                                            {{$c[2]}}
                                        </td>
                                        <td>
                                            {{$s->created_at}}
                                        </td>
                                        <td>
                                            {{$s->order_status}}
                                        </td>
                                        <td>
                                            <form method="post" style="display:inline-block">
                                                @csrf
                                                <input type="hidden" value="{{$s->id}}" name="orderId">
                                                <select name="stat">
                                                    @foreach($status as $x)
                                                        @if($s->order_status!=$x)
                                                            <option value="{{$x}}">{{$x}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                <button type="submit" value="Update" class="btn btn-success btn-sm"> Update </button>
                                            </form>
                                        </td>
                                        @break
                                        @endif

                                        @endif
                                        @endforeach
                                        @endif
                                        @endforeach
                                        @endforeach
                                    </tr>
            </tbody>
        </table></div>
    </center>
@endsection
