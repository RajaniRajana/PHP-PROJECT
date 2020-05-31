<?php
 require("connect.php");
 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>User</title>
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
</head>
<body>
  <?php 
 include("userheader.php");
?>
<div class="container back2">
    <div class="row">
     <div class="offset-5 col-sm-2 offset-5 pos1">
       <h1><b style="font-size:50px;">SHOP</b></h1>
     </div>
    </div>
    <div class="row back2">
     <div class= "col-sm-3 ">
       <button class="btn btnradius tablinks" role="button" aria-pressed="true" onclick="openCity(event, 'headphones')">
       HEAD PHONES</button>
     </div>
     <div class="col-sm-3">
       <button class="btn btnradius tablinks" role="button" aria-pressed="true" onclick="openCity(event, 'earbuds')">WIRELESS EARBUDS</button>
     </div>
     <div class="col-sm-3">
       <button class="btn btnradius tablinks" role="button" aria-pressed="true" onclick="openCity(event, 'earphones')">EARPHONES</button>
     </div>
     <div class="col-sm-3 dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         SORT: FEATURED ITEM
        </a><hr>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">NEWEST ITEMS</a>
          <a class="dropdown-item" href="#">BY REVIEWS</a>
      <a class="dropdown-item" href="#">FEAUTERED ITEMS</a>
      <a class="dropdown-item tablinks" href="">BY PRICE</a>
        </div>
     </div>
    </div>
    <div class="tabcontent" id="headphones">
    <div class="row back2 text-center">
<?php
    $productDetails = mysqli_query($conn,"select *from products  where product_type='Wired Headphones' or product_type='Wireless Headphones'");
      while($result = mysqli_fetch_array($productDetails))
      { 
      ?>
              <div class="col-sm-4">
               <img src="uploads/<?php echo $result['product_image'] ?>" alt="image" class="img-fluid zoom">
               <p><?php echo $result['product_name'] ?></p><p><?php echo "₹".$result['price'] ?></p>
               <p><a href="viewproduct.php?id=<?php echo $result['p_id'];?>"><button type="button" name="submit" class="btn btn-outline-primary1 widt">View Product</button></a></p>
             </div>    
    <?php 
      }?>
     </div>
   </div>
   <div class="tabcontent" id="earbuds" style="display:none;"> 
     <div class="row back2 text-center">
<?php
    $productDetails = mysqli_query($conn,"select *from products  where product_type='Wireless Earbuds'");
      while($result = mysqli_fetch_array($productDetails))
      { 
      ?>
              <div class="col-sm-4">
               <img src="uploads/<?php echo $result['product_image'] ?>" alt="image" class="img-fluid zoom">
               <p><?php echo $result['product_name'] ?></p><p><?php echo "₹".$result['price'] ?></p>
               <p><a href="viewproduct.php?id=<?php echo $result['p_id'];?>"><button type="button" name="submit" class="btn btn-outline-primary1 widt">View Product</button></a></p>
             </div>    
    <?php 
      }?>
     </div>
   </div>
   <div class="tabcontent" id="earphones" style="display:none;">
      <div class="row back2 text-center ">
<?php
    $productDetails = mysqli_query($conn,"select *from products  where product_type='Wired Earphones' or product_type='Sport Earphones'");
      while($result = mysqli_fetch_array($productDetails))
      { 
      ?>
              <div class="col-sm-4">
               <img src="uploads/<?php echo $result['product_image'] ?>" alt="image" class="img-fluid zoom">
               <p><?php echo $result['product_name'] ?></p><p><?php echo "₹".$result['price'] ?></p>
               <p><a href="viewproduct.php?id=<?php echo $result['p_id'];?>"><button type="button" name="submit" class="btn btn-outline-primary1 widt">View Product</button></a></p>
             </div>    
    <?php 
      }?>
     </div>
   </div>
 </div>
 <?php 
 include("footer.php");
?>
</body>
</html>