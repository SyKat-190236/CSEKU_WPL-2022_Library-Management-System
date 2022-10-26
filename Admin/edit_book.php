<?php
    session_start();
    if(!$_SESSION['lms'])
    {
      header('location: admin.php');
    }
    $host="localhost";
    $user="root";
    $pass="";
    $db="lms";
    $conn = mysqli_connect($host,$user,$pass,$db);

    if(isset($_POST['submit']))
    {
        $bookid = $_POST['bookid'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $edition = $_POST['edition'];
        $isbn = $_POST['isbn'];
        $source = $_POST['source'];
        $category = $_POST['category'];
        $numBooks = $_POST['numBooks'];

        
        $sql = "UPDATE books SET title='$title',author='$author',edition='$edition',isbn='$isbn',source='$source',category='$category',numBooks='$numBooks' where bookID='$bookid'";
        $result = mysqli_query($conn,$sql);
        if($result)
        {
          echo '<script>alert("Data Updated Successfully !")</script>';
          header('location: add_book.php');
        }
        else
        {
          echo '<script>alert("Data Update Failure !")</script>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../StyleSheet/addbookstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Edit Book</title>
</head>




<div id="navbarID">
            <nav class="navbar ">
                <div class="container-fluid">


                    <h4><a href="homepage.php"> Library Management System </a></h4>

                    </div>
                </div>
            </nav>
        </div>
    </header>

<body>
    
  <section id="sectionID">


    <br>
    <h3 class="text-center">Edit Book</h3>
    <br><br>
    <div class="list-group">
      <table align="center">
          <tr>
              <td>
                  <form action="edit_book.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3" id="newinput">
                        <input type="number" class="form-control" id="exampleFormControlInput1" name="bookid" value="<?php echo $_POST['bookid']; ?>" hidden>
                        <label for="exampleFormControlInput1" class="form-label">Title</label><br>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="title" value="<?php echo $_POST['title']; ?>">
                      </div>
                      <div class="mb-3" id="newinput">
                        <label for="exampleFormControlInput1" class="form-label">Author</label><br>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Author Name" name="author" value="<?php echo $_POST['author']; ?>">
                      </div>
                      <div class="mb-3" id="newinput">
                        <label for="exampleFormControlInput1" class="form-label">Edition</label><br>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter edition of the book" name="edition" value="<?php echo $_POST['edition']; ?>">
                      </div>
                      <div class="mb-3" id="newinput">
                        <label for="exampleFormControlInput1" class="form-label">ISBN No.</label><br>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter ISBN of the book" name="isbn" value="<?php echo $_POST['isbn']; ?>">
                      </div>
                      <div class="mb-3" id="newinput">
                        <label for="inputState">Source</label><br>
                        <select id="inputState" class="form-control" name="source">
                          <option disabled>Choose Source Type...</option>
                          <option value="Central Library" <?php echo $_POST['source']=='Central Library'?'selected':'' ;?>>Central Library</option>
                          <option value="Seminar Library" <?php echo $_POST['source']=='Seminar Library'?'selected':'' ;?>>Seminar Library</option>
                        </select>
                      </div>
                      <div class="mb-3" id="newinput">
                        <label for="inputState">Category</label><br>
                        <select id="inputState" class="form-control" name="category">
                          <option disabled>Choose Book Category...</option>
                          <option value="Bangla" <?php echo $_POST['category']=='Bangla'?'selected':'' ;?>>Bangla</option>
                          <option value="English" <?php echo $_POST['category']=='English'?'selected':'' ;?>>English</option>
                          <option value="CSE" <?php echo $_POST['category']=='CSE'?'selected':'' ;?>>CSE</option>
                          <option value="Pharmacy" <?php echo $_POST['category']=='Pharmacy'?'selected':'' ;?>>Pharmacy</option>
                          <option value="ECE" <?php echo $_POST['category']=='ECE'?'selected':'' ;?>>ECE</option>
                          <option value="BGE" <?php echo $_POST['category']=='BGE'?'selected':'' ;?>>BGE</option>
                        </select>
                      </div>
                      <div class="mb-3" id="newinput">
                        <label for="exampleFormControlInput1" class="form-label">Total Copies</label><br>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter Total Copies of the book" name="numBooks" value="<?php echo $_POST['numBooks']; ?>">
                      </div>
                      <div class="mb-3" id="newinput">
                        <button class="btn btn-success" name="submit">Submit</button>
                      </div>
                  </form>
              </td>
          </tr>
      </table>
  </div>
  </section>


</body>
</html>