<?php
  include 'connection.php';
  session_start();
  if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in']!=1 || $_SESSION['role']!= 'AdminLogin')
    header('location: login.php?err=2');

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Admin SD</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <!--  CSS for this page -->
  <link rel="stylesheet" href="assets/css/admin_sd.css">

  <!-- JS for this page -->
  <script src="assets/js/admin_sd.js"></script>

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
          <li class="nav-item">
            <a class="nav-link" href="admin_home.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="comp_req.php">CR</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin_remove.php">Remove</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Body -->
  <div class="container">
    <div class="row">
      <div class="col-lg-4 mx-auto py-4">
        <div class="input-group mb-3">
          <input type="text" id="ip" class="form-control" placeholder="Enter ID No..." aria-label="Username" aria-describedby="basic-addon1">
          <div class="input-group-append">
            <button class="btn btn-primary" onclick="loadSd();" type="button" id="bttn">Search</button>
          </div>
        </div>
      </div>
    </div>

  </div>
  <div class="container" id="display1" style="height:1000px;">


  </div>


<!-- Footer -->
<footer class="py-5 ">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; Presidency University 2018</p>
  </div>
</footer>

</body>
</html>
