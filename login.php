<?
session_start();
//Todo: change the settings from local to global
$server = "localhost";
$username = "root";
$password = "root";
$db_name = "advising";

$db = mysql_connect($server,$username,$password) or DIE("Connection to database failed, perhaps the service is down !!");
mysql_select_db($db_name) or DIE("Database name not available !!");

$login = mysql_query("select * from users where (username = '" . $_POST['username'] . "') and (password = '" . md5($_POST['password']) . "')",$db);
$rowcount = mysql_num_rows($login);
if ($rowcount == 1) {
$_SESSION['username'] = $_POST['username'];

//Todo: change the display.php to welcome page filename
header("Location: display.html");
}
else
{
header("Location: login.html");
}
?>