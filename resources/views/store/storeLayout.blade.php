<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ESHOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

</head>



<body>
<header>
    <div id="top-header">
        <div class="container">
            <ul class="nav justify-content-end">
                @if(session()->has('User'))
                    <li class="nav-item">
                        <a style="color:black" href="{{route('User.history')}}">{{session()->get('User')->full_name}} </a>
                    </li>
                    <li class="nav-item">
                        <a style="color:black" href="{{route('User.logout')}}"><i class="fa fa-user-o"></i> Logout</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a style="color:black" href="{{route('User.login')}}"><i class="fa fa-user-o"></i> Login</a>
                    </li>
                    <li class="nav-item">
                        <a style="color:black" href="{{route('User.signup')}}"><i class="fa fa-user-o"></i> SignUp</a>
                    </li>
                @endif

            </ul>
        </div>
    </div>
</header>
<nav id="navigation">
    <div class="container">
        <div id="responsive-nav">
            <ul class="main-nav nav navbar-nav">
                <li class="{{Route::is('User.home') ? 'active' : ''}}"><a href="{{route('User.home')}}">Home</a></li>

            </ul>
        </div>
    </div>
</nav>

@yield('content')


<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>


</body>

</html>
