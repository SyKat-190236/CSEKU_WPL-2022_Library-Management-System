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

    $query = "SELECT * FROM admins WHERE email='$email' and password='$password'";

    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result)==1)
    {
        session_start();
        $_SESSION['lms']='true';
        header('location: adminActivity.php');
    }
    else if(mysqli_num_rows($result)==0)
    {
        echo '<script>alert("Invalid email or password !!!")</script>';
    }
}
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
            integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <style>
           
    
           .display-4 {
                color: #007BFF;
                font-family: Canela-Bold;
            }
    
            .text-muted {
                color: #D91F34 !important;
                font-family: NeueHaasDisplay-Roman;
                font-weight: 500;
            }
    
            input,
            button {
                font-family: NeueHaasDisplay-Roman;
            }
    
            .login,
            .image {
                min-height: 100vh;
            }
    
            
    
        </style>
        <title>Library Management System</title>
    </head>

<body>

	<header>
        <div id="navbarID">
            <nav class="navbar  navbar-dark " id="nav1">
                <div class="container-fluid">
                    <h4> <a class="link-dark" href="http://localhost/LMS/User/homepage.php">Library Management System</a></h4>
                    </div>
                </div>
            </nav>
        </div>
    </header>

	<main>

		<section id="sectionID">


            <div class="container-fluid">

                        <div class="login d-flex align-items-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10 col-xl-7 mx-auto">
                                        <h3 class="display-4 text-center">Welcome Admin!</h3>
                                        <p class="text-muted mb-3 text-center">Enter the Email and Security PIN to view all the books.</p>
                                        <form action="admin.php" method="POST">
                                            <div class="form-group mb-3">
                                                <input id="email" type="email" name="email" placeholder="Email"
                                                    class="form-control rounded-pill border-0 shadow-sm px-4">
                                            </div>
                                            <div class="form-group mb-3">
                                                <input id="password" type="password" name="password" placeholder="Security PIN"
                                                    class="form-control rounded-pill border-0 shadow-sm px-4">
                                            </div>
                                            <br>
                                            <button type="submit" name="submit"class="btn btn-warning btn-block mb-2 rounded-pill shadow-sm">View
                                            </button>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                
            </div>
           



		</section>

	</main>





	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>
</body>

</html>


