<?php
// Connects to your Database
mysql_connect("localhost", "root", "root") or die(mysql_error());
mysql_select_db("advising") or die(mysql_error());


$username = $_POST['username'];
$pass = $_POST['pass'];
$pass2 = $_POST['pass2'];
$type = $_POST['type'];
$id = $_POST['id'];
$email = $_POST['email'];

//This makes sure they did not leave any fields blank
if (!$username | !$pass | !$pass2  | !$type | !$id | !$email) {
die('You did not complete all of the required fields');
}


// checks if the username is in use
if (!get_magic_quotes_gpc()) {
$username = addslashes($username);
}
$usercheck = $username;
$check = mysql_query("SELECT username FROM users WHERE username = '$usercheck'")
or die(mysql_error());
$check2 = mysql_num_rows($check);

//if the name exists it gives an error
if ($check2 != 0) {
die('Sorry, the username '.$username.' is already in use.');
}

// this makes sure both passwords entered match
if ($pass != $pass2) {
die('Your passwords did not match. ');
}
// define a regular expression for "normal" addresses
$email_normal = "^[a-z0-9_\+-]+(\.[a-z0-9_\+-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*\.([a-z]{2,4})$";

if (!preg_match($email_normal, $email)) {
  die("The address $email is invalid.");
}

// here we encrypt the password and add slashes if needed
$pass = md5($pass);
if (!get_magic_quotes_gpc()) {
$pass = addslashes($pass);
$username = addslashes($username);
}

// now we insert it into the database
$insert = "INSERT INTO users (username, password,type,id,email)
VALUES ('".$username."', '".$pass."','".$type."','".$id."','".$email."')";
$add_member = mysql_query($insert);
header("Location: display.php");
?> 