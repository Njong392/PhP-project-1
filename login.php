
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta  name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>login</title>
    <link rel="stylesheet" href="loginstyle.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body class="body">

<nav class="navbar navbar-expand-sm mb-5 bg-dark" id="navbar">
    <div class="container">
        <a href="index.php" class="navbar-brand text-white">Surf Turf</a>

        <div class="justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <div class="mr-4 mb-2">
                    <a href="index.php" class="btn btn-outline-light nav-link">Register</a>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="mr-4 mb-2">
                        <a href="#" class="btn btn-outline-light nav-link">About us</a>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="mr-4 mb-2">
                        <a href="#" class="btn btn-outline-light nav-link">Donate</a>
                    </div>
                </li>

            </ul>
        </div>

    </div>

</nav>

<div class="container">
    <div class="row justify-content-end">
        <div style="background-color: black; opacity:75%; padding: 30px 30px 30px 30px; border-radius: 10px">
        <div class="col-md-12">
            <p class="text-white">Don't have an account?<a href="index.php">Sign up now!</a></p>

            <form class="form" action="login.php" method="POST">
                <h4 class="topic">You are one step away, we can't wait!</h4>
                <br>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-transparent text-white">Username</span>
                    </div>
                    <input name="username" type="text" placeholder="Username" class="form-control">
                </div>

                <br><br>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-transparent text-white">Password</span>
                    </div>
                    <input name="password" type="text" placeholder="Password" class="form-control">
                </div>

                <br><br>

                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group justify-content-end">
                            <button type="submit" class="btn btn-outline-light active font-weight-bolder text-white" name="submit" id="button">Login</button>

                        </div>

                    </div>
                </div>




            </form>

        </div>
        </div>

    </div>

</div>

<br><br>

<div class="container">
    <div class="row">

        <div class="col-md-3">


        </div>

    </div>

</div>

</body>
</html>