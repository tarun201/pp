<?php 
    session_start();
		$db=mysqli_connect('localhost','root','','pp') or die('Unable to connect to MySQL server');
        $form_username = isset($_POST['Username']) ? $_POST['Username'] : '';
        $form_password = isset($_POST['Password']) ? $_POST['Password'] : '';
        $table_name = isset($_POST['role']) ? $_POST['role'] : '';
        $_SESSION['Username']=$form_username;
        $_SESSION['role']=$table_name;
if(!empty($_POST['Username']))
{
$query = "SELECT * FROM $table_name where student_id ='$form_username' and password='$form_password'";

$result = mysqli_query($db, $query) or die("Failed to query from database. You are not eligible for industry practice");
    //COMMENT LINE BELOW IF USING 'loginTabs.php'
$row = mysqli_fetch_array($result) or die(header('location:loginDD.php?err=1'));
    //COMMENT THE LINE BELOW IF USING 'loginDD.php'
$row = mysqli_fetch_array($result) or die(header('location:loginTabs.php?err=1'));

if(!empty($row['student_id']) AND !empty($row['password']))
{
if($_SESSION['Username']==$row['student_id'] AND $form_password == $row['password'])
{
    if(isset($table_name)&& $table_name=='login')
        header('location: index.php');
    elseif(isset($table_name)&& $table_name=='company_login')
        header('location:Companyhome.php');
    elseif(isset($table_name)&& $table_name=='teachers_login')
        header('location:index.html');
}
}
}
?>