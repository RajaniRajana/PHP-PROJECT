<?php
require("connect.php");// here include database file
if($_POST["submit"])
{
	$name=$_POST['fname'];//using _POST method, we can retirve  the data from form
	$mail=$_POST['mail'];
	$message=$_POST['message'];
}
	$sql= mysqli_query($conn,"insert into contacts(name,mail,message) values('".$name."','".$mail."','".$message."')") or die("Unable inserted Data "); //mysqli_query is mysqli function for queries 
	if ($sql) 
	{
        echo "New record created successfully";
    }
	else 
	{
         echo "Not Created";
    }
      $conn->close();
?>