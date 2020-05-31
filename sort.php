<?php
    $productDetails = mysqli_query($conn,"select *from products order by price desc");
 ?>
  <div class="container">
    <div class="row back2 text-center">
     <?php
      while($result = mysqli_fetch_array($productDetails))
      { 
      ?>
              <div class="col-sm-4">
               <img src="uploads/<?php echo $result['product_image'] ?>" alt="image" class="img-fluid zoom">
               <p><?php echo $result['product_name'] ?></p><p><?php echo $result['price'] ?></p>
               <p><button type="button" class="btn btn-outline-primary1 widt">Add To Cart</button></p>
             </div>    
    <?php 
      }?>
     </div>
     </div>