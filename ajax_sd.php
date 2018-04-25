<?php
include 'connection.php';
// receiving student details from college's database
$Username = $_POST['id'] ;
$college_details="select * from student_details where id = '$Username'";
$result_college=mysqli_query($dbc,$college_details) or die("Error in querring college table");

$college_details2="select * from college_std_dtls where student_id = '$Username'";
$result_college2=mysqli_query($dbc,$college_details2) or die("Error in querring college table<br>".mysqli_error($dbc));

if(mysqli_num_rows($result_college)==0){
  echo "<p class='alert alert-danger lead text-center'>Student didn't fill the form yet</p>";
}
else{
?>

<div class="jumbotron" style="margin: 21px 256px 109px;
padding: 49px 81px 56px;
border-radius: 15px;">
    <table class="table text-center">
        <thead>
            <tr>
                <td class="text-center" colspan="100%"><b><u>STUDENT DETAILS</u></b></td>
            </tr>
        </thead>
        <tbody>
            <?php

              $clg_dtls=mysqli_fetch_array($result_college);
              $clg_dtls2=mysqli_fetch_array($result_college2);
               ?>
                <tr>
                    <th scope="row" class="text-left">ID Number</th>
                    <td class="text-left"><?php echo $clg_dtls['id']; ?></td>
                </tr>
                <tr>
                    <th scope="row" class="text-left">Name</th>
                    <td class="text-left"><?php echo $clg_dtls2['name']; ?></td>
                </tr>
                <tr>
                <td class="text-left"><b>Branch</b></td>
                <td class="text-left"><?php echo $clg_dtls2['branch_name']; ?></td>
                </tr>
                <tr>
                    <th scope="row" class="text-left">Gender</th>
                    <td class="text-left"><?php echo $clg_dtls2['gender']; ?></td>
                </tr>
                <tr>
                    <td class="text-left"><b>Date of Birth</b></td>
                    <td class="text-left"><?php echo $clg_dtls['dob']; ?></td>
                </tr>
                <tr>
                    <td class="text-left"><b>Mobile Number</b></td>
                    <td class="text-left"><?php echo $clg_dtls['mobile_num']; ?></td>
                </tr>
                <tr>
                    <td class="text-left"><b>Email ID</b></td>
                    <td class="text-left"><?php echo $clg_dtls['email_id']; ?></td>
                </tr>
                <tr>
                    <td class="text-left"><b>Address</b></td>
                    <td class="text-left"><?php echo $clg_dtls['address']; ?></td>
                </tr>
                <tr>
                    <td class="text-left"><b>Blood Group</b></td>
                    <td class="text-left"><?php echo $clg_dtls['blood_group']; ?></td>
                </tr>
                <tr>
                    <td class="text-left"><b>Emergency Number</b></td>
                    <td class="text-left"><?php echo $clg_dtls['emergency_num']; ?></td>
                </tr>
                <tr>
                    <td class="text-left"><b>Emergency Person</b></td>
                    <td class="text-left"><?php echo $clg_dtls['emergency_person']; ?></td>
                </tr>
                <tr>
                    <td class="text-left"><b>Relation</b></td>
                    <td class="text-left"><?php echo $clg_dtls['relation']; ?></td>
                </tr>
                <tr>
                    <td class="text-left"><b>Skills</b></td>
                    <td class="text-left"><?php echo $clg_dtls['skills']; ?></td>
                </tr>
                <tr>
                    <td class="text-left"><b>Languages</b></td>
                    <td class="text-left"><?php echo $clg_dtls['languages']; ?></td>
                </tr>
                <tr>
                    <td class="text-left"><b>Extra Details</b></td>
                    <td class="text-left"><?php echo $clg_dtls['extra_details']; ?></td>
                </tr>
        </tbody>
    </table>

</div>

<?php } ?>
