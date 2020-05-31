
<?php
  require("connect.php");// here include database filent
  $id=$_REQUEST['id'];
if(isset($_POST['submit']))
{
  $status=$_POST['select'];
  $query ="Update orderitems set status='".$status."' where i_id='".$id."'";
  $updateData=mysqli_query($conn,$query) ; //mysqli_query is mysqli function for queries 
  if ($updateData) 
  {
        echo "<script>alert('Update Status Successfully!'); location.href='adminorders.php';</script>";
    }
  }
?>
