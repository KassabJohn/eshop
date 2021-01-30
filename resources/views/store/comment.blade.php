@extends('store.storeLayout')
@section('content')

    @foreach($user as $u)
    <div class="col-3">
        <br>
        <br>
            <div class="card-body">

                <h3 class="card-title"><b>Utilisateur : {{$u->full_name}} </b> <p> Commentaire : {{$u->comment}}</p> </h3><hr>
            </div>
        </div>
    </div>
@endforeach

@endsection

