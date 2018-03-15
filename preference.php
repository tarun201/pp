<?php
include 'connection.php';
session_start();
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in']!=1)
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

  <title>Preference Form</title>
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
    width: 500px;
    height: 500px;
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
  <script>
/* Event fired on the drag target */
function dragStart(event) {
    event.dataTransfer.setData("Text", event.target.id);
    document.getElementById("demo").innerHTML = "Started to drag the p element";
}

/* Events fired on the drop target */
function allowDrop(event) {
    event.preventDefault();
}

function drop(event) {
    event.preventDefault();
    var data = event.dataTransfer.getData("Text");
    event.target.appendChild(document.getElementById(data));
    document.getElementById("demo").innerHTML = "The p element was dropped";
}
</script>
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
            <a class="nav-link" href="logout.php">Logout</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
<div class="droptarget" ondrop="drop(event)" ondragover="allowDrop(event)">
  <p><b> Company names </b></p>
  <p ondragstart="dragStart(event)" draggable="true" id="company 1">company 1</p>
  <p ondragstart="dragStart(event)" draggable="true" id="company 2">company 2</p>
  <p ondragstart="dragStart(event)" draggable="true" id="company 3">company 3</p>
  <p ondragstart="dragStart(event)" draggable="true" id="company 4">company 4</p>
  <p ondragstart="dragStart(event)" draggable="true" id="company 5">company 5</p>
  <p ondragstart="dragStart(event)" draggable="true" id="company 6 ">company 6</p>
  <p ondragstart="dragStart(event)" draggable="true" id="company 7">company 7</p>
  <p ondragstart="dragStart(event)" draggable="true" id="company 8">company 8</p>
  <p ondragstart="dragStart(event)" draggable="true" id="company 9 ">company 9</p>
  <p ondragstart="dragStart(event)" draggable="true" id="company 10">company 10</p>
</div>

<div class="droptarget" ondrop="drop(event)" ondragover="allowDrop(event)">
<b> Drag the company according to your preference</b>
	</div>

<input type="submit" name="submit" value="Save Details" align="right" >





		</form>

  </div>



</body>
</html>
