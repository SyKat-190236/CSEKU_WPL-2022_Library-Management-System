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

					<a class="navbar-brand" href="#">

						<img id="image" class="rounded-circle" src="../img/book1.jpg">

						<h4 class="text-white">Library Management System</h4>
					</a>

					<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
						data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>


					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ms-auto">

							<li class="nav-item ">

								<a class="nav-link active" href="homepage.php">Home</a>

							</li>


							<li class="nav-item ">
								<a class="nav-link" href="Login_final.php">login</a>
							</li>

							<li class="nav-item ">
								<a class="nav-link" href="register.php">Sign_Up</a>
							</li>


						</ul>

					</div>
				</div>
			</nav>
		</div>



	</header>

	<main>

		<section id="sectionID">
			<br> <br>
			<br> <br>


			<h4 class="text-center"> Popolar Sections : </h4>
			<br>

			<div class="container text">
				<div id="row1" class="row">

					<div class="col-3">
						<ul class="d-inline-block">
							<li><a class="link-dark" href="catCSE.php">Computer Science And Engineering</a></li>
							<li><a class="link-dark" href="#">Agrotechnology </a></li>
							<li><a class="link-dark" href="#">Architecture</a></li>
							<li><a class="link-dark" href="catECE.php">Electronics and Communication Engineering</a></li>
						</ul>
					</div>

					<div class="col-3">
						<ul class="d-inline-block">
							<li><a class="link-dark" href="booklist.php">Mathematics</a></li>
							<li><a class="link-dark" href="#">Physics</a></li>
							<li><a class="link-dark" href="#">Statistics</a></li>
							<li><a class="link-dark" href="#">Urban and Rural Planning</a></li>
						</ul>
					</div>

					<div class="col-3">
						<ul class="d-inline-block">
							<li><a class="link-dark" href="catBGE.php">Biotechnology and Genetic Engineering</a> </li>
							<li><a class="link-dark" href="#">Bangla</a> </li>
							<li><a class="link-dark" href="#">Sociology</a></li>
							<li><a class="link-dark" href="#">Forestry and Wood Technology</a></li>
						</ul>
					</div>

					<div class="col-3">
						<ul class="d-inline-block">
							<li><aclass="link-dark" href="booklist.php">Economics</a></li>
							<li><a class="link-dark" href="#">Development Studies</a></li>
							<li><a class="link-dark" href="#">Fisheries and Marine Resources Technology</a> </li>
							<li><a class="link-dark" href="#">Mass Communication and Journalism</a></li>
						</ul>
					</div>

				</div>
				
			</div>


			<br>
			<br>
			<h4 class="text-center">New Added Books : </h4>
			<br>


			<!-- Cards -->

			<div class="card_section">
			<div class="row mb-5 text-center">
					<form action="homepage.php" method="post">
						<input type="text" name="search" class="form-control" placeholder="Search Books..."><br>
						<button type="submit" name="submit" class="btn btn-success" id="srcbtn">Search</button>
					</form>
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
									$title = $row['title'];
									$image = $row['image'];
									?>
									<div class="col-lg-3 col-sm-6">
										<div class="card mb-5 m-lg-0">
											<img class="card-img-top" src="../img/<?php echo $image;?>">
											<div class="card-body text-center">
												<h6 class="card-title font-weight-bolder"><?php echo $title;?></h6>
												
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
											</div>
										</div>
										<br>
									</div>
								
									<?php
								}
							}
                        ?>
				</div>


				<!-- 1st row section -->
				<div class="row mb-5 text-center ">
				
						<?php
                            $host="localhost";
                            $user="root";
                            $pass="";
                            $db="lms";
                            $conn = mysqli_connect($host,$user,$pass,$db);
                            $sql = "SELECT * FROM books WHERE bookID<18 ORDER BY bookID DESC";
                            $data = mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_assoc($data)){
                                $title = $row['title'];
                                $image = $row['image'];
								$author = $row['author'];
								$edition = $row['edition'];
								$isbn = $row['isbn'];
								$category = $row['category'];
								$source = $row['source'];
                                ?>
								<div class="col-lg-3 col-sm-6">
									<div class="card mb-5 m-lg-0">
										<img class="card-img-top" src="../img/<?php echo $image;?>">
										<div class="card-body text-center">
											<h6 class="card-title font-weight-bolder"><?php echo $title;?></h6>
											<form id="bookdata" action="bookview.php" method="post" enctype="multipart/form-data">
												<input type="text" name="title" value="<?php echo $row['title']; ?>" hidden>
												<input type="text" name="image" value="<?php echo $image; ?>" hidden>
												<input type="text" name="author" value="<?php echo $author; ?>" hidden>
												<input type="text" name="edition" value="<?php echo $edition; ?>" hidden>
												<input type="text" name="isbn" value="<?php echo $isbn; ?>" hidden>
												<input type="text" name="category" value="<?php echo $category; ?>" hidden>
												<input type="text" name="source" value="<?php echo $source; ?>" hidden>
												<button type="submit" name="submit" class="btn btn-success">View</button>
											</form>
										</div>
									</div>
									<br>
								</div>
                                <?php
                            }
                        ?>

				</div>

				<a href="booklist.php">
					<p class="text-end"><b>See More...</b></p>
				</a>

			</div>
			<!-- card ends -->

		</section>

	</main>


	<footer class="footer-section">

		<div class="row text-center text-white">
			<div class="col-lg-4 text-center">

				<h4>Library Management System</h4>
				<b>Developed by : <br></b>
				<p>Tanvir Hassan ID-190208 <br>Sykat biswas ID-190236 </p>




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

				<a href="#"><h5 class="text-end">Return to Top</h5></a>
				

			</div>
		</div>



	</footer>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>
</body>

</html>