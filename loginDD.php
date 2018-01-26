<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-fluid mb-2 mt-2">
        <div class="row">
            <div class="col-md-3"><img src="assets/img/logo.png" class="logo"></div>
            <div class="col-md-6 text-center">
                <h3 class="text-center">Presidency University</h3>
                <h4 class="text-center">School of engineering</h4>
                <h4 class="text-center">Industrial practice</h4></div>
        </div>
    </div>
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
            <a class="nav-link" href="index.php">Home
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="login.php">Login

              <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <div class="jumbotron">
    <fieldset>
        <center><legend>Login </legend></center>
        <hr> <?php   
                            $errors=array(1=>"Invalid username and password, try again.",2=>"Please login to access this area");
                            $error_id=isset($_GET['err'])?(int)$_GET['err']:0;
                            if($error_id==1){
                                echo "<center><p>";
                                echo "$errors[$error_id]";
                                echo "</p></center>";
                            }
                            elseif($error_id==2){
                                echo "<p>$errors[$error_id]</p>";
                            }
                        ?>
        <div id="loginDiv">
            <form action="login.php" method="post">
                <label>User:</label>
                <select name="role" class="form-control">
                        <option value="login" selected>Student</option>
                        <option value="Company">Company</option>
                </select>
                <br />
                <label for="Username" style="text-align:left">Username </label>
                <input type="text" name="Username" placeholder="ID" class="form-control" />
                <br />
                <label for="Password">Password </label>
                <input type="password" name="Password" placeholder="Password" class="form-control" />
                <br>
                <button class="btn btn-default" type="submit">Login </button>
            </form>
        </div>
    </fieldset>
</div>
     <!-- Footer -->
  <footer class="py-5 ">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Presidency University 2018</p>
    </div>
  </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>