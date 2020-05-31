<?php
session_start();
require("connect.php");// here include database file
if($_POST["submit"])
{
	$email=$_POST['mail'];//using _POST method, we can retirve  the data from form
	$password=$_POST['pwd'];
}
$query= "SELECT * FROM `registration_users` WHERE email='".$email."' and password='".$password."'";
	$sql= mysqli_query($conn,$query);
	if (mysqli_num_rows($sql) > 0)
	{
		$row = mysqli_fetch_assoc($sql);
       $_SESSION["uid"]=$row["id"];
       $_SESSION["uname"]=$row["first_name"];
       if($row['type']==0){
       	header("location:user.php");
       }
       if($row['type']==1){
       header("location:adminproducts.php");
       }
	}
	else
	{
		echo "wrong credentials";	
	}
?>