<?php

	require("connect.php");// here include database filent
	$id=$_REQUEST['id'];  //assigning request variable into $id
	$delete = mysqli_query($conn,"delete from orderitems where p_id='".$id."'");
	if($delete)
	{
		echo "<script>alert('delete Order Successfully!'); location.href='order.php';</script>";
	}

?>