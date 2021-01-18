@extends('store.storeLayout')
@section('content')

    <div class="row">
        <div class="row justify-content-md-center">
            <div class="col-sm-4">
                <br>
                <form method="post" id="loginForm">
                    @csrf

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Username" value="john@examle.com" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <br>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">🔑</span>
                        <input type="password" name="pass" id="pass" class="form-control" placeholder="Password" value="12345" aria-label="Password" aria-describedby="basic-addon1">
                    </div>
                    <br>

                    <center>
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </center>
                </form>
            </div>
        </div>
    </div>


@endsection

