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
<div class="container back2">
  <div class="row">
     <div class="col-sm-12 pos1 text-center">
       <h1><b style="font-size:50px;">Products</b></h1>
     </div>
    </div>
  <div class="row pos1">
    <div class= "col-sm-3">
     <button class="btn btnradius tablinks" role="button" aria-pressed="true" onclick="openCity(event, 'View Product')" id="defaultOpen">View Products</button><br><br></div>
     <div class= "col-sm-3">
     <button class="btn btnradius tablinks" role="button" aria-pressed="true" onclick="openCity(event, 'Add Product')">Add Products</button><br><br></div>
     <div class= "col-sm-3">
     <button class="btn btnradius tablinks" role="button" aria-pressed="true" onclick="openCity(event, 'Edit Product')">Edit Products</button><br><br></div>
     <div class= "col-sm-3">
     <button class="btn btnradius tablinks" role="button" aria-pressed="true" onclick="openCity(event, 'Delete Product')">Delete Products</button></div>
     </div>
     <div class="row pos1">
    <div class="col-sm-12 tabcontent" id="Add Product" style="display:none;">
    <table>
      <h1 style="margin-left: 40px;">Add Products</h1>
     <form action="insertproduct.php" method="post" enctype="multipart/form-data">
      <tr>
      <td><input type="text" id="pname" name="pname" placeholder="Product name" class="form-control" onblur="return clear_pname_error()">
        <span id="pname_error"></span></td></tr>
      <tr>
      <td>
      <input type="text" id="price" name="price" placeholder="price" class="form-control" onblur="return clear_price_error();">
      <span id="price_error"></span></td></tr>
      <tr>
      <td>
      <input type="file" name="img_name" id="file" onblur="return clear_file_error();" style="color:black;">
      <span id="file_error"></span></td></tr>
      <tr>
      <td>
      <select name="category" id="category" placeholder="Select Category" style="margin-left:40px;margin-top:30px;" onblur="return clear_category_error();">
        <option value="">select category</option>
        <option value="Wired Headphones">Wired Headphones</option>
        <option value="Wireless Headphones">Wireless Headphones</option>
        <option value="Wireless Earbuds">Wireless Earbuds</option>
        <option value="Sport Earphones">Sport Earphones</option>
        <option value="Wired Earphones">Wired Earphones</option>
      </select>
      <span id="category_error"></span></td></tr>
      <tr>
      <td><input name="submit" type="submit" value="Add Product" id="submit" style="width:300px;margin-top:30px;" class="btn btn-outline-primary" onclick="return adminform()"></td></tr>
     </form>
    </table>
    </div>
  <div class="col-sm-12 tabcontent" id="View Product" >
    <?php
    $productDetails = mysqli_query($conn,"select *from products");
    ?>
  <h1>View Products</h1>
  <table class="table" style="border-collapse: collapse;">
    <tr style="">
      <th>Sno</th>
       <th>Image</th>
      <th>Product Name</th>
      <th>Price</th>
      <th>Type</th>
    </tr>
    <?php
      $x=""; 
      while($result = mysqli_fetch_array($productDetails))
      { 
        $x++;
    ?>
    <tr>
      <td>
        <?php 
             echo $x;
        ?>
      </td>
      <td>
        <img src="uploads/<?php echo $result['product_image'] ?>" alt="image" class="img-fluid zoom">
      </td>
      <td>
        <?php 
             echo $result['product_name'];
        ?>
      </td>
      <td>
        <?php 
             echo "₹".$result['price'];
        ?>
      </td>
      <td>
        <?php 
              echo $result['product_type'];
        ?>
      </td>
    </tr> 
    <?php 
      }?>
    </table>
  </div>
  <div class="col-sm-12 tabcontent" id="Edit Product" style="display:none;">
    <?php
    $productDetails = mysqli_query($conn,"select *from products");
    ?>
  <h1>Edit Products</h1>
  <table class="table" style="border-collapse: collapse;">
    <tr>
      <th>Sno</th>
      <th>Image</th>
      <th>Product Name</th>
      <th>Price</th>
      <th>Type</th>
    </tr>
    <?php
      $x=""; 
      while($result = mysqli_fetch_array($productDetails))
      { 
        $x++;
    ?>
    <tr>
      <td>
        <?php 
             echo $x;
        ?>
      </td>
       <td>
        <img src="uploads/<?php echo $result['product_image'] ?>" alt="image" class="img-fluid zoom">
      </td>
      <td>
        <?php 
             echo $result['product_name'];
        ?>
      </td>
      <td>
        <?php 
             echo "₹".$result['price'];
        ?>
      </td>
      <td>
        <?php 
              echo $result['product_type'];
        ?>
      </td>
      <td>
          <a style="color:blue;" href="editproduct.php?id=<?php echo $result['p_id'];?>"><button type="button" name="submit" class="btn btn-outline-primary">Edit</button></a>
      </td>
    </tr> 
    <?php 
      }?>
    </table>
  </div>
  <div class="col-sm-12 tabcontent" id="Delete Product" style="display:none;">
    <?php
    $productDetails = mysqli_query($conn,"select *from products");
    ?>
  <h1>Delete Products</h1>
  <table class="table" style="border-collapse: collapse;">
    <tr>
      <th>Sno</th>
      <th>Image</th>
      <th>Product Name</th>
      <th>Price</th>
      <th>Type</th>
    </tr>
    <?php
      $x=""; 
      while($result = mysqli_fetch_array($productDetails))
      { 
        $x++;
    ?>
    <tr>
      <td>
        <?php 
             echo $x;
        ?>
      </td>
      <td>
        <img src="uploads/<?php echo $result['product_image'] ?>" alt="image" class="img-fluid zoom">
      </td>
      <td>
        <?php 
             echo $result['product_name'];
        ?>
      </td>
      <td>
        <?php 
             echo "₹".$result['price'];
        ?>
      </td>
      <td>
        <?php 
             echo $result['product_type'];
        ?>
      </td>
      <td>
          <a style="color:blue;" href="deleteproduct.php?id=<?php echo $result['p_id'];?>"><button type="button" name="submit" class="btn btn-outline-primary">Delete</button></a>
      </td>
    </tr> 
    <?php 
      }?>
    </table>
  </div>
</div>
</div>
</body>
</html>