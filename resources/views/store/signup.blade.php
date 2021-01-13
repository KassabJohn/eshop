@extends('store.storeLayout')
@section('content')


<div class="section">
    <div class="container">
        <div class="row">

        <form id="signupForm" method="post" >
            @csrf
            <div class="col-md-12">
                <div class="billing-details">
                    <div class="section-title">
                        <h3 class="title">SIGN UP</h3>
                    </div>

                    <div class="form-group ">
                        <input class="input" type="text" name="name" id="name" placeholder="Full Name">
                    </div>

                    <div class="form-group">
                        <input class="input" type="email" name="email" id="email" placeholder="Email">
                    </div>
                    <div id="for_duplicate-email"></div>
                    <div class="form-group">
                        <input class="input" type="text" name="address" id="address" placeholder="Address">
                    </div>
                    <div class="form-group">
                        <input class="input" type="text" name="city" id="city" placeholder="City">
                    </div>
                    <div class="form-group">
                        <input class="input" type="number" name="zip" id="zip" placeholder="ZIP Code">
                    </div>
                    <div class="form-group">
                        <input class="input" type="number" name="tel" id="tel" placeholder="Telephone">
                    </div>
                    <div class="form-group">
                        <input class="input" type="password" name="pass" id="pass" placeholder="Enter Your Password">
                    </div>
                    <div class="form-group">
                        <input class="input" type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
                    </div>
                    <br>

                        <input type="submit"  name="signup" class="primary-btn order-submit" value="Sign Up">




                </div>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection

