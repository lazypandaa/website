<?php
	$con=mysqli_connect("localhost","id20443869_lazypanda","Panda@123456","id20443869_wd");
	$a=$_POST['user'];

               
  if(!$con)
	{
	  die("unable to connect");
	}
	mysqli_select_db($con,"id20443869_wd");

$query="DELETE FROM `student` WHERE pin='$a'";
	if(mysqli_query($con,$query))
	{
	  echo "Data deleted ";
	}
	mysqli_close($con);
?>