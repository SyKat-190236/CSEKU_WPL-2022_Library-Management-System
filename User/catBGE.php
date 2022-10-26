<?php
    session_start();
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

					<a class="navbar-brand" href="homepage.php">

						<h4 class="text-white">Library Management System</h4>
					</a>

					<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
						data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"> </span>
					</button>


					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ms-auto">

							<li class="nav-item ">

								<a class="nav-link active" href="loginHomepage.php">Home</a>

							</li>

							<li class="nav-item ">
								<a class="nav-link" href="writers.php">Writers</a>
							</li>

							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								  Informantion
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								  <li><a class="dropdown-item" href="returnBooks.php">My Books</a></li>
								  <li><a class="dropdown-item" href="payFine.php">Pay Fine</a></li>
								  <li><hr class="dropdown-divider"></li>
								  <li><a class="dropdown-item" href="#">Close</a></li>
								</ul>
							  </li>

							<li class="nav-item ">
								<a class="nav-link" href="#">Feedback</a>
							</li>

						</ul>

					</div>
				</div>
			</nav>
		</div>



	</header>

	<main>

		<section id="sectionID">
			<br>

			<div id="Searchid" class="container h-100">
				<div class="row mb-5 text-center">
				  <form action="booklist.php" method="post">
							<input type="text" name="search" class="form-control" placeholder="Search Books..."> <br>
							<button type="submit" name="submit" class="btn btn-success">Search</button>
					</form>
				</div>
			</div>

            <!-- list of books -->


            <div class="books-section">


                <div class="list-group">
                    <table align="center">
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
									$bookid = $row['bookID'];
									$title = $row['title'];
									$author = $row['author'];
									$image = $row['image'];
									$isbn = $row['isbn'];
									?>
									<tr class="list-group-item">
									<td><img src="../img/<?php echo $image;?>" alt="..." id="thumbnail">
									</td>
									<td><h4> <?php echo $title;?> </h4>
									<h5><?php echo $author;?></h5>
									<h6>ISBN: <?php echo $isbn;?></h6></td><td>
									<form action="booklist.php" method="post">
										<input type="number" name="bookid" value="<?php echo $row['bookID']; ?>" hidden>
										<button class="btn btn-primary" id="workbtn" name="borrow">Borrow</button>
									</form>
									<form id="bookdata" action="bookview.php" method="post" enctype="multipart/form-data">
													<input type="text" name="title" value="<?php echo $row['title']; ?>" hidden>
													<input type="text" name="image" value="<?php echo $row['image']; ?>" hidden>
													<input type="text" name="author" value="<?php echo $row['author']; ?>" hidden>
													<input type="number" name="edition" value="<?php echo $row['edition']; ?>" hidden>
													<input type="text" name="isbn" value="<?php echo $row['isbn']; ?>" hidden>
													<input type="text" name="source" value="<?php echo $row['source']; ?>" hidden>
													<input type="text" name="category" value="<?php echo $row['category']; ?>" hidden>
													<button type="submit" name="submit" class="btn btn-success">View</button>
												</form>
									</td></tr>
									<?php
								}
							}
										$sql = "SELECT * FROM books WHERE category='BGE'";
										$data = mysqli_query($conn,$sql);
										while($row = mysqli_fetch_assoc($data)){
											$bookid = $row['bookID'];
											$title = $row['title'];
											$author = $row['author'];
											$image = $row['image'];
											$isbn = $row['isbn'];
											?>
											<tr class="list-group-item">
											<td><img src="../img/<?php echo $image;?>" alt="..." id="thumbnail">
											</td>
											<td><h4> <?php echo $title;?> </h4>
											<h5><?php echo $author;?></h5>
											<h6>ISBN: <?php echo $isbn;?></h6></td><td>
											<form action="booklist.php" method="post">
												<input type="number" name="bookid" value="<?php echo $row['bookID']; ?>" hidden>
												<button class="btn btn-primary" id="workbtn" name="borrow">Borrow</button>
											</form>
											<form id="bookdata" action="bookview.php" method="post" enctype="multipart/form-data">
													<input type="text" name="title" value="<?php echo $row['title']; ?>" hidden>
													<input type="text" name="image" value="<?php echo $row['image']; ?>" hidden>
													<input type="text" name="author" value="<?php echo $row['author']; ?>" hidden>
													<input type="number" name="edition" value="<?php echo $row['edition']; ?>" hidden>
													<input type="text" name="isbn" value="<?php echo $row['isbn']; ?>" hidden>
													<input type="text" name="source" value="<?php echo $row['source']; ?>" hidden>
													<input type="text" name="category" value="<?php echo $row['category']; ?>" hidden>
													<button type="submit" name="submit" class="btn btn-success">View</button>
												</form>
											</td></tr>
											<?php
										}
									?>
                        <?php
                            if(isset($_POST['borrow']) && isset($_SESSION['userid']))
                            {
                                $userid = $_SESSION['userid'];
                                $bookid = $_POST['bookid'];
                                $date = date("d-m-y");
                                $approval = false;
                                $sql = "INSERT INTO borrow(userID,bookID,issue_date,approval) VALUES('$userid','$bookid','$date','$approval')";
                                if(mysqli_query($conn,$sql))
                                {
                                    echo "<script>alert('Book Borrowed Successfully')</script>";
                                }
                            }
                            else if(isset($_POST['borrow']))
							{
                                echo "<script>alert('Please Log In to borrow Book');</script>";
                            }
                        ?>  
                    </table>
               </div>



            </div>





		


			

		</section>

	</main>


	<footer class="footer-section">

		<div class="row text-center text-white">
			<div class="col-lg-4 text-center">

				<h4>Library Management System</h4>
				<b>Developed by : <br></b>
				<p>Tanvir Hassan ID-190208 <br>Sykat biswas ID-190236 <br>Musfiq Rahman ID-190214</p>




			</div>

			<div class="col-lg-4 text-center">

				<b>Contact Us :</b><br>
				<p>Phone : 01989567104 <br> email : onlinelibrary@gmail.com</p><br>
				<div class="container " style=" text-align:center">

					<div class="d-inline p-2  "><a href="https://www.facebook.com/studycarelibrary"><img id="socailimage" class="rounded-circle" src="../img/facebook.png"></a></div>
					<div class="d-inline p-2 "><a href="#"><img id="socailimage" class="rounded-circle" src="../img/twiter.png"></a></div>
					<div class="d-inline p-2  "><a href="https://www.youtube.com/channel/UCkekL8NcJfv1-_ecL6fcfGA"><img id="socailimage" class="rounded-circle" src="../img/youtube.png"></a></div>
					<div class="d-inline p-2  "><a href="#"><img id="socailimage" class="rounded-circle" src="../img/insta.jpg"></a></div>
		
				</div>

			</div>
			<div class="col-lg-4">

				<a href="booklist.php"><h5 class="text-end">Return to Top</h5></a>
				

			</div>
		</div>



	</footer>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>
</body>

</html>