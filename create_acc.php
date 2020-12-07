<?php
$server = "localhost";
$username = "root";
$password = "";
$con = mysqli_connect($server, $username, $password);

// if(!$con){
//     echo "Not Connect to Server";
// }
// else{
//     echo "Connected to server";
// }
$insert = false;
if (isset($_POST['fname'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $rollno = $_POST['rollno'];
    $enrollno = $_POST['enrollno'];
    $emailid = $_POST['emailid'];
    $course = $_POST['course'];

    $sql = "INSERT INTO `bca`.`datas` (`fname`, `lname`, `city`, `rollno`, `enrollno`, `emailid`, `course`) VALUES
    ('$fname', '$lname', '$city', '$rollno', '$enrollno', '$emailid', '$course');";


    if ($con->query($sql)) {
        
         $insert = true;
    } else {
        echo "Data is not submmitted. Please fill again the form."; 
        $insert = false;   
    }
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Search Form</title>
</head>

<body class="bg-dark">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Uni Finder</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="index.php">Home</a>
                <a class="nav-link" href="search_form.php">Find Someone Here</a>
            </div>
        </div>
    </nav>


    <?php
            if($insert == true){
                ?>
                <p class="display-4 my-2 text-center text-light">Thank you for registration</p>
            <?php };
            ?>
    <section id="cover" class="min-vh-100 bg-dark">
        <div id="cover-caption">
            <div class="jumbotron jumbotron-fluid bg-dark">
                <div class="row text-white">
                    <div class="col-xl-5 col-lg-2 col-md-8 col-sm-10 mx-auto text-center form p-4">
                        <div class="px-2">
                            <form action="create_acc.php" method="POST" class="justify-content-center">
                                <div class="form-group">
                                <p class="h4 text-left ">Enter Your First Name</p>
                                    <input type="text" class="form-control" name="fname" placeholder="Abdullah" required>
                                </div>
                                <div class="form-group">
                                <p class="h4 text-left ">Enter Your Last Name</p>
                                    <input type="text" class="form-control" name="lname" placeholder="Tahir" required>
                                </div>
                                <div class="form-group">
                                <p class="h4 text-left ">Enter Your Enrollment Number</p>
                                    <input type="text" class="form-control" name="enrollno" placeholder="GI6337" required>
                                </div>
                                <div class="form-group">
                                <p class="h4 text-left ">Enter Your First Name</p>
                                    <input type="text" class="form-control" name="city" placeholder="Aligarh">
                                </div>
                                <div class="form-group">
                                <p class="h4 text-left ">Enter Your Roll Number</p>
                                    <input type="text" class="form-control" name="rollno" placeholder="18cab1008" required>
                                </div>
                                <div class="form-group">
                                <p class="h4 text-left ">Enter Your Program</p>
                                    <input type="text" class="form-control" name="course" placeholder="BCA" required>
                                </div>
                                <div class="form-group">
                                <p class="h4 text-left ">Enter Your Email Id</p>
                                    <input type="text" class="form-control"  name= "emailid" placeholder="abdullahtahir919@gmail.com">
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="display-4 my-4 text-light bg-dark text-center">
        <p>&copy;All right Reserved 2020 || MAT919.</p>
    </div>

</body>

</html>