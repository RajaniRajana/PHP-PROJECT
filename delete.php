<?php
require("connect.php");
?>
<html>
<head></head>
<body>
<div>
    <?php
    $productDetails = mysqli_query($conn,"select *from products");
    ?>
  <h1>Delete Products</h1>
  <table style="border-collapse: collapse;width:900px">
    <tr style="width:900px">
      <th>Sno</th>
      <th>Product Name</th>
      <th>Price</th>
      <th>Image</th>
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
        <?php 
             echo $result['product_name'];
        ?>
      </td>
      <td>
        <?php 
             echo $result['price'];
        ?>
      </td>
      <td>
        <?php 
             echo $result['product_image'];
        ?>
      </td>
      <td>
        <?php 
              echo $result['product_type'];
        ?>
      </td>
      <td>
          <a href="deleteproduct.php?id=<?php echo $result['p_id'];?>">delete</a>
      </td>
    </tr> 
    <?php 
      }?>
    </table>
  </div>
</body>
</html>