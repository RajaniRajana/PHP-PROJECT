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
<div class="container pos1">
  <div class="row pos1">
    <div class="col-sm-12 tabcontent" id="View Product" >
    <?php
    $customerDetails = mysqli_query($conn,"select *from registration_users");
    ?>
  <h1>View Customers</h1>
  <table class="table" style="border-collapse:collapse;width:1100px">
    <tr>
      <th>Sno</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Phone Number</th>
      <th>Email</th>
      <th>Address</th>
      <th>City</th>
    </tr>
    <?php
      $x=""; 
      while($result = mysqli_fetch_array($customerDetails))
      { 
        $x++;
        "<br>";
    ?>
    <tr>
      <td>
        <?php 
             echo $x;
        ?>
      </td>
      <td>
        <?php 
             echo $result['first_name'];
        ?>
      </td>
      <td>
        <?php 
             echo $result['last_name'];
        ?>
      </td>
      <td>
        <?php 
             echo $result['phone_number'];
        ?>
      </td>
      <td>
        <?php 
             echo $result['email'];
        ?>
      </td>
      <td>
        <?php 
              echo $result['address'];
        ?>
      </td>
      <td>
        <?php 
              echo $result['city'];
        ?>
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