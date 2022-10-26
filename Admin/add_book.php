<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\StyleSheet\addbookstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Add Book</title>
</head>


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

<body>

    <section id="sectionID">



        <br><br>

    <div id="Searchid" class="container h-100">
        <div class="justify-content-center h-100">
          <div class="searchbar">
            <form action="add_book.php" method="post">
                <input class="form-control" type="text" name="search" placeholder="Search Books..."><br>&nbsp;
                <button type="submit" class="btn btn-primary" name="submit">Search</button>
            </form>
          </div>
        </div>
    </div>
    <br>
   <div class="list-group">
        <table>
            <tr class="list-group-item" id="center_button">
                <td>
                    <a href="add_new.php">
                        
                    <button class="btn btn-success">Add New</button>
                    </a>
                </td>
            </tr>
            <?php
                $host="localhost";
                $user="root";
                $pass="";
                $db="lms";
                $conn = mysqli_connect($host,$user,$pass,$db);
                if(isset($_POST['submit']))
							{
								$search = $_POST['search'];
								$sql = "SELECT * FROM books WHERE title like '%$search%' or author like '%$search%' or edition like '%$search%' or source like '%$search%' or category like '%$search%' or isbn like '%$search%'";
								$data = mysqli_query($conn,$sql);
								while($row = mysqli_fetch_assoc($data)){
									$bookid= $row['bookID'];
                                    $title = $row['title'];
                                    $author = $row['author'];
                                    $edition = $row['edition'];
                                    $isbn = $row['isbn'];
                                    $source = $row['source'];
                                    $category = $row['category'];
                                    $image = $row['image'];
                                    $numbooks = $row['numBooks'];
									?>
									<tr class="list-group-item">
                                    <td><img src="../img/<?php echo $image;?>" alt="..." id="thumbnail">
                                    </td>
                                    <td><h5> <?php echo $title;?> </h5><br>
                                    <h6> <?php echo $author;?> </h6><br>
                                    <h7> ISBN: <?php echo $isbn;?> </h7></td>
                                    <td>
                                    <form action="edit_book.php" method="post">
                                        <input type="number" name="bookid" value="<?php echo $bookid;?>" hidden>
                                        <input type="text" name="title" value="<?php echo $title;?>" hidden>
                                        <input type="text" name="author" value="<?php echo $author;?>" hidden>
                                        <input type="number" name="edition" value="<?php echo $edition;?>" hidden>
                                        <input type="text" name="isbn" value="<?php echo $isbn;?>" hidden>
                                        <input type="text" name="source" value="<?php echo $source;?>" hidden>
                                        <input type="text" name="category" value="<?php echo $category;?>" hidden>
                                        <input type="number" name="numBooks" value="<?php echo $numbooks;?>" hidden>
                                        <button class="btn btn-warning" id="workbtn" name="edit">Edit</button>
                                    </form>
                                    <form action="add_book.php" method="post">
                                        <input type="number" name="bookid" value="<?php echo $row['bookID']; ?>" hidden>
                                        <button class="btn btn-danger" id="workbtn" name="delete">Delete</button>
                                        <?php
                                            if(isset($_POST['delete']))
                                            {
                                                $id=$_POST['bookid'];
                                                $sql="DELETE FROM books WHERE bookID='$id'";
                                                if(mysqli_query($conn,$sql))
                                                {
                                                    echo "<script>alert('Delete book successfully !');</script>";
                                                    header('location: add_book.php');
                                                }
                                            }
                                        ?>
                                    </form></td></tr>
									<?php
								}
							}
                $sql = "SELECT * FROM books ORDER BY bookID DESC";
                $data = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($data)){
                    $bookid= $row['bookID'];
                    $title = $row['title'];
                    $author = $row['author'];
                    $edition = $row['edition'];
                    $isbn = $row['isbn'];
                    $source = $row['source'];
                    $category = $row['category'];
                    $image = $row['image'];
                    $numbooks = $row['numBooks'];
                    ?>
                    <tr class="list-group-item">
                    <td><img src="../img/<?php echo $image;?>" alt="..." id="thumbnail">
                    </td>
                    <td><h5> <?php echo $title;?> </h5><br>
                    <h6> <?php echo $author;?> </h6><br>
                    <h7> ISBN: <?php echo $isbn;?> </h7></td>
                    <td>
                    <form action="edit_book.php" method="post">
                        <input type="number" name="bookid" value="<?php echo $bookid;?>" hidden>
                        <input type="text" name="title" value="<?php echo $title;?>" hidden>
                        <input type="text" name="author" value="<?php echo $author;?>" hidden>
                        <input type="number" name="edition" value="<?php echo $edition;?>" hidden>
                        <input type="text" name="isbn" value="<?php echo $isbn;?>" hidden>
                        <input type="text" name="source" value="<?php echo $source;?>" hidden>
                        <input type="text" name="category" value="<?php echo $category;?>" hidden>
                        <input type="number" name="numBooks" value="<?php echo $numbooks;?>" hidden>
                        <button class="btn btn-warning" id="workbtn" name="edit">Edit</button>
                    </form>
                    <form action="add_book.php" method="post">
                        <input type="number" name="bookid" value="<?php echo $row['bookID']; ?>" hidden>
                        <button class="btn btn-danger" id="workbtn" name="delete">Delete</button>
                        <?php
                            if(isset($_POST['delete']))
                            {
                                $id=$_POST['bookid'];
                                $sql="DELETE FROM books WHERE bookID='$id'";
                                if(mysqli_query($conn,$sql))
                                {
                                    echo "<script>alert('Delete book successfully !');</script>";
                                    header('location: add_book.php');
                                }
                            }
                        ?>
                    </form></td></tr>
                    <?php
                }
            ?>
        </table>
   </div>

    </section>
    
</body>


<footer class="footer-section">

    <div class="row text-center text-white">
        <div class="col-lg-12 text-center">

            <h4>END</h4>

        </div>

</footer>
</html>