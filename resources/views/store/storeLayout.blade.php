<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Eshop</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    a { text-decoration: none; }
</style>
<body>
<header>
    <table class="table table-sm">
        <div>
            <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-dark">
                <div class="col-sm-1">
                    <a class="navbar-brand" style="color: white" href="{{route('user.home')}}">  &nbsp&nbsp&nbspESHOP</a>
                </div>
                <div class="collapse navbar-collapse" id="navbarNav">

                    @if(session()->has('user'))
                        <ul class="navbar-nav">
                            <li class="nav-item active ml-auto">
                                <a class="navbar-brand" style="color: white" href="{{route('user.history')}}">{{session()->get('user')->full_name}} 🟢</a>
                            </li>

                            <li class="nav-item ml-auto">
                                <a class="navbar-brand" style="color: white" id="custom_shopping_cart" href="{{route('user.cart')}}">Your Cart 🛒</a>
                            </li>
                            <li class="nav-item ml-auto">
                                <a class="navbar-brand" style="color: white" href="{{route('user.logout')}}">Logout 🔴</a>
                            </li>
                        </ul>
                    @else
                        <ul class="navbar-nav">
                            <li class="nav-item active ml-auto" >
                                <a class="navbar-brand" style="color: white" href="{{route('user.login')}}">Login</a>
                            </li>
                            <li class="nav-item ml-auto" >
                                <a class="navbar-brand" style="color: white" href="{{route('user.signup')}}">SignUp</a>
                            </li>
                        </ul>
                    @endif

                </div>
                <form class="d-flex" style="display: inline-block; margin-left: 5%" action="{{route('user.search')}}" method="get">
                    <input class="form-control me-2" name="n" type="search" placeholder="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </nav>
        </div>
    </table>
</header>
<br>
<br>
<br>
<br>

<ul class="list-group list-group-horizontal">

    @if(Route::is('user.search'))
        @foreach($cat as $c)
            <li class="list-group-item"><a href="{{route('user.search.cat',['id'=>$c->id])}}" >{{$c->name}}</a></li>
        @endforeach
    @else
        @foreach($cat as $c)
            <li class="list-group-item"><a href="{{route('user.search.cat',['id'=>$c->id])}}" >{{$c->name}}</a></li>
        @endforeach
        <li class="list-group-item"><a href="{{route('user.search')}}">Browse All</a></li>
    @endif

</ul>
@yield('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
