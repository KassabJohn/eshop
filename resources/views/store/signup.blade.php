@extends('store.storeLayout')
@section('content')

        <div class="row justify-content-md-center">
            <div class="col-sm-4">
                <br>

                <form id="signupForm" method="post" >
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Full Name</label>
                        <input class="form-control" type="text" name="name" id="name" placeholder="Full Name" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input class="form-control" type="email" name="email" id="email" placeholder="Email" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <input class="form-control" type="text" name="address" id="address" placeholder="Address" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">City</label>
                        <input class="form-control" type="text" name="city" id="city" placeholder="City" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">ZIP Code</label>
                        <input class="form-control" type="number" name="zip" id="zip" placeholder="ZIP Code" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Telephone</label>
                        <input class="form-control" type="number" name="tel" id="tel" placeholder="Telephone" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="pass" id="pass" placeholder="Password"required>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
@endsection

