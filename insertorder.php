
<?php
    session_start();
	require("connect.php");// here include database filent
	 $sql ="select * from cart where u_id='".$_SESSION["uid"]."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
     $currentDate=date("Y-m-d");
     $sql2 = "INSERT INTO orders(u_id,date) values('".$_SESSION["uid"]."','".$currentDate."')";
if($conn->query($sql2)){
  $last_id = $conn->insert_id;
	while($row = $result->fetch_assoc()) {
		
	$items=$row['p_id'];	
    $sql3 = "insert into orderitems(p_id,o_id) values('$items','$last_id')";	
	if($conn->query($sql3)){
		echo "success";
        	   $sql4 = "delete from cart where u_id='".$_SESSION["uid"]."'";
       	  }	
	}

	if( $conn->query($sql4)){  
       	  	header("location:order.php");;
       }
}
}
?> 
