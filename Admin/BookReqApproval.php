<?php
    $host="localhost";
    $user="root";
    $pass="";
    $db="lms";
    $conn = mysqli_connect($host,$user,$pass,$db);
    error_reporting(E_ALL ^ E_WARNING); 
    if(isset($_POST['accept']))
    {
        $borrowid = $_POST['borrowid'];
        $bookid = $_POST['bookid'];
        $sql = "UPDATE borrow SET approval=1 WHERE borrowID='$borrowid'";
        $sql2 = "UPDATE books SET numBooks=numBooks-1 WHERE bookID='$bookid' AND numBooks>=0";
        if(mysqli_query($conn,$sql) && mysqli_query($conn,$sql2))
        {
            
            echo "<script>alert('Book Approved Successfully !!');</script>";
            header('location: BookReqApproval.php');
        }
    }
    if(isset($_POST['cancel']))
    {
        $borrowid = $_POST['borrowid'];
        $sql = "DELETE FROM borrow WHERE borrowID='$borrowid'";
        if(mysqli_query($conn,$sql))
        {
            echo "<script>alert('Book Request Canceled !!');</script>";
            header('location: BookReqApproval.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>

    <link rel="stylesheet" href="../StyleSheet/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <header>

        <div id="navbarID">
            <nav class="navbar navbar-expand-md navbar-dark bg-secondary " id="nav1">
                <div class="container-fluid">
                    <a class="navbar-brand" href="adminActivity.php">
                        <h4 class="text-white">Library Management System</h4>
                    </a>
                </div>
        </div>
        </nav>
        </div>

    </header>

    <main>

        

        <br><br>
        <h3 class="text-center">Book Approval Page</h3>
        <br><br>
        <!-- list of books -->
        <div style="color:  #e8ded2;" class="books-section ">


            <div class="list-group">
                <table align="center">
                    <?php
                        $sql = "SELECT * FROM borrow WHERE approval<1 ORDER BY borrowID DESC";
                        $data = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($data)){
                            $borrowid = $row['borrowID'];
                            $bookid = $row['bookID'];
                            $userid = $row['userID'];
                            $getname = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM user where userID='$userid'"));
                            $username = $getname['name'];
                            $getbook = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM books where bookID='$bookid'"));
                            $title = $getbook['title'];
                            $numbooks = $getbook['numBooks'];
                            $image = $getbook['image']
                    ?>
                    <tr class="list-group-item">
                        <td>
                            <img src="../img/<?php echo $image; ?>" alt="..." id="thumbnail">
                        </td>
                        <td>
                            <h4>Book name : <?php echo $title; ?></h4> <br>
                            <h5>Requested by : <?php echo $username; ?></h5>
                            <h6>Copies Left : <?php echo $numbooks; ?></h6>

                        </td>

                        <td class="text-end">
                            <form action="BookReqApproval.php" method="post">
                                <input type="number" name="borrowid" value="<?php echo $borrowid; ?>" hidden>
                                <input type="number" name="bookid" value="<?php echo $bookid; ?>" hidden>
                                <button class="btn btn-primary" id="workbtn" name="accept">Accept</button>
                            </form>
                            <form action="BookReqApproval.php" method="post">
                                <input type="number" name="borrowid" value="<?php echo $borrowid; ?>" hidden>
                                <button class="btn btn-danger" id="workbtn" name="cancel">Cancel</button>
                            </form>

                        </td>

                    </tr>
                    <?php
                        }
                    ?>
                </table>
            </div>



        </div>


        </section>

    </main>


    <footer class="footer-section">

        <div class="row text-center text-white">
            <div class="col-lg-12 text-center">

                <h4>END</h4>

            </div>

    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>