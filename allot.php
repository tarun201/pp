<?php

$db=mysqli_connect("localhost","root","1234","pp");
$q1="select * from eligibility_list order by (cgpa) desc";
$res1=mysqli_query($db,$q1);
while ($r1=mysqli_fetch_array($res1))
{
    $id=$r1['stud_id'];
    $Q="select * from student_details where stud_id='$id'";
    $RES=mysqli_query($db,$Q);
    $R=mysqli_fetch_array($RES);
    $q2="select * from $id order by (pref_num)";
    $res2=mysqli_query($db,$q2);
    while ($r2=mysqli_fetch_array($res2))
    {
        $cid=$r2['comp_id'];
	//echo "The value ".$r2['comp_id']."<br />";
        $q3="select * from uni_require where comp_id='$cid'";
        $res3=mysqli_query($db,$q3);
        $r3=mysqli_fetch_array($res3);
        if ($r3['no_of_students'] != 0)
        {	
            if ($r3['branch']!=NUll && $r3['branch']==$R['branch'])
            {
                if ($r3['gender']!=NUll && $r3['gender']==$R['gender'])
                {
                    if ($r3['cgpa']!=NUll && $r3['cgpa']<=$r1['cgpa'])
                    {
                        $q4="insert into allotment (stud_id, comp_id) values ('$id','$cid')";
                        $res4=mysqli_query($db,$q4);
                        $num=$r3['no_of_students']-1;
                        $q5="update uni_require set no_of_students = $num where comp_id='$cid'";
                        $res5=mysqli_query($db,$q5);
                        $q6="select * from allotment where stud_id='&id'";
                        $res6=mysqli_query($db,$q6);
                        $r6=mysqli_fetch_array($res6);
                        $alnum= $r6['allot_num'];
                        $q7="update student_details set allotment_allot_num=$alnum where stud_id='$id'";
                        $res7=mysqli_query($db,$q7);
                        print_r($r1);
                        print_r($r2);
                        print_r($r3);
                        print_r($r4);
                        print_r($r5);
                        print_r($r6);	
                    }
                }
       	  }
        }
    }
}

?>
