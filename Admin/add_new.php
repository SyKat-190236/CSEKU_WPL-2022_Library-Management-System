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
        $title = $_POST['title'];
        $author = $_POST['author'];
        $edition = $_POST['edition'];
        $isbn = $_POST['isbn'];
        $source = $_POST['source'];
        $category = $_POST['category'];
        $numBooks = $_POST['numBooks'];

        $imgname = $_FILES['image']['name'];
        $tmpname = $_FILES['image']['tmp_name'];
        $uploc = 'img/'.$imgname;
        $sql = "INSERT INTO books(title,author,edition,isbn,source,category,image,numBooks) VALUES('$title','$author','$edition','$isbn','$source','$category','$imgname','$numBooks')";
        $result = mysqli_query($conn,$sql);
        if($result)
        {
          move_uploaded_file($tmpname, $uploc);
          echo '<script>alert("Data Insert Successfully!")</script>';
          header('location: add_book.php');
        }
        else
        {
          echo '<script>alert("Data Insert Failed!")</script>';
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
    <title>Add New Books</title>
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
    <h3 class="text-center">Upload Books</h3>
    <br><br>
    <div class="list-group">
      <table align="center">
          <tr>
              <td>
                  <form action="add_new.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3" id="newinput">
                        <label for="exampleFormControlInput1" class="form-label">Title</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter title of the book" name="title">
                      </div>
                      <div class="mb-3" id="newinput">
                        <label for="exampleFormControlInput1" class="form-label">Author</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Author Name" name="author">
                      </div>
                      <div class="mb-3" id="newinput">
                        <label for="exampleFormControlInput1" class="form-label">Edition</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter edition of the book" name="edition">
                      </div>
                      <div class="mb-3" id="newinput">
                        <label class="custom-file-label" for="customFile">Book cover : </label>
                        <input type="file" class="custom-file-input" id="customFile" name="image">
                      </div>
                      <div class="mb-3" id="newinput">
                        <label for="exampleFormControlInput1" class="form-label">ISBN No.</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter ISBN of the book" name="isbn">
                      </div>
                      <div class="mb-3" id="newinput">
                        <label for="inputState">Source</label>
                        <select id="inputState" class="form-control" name="source">
                          <option selected disabled>Choose Source Type...</option>
                          <option value="Central Library">Central Library</option>
                          <option value="Seminar Library">Seminar Library</option>
                        </select>
                      </div>
                      <div class="mb-3" id="newinput">
                        <label for="inputState">Category</label>
                        <select id="inputState" class="form-control" name="category">
                          <option selected disabled>Choose Book Category...</option>
                          <option value="Bangla">Bangla</option>
                          <option value="English">English</option>
                          <option value="CSE">CSE</option>
                          <option value="Pharmacy">Pharmacy</option>
                          <option value="ECE">ECE</option>
                          <option value="BGE">BGE</option>
                        </select>
                      </div>
                      <div class="mb-3" id="newinput">
                        <label for="exampleFormControlInput1" class="form-label">Total Copies: </label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter total No. of Copies" name="numBooks">
                      </div>
                      <div class="mb-3" id="newinput">
                        <button class="btn btn-success" name="submit">Add Book</button>
                      </div>
                  </form>
              </td>
          </tr>
      </table>
  </div>
  </section>


</body>
</html>