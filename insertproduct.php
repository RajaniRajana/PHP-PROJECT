<?php
require("connect.php");// here include database file
if($_POST["submit"])
{
	$pname=$_POST['pname'];//using _POST method, we can retirve  the data from form
	$price=$_POST['price'];
    $fileName =$_FILES['img_name']['name'];
    $fileTmp =$_FILES['img_name']['tmp_name'];
	$category=$_POST['category'];
	$filePath='uploads/'.$fileName;
	move_uploaded_file($fileTmp,$filePath);
}
	$sql= mysqli_query($conn,"insert into products(product_name,price,product_image,product_type) values('".$pname."','".$price."','".$fileName."','".$category."')") or die("Unable inserted Data "); //mysqli_query is mysqli function for queries 
	if ($sql) 
	{
        echo "<script>alert('New Recored Created Successfully!'); location.href='adminproducts.php';</script>";
    }
	else 
	{
         echo "Not Created";
    }
      $conn->close();
?>