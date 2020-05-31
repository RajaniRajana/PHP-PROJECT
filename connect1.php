<?php
define("host","localhost");
define("user","tmf");
define("password","tmf123");
define("dbname","343");
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