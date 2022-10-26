<?php
  $host="localhost";
  $user="root";
  $pass="";
  $db="lms";
  $conn = mysqli_connect($host,$user,$pass,$db);
  $borrowid=$_POST['borrowid'];
  $amount = $_POST['fine'];
  if(isset($_POST['pay']))
  {
    $sql="UPDATE borrow SET payment_status=1, return_status = 1 WHERE borrowID='$borrowid'";
    $result = mysqli_query($conn,$sql);
    $accountNumber = $_POST['account'];
    $pin = $_POST['pin'];
    $sql="INSERT INTO payment(accountNumber,PIN,amount,borrowID) VALUES('$accountNumber','$pin','$amount','$borrowid')";
    $data = mysqli_query($conn,$sql);
    if($data & $result)
    {
      echo "<script>alert('Payment Successfull');</script>";
      header('location: payFine.php');
    }
    else
    {
      echo "<script>alert('Payment Error');</script>";
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
    <title>Payment</title>
</head>
<body>

  <header>

    <div id="navbarID">
        <nav class="navbar ">
            <div class="container-fluid">


                <h4><a href="loginHomepage.php"> Library Management System </a></h4>


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
                        <form action="payment.php" method="post">
                          <input type="number" name="borrowid" value="<?php echo $_POST['borrowid']; ?>" hidden>
                          <input type="number" name="fine" value="<?php echo $_POST['fine']; ?>" hidden>
                          <label for="exampleFormControlInput1" class="form-label">Account Number</label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" name="account" placeholder="Account No."><br>
                          <label for="exampleFormControlInput1" class="form-label">PIN</label>
                          <input type="password" class="form-control" id="exampleFormControlInput1" name="pin" placeholder="Enter PIN"><br>
                          <h6>Fine Amount : <?php echo $_POST['fine']; ?></h6>
                          <br>
                          <button class="btn btn-success" name="pay">PAY</button>
                        </form>
                      </div>
                </td>
            </tr>
        </table>
    </div>
    <br>
    </section>



</body>
</html>