<?php
session_start();
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in']!=1)
  header('location: loginTabs.php?err=2');


include 'connection.php';

// receiving student details from college's database
$Username=$_SESSION['Username'];
$college_details="select * from college_std_dtls where student_id = '$Username'";
$result_college=mysqli_query($dbc,$college_details) or die("Error in querring college table");




?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student Profile</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
        <!-- JavaScript for this page -->
        <script src="assets/js/sp.js">  </script>
        <!--  CSS for this page -->
        <link rel="stylesheet" href="assets/css/SD.css">
    </head>
    <body>
        <div class="container-fluid mb-2 mt-2">
            <div class="row">
                <div class="col-md-3">
                    <img class=" logo" src="assets/img/logo.png" alt="Presidency Logo">
                </div>
                <div class="col-md-6 text-center ">
                    <h3>Presidency University,Bengaluru</h3>
                    <h4>School of Engineering</h4>
                    <h4>Industrial Practice Division</h4>
                </div>
            </div>
        </div>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark  sticky-top">
            <div class="container">
                <a class="navbar-brand" href="">Presidency University</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <span class="navbar-text text-light"> </span>
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row mt-3 mb-3">
                <div class="col-md-10">
</div>
                <div class="col-md-2">
</div>
            </div>
        </div>
        <!-- Footer -->
        <div>
            <div class="jumbotron" style="margin: 21px 256px 109px;
    padding: 49px 81px 56px;
    border-radius: 15px;">
                <table class="table text-center"> 
                    <thead> 
                        <tr> 
                            <td class="text-center" colspan="100%"><b><u>STUDENT DETAILS</u></b></td>
                        </tr>                         
                    </thead>                     
                    <tbody> 
                        <?php while($clg_dtls=mysqli_fetch_array($result_college)){ ?>
                            <tr> 
                                <th scope="row" class="text-left">ID Number</th> 
                                <td class="text-left"><?php echo $clg_dtls['student_id']; ?></td> 
                            </tr>                             
                            <tr> 
                                <th scope="row" class="text-left">Name</th> 
                                <td class="text-left"><?php echo $clg_dtls['name']; ?></td> 
                            </tr>                             
                            <tr>
                                <td class="text-left"><b>Date of Birth</b></td>
                                <td class="text-left"><?php echo $clg_dtls['dob']; ?></td>
                            </tr>
                            <tr>
                                <td class="text-left"><b>Branch Name</b></td>
                                <td class="text-left"><?php echo $clg_dtls['branch_name']; ?></td>
                            </tr>
                            <tr>
                                <td class="text-left"><b>Mobile Number</b></td>
                                <td class="text-left"><?php echo $clg_dtls['mobile_num']; ?></td>
                            </tr>
                            <tr>
                                <td class="text-left"><b>Email ID</b></td>
                                <td class="text-left"><?php echo $clg_dtls['email_id']; ?></td>
                            </tr>
                            <tr>
                                <td class="text-left"><b>Address</b></td>
                                <td class="text-left"><?php echo $clg_dtls['address']; ?></td>
                            </tr>
                            <tr>
                                <td class="text-left"><b>Blood Group</b></td>
                                <td class="text-left"><?php echo $clg_dtls['blood_group']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>                     
                </table>
            </div>
        </div>
        <footer class="py-5 text-center" style="bottom: 0px;
    position: ;">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Presidency University 2018</p>
            </div>
        </footer>
    </body>
</html>
