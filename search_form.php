<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <title>Searching Result</title>
</head>

<body class="bg-dark">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Uni Finder</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="create_acc.php">Register yourself Here</a>
                <a class="nav-link" href="search_form.php">Find Someone Here</a>
            </div>
        </div>
    </nav>

    <section id="cover" class="min-vh-100 bg-dark">
        <div id="cover-caption">
            <div class="jumbotron jumbotron-fluid bg-dark">
                <div class="row text-white">
                    <div class="col-xl-5 col-lg-2 col-md-8 col-sm-10 mx-auto text-center form p-4">
                        <div class="px-2">
                            <form action="fname.php" method="POST" class="justify-content-center">
                                <div class="form-group">
                                    <label class="sr-only">First Name</label>
                                    <input type="text" class="form-control" name="fname" placeholder="Search By First Name" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg" name="fname_btn">Search By First Name</button>
                            </form>
                        </div>
                        <div class="px-2">
                            <form action="lname.php" method="POST" class="justify-content-center">
                                <div class="form-group">
                                    <label class="sr-only">Last Name</label>
                                    <input type="text" class="form-control my-2" name="lname" placeholder="Search By Last Name" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg" name="lname_btn">Search By Last Name</button>
                            </form>
                        </div>
                        <div class="px-2">
                            <form action="city.php" method="POST" class="justify-content-center">
                                <div class="form-group">
                                    <label class="sr-only">City</label>
                                    <input type="text" class="form-control my-2" name="city" placeholder="Search By City" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg" name="city_btn">Search By City</button>
                            </form>
                        </div>
                        <div class="px-2">
                            <form action="enroll.php" method="POST" class="justify-content-center">
                                <div class="form-group">
                                    <label class="sr-only">Enroll Number</label>
                                    <input type="text" class="form-control my-2" name="enrollno" placeholder="Search By Enrollment Number" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg" name="enroll_btn">Search By Enrollment Number</button>
                            </form>
                        </div>

                        <div class="px-2">
                            <form action="program.php" method="POST" class="justify-content-center">
                                <div class="form-group">
                                    <label class="sr-only">Program</label>
                                    <input type="text" class="form-control my-2" name="program" placeholder="Search By Program" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg" name="program_btn">Search By Program</button>
                            </form>
                        </div>

                        <div class="px-2">
                            <form action="rollno.php" method="POST" class="justify-content-center">
                                <div class="form-group">
                                    <label class="sr-only">Roll Number</label>
                                    <input type="text" class="form-control my-2" name="rollno" placeholder="Search By RollNumber" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg" name="rollno_btn">Search By Roll Number</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="display-4 my-4 text-light bg-dark text-center">
            <p>&copy;All right Reserved 2020 || MAT919.</p>
        </div>



        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>