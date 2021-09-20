<?php

$conn = mysqli_connect('localhost','njong', 'emy123', 'project1');

if(!$conn){
    echo 'connection successful'. mysqli_connect_error();
}



if(isset($_REQUEST['username'])){
    //removes backlashes
    $firstname = stripslashes($_REQUEST['firstname']);
    $firstname = mysqli_real_escape_string($conn, $firstname);
    $lastname = stripslashes($_REQUEST['lastname']);
    $lastname = mysqli_real_escape_string($conn, $lastname);
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($conn, $username);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($conn, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    $kids = stripslashes($_REQUEST['children']);
    $kids = mysqli_real_escape_string($conn, $kids);
    $adults = stripslashes($_REQUEST['adults']);
    $adults = mysqli_real_escape_string($conn, $adults);
    $dob = date('m-d-Y');

    $userCheck = "SELECT * FROM  php_project_1 where username = '$username'";
    $query= mysqli_query($conn, $userCheck);
    $res = mysqli_num_rows($query);

    $emailCheck = "SELECT * FROM  php_project_1 where email = '$email'";
    $query1= mysqli_query($conn, $emailCheck);
    $res1 = mysqli_num_rows($query1);


    if($res >0 ){
        echo 'This username already exists';
    }

    elseif ($res1 > 1){
        echo  'This email has been taken';
    }

    else {

        $register = "INSERT into `php_project_1` (firstname,lastname,username,email,password,kids,adults,date_of_birth) VALUES
('$firstname', '$lastname', '$username', '$email', '" . md5($password) . "', '$kids', '$adults', '$dob')";
        $regQuery = mysqli_query($conn, $register);
        if ($regQuery){
            $_POST['username'] = $_SESSION['username'];
            header('Location:login.php');
        }

        else{
            echo 'invalid entries';
        }

    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register to start surfing!</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>

<body class="body">


<nav class="navbar navbar-expand-sm mb-5 justify-content-center bg-dark" id="navbar">
    <div class="container">
        <a href="index.php" class="navbar-brand text-white" >Surf Turf</a>

        <div class="justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                <div class="mr-4 mb-2">
               <a href="login.php" class="btn btn-outline-light nav-link">Login</a>
                </div>
                </li>
                <li class="nav-item">
                <div class="mr-4 mb-2">
                <a href="#" class="btn btn-outline-light nav-link">About us</a>
                </div>
                </li>
                <li class="nav-item">
                <a href="#" class="btn btn-outline-light nav-link">Donate</a>
                </li>
            </ul>


            </div>

        </div>


    </div>


</nav>



     <div class="container">
         <div style="background-color: black; opacity:75%; padding: 30px 30px 30px 30px; border-radius: 10px ">
        <div class="row">
            <div class="col-md-6 align-self-center">
                <h4 class="topic">SURF TURF, SURF WITH US!</h4>
                <p class="lead">
                    Plan your tours with us today, to get the maximum out of your vacation. Give your kids the touring experience
                    of a lifetime, with round boat trips, surf courses, and an overall summer of fun. Make your hotel reservations
                    with us too.
                </p>
                <p><a href="#" class="btn btn-outline-light font-weight-bold">Want to know more?</a></p>
            </div>




            <div class="col-md-6" >
                <p class="text-white">Already have an account? <a href="login.php">Log right in!</a></p>


                <form class="form" action="index.php" method="POST">
                    <h4 class="topic">Let's get you signed up real quick!</h4>
                    <br>

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-transparent text-white">Your Name</span>

                </div>
                <input type="text" class="form-control" placeholder="First name" name="firstname" required>
                <input type="text" class="form-control" placeholder="Last name" name="lastname" required>


        </div>
                    <br><br>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent text-white">Username</span>

                        </div>
                        <input type="text" class="form-control" placeholder="username" name="username" required>


                    </div>

                    <br><br>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-transparent text-white">Email</span>

            </div>
            <input type="email" class="form-control" placeholder="Email" name="email" required>

        </div>

        <br><br>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-transparent text-white">Password</span>

            </div>
            <input type="password" class="form-control" placeholder="Password" name="password" required>

        </div>

        <br><br>

        <div class="input-group">
            <div class="input-group-prepend">
                <button type="button" class="btn btn-outline-light">Date of Birth</button>

            </div>
            <input type="date" name="date" class="form-control" required>
        </div>

       <br><br>

                    <div class="row">
                    <div class="col-sm-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button type="button" class="btn btn-outline-light">Kids</button>

                        </div>
                        <input type="number" class="form-control" name="children" placeholder="0" required>
                    </div>
                    </div>




                    <div class="col-sm-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button type="button" class="btn btn-outline-light">Adults</button>

                        </div>
                        <input type="number" class="form-control" name="adults" placeholder="0" required>
                    </div>
                    </div>
                    </div>

                    <br><br>



                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-group justify-content-end">
                                <button type="submit" class="btn btn-outline-light active font-weight-bolder text-white" name="submit" id="button">Register</button>

                            </div>

                        </div>
                    </div>

                </form>
            </div>



        </div>
     </div>
     </div>





</body>
</html>