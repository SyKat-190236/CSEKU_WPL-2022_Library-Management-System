<?php

    $host="localhost";
    $user="root";
    $pass="";
    $db="lms";
    $conn = mysqli_connect($host,$user,$pass,$db);
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "INSERT INTO user(name,email,password) VALUES('$name','$email','$password')";

        $result = mysqli_query($conn,$sql);

        if($result)
        {
            echo '<script>alert("Sign up Successful!\nPlease Log in to Continue.")</Script>';
        }
    }

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
        button,
        select,
        option {
            font-family: NeueHaasDisplay-Roman;
            color: #5B473E;
        }

        .login,
        .image {
            min-height: 100vh;
        }

        .bg-image {
            background-image: url('../img/book_shelf.jpg');
            background-size: cover;
            background-position: center center;
        }

        .logoutLblPos {
            position: fixed;
            right: 10px;
            top: 5px;
        }

        #inputState {
            position: relative;
            margin-bottom: 4%;
        }

        #radiobutton {
            margin-bottom: 3%;
        }

        .custom-control-input {
            position: relative;
        }
    </style>
    <title>Library Management System</title>
</head>

<body>

    <header>

        <div id="navbarID">
            <nav class="navbar navbar-expand-md navbar-dark " id="nav1">
                <div class="container-fluid">



                    <h4> <a class="link-dark" href="homepage.php">Library Management System</a></h4>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>


                    <div class="collapse navbar-collapse" id="navbarSupportedContent">


                    </div>
                </div>
            </nav>
        </div>
    </header>

   <section>
    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
            <div class="col-md-6 d-none d-md-flex bg-image"></div>

            <!-- The content half -->
            <div class="col-md-6 bg-light">
                <div class="login d-flex align-items-center py-5">

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-7 mx-auto">
                                <h3 class="display-4 text-center">Welcome!</h3>
                                <p class="text-muted mb-3 text-center">Register by entering the details below.</p>
                                <form action="register.php" method="POST">
                                    <div class="form-group mb-3">
                                        <input id="inputEmail" type="text" placeholder="Name" autofocus="" name="name"
                                            class="form-control rounded-pill border-0 shadow-sm px-4" required>
                                    </div>


                                    <div class="form-group mb-3">
                                        <input id="inputEmail" type="email" placeholder="Email address" autofocus=""
                                            name="email" class="form-control rounded-pill border-0 shadow-sm px-4"
                                            required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <input id="password" type="password" placeholder="Password" name="password"
                                            class="form-control rounded-pill border-0 shadow-sm px-4" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <input id="confirm_password" type="password" placeholder="Confirm Password"
                                            class="form-control rounded-pill border-0 shadow-sm px-4" required>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                                        <label for="customCheck1" class="custom-control-label">Remember me</label>
                                    </div>
                                    <br>
                                    <button type="submit" name="submit"
                                        class="btn btn-warning btn-block mb-2 rounded-pill shadow-sm">Register
                                    </button>
                                    <hr>
                                </form>
                              
                              
                                <button onclick="window.location.href='Login_final.php'"
                                    class="btn btn-primary btn-block mb-2 rounded-pill shadow-sm">Already
                                    registered? Login here.
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