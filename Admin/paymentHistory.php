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
    <title>Payment History</title>
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
        <table align="center">
                <?php
                            $host="localhost";
                            $user="root";
                            $pass="";
                            $db="lms";
                            $conn = mysqli_connect($host,$user,$pass,$db);
                            $data = mysqli_query($conn,"SELECT * FROM payment ORDER BY paymentID DESC");
                            error_reporting(E_ALL ^ E_WARNING); 
                            while($getpay = mysqli_fetch_assoc($data)){
                                $borrowid = $getpay['borrowID'];
                                $sql = "SELECT * FROM borrow WHERE approval=1 and payment_status=1 and borrowID='$borrowid'";
                                $data1 = mysqli_query($conn,$sql);
                                $row = mysqli_fetch_assoc($data1);
                                $bookid = $row['bookID'];
                                $userid = $row['userID'];
                                $payment = $row['payment_status'];
                                $issuedate = $row['issue_date'];
                                $getbook = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM books where bookID='$bookid'"));
                                $title = $getbook['title'];
                                $author = $getbook['author'];
                                $image = $getbook['image'];
                                $getuser = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM user where userID='$userid'"));
                                $user = $getuser['name'];
                                $account = $getpay['accountNumber'];
                                $amount = $getpay['amount'];
                    ?>
            <tr class="list-group-item">
              <td>
                  
                  <h4>Book Borrowed : <?php echo $title;?></h4>
                  <h6>Borrowed by : <?php echo $user; ?></h6>
                  <h6>Account No : <?php echo $account; ?></h6>
                  <h6>Borrow date : <?php echo $issuedate; ?></h6>
                  <h6>Paid Amount : <?php echo $amount; ?></h6>
              </td>
              
              </tr>
              <?php
                            }
                ?>
          
         
           
          
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