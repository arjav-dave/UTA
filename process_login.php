<?
session_start();
//Todo: change the settings from local to global
$server = "omega.uta.edu";
$username = "snl2898";
$password = "D-m8T5xy%d";
$db_name = "User_Info";
$db = mysql_connect($server,$username,$password) or DIE("Connection to database failed, perhaps the service is down !!");
mysql_select_db($db_name) or DIE("Database name not available !!");P
$login = mysql_query("select * from users where (Username = '" . $_POST['myusername'] . "') and (Password = '" . md5($_POST['mypassword']) . "')",$db);
$rowcount = mysql_num_rows($login)P

if ($rowcount == 1) {
$_SESSION['username'] = $_POST['myusername'];

//Todo: change the display.php to welcome page filename
header("Location: welcome.php");
}
else
{
header("Location: login.php");
}
?>