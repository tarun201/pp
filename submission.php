<?php
include 'connection.php';
session_start();

// after submiting details
if(isset($_POST['submit']))
{
  // if the skills input is filled
  if(empty($_POST['skills']))
  {
    $skills='nothing extra';
  }
  else {
    $skills=$_POST['skills'];
  }
  // if the languages input is filled
  if(empty($_POST['lang']))
  {
    $lang='nothing extra';
  }
  else {
    $lang=$_POST['lang'];
  }
  // if the other details are filled
  if(empty($_POST['other']))
  {
    $other='nothing extra';
  }
  else {
    $other=$_POST['other'];
  }
  $id=$_SESSION['id'];
  $address=$_POST['address'];
  $dob=$_POST['dob'];
  $email_id=$_POST['email_id'];
  $e_person=$_POST['e_person'];
  $relation=$_POST['relation'];
  $bg=$_POST['bg'];

  $fill_details="insert into student_details values('$id','$address','$dob','$email_id',concat('$_POST[cc1]','-','$_POST[mobile_num]'),
                  '$bg',concat('$_POST[cc2]','-','$_POST[e_number]'),'$e_person','$relation','$skills','$lang','$other')";
  $result_details=mysqli_query($dbc,$fill_details) or die("error");
  echo "<script>alert('Form submitted');window.location.assign('SD.php');</script>";
  // echo "Succesful<br>This site is still under construction.
  //     Please be patient and wait for future updates<br>Thank You";
  // echo "<br>So lets Logout and go to Login page again";
  // echo "<br><a href='logout.php'>Click here</a>";


}
 ?>
