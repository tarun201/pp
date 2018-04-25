<?php
include 'connection.php';

$query ="select * from company_list;";
$result=mysqli_query($dbc,$query) or die("error1");
$limit=mysqli_num_rows($result);



?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Preferences</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Student Profile</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

  <!--  CSS for this page -->
  <link rel="stylesheet" href="assets/css/pref.css">

  <!-- JQuery for this page -->
  <!-- <script src="assets/js/pref.js">  </script> -->


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
          <li class="nav-item active">
            <a class="nav-link" href="sp.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout
            </a>
          </li>
        </ul>

      </div>
    </div>
  </nav>

  <div class="container">
    <form class="" action="pref_submit.php" method="post">
      <table class="table text-center pre-scrollable">
        <thead>
          <tr>
            <th>Sl No.</th>
            <th>Company Name</th>
            <th>Preference No.</th>
          </tr>
        </thead>
        <tbody>
          <!-- Loop to display company name -->
          <?php for ($i=1; $i<= $limit; $i++) {
            $row=mysqli_fetch_array($result);?>
            <tr>
              <input type="hidden" name="<?php echo 'cid'.$i ?>" value="<?php echo $row['sl_no'] ?>">
              <td><?php echo $i ?></td>
              <td><?php echo $row['cmp_name'] ?></td>
              <td>
                <select name="<?php echo 'select'.$i ?>">
                  <option value="0">select</option>
                  <!-- Loop to display dropdown -->
                  <?php for ($j=1; $j<= $limit; $j++) { ?>
                    <option value="<?php echo $j ?>"><?php echo $j ?></option>
                  <?php } ?>
                </select>

              </td>
            </tr>
              <?php } ?>
        </tbody>
      </table>
      <input type="submit" name="" value="Submit">
    </form>
        <!-- <button type="button" class="btn">Reset All</button> -->
      </div>
    </body>
    </html>
