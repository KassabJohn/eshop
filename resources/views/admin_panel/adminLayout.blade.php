<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Admin Dashboard</title>
</head>
<body>

<p class="profile-name">{{session()->get('admin')->name}}</p>
<div>
    <small class="designation text-muted">Admin</small>
    <span class="status-indicator online"></span>
</div>
<li class="nav-item {{Route::is('admin.dashboard') ? 'active' : ''}}">
    <a class="nav-link" href="{{route('admin.dashboard')}}">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Dashboard</span>
    </a>
</li>
<li class="nav-item {{Route::is('admin.products') ? 'active' : ''}}">
    <a class="nav-link" href="{{route('admin.products')}}">
        <i class="menu-icon mdi mdi-cart-outline"></i>
        <span class="menu-title">Products</span>
    </a>
</li>
<li class="nav-item {{Route::is('admin.categories') ? 'active' : ''}}">
    <a class="nav-link" href="{{route('admin.categories')}}">
        <i class="menu-icon mdi mdi-view-grid"></i>
        <span class="menu-title">Categories</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{route('admin.orderManagement')}}">
        <i class="menu-icon mdi mdi-content-paste"></i>
        <span class="menu-title">Order Management</span>
    </a>
</li>
    @yield('content')
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</html>
