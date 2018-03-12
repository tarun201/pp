<?php
include 'connection.php';

// $query_table="create table 2015cse1(pref int(3) auto_increment primary key,
//                 cid int(100), alloted int(1) default 0, foreign key(cid) references company_list(sl_no))";
// mysqli_query($dbc,$query_table) or die("Error creating table");

$query ="select * from company_list;";
$result=mysqli_query($dbc,$query) or die("error1");
$limit=mysqli_num_rows($result);



  $no=$_POST["cid"];
  $i=1;
  echo $no1 = $_POST["select".$i];
  $query_insert="insert into 2015cse1(pref,cid) values($no1,'$_POST[cid]')";
  $result_insert=mysqli_query($dbc,$query_insert) or die("Error submitting<br>".mysqli_error($dbc));



 ?>
