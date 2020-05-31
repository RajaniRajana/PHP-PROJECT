<?php
define("host","localhost");
define("user","root");
define("password","");
define("dbname","earson");
$conn=mysqli_connect(host,user,password,dbname);
if($conn)
{
	//echo "database connected successfully";
}
else
{
	echo "unable to connect";
	exit();
}
?>