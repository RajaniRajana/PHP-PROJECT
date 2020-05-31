<?php
 require("connect.php");
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
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
  <script src="script.js" type="text/javascript"></script>
         <link rel="stylesheet" type="text/css" href="adminstyle.css">
</head>
<body>
  <?php 
 include("adminheader.php");
?>
<div class="container-fluid back2">
    <div class="row">
     <div class="offset-5 col-sm-2 offset-5 pos1">
       <h1><b style="font-size:50px;">Orders</b></h1>
     </div>
   </div>
     <div class="row back2">
      <div class="offset-9 col-sm-3 dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         SORT: By Status
        </a><hr>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">All Orders</a>
          <a class="dropdown-item" href="#">Tracked Orders</a>
          <a class="dropdown-item" href="#">Shipped Orders</a>
      <a class="dropdown-item" href="#">Delivered Orders</a>
        </div>
     </div>
    </div>
    <?php
      $orderDetails = mysqli_query($conn,"select Distinct(first_name) from orderitems JOIN orders on orderitems.o_id=orders.o_id join registration_users on orders.u_id=registration_users.id order by date desc");
    ?>
    <table class="table"> 
    <?php
    if (mysqli_num_rows($orderDetails) > 0) 
    {
      while($row = mysqli_fetch_array($orderDetails))
      {
        ?>
        <tr>
          <td><h1><?php echo $row['first_name'] ?></h1></td></tr>
          <tr>
        <tr>
          <th>S.No</th>
      <th>Image</th>
      <th>Product Name</th>
      <th>Price</th>
      <th>Ordered Date</th>
      <th>Status</th>
      <th>Update Status</th>
    </tr>
        <?php
        $sql="SELECT *  FROM `products` join orderitems on products.p_id=orderitems.p_id JOIN orders on orderitems.o_id=orders.o_id join registration_users on orders.u_id=registration_users.id where first_name='".$row['first_name']."' order by date desc" ;
        $productDetails = mysqli_query($conn,$sql);
          
         if (mysqli_num_rows($orderDetails) > 0) 
    {
         $x="";
        while($result = mysqli_fetch_array($productDetails))
        {     
          $x++;
        ?>
        <tr>
              <td><?php  echo $x;?></td>
              <td> <img src="uploads/<?php echo $result['product_image'] ?>" alt="image" class="img-fluid zoom"></td>
               <td><?php echo $result['product_name'] ?></td><td><?php echo "₹".$result['price'] ?></td>
               <td><?php echo $result['date'] ?></td>
               <td><?php echo $result['status'] ?></td>
               <td>
                <form action="insertstatus.php?id=<?php echo $result['i_id'];?>" method="post"><select name="select">
                <option value="">Select</option>
                 <option value="Tracked">Tracked</option>
                 <option value="Shipped">Shipped</option>
                 <option value="Delivered">Delivered</option>
                 </select></td>
                 <td>
                <button type="submit" name="submit" value="go" class="btn btn-outline-primary">Update</button></td>
                 </form>
        </tr>
    <?php 
      } 
    }
    else
      {
        echo "<h1>"."No orders There!"."<h1>";
      }
    }
    }
      else
      {
        echo "<h1>"."No orders There!"."<h1>";
      }
    ?> 
</table>
</div>
</body>
</html>