<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Eshop</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<br>
<center>
    <div class="col-md-8">
        <div class="float-left">
            <a class="btn btn-outline-primary" href="{{ route('user.history') }}">Retour</a>
        </div>
        <br>
        <div class="container">

            <form action="{{ route('user.update',$user->id) }}" method="POST">
                <div class="form-group">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="full_name">Full name:</label>
                        <input  type="text" class="form-control" id="full_name" name="full_name" placeholder="Full name" value="{{ $user->full_name }}" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Adress:</label>
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

                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    </div>
    </div>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4" style="color: red">Warning</h1>
            <p class="lead">You will be disconnected from your account if you change information about your account</p>
        </div>
    </div>
    </div>
</center>
</div>
</body>
</html>

