<?php
$con = mysql_connect("omega.uta.edu","snl2898","D-m8T5xy%d");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

else{

die("DB connection successful");
}

mysql_select_db("advising");
$student_profile = mysql_query("SELECT * FROM USER_INFO")
or die(mysql_error());

echo mysql_fetch_array($student_profile)['Username'];

$student_courses = mysql_query("Select STUDENT_ID,COURSE1,COURSE2,COURSE3,COURSE4,COURSE5,COURSE6,COURSE7,COURSE8,COURSE9,COURSE10,COURSE11,COURSE12 from USERDETAILS_INFO '")    
or die(mysql_error());

mysql_close($con);
?>

