<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        @font-face {
            font-family: Canela-Bold;
            src: url(fonts/Canela-Bold.ttf);
        }

        @font-face {
            font-family: NeueHaasDisplay-Roman;
            src: url(fonts/NeueHaasDisplay-Roman.ttf);
        }

        .display-4 {
            color: #FCAF17;
            font-family: Canela-Bold;
        }

        .text-muted {
            color: #1A0E34 !important;
            font-family: NeueHaasDisplay-Roman;
            font-weight: 500;
        }

        input::placeholder {
            color: #1A0E34 !important;
        }

        label,
        input,
        button,
        select,
        option {
            font-family: NeueHaasDisplay-Roman;
            color: #1A0E34;
        }

        .login,
        .image {
            min-height: 100vh;
        }

        .bg-image {
            background-image: url('img/addbook.png');
            background-size: cover;
            background-position: center center;
        }

        .logoutLblPos {
            position: fixed;
            right: 10px;
            top: 5px;
        }

        #inputState {
            position: relative;
            margin-bottom: 4%;
        }

        #radiobutton {
            margin-bottom: 3%;
        }

        .custom-control-input {
            position: relative;
        }
    </style>
    <title>Library Management System</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
            <div class="col-md-6 d-none d-md-flex bg-image"></div>

            <!-- The content half -->
            <div class="col-md-6">
                <div class="login d-flex align-items-center py-5">

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-7 mx-auto">
                                <h3 class="display-4 text-center">Add New Book!</h3>
                                <p class="text-muted mb-3 text-center">Add a book by entering the details below.</p>
                                <form action="addbook.php" method="POST">
                                    <div class="form-group mb-3">
                                        <input id="inputEmail" type="text" placeholder="Book Name" autofocus="" name="book"
                                            class="form-control rounded-pill border-0 shadow-sm px-4" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <input id="inputEmail" type="text" name="author"
                                            placeholder="Author Name" autofocus=""
                                            class="form-control rounded-pill border-0 shadow-sm px-4" required>
                                    </div>

                                    <select id="inputState" class="form-control rounded-pill border-0 shadow-sm px-4"
                                        name="category" class="form-group mb-3">
                                        <option>Category</option>
                                        <option value="Fiction">Fiction</option>
                                        <option value="Non-Fiction">Non-Fiction</option>
                                        <option value="Biography">Biography</option>
                                        <option value="Business">Business</option>
                                        <option value="Technology">Technology</option>
                                        <option value="Science">Science</option>
                                        <option value="Religion">Religion</option>
                                        <option value="Sports">Sports</option>
                                    </select>

                                    <div class="form-group mb-3">
                                        <input id="inputEmail" type="text" placeholder="Publication" autofocus=""
                                            name="publication" class="form-control rounded-pill border-0 shadow-sm px-4"
                                            required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <input id="inputEmail" type="text" placeholder="Edition" autofocus=""
                                            name="edition" class="form-control rounded-pill border-0 shadow-sm px-4"
                                            required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <input id="password" type="number" placeholder="Price" name="price"
                                            class="form-control rounded-pill border-0 shadow-sm px-4" required>
                                    </div>
                                    <br>
                                    <button type="submit" name="submit"
                                        class="btn btn-warning btn-block mb-2 rounded-pill shadow-sm">Submit
                                    </button>
                                    <button type="reset"
                                    class="btn btn-dark btn-block mb-2 rounded-pill shadow-sm">Reset
                                </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>