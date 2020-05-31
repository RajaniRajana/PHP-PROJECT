<?php
require("ajaxconnection.php");
$input=$_POST['input']; 
 $sql="select * from users where name LIKE '%".$input."%' or phone LIKE'%".$input."%'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) >0)
{
	while($row=mysqli_fetch_array($result))
	{
	echo $row['id'];
	echo $row['name'];
	echo $row['address'];
	echo $row['phone'];
}
}
else 
{
	echo "No results found"; 
}
?>