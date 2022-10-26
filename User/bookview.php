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

						<a href="#"><h4 class="text-white">Library Management System</h4></a>
					</a>

					<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
						data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>


					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ms-auto">

							
						</ul>

					</div>
				</div>
			</nav>
		</div>



	</header>

	<main>

		<section id="sectionID">

            <br> <br>

            <form action="bookview.php" method="post" enctype="multipart/form-data">
				<div id="carousel-view" class="container">
					<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-indicators">
						<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
						<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
					</div>
					<div class="carousel-inner">
						<div class="carousel-item active">
						<div class="container">
							<img src="../img/<?php echo $_POST['image'];?>" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-caption d-none d-md-block">
							<h5>Cover Page</h5>
						</div>
						</div>
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
					</div>
				</div>
				<br>
				
				<div class="container text-center">
					<h1><?php echo $_POST['title'];?></h1>
					<h4><?php echo $_POST['author'];?></h4>
					<h5>ISBN : <?php echo $_POST['isbn'];?> , Edition : <?php echo $_POST['edition'];?></h5>
				</div>
				<div class="container text-center">
					<p>This book is designed for the first course in <?php echo $_POST['title'];?> taken by undergraduate students in <?php echo $_POST['category'];?>. The revised edition maintains the lucid flow and continuity which has been the strength of the book. This book is a resource of <?php echo $_POST['source'];?>.</p>
				</div>
			</form>


			  <br><br>




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

				<a href="homepage.html"><h5 class="text-end">Return to Top</h5></a>
				

			</div>
		</div>



	</footer>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>
</body>

</html>