<?php
if($_POST)
{
    $host="localhost";
    $user="root";
    $pass="";
    $db="lms";
    $conn = mysqli_connect($host,$user,$pass,$db);

    $email=$_POST['email'];
    $password=$_POST['password'];

    $query = "SELECT * FROM user WHERE email='$email' and password='$password'";

    $result = mysqli_query($conn,$query);
    $rows =mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result)==1)
    {
        session_start();
        $_SESSION['lms']='true';
        $_SESSION['userid']=$rows['userID'];
        header('location: loginHomepage.php');
    }
    else if(mysqli_num_rows($result)==0)
    {
        echo '<script>alert("Invalid email or password !!!")</script>';
    }
}
?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        @font-face {
            font-family: Canela-Bold;
            src: url(fonts/Canela-Bold.ttf);
        }


        @font-face {
            font-family: NeueHaasDisplay-Roman;
            src: url(fonts/NeueHaasDisplay-Roman.ttf);
        }

        .display-4 {
            color: #E8302B;
            font-family: Canela-Bold;
        }

        .text-muted {
            color: #007BFF !important;
            font-family: NeueHaasDisplay-Roman;
            font-weight: 500;
        }

        input::placeholder {
            color: #5B473E !important;
        }

        label,
        input,
        button {
            font-family: NeueHaasDisplay-Roman;
        }

        .login,
        .image {
            min-height: 100vh;
        }

        .custom-control-input {
            position: relative;
        }

        .logoutLblPos {
            position: fixed;
            right: 10px;
            top: 5px;
        }

    </style>
    <title>LoginPage</title>
</head>

<body>

    <header>

        <div id="navbarID">
            <nav class="navbar ">
                <div class="container-fluid">


                    <h4><a href="homepage.php"> Library Management System </a></h4>


                    <a href="../Admin/admin.php">Admin Login</a>

                    </div>
                </div>
            </nav>
        </div>
    </header>



    <section>
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-md-12 bg-light">
                    <div class="login d-flex align-items-center py-5">

                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 col-xl-7 mx-auto">
                                    <h3 class="display-4 text-center">Welcome Back!</h3>
                                    <p class="text-muted mb-3 text-center">Login by entering the details below.</p>
                                    <form action="Login_final.php" method="POST">
                                        <div class="form-group mb-3">
                                            <input id="inputEmail" type="email" placeholder="Email address" autofocus=""
                                                name="email" class="form-control rounded-pill border-0 shadow-sm px-4"
                                                required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <input id="password" type="password" placeholder="Password" name="password"
                                                class="form-control rounded-pill border-0 shadow-sm px-4" required>
                                        </div>

                                        <div class="custom-control custom-checkbox mb-3">
                                            <input id="customCheck1" type="checkbox" checked
                                                class="custom-control-input">
                                            <label for="customCheck1" class="custom-control-label">Remember me</label>
                                        </div>

                                        <br>
                                        <button type="submit" name="submit"
                                            class="btn btn-warning btn-block mb-2 rounded-pill shadow-sm ">Login
                                        </button>
                                        <hr>
                                    </form>
                                    <label class="logoutLblPos">
                                        <div style="float:left; text-align:center; padding:5px;">
                                            <a href="admin.php"><i class="fa fa-user-cog"></i></a><br>
                                        </div>
                                    </label>
                                    <button onclick="window.location.href='register.php'"
                                        class="btn btn-primary btn-block mb-2 rounded-pill shadow-sm">New User? Register
                                        here.
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    
</body>

</html>