@extends('store.storeLayout')
@section('content')
    <div class="row justify-content-md-center">
        <div class="col-md-10">
            <table class="table table-striped">
                <thead>
                <th>Order Id</th>
                <th>Name</th>
                <th>Desc </th>
                <th>Status</th>
                </thead>

                <tbody>
                @foreach($sale as $s)
                    @foreach($all as $c)
                        @if($c[0]==$s->id)
                            @foreach($products as $p)
                                @if(session('user')->id == $s->user_id)
                                    @if($c[1]==$p->id)
                                        <tr>
                                            <td>{{$s->id}}</td>
                                            <td>{{$p->name}}</td>
                                            <td>{{$p->description}}</td>
                                            <td>{{$s->order_status}}</td>
                                        </tr>
                                        @break
                                    @endif
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @foreach ($user as $u)
        <tr>
            <td>{{ $u->full_name }}</td>
    <a class="btn btn-primary btn-sm" href="{{ route('user.edit',$u->id) }}">Editer</a><br><br>
    @endforeach
@endsection
