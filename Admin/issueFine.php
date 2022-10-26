<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../StyleSheet/generateReport.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Set Fine</title>
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
                    <?php
                        $host="localhost";
                        $user="root";
                        $pass="";
                        $db="lms";
                        $conn = mysqli_connect($host,$user,$pass,$db);
                        $borrowid = $_POST['borrowid'];
                        if(isset($_POST['submit']))
                        {
                          $fine = $_POST['amount'];
                          $sql = "UPDATE borrow SET fine='$fine' WHERE borrowID='$borrowid'";
                          $data = mysqli_query($conn,$sql);
                          if($data)
                          {
                            echo"<script>alert('Fine Issued Successfully');</script>";
                            header('location: generate_report.php');
                          }
                          else
                          {
                            echo"<script>alert('Fine Issue Error !!');</script>";
                          }
                        }
                    ?>  
                    <div class="mb-3" id="newinput">
                        <label for="exampleFormControlInput1" class="form-label">Book Details: </label>
                        <img src="../img/<?php echo $_POST['image']; ?>" alt="..." id="thumbnail">
                      </div>
                      <div class="mb-3" id="newinput">
                        <h4><?php echo $_POST['title']; ?></h4>
                        <h6>Borrowed By : <?php echo $_POST['user']; ?></h6>
                        <h6>Borrow date: <?php echo $_POST['issuedate']; ?></h6>
                        <h6><?php if($_POST['returndate']!=""){echo "Return Date : "; echo $_POST['returndate'];}?></h6>
                      </div>
                      <div class="mb-3" id="newinput">
                        <form action="issueFine.php" method="post">
                          <input type="number" name="borrowid" value="<?php echo $_POST['borrowid']; ?>" hidden>
                          <label for="exampleFormControlInput1" class="form-label">Fine Amount</label>
                          <input type="number" class="form-control" id="exampleFormControlInput1" name="amount" placeholder="Fine Amount"><br>
                          <button name="submit" class="btn btn-success">Issue Fine</button>
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