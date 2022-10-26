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
    <title> Pay Fine</title>
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

    
      <br>
      <div class="list-group"style="background-color:#e8ded2">
        <table align="center" >
                <?php
                            $host="localhost";
                            $user="root";
                            $pass="";
                            $db="lms";
                            $userid = $_SESSION['userid'];
                            $conn = mysqli_connect($host,$user,$pass,$db);
                            $sql = "SELECT * FROM borrow WHERE approval=1 and userID='$userid' and return_status=0 and payment_status=0 and fine>0";
                            $data = mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_assoc($data)){
                                $bookid = $row['bookID'];
                                $borrowid = $row['borrowID'];
                                $getbook = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM books where bookID='$bookid'"));
                                $title = $getbook['title'];
                                $author = $getbook['author'];
                                $issuedate = $row['issue_date'];
                                $returndate = $row['return_date'];
                                $image = $getbook['image'];
                                $fine = $row['fine'];
                    ?>
            <tr class="list-group-item">
              <td>
                  <img src="../img/<?php echo $image; ?>" alt="..." id="thumbnail">
              </td>
              <td>
                  
                  <h4><?php echo $title; ?></h4>
                  <h6>Author : <?php echo $author; ?></h6>
                  <h6>Borrow date : <?php echo $issuedate; ?></h6>
                  <h6><?php if($returndate!=""){echo "Return Date : "; echo $returndate;}?></h6>
                  <h6>Fine Amount : <?php echo $fine; ?></h6>
              </td>
              
              <td>
                  <form action="payment.php" method="post">
                    <input type="text" name="borrowid" value="<?php echo $borrowid;?>" hidden>
                    <input type="text" name="fine" value="<?php echo $fine;?>" hidden>
                    <button class="btn btn-warning" id="workbtn">Pay Fine</button>
                  </form>
              </td>
              </tr>
              <?php
                            }
                ?>
          
         
           
          
        </table>
   </div>

  


    
</body>
</html>