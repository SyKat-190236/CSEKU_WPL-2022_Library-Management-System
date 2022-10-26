<?php
    $host="localhost";
    $user="root";
    $pass="";
    $db="lms";
    $conn = mysqli_connect($host,$user,$pass,$db);
    error_reporting(E_ALL ^ E_WARNING); 
    if(isset($_POST['set']))
    {
        $borrowid = $_POST['bid'];
        $returndate = $_POST['date'];
        $sql = "UPDATE borrow SET return_date='$returndate' WHERE borrowID='$borrowid'";
        $result = mysqli_query($conn,$sql);
        if($result)
        {
            header('location: deleteBooks.php');
        }
        else
        {
            echo "<script>alert('Return Date Settings Error !! ');</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../StyleSheet/generateReport.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Set Return Date</title>
</head>
<body>

  <header>

    <div id="navbarID">
        <nav class="navbar ">
            <div class="container-fluid">


                <h4><a href="adminActivity.php"> Library Management System </a></h4>


                </div>
            </div>
        </nav>
    </div>
</header>

    <section id="sectionID">
      <br>
      <div class="list-group">
        <table align="center" id="tablefull">
            <tr>
                <td>
                    <div class="mb-3" id="newinput">
                        <label for="exampleFormControlInput1" class="form-label">Book Details: </label>
                        <img src="../img/<?php echo $_POST['image']; ?>" alt="..." id="thumbnail">
                    </div>
                    <div class="mb-3" id="newinput">
                        <h4><?php echo $_POST['title']; ?></h4>
                        <h6>Borrowed By : <?php echo $_POST['user']; ?></h6>
                        <h6>Borrow date: <?php echo $_POST['issuedate']; ?></h6>
                        <h6>Borrowed By : <?php echo $_POST['borrowid']; ?></h6>
                    </div>
                    <div class="mb-3" id="newinput">
                        <form action="setReturn.php" method="post">
                            <input type="number" name="bid" value="<?php echo $_POST['borrowid'];?>" hidden>
                            <label for="exampleFormControlInput1" class="form-label">Return Date</label>
                            <input type="text" name="date" class="form-control" id="exampleFormControlInput1" placeholder="Set a Date"><br>
                            <button name="set" class="btn btn-success">Set Return Date</button>
                        </form>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <br>
    </section>


    <footer class="footer-section">

      <div class="row text-center text-white">
          <div class="col-lg-12 text-center">

              <h4>END</h4>

          </div>

  </footer>
</body>
</html>