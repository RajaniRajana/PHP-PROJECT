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
         <link rel="stylesheet" type="text/css" href="adminstyle.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script> 
        <script src="script.js" type="text/javascript"></script>
</head>
<body>
  <?php 
 include("userheader.php");
?>
<?php
    $id=$_REQUEST['id'];
    $productDetails = mysqli_query($conn,"select * from products where p_id='".$id."'");
 ?>
  <div class="container pos1">
     <?php
      $result = mysqli_fetch_array($productDetails);
      ?>      <div class="row back2">
                <h3><?php echo $result['product_name'] ?></h3>
              </div>
              <div class="row">
              <div class="col-sm-5 back2"> 
               <img src="uploads/<?php echo $result['product_image'] ?>" alt="image" class="img-fluid zoom">
              </div>
              <div class="col-sm-7">
                <ul>
               <li style="list-style:none;"><?php echo $result['product_name'] ?></li><br>
               <li style="list-style:none;"><b>Price:</b><span style="color:#B1282B"><?php echo "  ₹"." ".$result['price'] ?></span></li>
               <li style="list-style:none;font-size:10px;color:blue;">Inclusive of all taxes</li><b>(FREE Delivery).</b><br>
               <li style="list-style:none;"><a href="insertcart.php?id=<?php echo $result['p_id'];?>"><button type="button" name="submit" class="btn btn-outline-primary1 widt">Add To Cart</button></a></li>
               <li style="color:#B1282B;list-style:none;">Usually dispatched in 2 to 3 days.</li>
               <hr>
  <li style="color:#B1282B;list-style:none;padding:10px;font-size:20px;"><ins>Features:</ins></li>
    <li style="font-size:13px;">HIFI SOUND: Featuring Bluetooth 5.0 and ACC Audio decoding, provides a better and clear sound, High-fidelity audio perfectly restore the sound scene and rich details.3D sound with Bass</li>
    <li style="font-size:13px;">BLUETOOTH 5.0: Stable connectivity and wide range up to 10 meters. LONG BATTERY LIFE: Improved lithium polymer battery provides up to 6-9 hours of continuous playback with 1.5-Hour quick charge, enjoy a full day listening pleasure in the gym with the sports earbuds. Battery capacity: single ear 43mAh, charging box 380mAh, double ears full charge time: 4 times, cumulative use time 20 hours</li>
    <li style="font-size:13px;">ESIGN for SPORTS: The wireless running earphones made with soft silicone ear hooks fit onto any ear shape and not easy to fall off, sweatproof and lightweight, perfect for running, jogging, hiking, yoga, gym</li>
    </ul>
             </ul>
             </div>    
     </div>
     </div>
 <?php 
 include("footer.php");
?>
</body>
</html>











