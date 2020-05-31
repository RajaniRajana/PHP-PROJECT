<?php
require("connect.php");// here include database file
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$number=$_POST['number'];
	$email=$_POST['mail'];//using _POST method, we can retirve  the data from form
	$password=$_POST['pwd'];
	$address=$_POST['add'];
	$city=$_POST['city'];
	$sql= mysqli_query($conn,"insert into registration_users(first_name,last_name,phone_number,email,password,address,city,type) values('".$fname."','".$lname."','".$number."','".$email."','".$password."','".$address."','".$city."','0')") or die("Unable inserted Data "); //mysqli_query is mysqli function for queries 
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