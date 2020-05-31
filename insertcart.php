
<?php
    session_start();
if(isset($_REQUEST['id']))
{
	require("connect.php");// here include database filent
	$id=$_REQUEST['id'];
	$productDetails = mysqli_query($conn,"select * from products where p_id='".$id."'");
	$result=mysqli_fetch_array($productDetails);
?>
<?php
    $id=$result['p_id'];
    $currentDate=date("Y-m-d");
    $sql= mysqli_query($conn,"insert into cart(p_id,u_id,date) values('".$id."','".$_SESSION["uid"]."','".$currentDate."')") or die("Unable inserted Data "); //mysqli_query is mysqli function for queries 
	if ($sql) 
	{
        header("location:cart.php");
    }
      $conn->close();
?>
<?php 
 }
 ?>