<?php
session_start();
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in']!=1 || $_SESSION['role']!= 'AdminLogin')
  header('location: login.php?err=2');

include 'connection.php';
if(isset($_POST["submit"]))
{
if(empty($_POST['slno']))
  {
    $slno='0000';
  }
  else {
    $slno=$_POST['slno'];
  }
    if(empty($_POST['safety']))
  {
    $safety='nothing extra';
  }
  else {
    $safety=$_POST['safety'];
  }
    if(empty($_POST['insurance']))
  {
    $insurance='nothing extra';
  }
  else {
    $insurance=$_POST['insurance'];
  }
 if(empty($_POST['others']))
  {
    $others='nothing extra';
  }
  else {
    $others=$_POST['others'];
  }
    if(empty($_POST['website']))
  {
    $website='nothing extra';
  }
  else {
    $website =$_POST['website'];
  }
    if(empty($_POST['spoc']))
  {
    $spoc='nothing extra';
  }
  else {
    $spoc =$_POST['spoc'];
  }
if(empty($_POST['spoc_e']))
  {
    $spoc_e='nothing extra';
  }
  else {
    $spoc_e =$_POST['spoc_e'];
  }
if(empty($_POST['spoc_ph']))
  {
    $spoc_ph='nothing extra';
  }
  else {
    $spoc_ph =$_POST['spoc_ph'];
  }
if(empty($_POST['info_dtl']))
  {
    $info_dtl='nothing extra';
  }
  else{
    $info_dtl =$_POST['info_dtl'];
  }
if(empty($_POST['dtl_comm']))
  {
    $dtl_comm='0000/00/00';
  }
  else {
    $dtl_comm =$_POST['dtl_comm'];
  }
if(empty($_POST['by_per']))
  {
    $by_per='nothing extra';
  }
  else {
    $by_per =$_POST['by_per'];
  }
if(empty($_POST['dc']))
  {
    $dc='0000/00/00';
  }
  else {
    $dc =$_POST['dc'];
  }


$doc = $_POST['doc'];
$org = $_POST['org'];
$orgc = $_POST['orgc'];
$nsc = $_POST['nsc'];
$now = $_POST['now'];
$gender = $_POST['gender'];
$branch = $_POST['branch'];
$skill = $_POST['skill'];
$dress_code = $_POST['dress_code'];
$address = $_POST['address'];
$bd = $_POST['bd'];
$cgb = $_POST['cgb'];
$email_id = $_POST['email_id'];
$phno = $_POST['phno'];
$ovb = $_POST['ovb'];
$max_stu = $_POST['max_stu'];
$rol = $_POST['rol'];
$oob = $_POST['oob'];
$db = mysqli_connect('localhost', 'root', '123456', 'pp')or die('Error connecting to MySQL server.');
$query = "INSERT INTO consent_rec(slno,doc,org,orgc,nsc,now,gender,branch,skill,dress_code,safety,insurance,others,address,website,bd,cgb,email_id,phno,spoc,spoc_e,spoc_ph,ovb,max_stu,rol,oob,info_dtl,dtl_comm,by_per,dc)  VALUES('$slno','$doc','$org','$orgc','$nsc','$now','$gender','$branch','$skill','$dress_code','$safety','$insurance','$others','$address','$website','$bd','$cgb','$email_id','$phno','$spoc','$spoc_e','$spoc_ph','$ovb','$max_stu','$rol','$oob','$info_dtl','$dtl_comm','$by_per','$dc')";
 $resul = mysqli_query($db,$query)or die("error<br>".mysqli_error($dbc));

echo "<script>alert('Succesfully Saved');window.location.assign('admin_home.php');</script>";
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Company requirements</title>

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <style media="screen">

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
          <span class="navbar-text text-light">
          </span>

          <li class="nav-item ">
            <a class="nav-link" href="admin_home.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active">
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

  <div class="container-fluid">
    <div class="row mt-3 mb-3">
      <div class="col-md-10">
        <h2 >Consent Record:</h2>
      </div>
     </div>
  </div>
<div class="container">
    <h5 class="font-weight-bold">Enter Following Details: <small>(<span class="text-danger"> *</span> means <mark>required</mark> feild )</small></h5>
 <form method="post" action="conrec.php">
  <div class="container">
    <div class="row">

<div class="form-group">
        <label>Sl.No.</label>
        <input type="text" id="slno" class="form-control" name="slno">
      </div>

<div class="container">
    <div class="row">

<div class="form-group ">
<label>Date of Consent: <span class="text-danger">*</span></label>
        <input type="text" id="doc" class="form-control" name="doc" required>
      </div>
      <div class="container">
<div class="row">


        <label>Organisation: <span class="text-danger">*</span></label>
        <input type="text" id="org" class="form-control" name="org" required>
      </div>
<div class="row">
    <div class="container">
    <div class="row">

<div class="form-group ">
<label>4 Digit Organisation Code: <span class="text-danger">*</span></label>
        <input type="text" id="orgc" class="form-control" name="orgc" required>
      </div>

      <div class="container">
<div class="row">
<div class="form-group ">
        <label>No. of Students Consented: <span class="text-danger">*</span></label>
        <input type="number" id="nsc" class="form-control" name="nsc" required>
      </div>
    <div class="container">

<div class="form-group "><div class="row">
        <label>Nature of Work: <span class="text-danger">*</span></label>
        <input type="text" id="now" class="form-control" name="now" required>
      </div>
 <div class="row"> <div class="container">
<div class="row">
<div class="form-group ">
        <label>Gender: <span class="text-danger">*</span></label>
        <input type="radio" name="gender"  required value="Male"/>Male
<input type="radio" name="gender"  required value="Female"/>Female
<input type="radio" name="gender"  required value="Male and Female"/>Both Male and Female
      </div>
<div class="container">
<div class="row">
<div class="form-group ">
        <label>Branch: <span class="text-danger">*</span></label>
        <input type="text" id="branch" class="form-control" name="branch" placeholder="Ex: CSE">
      </div>

<div class="container">
<div class="form-group">
<div class="row">
        <label> Skill (Seperate Using comma(,)):</label><label> <span class="text-danger">*</span></label>
        <input type="text" id="skill" class="form-control" name="skill" placeholder="Seperate Using comma(,)" required>
      </div>
        <div class="row">
        <div class="container">
<div class="row">
        <label>Specific Discipline & Dresscode: <span class="text-danger">*</span></label>
        <input type="text" id="dress_code" class="form-control" name="dress_code" required>
      </div>

       <div class="row">

        <label>Safety:</label>
        <input type="text" id="safety" class="form-control" name="safety">
      </div>

<div class="row">
<div class="form-group ">
        <label>Insurance:</label>
        <input type="text" id="insurance" class="form-control" name="insurance">
      </div>
      <div class="container">
<div class="row">

        <label>Others:</label>
        <input type="text" id="others" class="form-control" name="others">
      </div>
<div class="row">
<div class="container">
<div class="row">
<div class="form-group ">
        <label for="address">Address:<span class="text-danger">*</span></label>
        <textarea class="form-control" rows="2" id="address" name="address" required></textarea>
      </div>
      <div class="container">
<div class="row">
<div class="form-group ">
        <label>Website:</label>
        <input type="text" id="website" class="form-control" name="website">
      </div>
     <div class="container">
<div class="row">

        <label>Brief Description:<span class="text-danger">*</span></label>
        <input type="text" id="bd" class="form-control" name="bd" required>
      </div>
<div class="row">
 <div class="container">
<div class="row">
<div class="form-group ">
        <label>Consent Given by:<span class="text-danger">*</span></label>
        <input type="text" id="cgb" class="form-control" name="cgb" required>
      </div>
<div class="container">
<div class="row">
<div class="form-group ">
        <label>Email-ID: <span class="text-danger">*</span></label>
        <input type="email" id="email_id" class="form-control" name="email_id" required>
</div>
<div class="container">
<div class="row">
<div class="form-group ">
        <label>Ph.No.<span class="text-danger">*</span></label>
        <input type="text" id="phno" class="form-control" name="phno" required>
      </div>
<div class="container">
<div class="row">
<div class="form-group ">
        <label>Single Point of Contact (SPOC):</label>
        <input type="text" id="spoc" class="form-control" name="spoc">
      </div>
<div class="container">
<div class="row">
<div class="form-group ">
        <label>SPOC Email ID:</label>
        <input type="email" id="spoc_e" class="form-control" name="spoc_e">
      </div>
<div class="container">
<div class="row">
<div class="form-group ">
        <label>SPOC Ph.No.</label>
        <input type="text" id="spoc_ph" class="form-control" name="spoc_ph">
      </div>
<div class="container">
<div class="row">
<div class="form-group ">
        <label>Consent Obtained by/ Organisation Visited by:<span class="text-danger">*</span></label>
        <input type="text" id="ovb" class="form-control" name="ovb" required>
      </div>
<div class="container">
<div class="row">
<div class="form-group ">
        <label>No. of students to be alotted(maximum of):<span class="text-danger">*</span></label>
        <input type="number" id="max_stu" class="form-control" name="max_stu" required>
      </div>
<div class="container">
<div class="row">
<div class="form-group ">
        <label>Remoteness of Location:<span class="text-danger">*</span></label>
        <input type="text" id="rol" class="form-control" name="rol" required>
      </div>
<div class="container">
<div class="row">
<div class="form-group ">
        <label>Other Observations:<span class="text-danger">*</span></label>
        <input type="text" id="oob" class="form-control" name="oob" required>
      </div>
<div class="container">
<div class="row">
<div class="form-group ">
        <label>Information Details:</label>
        <input type="text" id="info_dtl" class="form-control" name="info_dtl">
      </div>
<div class="container">
<div class="row">
<div class="form-group ">
        <label>Date on which the details to be communicated:</label>
        <input type="text" id="dtl_comm" class="form-control" name="dtl_comm">
      </div>
<div class="container">
<div class="row">
<div class="form-group ">
        <label>by (Person):</label>
        <input type="text" id="by_per" class="form-control" name="by_per">
      </div>
<div class="container">
<div class="row">
<div class="form-group ">
        <label>Date communicated:</label>
        <input type="text" id="dc" class="form-control" name="dc">
      </div>
<div class="container">
<div class="row">
    <div class="form-group">
        <input type="submit" name="submit" value="Save Details">
      </div>
    </form>
  </div>

  <!-- Footer -->
  <footer class="py-5 ">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Presidency University 2018</p>
    </div>
  </footer>

</body>
</html>
