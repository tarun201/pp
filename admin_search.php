<?php
include 'connection.php';
session_start();
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in']!=1 || $_SESSION['role']!= 'AdminLogin')
  header('location: login.php?err=2');

// receiving student details from college's database
$college_details="select * from college_std_dtls where student_id = '2015CSE1'";
$result_college=mysqli_query($dbc,$college_details)
                  or die("Error in querring college table");
$clg_dtls=mysqli_fetch_array($result_college);

// receiving core courses of the student_id
$course="select * from core_courses where branch_name='$clg_dtls[branch_name]'";
$result_course=mysqli_query($dbc,$course)
                or die("error in core courses");
$core_course=mysqli_fetch_array($result_course);


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Index</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <style media="screen">
.droptarget {
    float: left;
    width: 100px;
    height: 400px;
    margin: 15px;
    padding: 10px;
    border: 1px solid #aaaaaa;
}
  h5{
    margin-top: 30px;
    margin-bottom: 30px;

  }
  h2{

  }
  img.logo{
    width: 40%;
  }
  img.img-thumbnail{
    width:40%;
  }
  nav{
    background-color: #283955;
  }
  footer{
    background-color: #283955;
  }
  </style>
</head>
<body>
  <div class="container-fluid mb-2 mt-2">
    <div class="row">
      <div class="col-md-3">
        <img class=" logo" src="assets/img/logo.png" alt="Presidency Logo">
      </div>
      <div class="col-md-6 text-center ">
        <h3>Presidency University,Bengaluru</h3>
        <h4>School Of Engineering</h4>
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
          <span class="navbar-text text-light">
          </span>



          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row mt-3 mb-3">
      <div class="col-md-10">
        <h2 >Admin</h2>
      </div>

    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4 form-group">
        <label>Search:</label>
        <input type="text" name="search" value="">
      </div>
    <br /><br />
      <div class="form-group">
        <input type="submit" name="submit" value="Search">
      </div>
    </form>
  </div>
</div>
<! Search by company name or student name will use ajax to print the fetched data>
  <!-- Footer -->
  <footer class="py-5 fixed-bottom">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Presidency University 2018</p>
    </div>
  </footer>

</body>
</html>
