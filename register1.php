<?php
	$con=mysqli_connect("localhost","id20443869_lazypanda","Panda@123456","id20443869_wd");
	$a=$_POST['user'];
	$b=$_POST['password'];
	$c=$_POST['fname'];
	$d=$_POST['lname'];
	$e="admin";
	$f=$_POST['G'];
               
  if(!$con)
	{
	  die("unable to connect");
	}
	mysqli_select_db($con,"id20443869_wd");
	$query="insert into user values('$a','$b','$c','$d','$e','$f')";

	if(mysqli_query($con,$query))
	{
	  echo "registered sucessfully";
	}
	mysqli_close($con);
?>