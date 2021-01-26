<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Admin Login</title>
</head>

<body>
<br>
<br>
<br>
<br>
<br>
<div class="row justify-content-md-center">
    <div class="col-sm-4">
        <div class="form" >
            <form method="post">
            @csrf
                <div class="form-group">
                <input type="text" name="Username" id="Username" placeholder="username" value="admin"/>
                <input type="password" name="Password" id="Password" placeholder="password" value="12345" />
                    <button type="submit" class="btn btn-sm btn-warning" type="submit" name="loginButton" id="loginButton" value="LOGIN">Login </button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
