<?php
 session_start();
?>
<div class="header bglight">
	<div class="container-fluid">
     <div class="row">
     <div class="col-sm-12"> 
	<nav class="navbar navbar-expand-lg back ">
    <a href="index.php"><img src="Images/logolatest.png" class="logo img-fluid" alt="image"></a>
		 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="user.php">Shop</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="order.php">Orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cart.php">View Cart</a>
      </li>
    </ul>
	  <form class="form-inline my-2 my-lg-0">
      <span style="color:white;margin-right: 15px;">
        <?php
          echo "Hi,"."  ".$_SESSION["uname"];
          ?></span>
           <div class="searchbar" style="margin-right: 15px;">
  <input type="text" id="searchbar-input">
  <i class="fa fa-search" id="searchbar-icon" aria-hidden="true"></i>
  <i class="fa fa-times" id="searchbar-cross" aria-hidden="true" style="display:none;"></i>
</div>
		  <span class="dropdown"><i class="fa fa-user-circle-o" aria-hidden="true" style="font-size:15px;color:white;margin-right: 15px;"></i>
      <div class="dropdown-content">
        <a href="account.php" style="color:black;">Logout</a>
      </div></span>
     <a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true" style="font-size:15px;color:white;">
       <?php
         $query="select * from cart where u_id='".$_SESSION["uid"]."'";
         $sql= mysqli_query($conn,$query);
         $count=$sql->num_rows;
         ?>
    <span class="badge badge-light">
         <?php
            echo $count;
            ?>
            </span></i></a>
    </form>
  </div>
</nav>
	</div>
	</div>
</div>
</div>	

