<?php
//Todo: change the settings from local to global
$server = "localhost";
$username = "root";
$password = "root";
$db_name = "advising";

$db = mysql_connect($server,$username,$password) or DIE("Connection to database failed, perhaps the service is down !!");
mysql_select_db($db_name) or DIE("Database name not available !!");

$user_email = mysql_query("select * from users where username='".$_POST['username']."' or id='".$_POST['id']."' or email='".$_POST['email']."'");

//Check if the user exists
if(mysql_num_rows($user_email)!=1){
	die("No Match Found!!!");	
}
//Generate new random password
$newpassword = genRandomString();
echo "New Password: ".$newpassword;


//Set email parameters
$to =  $_POST['email'];
if(strlen($to) == 0){
	$sending_to = mysql_fetch_array($user_email);
	$to = $sending_to['email'];
}
$subject = "New Password";
$message= "Your new password is: ".$newpassword;
$from = "CSE UTA";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: $from";


//Send the mail
mail($to,$subject,$message,$headers);

//Update password in database
mysql_query("update users set password =  '".md5($newpassword)."' where email = '".$to."'");
echo '<script type="text/javascript"> alert("New Password Sent"); </script>';

header("Location: login.php");

//Random Password Generator
function genRandomString() {
	$length = 10;
    $characters = "0123456789abcdefghijklmnopqrstuvwxyz";
    $string = "";    
    for ($p = 0; $p < $length; $p++) {
        $string .= $characters[mt_rand(0, strlen($characters))];
    }
	
    return $string;
}
?>