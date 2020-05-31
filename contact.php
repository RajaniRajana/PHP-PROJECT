<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>EarsOn</title>
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
  <script>
  new WOW().init();
  </script>
<body>
  <?php 
 include("header.php");
?>
<div class="container-fluid back2 paralsec paral">
	<div class="row pos1">
      <div class="offset-5 col-sm-7">
	     <h2>Contact Us</h2>
		</div>
	</div>
<div class="row">
<div class="offset-4 col-sm-7">
	<form action="insertcontact.php" method="post">
		  <div class="pad"><input type="text" id="fname" name="fname" placeholder="Name" class="form-control" style="width:330px;" onblur="return clear_fname_error()">
			  <span id="fname_error"></span></div>
		<div><input type="text" id="mail" name="mail" placeholder="E-mail Id" class="form-control" style="width:330px;" onblur="return clear_mail_error()">
			<span id="mail_error"></span></div>
		  <div><textarea id="add" name="message" style="margin-left:40px;width:330px;" placeholder="Enter Message Here..."  class="form-control" onblur="return clear_add_error();"></textarea>
			<span id="add_error"></span></div>
		  <div><input name="submit" type="submit" value="Send Message"  id="submit" class="btn btn-outline-primary" style="width:330px;" onClick="return validation()"></div>
	</form>
</div>
</div>	
</div>
<?php 
 include("footer.php");
?>
</body>

</html>