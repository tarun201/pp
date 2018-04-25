<?php
session_start();
include 'connection.php';

$query_table="create table if not exists $_SESSION[Username](pref int(3) auto_increment primary key,
                cid int(100), alloted int(1) default 0, foreign key(cid) references company_list(sl_no))";
mysqli_query($dbc,$query_table) or die("Error creating table<br>".mysqli_error($dbc));

$query ="select * from company_list;";
$result=mysqli_query($dbc,$query) or die("error1");
$limit=mysqli_num_rows($result);


for($i=1;$i<=$limit;$i++){
  $pref = $_POST["select".$i];
  $cid = $_POST["cid".$i];
  $query_insert="insert into $_SESSION[Username](pref,cid) values($pref,$cid)";
  $result_insert=mysqli_query($dbc,$query_insert) or die("Error submitting<br>".mysqli_error($dbc));
}

echo "<p>Preference Form submitted</p><br />";
echo "<p>Details of the alloted company list will be updated soon</p><br />";
echo "<p>Thank You</p><br />";
echo "<a href='logout.php'>Logout</a>";


 ?>
