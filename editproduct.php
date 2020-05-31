<?php
	require("connect.php");// here include database filent
	$id=$_REQUEST['id'];
	$productDetails = mysqli_query($conn,"select * from products where p_id='".$id."'");
	$result=mysqli_fetch_array($productDetails);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>admin</title>
<link rel="icon" href="Images/title.png" type ="image/png"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="stylesheet" type="text/css" href="style.css">
         <link rel="stylesheet" type="text/css" href="adminstyle.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script> 
        <script src="script.js" type="text/javascript"></script>
</head>
<body>
  <?php 
 include("adminheader.php");
?>
<div class="container pos1">
  <div class="row pos1">
    <div class="col-sm-8">
    	<h1>EDIT PRODUCTS</h1>
	<form action="" method ="post">
		<input value="<?php echo $result['p_id']?>" type ="text" name ="pname" class="form-control" require /><br><br>
		<input value="<?php echo $result['product_name']?>" type ="text" name ="pname" class="form-control" require /><br><br>
		<input type ="text" value="<?php echo $result['price']?>" name ="price" class="form-control" require /><br><br>
		<input type="text" value="<?php echo $result['product_type']?>" name="category" class="form-control" require /><br><br>
		<button name="submit" type="submit" class="btn btn-outline-primary">Submit</button>
	</form>
</div>
</div>
</div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$name=$_POST['pname'];//using _POST method, we can retirve  the data from form
	$price=$_POST['price'];
	//$image=$_POST['img_name'];
	$type=$_POST['category'];
	$query ="Update products set product_name='".$name."',price='".$price."',product_type='".$type."' where p_id='".$id."'";
	$updateData=mysqli_query($conn,$query) ; //mysqli_query is mysqli function for queries 
	if ($updateData) 
	{
        echo "<script>alert('Update data Successfully!'); location.href='adminproducts.php';</script>";
    }
}
?>
