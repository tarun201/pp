<?php
session_start();
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in']!=1)
  header('location: login.php?err=2');


include 'connection.php';

// receiving student details from college's database
$college_details="select * from college_std_dtls where student_id = '$_SESSION[Username]'";
$result_college=mysqli_query($dbc,$college_details)
                  or die("Error in querring college table");
$clg_dtls=mysqli_fetch_array($result_college);
$_SESSION['id']=$clg_dtls['student_id'];

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

  <title>Student Profile</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <!-- JavaScript for this page -->
  <script src="assets/js/sp.js">  </script>

  <!--  CSS for this page -->
  <link rel="stylesheet" href="assets/css/sp.css">

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
        <h2 >Student Profile:</h2>
      </div>
      <div class="col-md-2">
        <img class="img-thumbnail" src="" alt="Student Image">
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4 form-group">
        <label class="font-weight-bold">ID Number:</label>
        <input type="text" class="form-control-plaintext" value="<?php  echo $clg_dtls['student_id']?>" >
      </div>
      <div class="col-md-4 form-group">
        <label class="font-weight-bold">Name:</label>
        <input type="text"  class="form-control-plaintext" value="<?php  echo $clg_dtls['name']?>">
      </div>
      <div class="col-md-4 form-group">
        <label class="font-weight-bold">Branch:</label>
        <input type="text"  class="form-control-plaintext" value="<?php  echo $clg_dtls['branch_name']?>">
      </div>

    </div>

    <div class="row">
      <div class="col-md-4 form-group">
        <label class="font-weight-bold">CGPA:</label>
        <input type="text"  class="form-control-plaintext" value="<?php  echo $clg_dtls['cgpa']?>">
      </div>

    </div>
    <hr>
    <h5 class="font-weight-bold">On Campus Core Courses Details:</h5>
    <div class="row">
      <div class="col-md-6">
        <table class="table text-center">
          <thead>
            <tr>
              <th>Sl.No</th>
              <th>Course Name</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td><?php echo $core_course['c1']; ?></td>
            </tr>
            <tr>
              <td>2</td>
              <td><?php echo $core_course['c2']; ?></td>
            </tr>
            <tr>
              <td>3</td>
              <td><?php echo $core_course['c3']; ?></td>
            </tr>
            <tr>
              <td>4</td>
              <td><?php echo $core_course['c4']; ?></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-md-6">
        <table class="table text-center">
          <thead>
            <tr>
              <th>Sl.No</th>
              <th>Course Name</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>5</td>
              <td><?php echo $core_course['c5']; ?></td>
            </tr>
            <tr>
              <td>6</td>
              <td><?php echo $core_course['c6']; ?></td>
            </tr>
            <tr>
              <td>7</td>
              <td><?php echo $core_course['c7']; ?></td>
            </tr>
            <tr>
              <td>8</td>
              <td><?php echo $core_course['c8']; ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <hr>
  </div>

  <div class="container">
    <h5 class="font-weight-bold">Enter Your Details Here: <small>(<span class="text-danger"> *</span> means <mark>required</mark> feild )</small></h5>
    <form name="myform" method="post" action="submission.php" onsubmit="return(validate());" >
      <div class="form-group ">
        <label for="email_id">Email-ID: <span class="text-danger">*</span></label>
        <input type="email" id="email_id" class="form-control" name="email_id"  value="<?php  echo $clg_dtls['email_id']?>" required>
      </div>
      <div class="form-group ">
        <label for="address">Address:<span class="text-danger">*</span></label>
        <textarea class="form-control" rows="2" id="address" name="address" placeholder="<?php  echo $clg_dtls['address']?>" required></textarea>
      </div>

      <div class=" form-group">
        <label for="">DOB:</label>
        <input type="date" class="form-control" name="dob" required="">
      </div>

      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <span id="mobile_error" class="input-group-text">Mobile Number:<span class="text-danger">*</span></span>
          </div>
          <input type="text" class="form-control" name="cc1" placeholder="Country code" maxlength="4" required>
          <input type="text" class="form-control" id="mobile_num" name="mobile_num" value="<?php  echo $clg_dtls['mobile_num']?>" maxlength="10" required>
        </div>
      </div>

      <div class="form-group">
        <label for="bg">Blood Group:<span class="text-danger">*</span></label>
        <span id="bg_error" class="d-none">Select your Blood Group</span>
        <select class="form-control" name="bg" id="bg" required>
          <option value="1" selected>Select..</option>
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>
          <option value="idk">Don't Know</option>
        </select>
      </div>

      <div class="form-group">
        <label for="e_person">Emergency Contact Person:<span class="text-danger">*</span></label>
        <input type="text" id="e_person" class="form-control" name="e_person" placeholder="Enter the Person's Name.." required>
      </div>
      <div class="form-group">
        <label for="relation">Relation:<span class="text-danger">*</span></label>
        <input type="text" id="relation" class="form-control" name="relation" placeholder="Enter relation with the Person.." required>
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <span id="e_mob_error" class="input-group-text">Emergency Number:<span class="text-danger">*</span></span>
          </div>
          <input type="text" class="form-control" name="cc2" placeholder="Country code" maxlength="4" required>
          <input type="text" id="e_number" class="form-control" name="e_number" placeholder="Enter the Person's Number.." maxlength="10" required>
        </div>
      </div>
      <div class="form-group">
        <label for="skills">Technical/Software Skills(If any)(Seperate Using comma(,)):</label>
        <input type="text" id="skills" class="form-control" name="skills" placeholder="Seperate Using comma(,)">
      </div>
      <div class="form-group">
        <label for="lang">Languages Known:</label>
        <input type="text" id="lang" class="form-control" name="lang" placeholder="Seperate Using comma(,)">
      </div>
      <div class="form-group">
        <label for="other">Any Other Details:</label>
        <textarea name="other" id="other" class="form-control" rows="3" placeholder="Write it here..."></textarea>
      </div>
      <div class="form-group">
        <label>
        <input type="checkbox" id="checkbox" name="checkbox" required><span class="text-danger"> *</span>
        I have read the <a href="undertaking.html" target="_blank">Undertaking</a> and agree to it
        </label>
      </div>
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
