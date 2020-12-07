<?php
class connection
{

    protected $server = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $db = 'bca';

    public $con = null;

    public function __construct()
    {

        $this->con =  mysqli_connect($this->server, $this->username, $this->password, $this->db);
        // if ($this->con->connect_error) {
        //     echo "Fail" . $this->con->connect_error;
        // } else {
        //     echo "connection sucess";
        // }
    }
}

?>
<?php
class User_data extends connection
{
    public function getUser()
    {
?>
        <table class="table table-striped table-dark">
            <?php
            if (isset($_POST['program_btn'])) {
                $program = $_POST['program'];
                $sql = "SELECT * FROM `datas` WHERE course = '$program'";   // $resultArray  = array();  
                $result = $this->con->query($sql);
                $resultCheck = mysqli_num_rows($result);
                if ($resultCheck > 0) {
            ?>
                    <thead>
                        <tr>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Roll No</th>
                            <th scope="col">Enrollment No</th>
                            <th scope="col">City</th>
                            <th scope="col">Program</th>
                            <th scope="col">Email Id</th>
                        </tr>
                    </thead>
                    <?php
                    while ($row  = $result->fetch_assoc()) {
                    ?>
                        <tbody>
                            <tr>
                                <td><?php echo $row['fname'] ?></td>
                                <td><?php echo $row['lname'] ?></td>
                                <td><?php echo $row['rollno'] ?></td>
                                <td><?php echo $row['enrollno'] ?></td>
                                <td><?php echo $row['city'] ?></td>
                                <td><?php echo $row['course'] ?></td>
                                <td><?php echo $row['emailid'] ?></td>
                            </tr>
                        </tbody>

    <?php
                    }
                }
                else {
                    ?>
                    <p class = "text-dark text-center display-2 py-1">Sorry..No record found for given Program </p>  
                    <?php             
              }
            }   
        }
    }// if(isset($_POST['fname_btn']))
?>
        

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <title>Result</title>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        </head>

        <body>
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
            <?php
            $fname = new User_data();
            $fname->getUser('datas', $_POST['program']);

            ?>
        </body>

        </html>