<?php
if(isset($_REQUEST['id']))
{
	require("connect.php");// here include database filent
	$id=$_REQUEST['id'];  //assigning request variable into $id
	$delete = mysqli_query($conn,"delete from products where p_id='".$id."'");
	if($delete)
	{
		echo "<script>alert('Successfully Delete!'); location.href='adminproducts.php';</script>";
	}
}
?>