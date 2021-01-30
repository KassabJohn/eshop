@extends('admin_panel.adminLayout') @section('content')

        <div class="row">
            <div class="col-6">

                <form action="{{ route('user.update',$user->id) }}" method="POST"><br><br>
                    <div class="form-group">
                        @csrf
                        @method('PUT')


                        <div class="form-group">
                            <label for="full_name">Full name:</label>
                            <input  type="text" class="form-control" id="full_name" name="full_name" placeholder="Full name" value="{{ $user->full_name }}" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{ $user->email }}" required>
                        </div>


                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="text" class="form-control" id="password" name="password" placeholder="Password" value="{{ $user->password }}" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone number:</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Description" value="{{ $user->phone }}" required>
                        </div>

                        <div class="form-group">
                            <label for="area">Area:</label>
                            <input type="text" class="form-control" id="area" name="area" placeholder="Area" value="{{ $user->area }}" required>
                        </div>

                        <div class="form-group">
                            <label for="city">City:</label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="City" value="{{ $user->city }}" required>
                        </div>

                        <div class="form-group">
                            <label for="zip">ZIP:</label>
                            <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip" value="{{ $user->zip }}" required>
                        </div>

                        <div class="form-group">
                            <label for="comment">Commentary:</label>
                            <input  type="text" class="form-control" id="comment" name="comment" placeholder="Comment" value="{{ $user->comment }}">
                        </div>
<br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
@endsection
