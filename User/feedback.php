<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Library Management System</title>

	<link rel="stylesheet" href="style.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

	<header>

		<div id="navbarID">
			<nav class="navbar navbar-expand-md navbar-dark bg-secondary " id="nav1">
				<div class="container-fluid">

					<a class="navbar-brand" href="loginHomepage.php">

						<h4 class="text-white">Library Management System</h4>
					</a>

					<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
						data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

				</div>
			</nav>
		</div>



	</header>

	<main>

		<section id="sectionID">

            <br><br>


            <div class="container">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Feedback Type</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Bugs or any other issue">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Describe briefly</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  <div class="mb-3">
                    <button class="btn btn-success">Submit</button>
                  </div>
            </div>
			

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

					<div class="d-inline p-2  "><a href="https://www.facebook.com/studycarelibrary"><img id="socailimage" class="rounded-circle" src="img/facebook.png"></a></div>
					<div class="d-inline p-2 "><a href="#"><img id="socailimage" class="rounded-circle" src="img/twiter.png"></a></div>
					<div class="d-inline p-2  "><a href="https://www.youtube.com/channel/UCkekL8NcJfv1-_ecL6fcfGA"><img id="socailimage" class="rounded-circle" src="img/youtube.png"></a></div>
					<div class="d-inline p-2  "><a href="#"><img id="socailimage" class="rounded-circle" src="img/insta.jpg"></a></div>
		
				</div>

			</div>
			<div class="col-lg-4">

				<a href="feedback.php"><h5 class="text-end">Return to Top</h5></a>
				

			</div>
		</div>



	</footer>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>
</body>

</html>