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
    <title>My Books</title>
    <script>
        if(window.history.replsceState){
            window.history.replaceState(null,null,window.location.href);
        }
    </script>
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
        <table align="center">
                <?php
                            error_reporting(E_ALL ^ E_WARNING);
                            $host="localhost";
                            $user="root";
                            $pass="";
                            $db="lms";
                            $userid = $_SESSION['userid'];
                            $conn = mysqli_connect($host,$user,$pass,$db);
                            $sql = "SELECT * FROM borrow WHERE approval=1 and userID='$userid' and return_status=0";
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
                  <h6>Paid Amount : <?php if($fine==0){echo "Unpaid";} else{echo $fine;} ?></h6>
              </td>
              
              <td>
                  <form action="returnBooks.php" method="post">
                    <input type="number" name="borrowid" value="<?php echo $borrowid;?>" hidden>
                    <input type="number" name="bookid" value="<?php echo $bookid;?>" hidden>
                    <button name="return" class="btn btn-success" id="workbtn">Return books</button>
                  </form>
              </td>
              </tr>
              <?php
                            }
                            if(isset($_POST['return']))
                            {
                                $borrowid = $_POST['borrowid'];
                                $bookid = $_POST['bookid'];
                                $date = date("d-m-y");
                                $sql = "UPDATE borrow SET return_status=1, return_date='$date' WHERE borrowID='$borrowid' and return_status=0";
                                $result = mysqli_query($conn,$sql);
                                if($result)
                                {
                                    echo "<script>alert('Book Returned Successfully');</script>";
                                    $sql2 = "UPDATE books SET numBooks=numBooks+1 WHERE bookID='$bookid'";
                                    $result2 = mysqli_query($conn,$sql2);
                                    header('location: returnBooks.php');
                                }
                                else
                                {
                                    echo "<script>alert('Return Error !!');</script>";
                                }
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
  <script>
    if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>