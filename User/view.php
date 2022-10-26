<?php
session_start();
if(!$_SESSION['lms'])
{
	header('location: Login_final.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../StyleSheet/view.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>My Reports</title>
</head>
<body>

    
<header>

    <div id="navbarID">
        <nav class="navbar ">
            <div class="container-fluid">


                <h4><a href="LoginHomepage.php"> Library Management System </a></h4>


                </div>
            </div>
        </nav>
    </div>
</header>

<section  id="sectionID">
    <br><br>

    <div class="list-group">
        <table align="center">
            <tr class="list-group-item">
                <td>
                    <img src="img/ai.jpg" alt="..." id="thumbnail">
                </td>
                <td>
                    
                    <h2>Artificial Intelligence</h2>
                    <h4>Author</h4>
                    <h5>Publisher</h5>
                </td>
                
                <td>
                    <a href="individual.php"><button class="btn btn-primary" id="workbtn">View Report</button></a>
                </td>
            </tr>
            <tr class="list-group-item">
                <td>
                    <img src="img/ai.jpg" alt="..." id="thumbnail">
                </td>
                <td>
                    <h2>Artificial Intelligence</h2>
                    <h4>Author</h4>
                    <h5>Publisher</h5>
                </td>
                <td>
                    <a href="individual.php"><button class="btn btn-primary" id="workbtn">View Report</button></a>
                </td>
            </tr>
            <tr class="list-group-item">
                <td>
                    <img src="img/ai.jpg" alt="..." id="thumbnail">
                </td>
                <td>
                    <h2>Artificial Intelligence</h2>
                    <h4>Author</h4>
                    <h5>Publisher</h5>
                </td>
                
                <td>
                    <a href="individual.php"><button class="btn btn-primary" id="workbtn">View Report</button></a>
                </td>
            </tr>
            <tr class="list-group-item">
                <td>
                    <img src="img/ai.jpg" alt="..." id="thumbnail">
                </td>
                <td>
                    <h2>Artificial Intelligence</h2>
                    <h4>Author</h4>
                    <h5>Publisher</h5>
                </td>
                
                <td>
                    <a href="individual.php"><button class="btn btn-primary" id="workbtn">View Report</button></a>
                </td>
            </tr>
            <tr class="list-group-item">
                <td>
                    <img src="img/ai.jpg" alt="..." id="thumbnail">
                </td>
                <td>
                    <h2>Artificial Intelligence</h2>
                    <h4>Author</h4>
                    <h5>Publisher</h5>
                </td>
                
                <td>
                    <a href="individual.php"><button class="btn btn-primary" id="workbtn">View Report</button></a>
                </td>
            </tr>
            <tr class="list-group-item">
                <td>
                    <img src="img/ai.jpg" alt="..." id="thumbnail">
                </td>
                <td>
                    <h2>Artificial Intelligence</h2>
                    <h4>Author</h4>
                    <h5>Publisher</h5>
                </td>

                <td>
                    <a href="individual.php"><button class="btn btn-primary" id="workbtn">View Report</button></a>
                </td>
            </tr>
        </table>
   </div>

   <br><br>


</section>
<footer class="footer-section">

    <div class="row text-center text-white">
        <div class="col-lg-12 text-center">

            <h4>END</h4>

        </div>

</footer>



  
</body>
</html>