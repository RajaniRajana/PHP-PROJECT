<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
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
<div class="container-fluid back2 paralsec paral1">
	<div class="row pos1">
      <div class="offset-5 col-sm-7">
	     <h2>Registration Form</h2>
		</div>
	</div>
<div class="row pos1">
<div class="offset-3 col-sm-7">
	<form id="insert" method="post" >
<table class="pos1">
	  <tr>
		  <td class="pad1"><input type="text" id="fname" placeholder="First name" class="form-control" onblur="return clear_fname_error()">
			  <span id="fname_error"></span></td>
	      <td class="pad1"><input type="text" id="lname" placeholder="Last name" style="margin-left: 100px;width:300px;" class="form-control" onblur="return clear_lname_error();">
			<span id="lname_error"></span></td>  
	  </tr>
		<tr>
		    <td class="pad1"><input type="text" id="number" placeholder="Phone Number" class="form-control" onblur="return clear_number_error();">
			<span id="number_error"></span></td>
			<td class="pad1"><input type="text" id="email" placeholder="E-mail Id" style="margin-left: 100px;width:300px;" class="form-control" onblur="return clear_email_error();">
			<span id="email_error"></span></td>
		</tr>
	  <tr>
		<td class="pad1"><input type="password" id="pwd" placeholder="Password" class="form-control" onblur="return clear_pwd_error();">
			<span id="pwd_error"></span></td>
		 <td  class="pad1"><input type="password" id="cpwd" placeholder="Confirm Password" style="margin-left: 100px;width:300px;" class="form-control" onblur="return clear_cpwd_error();">
			<span id="cpwd_error"></span></td>
	  </tr>
	  <tr>
		  <td  class="pad1"><textarea id="add" style="margin-left:40px;" placeholder="Address" class="form-control" onblur="return clear_add_error();"></textarea>
			<span id="add_error"></span></td>
		  <td  class="pad1"><input type="text" id="city"  placeholder="Enter City" class="form-control" style="margin-left:100px;width:300px;" onblur="return clear_city_error()">
		  <span id="city_error"></span></td>
	  </tr>
	  </table>
		  <div class="pad1"><input type="button" value="Create Account" id="submit" style="width:280px;" class="btn btn-outline-primary" onclick="return formvalidation()"></div>
	</form>
    <div class="msg"></div>
</div>
</div>	
</div>
	<?php 
 include("footer.php");
?>
</body>
</html>