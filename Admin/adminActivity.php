<?php
session_start();
if(!$_SESSION['lms'])
{
	header('location: admin.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Library Management System</title>

	<link rel="stylesheet" href="..\StyleSheet\style.css">

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
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ms-auto">

							<li class="nav-item ">

								<a class="nav-link active" href="adminActivity.php">Home</a>

							</li>
							<li class="nav-item ">
								<a class="nav-link" href="admin_logout.php">Logout</a>
							</li>

						</ul>

					</div>
        </div>
        </nav>
        </div>

    </header>

	<main>
			
		<br><br>
        <h3 class="text-center">Choose admin Activity</h3>
        <br><br>

			<section id="sectionID">
				<div class="card_section">

					<!-- 1st row section -->
	
					<div class="row mb-5 text-center ">
	
						<div class=" col-lg-6">
							<div class="card mb-5 m-lg-0">
								
								<div class="card-body text-center">
									<h6 class="card-title font-weight-bolder"><a href="">Manage Books</a></h6>
									<a href="add_book.php" class="stretched-link"></a>
		
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card mb-5 m-lg-0">
								
								<div class="card-body text-center">
									<h6 class="card-title font-weight-bolder"><a href="">Book Approval</a></h6>
									<a href="BookReqApproval.php" class="stretched-link"></a>
								</div>
							</div>
						</div>
						
	
					</div>

					<div class="row mb-5 text-center ">
						<div class="col-lg-6">
							<div class="card mb-5 m-lg-0">
								
								<div class="card-body text-center">
									<h6 class="card-title font-weight-bolder"><a href="">Borrow History</a></h6>
									<a href="deleteBooks.php" class="stretched-link"></a>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card mb-5 m-lg-0">
								
								<div class="card-body text-center">
									<h6 class="card-title font-weight-bolder"><a href="">Issue Fine</a></h6>
									<a href="generate_report.php" class="stretched-link"></a>
								</div>
							</div>
						</div>
	
					</div>
					<div class="row mb-5 text-center ">
						<div class="col-lg-6">
							<div class="card mb-5 m-lg-0">
								
								<div class="card-body text-center">
									<h6 class="card-title font-weight-bolder"><a href="">Return History</a></h6>
									<a href="returnHistory.php" class="stretched-link"></a>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card mb-5 m-lg-0">
								
								<div class="card-body text-center">
									<h6 class="card-title font-weight-bolder"><a href="">Payment History</a></h6>
									<a href="paymentHistory.php" class="stretched-link"></a>
								</div>
							</div>
						</div>
	
					</div>
			</section>

			</div>
			<!-- card ends -->
		</section>

	</main>

	<br> <br>


	
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