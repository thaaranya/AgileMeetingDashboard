<?php
	session_start();	
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("Meeting") or die(mysql_error());
	error_reporting(0);


define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'Meeting');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
	
?>
