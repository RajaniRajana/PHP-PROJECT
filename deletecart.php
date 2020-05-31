<?php

	require("connect.php");// here include database filent
	$id=$_REQUEST['id'];  //assigning request variable into $id
	$delete = mysqli_query($conn,"delete from cart where p_id='".$id."'");
	if($delete)
	{
		echo"Successfully Delete!";
	}

?>